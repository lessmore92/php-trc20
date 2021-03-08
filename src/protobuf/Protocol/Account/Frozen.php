<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * frozen balance
 *
 * Generated from protobuf message <code>protocol.Account.Frozen</code>
 */
class Frozen extends \Google\Protobuf\Internal\Message
{
    /**
     * the frozen trx balance
     *
     * Generated from protobuf field <code>int64 frozen_balance = 1;</code>
     */
    protected $frozen_balance = 0;
    /**
     * the expire time
     *
     * Generated from protobuf field <code>int64 expire_time = 2;</code>
     */
    protected $expire_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $frozen_balance
     *           the frozen trx balance
     * @type int|string $expire_time
     *           the expire time
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * the frozen trx balance
     *
     * Generated from protobuf field <code>int64 frozen_balance = 1;</code>
     * @return int|string
     */
    public function getFrozenBalance()
    {
        return $this->frozen_balance;
    }

    /**
     * the frozen trx balance
     *
     * Generated from protobuf field <code>int64 frozen_balance = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFrozenBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->frozen_balance = $var;

        return $this;
    }

    /**
     * the expire time
     *
     * Generated from protobuf field <code>int64 expire_time = 2;</code>
     * @return int|string
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * the expire time
     *
     * Generated from protobuf field <code>int64 expire_time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Frozen::class, \Protocol\Account_Frozen::class);

