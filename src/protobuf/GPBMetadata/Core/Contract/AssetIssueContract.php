<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/asset_issue_contract.proto

namespace GPBMetadata\Core\Contract;

class AssetIssueContract
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
�
(core/contract/asset_issue_contract.protoprotocol"�
AssetIssueContract

id) (	

owner_address (
name (
abbr (
total_supply (@

frozen_supply (2).protocol.AssetIssueContract.FrozenSupply
trx_num (
	precision (
num (

start_time	 (
end_time
 (
order (

vote_score (
description (
url (
free_asset_net_limit (#
public_free_asset_net_limit (#
public_free_asset_net_usage (#
public_latest_free_net_time (:
FrozenSupply

frozen_amount (
frozen_days ("f
TransferAssetContract

asset_name (

owner_address (

to_address (
amount (".
UnfreezeAssetContract

owner_address ("{
UpdateAssetContract

owner_address (
description (
url (
	new_limit (
new_public_limit ("n
ParticipateAssetIssueContract

owner_address (

to_address (

asset_name (
amount (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}
