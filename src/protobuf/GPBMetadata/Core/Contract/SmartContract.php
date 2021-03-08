<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/smart_contract.proto

namespace GPBMetadata\Core\Contract;

class SmartContract
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true)
        {
            return;
        }
        \GPBMetadata\Core\Tron::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"core/contract/smart_contract.protoprotocol"�

SmartContract
origin_address (
contract_address ((
abi (2.protocol.SmartContract.ABI
bytecode (

call_value (%
consume_user_resource_percent (
name (	
origin_energy_limit (
	code_hash	 (
trx_hash
 (�
ABI1
entrys (2!.protocol.SmartContract.ABI.Entry�
Entry
	anonymous (
constant (
name (	7
inputs (2\'.protocol.SmartContract.ABI.Entry.Param8
outputs (2\'.protocol.SmartContract.ABI.Entry.Param9
type (2+.protocol.SmartContract.ABI.Entry.EntryType
payable (N
stateMutability (25.protocol.SmartContract.ABI.Entry.StateMutabilityType4
Param
indexed (
name (	
type (	"f
	EntryType
UnknownEntryType 
Constructor
Function	
Event
Fallback
Receive"a
StateMutabilityType
UnknownMutabilityType 
Pure
View

Nonpayable
Payable"�
CreateSmartContract

owner_address (-
new_contract (2.protocol.SmartContract
call_token_value (
token_id ("�
TriggerSmartContract

owner_address (
contract_address (

call_value (
data (
call_token_value (
token_id ("C
ClearABIContract

owner_address (
contract_address ("o
UpdateSettingContract

owner_address (
contract_address (%
consume_user_resource_percent ("i
UpdateEnergyLimitContract

owner_address (
contract_address (
origin_energy_limit ("`
SmartContractDataWrapper/
smart_contract (2.protocol.SmartContract
runtimecode (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}

