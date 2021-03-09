<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\NodeInfo\MachineInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.NodeInfo.MachineInfo.DeadLockThreadInfo</code>
 */
class DeadLockThreadInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string lockName = 2;</code>
     */
    protected $lockName = '';
    /**
     * Generated from protobuf field <code>string lockOwner = 3;</code>
     */
    protected $lockOwner = '';
    /**
     * Generated from protobuf field <code>string state = 4;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>int64 blockTime = 5;</code>
     */
    protected $blockTime = 0;
    /**
     * Generated from protobuf field <code>int64 waitTime = 6;</code>
     */
    protected $waitTime = 0;
    /**
     * Generated from protobuf field <code>string stackTrace = 7;</code>
     */
    protected $stackTrace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $lockName
     *     @type string $lockOwner
     *     @type string $state
     *     @type int|string $blockTime
     *     @type int|string $waitTime
     *     @type string $stackTrace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lockName = 2;</code>
     * @return string
     */
    public function getLockName()
    {
        return $this->lockName;
    }

    /**
     * Generated from protobuf field <code>string lockName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLockName($var)
    {
        GPBUtil::checkString($var, True);
        $this->lockName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lockOwner = 3;</code>
     * @return string
     */
    public function getLockOwner()
    {
        return $this->lockOwner;
    }

    /**
     * Generated from protobuf field <code>string lockOwner = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLockOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->lockOwner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 4;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 blockTime = 5;</code>
     * @return int|string
     */
    public function getBlockTime()
    {
        return $this->blockTime;
    }

    /**
     * Generated from protobuf field <code>int64 blockTime = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlockTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->blockTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 waitTime = 6;</code>
     * @return int|string
     */
    public function getWaitTime()
    {
        return $this->waitTime;
    }

    /**
     * Generated from protobuf field <code>int64 waitTime = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWaitTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->waitTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stackTrace = 7;</code>
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * Generated from protobuf field <code>string stackTrace = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStackTrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->stackTrace = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeadLockThreadInfo::class, \Protocol\NodeInfo_MachineInfo_DeadLockThreadInfo::class);

