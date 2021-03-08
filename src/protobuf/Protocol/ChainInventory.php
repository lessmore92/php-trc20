<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ChainInventory</code>
 */
class ChainInventory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 remain_num = 2;</code>
     */
    protected $remain_num = 0;
    /**
     * Generated from protobuf field <code>repeated .protocol.ChainInventory.BlockId ids = 1;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type \Protocol\ChainInventory\BlockId[]|\Google\Protobuf\Internal\RepeatedField $ids
     * @type int|string $remain_num
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.ChainInventory.BlockId ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.ChainInventory.BlockId ids = 1;</code>
     * @param \Protocol\ChainInventory\BlockId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr       = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\ChainInventory\BlockId::class);
        $this->ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 remain_num = 2;</code>
     * @return int|string
     */
    public function getRemainNum()
    {
        return $this->remain_num;
    }

    /**
     * Generated from protobuf field <code>int64 remain_num = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemainNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->remain_num = $var;

        return $this;
    }

}

