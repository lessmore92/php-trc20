<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/exchange_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ExchangeWithdrawContract</code>
 */
class ExchangeWithdrawContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     */
    protected $owner_address = '';
    /**
     * Generated from protobuf field <code>int64 exchange_id = 2;</code>
     */
    protected $exchange_id = 0;
    /**
     * Generated from protobuf field <code>bytes token_id = 3;</code>
     */
    protected $token_id = '';
    /**
     * Generated from protobuf field <code>int64 quant = 4;</code>
     */
    protected $quant = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $owner_address
     * @type int|string $exchange_id
     * @type string $token_id
     * @type int|string $quant
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\ExchangeContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 exchange_id = 2;</code>
     * @return int|string
     */
    public function getExchangeId()
    {
        return $this->exchange_id;
    }

    /**
     * Generated from protobuf field <code>int64 exchange_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExchangeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->exchange_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes token_id = 3;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Generated from protobuf field <code>bytes token_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, False);
        $this->token_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 quant = 4;</code>
     * @return int|string
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * Generated from protobuf field <code>int64 quant = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuant($var)
    {
        GPBUtil::checkInt64($var);
        $this->quant = $var;

        return $this;
    }

}

