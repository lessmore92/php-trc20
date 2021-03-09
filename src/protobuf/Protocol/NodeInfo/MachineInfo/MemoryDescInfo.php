<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\NodeInfo\MachineInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.NodeInfo.MachineInfo.MemoryDescInfo</code>
 */
class MemoryDescInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int64 initSize = 2;</code>
     */
    protected $initSize = 0;
    /**
     * Generated from protobuf field <code>int64 useSize = 3;</code>
     */
    protected $useSize = 0;
    /**
     * Generated from protobuf field <code>int64 maxSize = 4;</code>
     */
    protected $maxSize = 0;
    /**
     * Generated from protobuf field <code>double useRate = 5;</code>
     */
    protected $useRate = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int|string $initSize
     *     @type int|string $useSize
     *     @type int|string $maxSize
     *     @type float $useRate
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
     * Generated from protobuf field <code>int64 initSize = 2;</code>
     * @return int|string
     */
    public function getInitSize()
    {
        return $this->initSize;
    }

    /**
     * Generated from protobuf field <code>int64 initSize = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->initSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 useSize = 3;</code>
     * @return int|string
     */
    public function getUseSize()
    {
        return $this->useSize;
    }

    /**
     * Generated from protobuf field <code>int64 useSize = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUseSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->useSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 maxSize = 4;</code>
     * @return int|string
     */
    public function getMaxSize()
    {
        return $this->maxSize;
    }

    /**
     * Generated from protobuf field <code>int64 maxSize = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->maxSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double useRate = 5;</code>
     * @return float
     */
    public function getUseRate()
    {
        return $this->useRate;
    }

    /**
     * Generated from protobuf field <code>double useRate = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setUseRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->useRate = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MemoryDescInfo::class, \Protocol\NodeInfo_MachineInfo_MemoryDescInfo::class);

