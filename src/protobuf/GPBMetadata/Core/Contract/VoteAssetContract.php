<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/vote_asset_contract.proto

namespace GPBMetadata\Core\Contract;

class VoteAssetContract
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true)
        {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
\'core/contract/vote_asset_contract.protoprotocol"`
VoteAssetContract

owner_address (
vote_address (
support (
count (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}
