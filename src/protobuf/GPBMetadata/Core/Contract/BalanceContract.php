<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/balance_contract.proto

namespace GPBMetadata\Core\Contract;

class BalanceContract
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true)
        {
            return;
        }
        \GPBMetadata\Core\Contract\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$core/contract/balance_contract.protoprotocol"�
FreezeBalanceContract

owner_address (
frozen_balance (
frozen_duration ((
resource
 (2.protocol.ResourceCode
receiver_address ("t
UnfreezeBalanceContract

owner_address ((
resource
 (2.protocol.ResourceCode
receiver_address ("0
WithdrawBalanceContract

owner_address ("M
TransferContract

owner_address (

to_address (
amount (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}

