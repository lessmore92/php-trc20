<?php
/**
 * User: Lessmore92
 * Date: 3/2/2021
 * Time: 2:02 AM
 */

namespace Lessmore92\Tron;

use Exception;
use Google\Protobuf\Any;
use IEXBase\TronAPI\Support;
use IEXBase\TronAPI\Tron;
use Protocol\Transaction;
use Protocol\Transaction\Contract;
use Protocol\Transaction\Contract\ContractType;
use Protocol\Transaction\Raw;
use Protocol\TriggerSmartContract;
use Web3\Contracts\Ethabi;
use Web3\Contracts\Types\
{Address, Boolean, Bytes, DynamicBytes, Integer, Str, Uinteger
};

abstract class StandardTRC20Token
{
    const TRX_TO_SUN = 1000000;
    const SUN_TO_TRX = 0.000001;
    protected $decimals = null;
    private   $contract;
    private   $abi;
    private   $api;
    private   $feeLimit = 10;

    public function __construct(string $contract, Tron $api, string $abi = null)
    {
        $this->contract = $contract;
        $this->api      = $api;
        if (is_null($abi))
        {
            $abi = '[{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"sender","type":"address"},{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"}]';
        }
        $this->abi = json_decode($abi, true);
    }

    public function name()
    {
        $result = $this->triggerConstantContract('name', null, []);
        return $result[0];
    }

    public function triggerConstantContract($function, $address = null, $params = [])
    {
        $owner_address = is_null($address) ? '410000000000000000000000000000000000000000' : base58check2HexString($address);
        return $this->api->getTransactionBuilder()
                         ->triggerConstantContract($this->abi, base58check2HexString($this->contract), $function, $params, $owner_address)
            ;
    }

    public function symbol()
    {
        $result = $this->triggerConstantContract('symbol', null, []);
        return $result[0];
    }

    public function totalSupply()
    {
        $result      = $this->triggerConstantContract('totalSupply', null, []);
        $totalSupply = $result[0]->toString();
        if (!is_numeric($totalSupply))
        {
            throw new Exception("Token totalSupply not found");
        }

        $totalSupply = bcdiv($totalSupply, bcpow("10", $this->decimals()), $this->decimals());
        return $totalSupply;
    }

    public function decimals()
    {
        if (!is_null($this->decimals))
        {
            return $this->decimals;
        }

        $result   = $this->triggerConstantContract('decimals', null, []);
        $decimals = $result[0]->toString();
        if (!is_numeric($decimals))
        {
            throw new Exception("Token decimals not found");
        }

        $this->decimals = $decimals;
        return $this->decimals;
    }

    public function balanceOf(string $address)
    {
        $params = [str_pad(base58check2HexString($address), 64, "0", STR_PAD_LEFT)];
        $result = $this->triggerConstantContract('balanceOf', $address, $params);

        $balance = $result[0]->toString();
        if (!is_numeric($balance))
        {
            throw new Exception("Token balance not found");
        }

        $balance = bcdiv($balance, bcpow("10", $this->decimals()), $this->decimals());
        return $balance;
    }

    public function transfer($from, $to, $amount, $private)
    {
        $feeLimitInSun = bcmul($this->feeLimit, $this::TRX_TO_SUN);

        if (!is_numeric($this->feeLimit) or $this->feeLimit <= 0)
        {
            throw new Exception('fee_limit is required.');
        }
        else if ($this->feeLimit > 1000)
        {
            throw new Exception('fee_limit must not be greater than 1000 TRX.');
        }

        $ethAbi = new Ethabi(['address' => new Address, 'bool' => new Boolean, 'bytes' => new Bytes, 'dynamicBytes' => new DynamicBytes, 'int' => new Integer, 'string' => new Str, 'uint' => new Uinteger,]);

        $function          = "transfer(address,uint256)";
        $functionAbi       = json_decode('{"constant":false,"inputs":[{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"}', true);
        $functionSignature = ltrim($ethAbi->encodeFunctionSignature($function), '0x');
        $tokenAmount       = bcmul($amount, bcpow("10", 6, 0), 0);
        $contractParams    = [base58check2HexString($to), $tokenAmount];
        $parameters        = substr($ethAbi->encodeParameters($functionAbi, $contractParams), 2);

        $ownerAddressBin = hex2str(base58check2HexString($from));

        $contractAddressBin = hex2str(base58check2HexString($this->contract));
        $callValue          = "0";

        $contract             = new Contract();
        $triggerSmartContract = new TriggerSmartContract();

        $triggerSmartContract->setData(hex2str($functionSignature . $parameters));
        $triggerSmartContract->setOwnerAddress($ownerAddressBin);
        $triggerSmartContract->setContractAddress($contractAddressBin);
        $triggerSmartContract->setCallValue($callValue);

        $any = new Any();
        $any->pack($triggerSmartContract);

        $contract->setParameter($any);
        $contract->setType(ContractType::TriggerSmartContract);

        //[GENERATE RAW TX]
        //get current block
        $newestBlock   = $this->api->getCurrentBlock();
        $currentHeight = (int)$newestBlock['block_header']['raw_data']['number'];
        if ($currentHeight <= 0)
        {
            throw new Exception("Fail retrieve current block.");
        }

        //get last confirmed block
        $confirmation = 20;
        $targetHeight = ($currentHeight - $confirmation) + 1;

        $confirmedBlock = $this->api->getBlockByNumber($targetHeight);
        $blockHeight    = (int)$confirmedBlock['block_header']['raw_data']['number'];
        $blockTs        = (int)$confirmedBlock['block_header']['raw_data']['timestamp'];
        $blockHash      = $confirmedBlock['blockID'];

        $currentTimeMillis = round(microtime(true) * 1000);

        //build tx
        $raw = new Raw();
        $raw->setContract([$contract]);
        $raw->setFeeLimit($feeLimitInSun);

        $blockHeightIn64bits = str_pad(dechex($blockHeight), 8 * 2 /* 8 bytes = 16 hex chars*/, "0", STR_PAD_LEFT);

        $raw->setRefBlockBytes(hex2Str($refBlockBytes = substr($blockHeightIn64bits, 12, 4)));
        $raw->setRefBlockHash(hex2Str($refBlockHash = substr($blockHash, 16, 16)));
        $raw->setTimestamp($currentTimeMillis);
        $raw->setExpiration($blockTs + (10 * 60 * 60 * 1000));#expiration set 10 hours from last confirmed block
        $txId = hash("sha256", $raw->serializeToString());

        $tx = new Transaction();
        $tx->setRawData($raw);

        $signature = Support\Secp::sign($txId, $private);
        $tx->setSignature([hex2str($signature)]);

        return $this->api->getManager()
                         ->request("wallet/broadcasthex", ["transaction" => str2hex($tx->serializeToString())], "post")
            ;
    }

    public function getTransactions(string $address, $limit = 100)
    {
        return $this->api->getManager()
                         ->request("v1/accounts/$address/transactions/trc20?limit=$limit&contract_address={$this->contract}", [], 'get')
            ;
    }

    public function getTransaction(string $transaction_id)
    {
        return $this->api->getManager()
                         ->request('/wallet/gettransactioninfobyid', ['value' => $transaction_id], 'post')
            ;
    }

    public function getFeeLimit()
    {
        return $this->feeLimit;
    }

    public function setFeeLimit($fee)
    {
        $this->feeLimit = $fee;
    }
}
