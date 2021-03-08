<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.MarketOrderList</code>
 */
class MarketOrderList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protocol.MarketOrder orders = 1;</code>
     */
    private $orders;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type \Protocol\MarketOrder[]|\Google\Protobuf\Internal\RepeatedField $orders
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.MarketOrder orders = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.MarketOrder orders = 1;</code>
     * @param \Protocol\MarketOrder[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrders($var)
    {
        $arr          = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\MarketOrder::class);
        $this->orders = $arr;

        return $this;
    }

}

