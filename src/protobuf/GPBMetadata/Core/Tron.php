<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace GPBMetadata\Core;

class Tron
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true)
        {
            return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Core\Discover::initOnce();
        $pool->internalAddGeneratedFile(
            '
�e
core/Tron.protoprotocolcore/Discover.proto"*
	AccountId
name (
address ("0
Vote
vote_address (

vote_count ("�
Proposal
proposal_id (
proposer_address (6

parameters (2".protocol.Proposal.ParametersEntry
expiration_time (
create_time (
	approvals (\'
state (2.protocol.Proposal.State1
ParametersEntry
key (
value (:8"A
State
PENDING 
DISAPPROVED
APPROVED
CANCELED"�
Exchange
exchange_id (
creator_address (
create_time (
first_token_id (
first_token_balance (
second_token_id (
second_token_balance	 ("�
ChainParameters@
chainParameter (2(.protocol.ChainParameters.ChainParameter,
ChainParameter
key (	
value ("�
Account
account_name (#
type (2.protocol.AccountType
address (
balance (
votes (2.protocol.Vote+
asset (2.protocol.Account.AssetEntry/
assetV28 (2.protocol.Account.AssetV2Entry(
frozen (2.protocol.Account.Frozen
	net_usage (7
/acquired_delegated_frozen_balance_for_bandwidth) (.
&delegated_frozen_balance_for_bandwidth* (
create_time	 (
latest_opration_time
 (
	allowance (
latest_withdraw_time (
code
 (

is_witness (
is_committee (/

frozen_supply (2.protocol.Account.Frozen
asset_issued_name (
asset_issued_ID9 (T
latest_asset_operation_time (2/.protocol.Account.LatestAssetOperationTimeEntryX
latest_asset_operation_timeV2: (21.protocol.Account.LatestAssetOperationTimeV2Entry
free_net_usage (F
free_asset_net_usage (2(.protocol.Account.FreeAssetNetUsageEntryJ
free_asset_net_usageV2; (2*.protocol.Account.FreeAssetNetUsageV2Entry
latest_consume_time ( 
latest_consume_free_time (

account_id (;
account_resource (2!.protocol.Account.AccountResource
codeHash (.
owner_permission (2.protocol.Permission0
witness_permission  (2.protocol.Permission/
active_permission! (2.protocol.Permission5
Frozen
frozen_balance (
expire_time (,

AssetEntry
key (	
value (:8.
AssetV2Entry
key (	
value (:8?
LatestAssetOperationTimeEntry
key (	
value (:8A
LatestAssetOperationTimeV2Entry
key (	
value (:88
FreeAssetNetUsageEntry
key (	
value (:8:
FreeAssetNetUsageV2Entry
key (	
value (:8�
AccountResource
energy_usage (;
frozen_balance_for_energy (2.protocol.Account.Frozen&
latest_consume_time_for_energy (4
,acquired_delegated_frozen_balance_for_energy (+
#delegated_frozen_balance_for_energy (

storage_limit (

storage_usage ($
latest_exchange_storage_time ("&
Key
address (
weight ("�
DelegatedResource
from (

to ($
frozen_balance_for_bandwidth (!
frozen_balance_for_energy (!
expire_time_for_bandwidth (
expire_time_for_energy ("J
	authority$
account (2.protocol.AccountId
permission_name ("�

Permission1
type (2#.protocol.Permission.PermissionType

id (
permission_name (	
	threshold (
	parent_id (

operations (
keys (2
.protocol.Key"4
PermissionType	
Owner 
Witness

Active"�
Witness
address (
	voteCount (
pubKey (
url (	

totalProduced (
totalMissed (
latestBlockNum (

latestSlotNum (
isJobs	 ("^
Votes
address (!
	old_votes (2.protocol.Vote!
	new_votes (2.protocol.Vote"-
TXOutput
value (

pubKeyHash ("x
TXInput\'
raw_data (2.protocol.TXInput.raw
	signature (1
raw
txID (
vout (
pubKey ("0
	TXOutputs#
outputs (2.protocol.TXOutput"�
ResourceReceipt
energy_usage (

energy_fee (
origin_energy_usage (
energy_usage_total (
	net_usage (
net_fee (;
result (2+.protocol.Transaction.Result.contractResult"r
MarketOrderDetail
makerOrderId (
takerOrderId (
fillSellQuantity (
fillBuyQuantity ("�
Transaction+
raw_data (2.protocol.Transaction.raw
	signature ()
ret (2.protocol.Transaction.Result�
Contract9
type (2+.protocol.Transaction.Contract.ContractType\'
	parameter (2.google.protobuf.Any
provider (
ContractName (

Permission_id ("�
ContractType
AccountCreateContract 
TransferContract
TransferAssetContract
VoteAssetContract
VoteWitnessContract
WitnessCreateContract
AssetIssueContract
WitnessUpdateContract!
ParticipateAssetIssueContract	
AccountUpdateContract

FreezeBalanceContract
UnfreezeBalanceContract
WithdrawBalanceContract

UnfreezeAssetContract
UpdateAssetContract
ProposalCreateContract
ProposalApproveContract
ProposalDeleteContract
SetAccountIdContract
CustomContract
CreateSmartContract
TriggerSmartContract
GetContract 
UpdateSettingContract!
ExchangeCreateContract)
ExchangeInjectContract*
ExchangeWithdrawContract+
ExchangeTransactionContract,
UpdateEnergyLimitContract-#
AccountPermissionUpdateContract.
ClearABIContract0
UpdateBrokerageContract1
ShieldedTransferContract3
MarketSellAssetContract4
MarketCancelOrderContract5�
Result
fee (.
ret (2!.protocol.Transaction.Result.code@
contractRet (2+.protocol.Transaction.Result.contractResult
assetIssueID (	
withdraw_amount (
unfreeze_amount ( 
exchange_received_amount (&
exchange_inject_another_amount ((
 exchange_withdraw_another_amount (
exchange_id ( 
shielded_transaction_fee ("
code

SUCESS 

FAILED"�
contractResult
DEFAULT 
SUCCESS

REVERT
BAD_JUMP_DESTINATION

OUT_OF_MEMORY
PRECOMPILED_CONTRACT
STACK_TOO_SMALL
STACK_TOO_LARGE
ILLEGAL_OPERATION
STACK_OVERFLOW	

OUT_OF_ENERGY

OUT_OF_TIME
JVM_STACK_OVER_FLOW
UNKNOWN

TRANSFER_FAILED�
raw
ref_block_bytes (

ref_block_num (
ref_block_hash (

expiration ("
auths	 (2.protocol.authority
data
 (0
contract (2.protocol.Transaction.Contract
scripts (
	timestamp (
	fee_limit ("�
TransactionInfo

id (
fee (
blockNumber (
blockTimeStamp (
contractResult (
contract_address (*
receipt (2.protocol.ResourceReceipt*
log (2.protocol.TransactionInfo.Log.
result	 (2.protocol.TransactionInfo.code

resMessage
 (
assetIssueID (	
withdraw_amount (
unfreeze_amount (<
internal_transactions (2.protocol.InternalTransaction 
exchange_received_amount (&
exchange_inject_another_amount ((
 exchange_withdraw_another_amount (
exchange_id ( 
shielded_transaction_fee (
orderId (1
orderDetails (2.protocol.MarketOrderDetail4
Log
address (
topics (
data ("
code

SUCESS 

FAILED"q
TransactionRet
blockNumber (
blockTimeStamp (2
transactioninfo (2.protocol.TransactionInfo";
Transactions+
transactions (2.protocol.Transaction"Q
TransactionSign*
transaction (2.protocol.Transaction

privateKey ("�
BlockHeader+
raw_data (2.protocol.BlockHeader.raw
witness_signature (�
raw
	timestamp (

txTrieRoot (

parentHash (
number (

witness_id (
witness_address	 (
version
 (
accountStateRoot ("a
Block+
transactions (2.protocol.Transaction+
block_header (2.protocol.BlockHeader"|
ChainInventory-
ids (2 .protocol.ChainInventory.BlockId

remain_num (\'
BlockId
hash (
number ("�
BlockInventory-
ids (2 .protocol.BlockInventory.BlockId+
type (2.protocol.BlockInventory.Type\'
BlockId
hash (
number ("(
Type
SYNC 
ADVTISE	
FETCH"n
	Inventory/
type (2!.protocol.Inventory.InventoryType
ids ("#

InventoryType
TRX 	
BLOCK"�
Items&
type (2.protocol.Items.ItemType
blocks (2.protocol.Block,

block_headers (2.protocol.BlockHeader+
transactions (2.protocol.Transaction"8
ItemType
ERR 
TRX	
BLOCK
BLOCKHEADER"4
DynamicProperties
last_solidity_block_num ("9
DisconnectMessage$
reason (2.protocol.ReasonCode"�
HelloMessage 
from (2.protocol.Endpoint
version (
	timestamp (6
genesisBlockId (2.protocol.HelloMessage.BlockId4
solidBlockId (2.protocol.HelloMessage.BlockId3
headBlockId (2.protocol.HelloMessage.BlockId\'
BlockId
hash (
number ("�
InternalTransaction
hash (
caller_address (
transferTo_address (B

callValueInfo (2+.protocol.InternalTransaction.CallValueInfo
note (
rejected (3

CallValueInfo
	callValue (
tokenId (	"Z
DelegatedResourceAccountIndex
account (
fromAccounts (

toAccounts ("�
NodeInfo
beginSyncNum (
block (	

solidityBlock (	
currentConnectCount (
activeConnectCount (
passiveConnectCount (
	totalFlow (1
peerInfoList (2.protocol.NodeInfo.PeerInfo9
configNodeInfo	 (2!.protocol.NodeInfo.ConfigNodeInfo3
machineInfo
 (2.protocol.NodeInfo.MachineInfoH
cheatWitnessInfoMap (2+.protocol.NodeInfo.CheatWitnessInfoMapEntry:
CheatWitnessInfoMapEntry
key (	
value (	:8�
PeerInfo

lastSyncBlock (	
	remainNum (
lastBlockUpdateTime (
syncFlag (
headBlockTimeWeBothHave (
needSyncFromPeer (
needSyncFromUs (
host (	
port	 (
nodeId
 (	
connectTime (

avgLatency (
syncToFetchSize
 (
syncToFetchSizePeekNum (
syncBlockRequestedSize (

unFetchSynNum (
blockInPorcSize (
headBlockWeBothHave (	
isActive (
score (
	nodeCount (
inFlow (
disconnectTimes (
localDisconnectReason (	
remoteDisconnectReason (	�
ConfigNodeInfo
codeVersion (	

p2pVersion (	

listenPort (
discoverEnable (
activeNodeSize (
passiveNodeSize (
sendNodeSize (
maxConnectCount (
sameIpMaxConnectCount	 (
backupListenPort
 (
backupMemberSize (
backupPriority (
	dbVersion
 (
minParticipationRate (
supportConstant (
minTimeRatio (
maxTimeRatio ( 
allowCreationOfContracts (
allowAdaptiveEnergy (�
MachineInfo
threadCount (
deadLockThreadCount (
cpuCount (
totalMemory (

freeMemory (
cpuRate (
javaVersion (	
osName (	
jvmTotalMemoery	 (

jvmFreeMemory
 (
processCpuRate (I
memoryDescInfoList (2-.protocol.NodeInfo.MachineInfo.MemoryDescInfoQ
deadLockThreadInfoList
 (21.protocol.NodeInfo.MachineInfo.DeadLockThreadInfoc
MemoryDescInfo
name (	
initSize (
useSize (
maxSize (
useRate (�
DeadLockThreadInfo
name (	
lockName (	
	lockOwner (	
state (	
	blockTime (
waitTime (

stackTrace (	"�
MarketOrder
order_id (

owner_address (
create_time (

sell_token_id (
sell_token_quantity (
buy_token_id (
buy_token_quantity ("
sell_token_quantity_remain	 ("
sell_token_quantity_return
 (*
state (2.protocol.MarketOrder.State
prev (
next
 ("/
State

ACTIVE 
INACTIVE
CANCELED"8
MarketOrderList%
orders (2.protocol.MarketOrder"C
MarketOrderPairList,
	orderPair (2.protocol.MarketOrderPair">
MarketOrderPair

sell_token_id (
buy_token_id ("_
MarketAccountOrder

owner_address (
orders (
count (
total_count ("F
MarketPrice
sell_token_quantity (
buy_token_quantity ("e
MarketPriceList

sell_token_id (
buy_token_id (%
prices (2.protocol.MarketPrice"/
MarketOrderIdList
head (
tail (*7
AccountType

Normal 

AssetIssue
Contract*�

ReasonCode
	REQUESTED 
BAD_PROTOCOL
TOO_MANY_PEERS
DUPLICATE_PEER
INCOMPATIBLE_PROTOCOL

NULL_IDENTITY
PEER_QUITING
UNEXPECTED_IDENTITY	
LOCAL_IDENTITY

PING_TIMEOUT
USER_REASON	
RESET
	SYNC_FAIL

FETCH_FAIL

BAD_TX
	BAD_BLOCK

FORKED

UNLINKABLE
INCOMPATIBLE_VERSION
INCOMPATIBLE_CHAIN
TIME_OUT 
CONNECT_FAIL!
TOO_MANY_PEERS_WITH_SAME_IP"
UNKNOWN�BF
org.tron.protosBProtocolZ)github.com/tronprotocol/grpc-gateway/corebproto3'
            , true);

        static::$is_initialized = true;
    }
}

