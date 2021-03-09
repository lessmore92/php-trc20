<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Account.AccountResource</code>
 */
class AccountResource extends \Google\Protobuf\Internal\Message
{
    /**
     * energy resource, get from frozen
     *
     * Generated from protobuf field <code>int64 energy_usage = 1;</code>
     */
    protected $energy_usage = 0;
    /**
     * the frozen balance for energy
     *
     * Generated from protobuf field <code>.protocol.Account.Frozen frozen_balance_for_energy = 2;</code>
     */
    protected $frozen_balance_for_energy = null;
    /**
     * Generated from protobuf field <code>int64 latest_consume_time_for_energy = 3;</code>
     */
    protected $latest_consume_time_for_energy = 0;
    /**
     *Frozen balance provided by other accounts to this account
     *
     * Generated from protobuf field <code>int64 acquired_delegated_frozen_balance_for_energy = 4;</code>
     */
    protected $acquired_delegated_frozen_balance_for_energy = 0;
    /**
     *Frozen balances provided to other accounts
     *
     * Generated from protobuf field <code>int64 delegated_frozen_balance_for_energy = 5;</code>
     */
    protected $delegated_frozen_balance_for_energy = 0;
    /**
     * storage resource, get from market
     *
     * Generated from protobuf field <code>int64 storage_limit = 6;</code>
     */
    protected $storage_limit = 0;
    /**
     * Generated from protobuf field <code>int64 storage_usage = 7;</code>
     */
    protected $storage_usage = 0;
    /**
     * Generated from protobuf field <code>int64 latest_exchange_storage_time = 8;</code>
     */
    protected $latest_exchange_storage_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $energy_usage
     *           energy resource, get from frozen
     *     @type \Protocol\Account\Frozen $frozen_balance_for_energy
     *           the frozen balance for energy
     *     @type int|string $latest_consume_time_for_energy
     *     @type int|string $acquired_delegated_frozen_balance_for_energy
     *          Frozen balance provided by other accounts to this account
     *     @type int|string $delegated_frozen_balance_for_energy
     *          Frozen balances provided to other accounts
     *     @type int|string $storage_limit
     *           storage resource, get from market
     *     @type int|string $storage_usage
     *     @type int|string $latest_exchange_storage_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * energy resource, get from frozen
     *
     * Generated from protobuf field <code>int64 energy_usage = 1;</code>
     * @return int|string
     */
    public function getEnergyUsage()
    {
        return $this->energy_usage;
    }

    /**
     * energy resource, get from frozen
     *
     * Generated from protobuf field <code>int64 energy_usage = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnergyUsage($var)
    {
        GPBUtil::checkInt64($var);
        $this->energy_usage = $var;

        return $this;
    }

    /**
     * the frozen balance for energy
     *
     * Generated from protobuf field <code>.protocol.Account.Frozen frozen_balance_for_energy = 2;</code>
     * @return \Protocol\Account\Frozen
     */
    public function getFrozenBalanceForEnergy()
    {
        return isset($this->frozen_balance_for_energy) ? $this->frozen_balance_for_energy : null;
    }

    public function hasFrozenBalanceForEnergy()
    {
        return isset($this->frozen_balance_for_energy);
    }

    public function clearFrozenBalanceForEnergy()
    {
        unset($this->frozen_balance_for_energy);
    }

    /**
     * the frozen balance for energy
     *
     * Generated from protobuf field <code>.protocol.Account.Frozen frozen_balance_for_energy = 2;</code>
     * @param \Protocol\Account\Frozen $var
     * @return $this
     */
    public function setFrozenBalanceForEnergy($var)
    {
        GPBUtil::checkMessage($var, \Protocol\Account\Frozen::class);
        $this->frozen_balance_for_energy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 latest_consume_time_for_energy = 3;</code>
     * @return int|string
     */
    public function getLatestConsumeTimeForEnergy()
    {
        return $this->latest_consume_time_for_energy;
    }

    /**
     * Generated from protobuf field <code>int64 latest_consume_time_for_energy = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatestConsumeTimeForEnergy($var)
    {
        GPBUtil::checkInt64($var);
        $this->latest_consume_time_for_energy = $var;

        return $this;
    }

    /**
     *Frozen balance provided by other accounts to this account
     *
     * Generated from protobuf field <code>int64 acquired_delegated_frozen_balance_for_energy = 4;</code>
     * @return int|string
     */
    public function getAcquiredDelegatedFrozenBalanceForEnergy()
    {
        return $this->acquired_delegated_frozen_balance_for_energy;
    }

    /**
     *Frozen balance provided by other accounts to this account
     *
     * Generated from protobuf field <code>int64 acquired_delegated_frozen_balance_for_energy = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAcquiredDelegatedFrozenBalanceForEnergy($var)
    {
        GPBUtil::checkInt64($var);
        $this->acquired_delegated_frozen_balance_for_energy = $var;

        return $this;
    }

    /**
     *Frozen balances provided to other accounts
     *
     * Generated from protobuf field <code>int64 delegated_frozen_balance_for_energy = 5;</code>
     * @return int|string
     */
    public function getDelegatedFrozenBalanceForEnergy()
    {
        return $this->delegated_frozen_balance_for_energy;
    }

    /**
     *Frozen balances provided to other accounts
     *
     * Generated from protobuf field <code>int64 delegated_frozen_balance_for_energy = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelegatedFrozenBalanceForEnergy($var)
    {
        GPBUtil::checkInt64($var);
        $this->delegated_frozen_balance_for_energy = $var;

        return $this;
    }

    /**
     * storage resource, get from market
     *
     * Generated from protobuf field <code>int64 storage_limit = 6;</code>
     * @return int|string
     */
    public function getStorageLimit()
    {
        return $this->storage_limit;
    }

    /**
     * storage resource, get from market
     *
     * Generated from protobuf field <code>int64 storage_limit = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStorageLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->storage_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 storage_usage = 7;</code>
     * @return int|string
     */
    public function getStorageUsage()
    {
        return $this->storage_usage;
    }

    /**
     * Generated from protobuf field <code>int64 storage_usage = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStorageUsage($var)
    {
        GPBUtil::checkInt64($var);
        $this->storage_usage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 latest_exchange_storage_time = 8;</code>
     * @return int|string
     */
    public function getLatestExchangeStorageTime()
    {
        return $this->latest_exchange_storage_time;
    }

    /**
     * Generated from protobuf field <code>int64 latest_exchange_storage_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatestExchangeStorageTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->latest_exchange_storage_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountResource::class, \Protocol\Account_AccountResource::class);

