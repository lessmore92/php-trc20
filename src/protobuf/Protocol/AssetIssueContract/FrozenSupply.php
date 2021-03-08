<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/asset_issue_contract.proto

namespace Protocol\AssetIssueContract;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.AssetIssueContract.FrozenSupply</code>
 */
class FrozenSupply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 frozen_amount = 1;</code>
     */
    protected $frozen_amount = 0;
    /**
     * Generated from protobuf field <code>int64 frozen_days = 2;</code>
     */
    protected $frozen_days = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $frozen_amount
     * @type int|string $frozen_days
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\AssetIssueContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 frozen_amount = 1;</code>
     * @return int|string
     */
    public function getFrozenAmount()
    {
        return $this->frozen_amount;
    }

    /**
     * Generated from protobuf field <code>int64 frozen_amount = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFrozenAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->frozen_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 frozen_days = 2;</code>
     * @return int|string
     */
    public function getFrozenDays()
    {
        return $this->frozen_days;
    }

    /**
     * Generated from protobuf field <code>int64 frozen_days = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFrozenDays($var)
    {
        GPBUtil::checkInt64($var);
        $this->frozen_days = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FrozenSupply::class, \Protocol\AssetIssueContract_FrozenSupply::class);

