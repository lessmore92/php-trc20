<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Items</code>
 */
class Items extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.Items.ItemType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated .protocol.Block blocks = 2;</code>
     */
    private $blocks;
    /**
     * Generated from protobuf field <code>repeated .protocol.BlockHeader block_headers = 3;</code>
     */
    private $block_headers;
    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 4;</code>
     */
    private $transactions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $type
     * @type \Protocol\Block[]|\Google\Protobuf\Internal\RepeatedField $blocks
     * @type \Protocol\BlockHeader[]|\Google\Protobuf\Internal\RepeatedField $block_headers
     * @type \Protocol\Transaction[]|\Google\Protobuf\Internal\RepeatedField $transactions
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protocol.Items.ItemType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.protocol.Items.ItemType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Protocol\Items\ItemType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Block blocks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Block blocks = 2;</code>
     * @param \Protocol\Block[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr          = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\Block::class);
        $this->blocks = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.BlockHeader block_headers = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockHeaders()
    {
        return $this->block_headers;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.BlockHeader block_headers = 3;</code>
     * @param \Protocol\BlockHeader[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockHeaders($var)
    {
        $arr                 = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\BlockHeader::class);
        $this->block_headers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.Transaction transactions = 4;</code>
     * @param \Protocol\Transaction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactions($var)
    {
        $arr                = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\Transaction::class);
        $this->transactions = $arr;

        return $this;
    }

}

