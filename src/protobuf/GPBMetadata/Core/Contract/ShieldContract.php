<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace GPBMetadata\Core\Contract;

class ShieldContract
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
�
#core/contract/shield_contract.protoprotocol"#
AuthenticationPath
value ("c

MerklePath:
authentication_paths (2.protocol.AuthenticationPath
index (

rt ("*
OutputPoint
hash (
index ("O
OutputPointInfo)

out_points (2.protocol.OutputPoint
	block_num ("
PedersenHash
content ("�
IncrementalMerkleTree$
left (2.protocol.PedersenHash%
right (2.protocol.PedersenHash\'
parents (2.protocol.PedersenHash"�
IncrementalMerkleVoucher-
tree (2.protocol.IncrementalMerkleTree&
filled (2.protocol.PedersenHash/
cursor (2.protocol.IncrementalMerkleTree
cursor_depth (

rt (+
output_point
 (2.protocol.OutputPoint"c
IncrementalMerkleVoucherInfo4
vouchers (2".protocol.IncrementalMerkleVoucher
paths ("�
SpendDescription
value_commitment (
anchor (
	nullifier (

rk (
zkproof (!
spend_authority_signature ("�
ReceiveDescription
value_commitment (
note_commitment (
epk (
c_enc (
c_out (
zkproof ("�
ShieldedTransferContract 
transparent_from_address (
from_amount (5
spend_description (2.protocol.SpendDescription9
receive_description (2.protocol.ReceiveDescription
binding_signature (
transparent_to_address (
	to_amount (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}

