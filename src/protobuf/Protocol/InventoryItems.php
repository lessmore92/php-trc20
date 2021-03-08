<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/TronInventoryItems.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.InventoryItems</code>
 */
class InventoryItems extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated bytes items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $type
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\TronInventoryItems::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>int32 type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated bytes items = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->items = $arr;

        return $this;
    }

}
