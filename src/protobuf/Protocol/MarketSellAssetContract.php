<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/market_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.MarketSellAssetContract</code>
 */
class MarketSellAssetContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     */
    protected $owner_address = '';
    /**
     * Generated from protobuf field <code>bytes sell_token_id = 2;</code>
     */
    protected $sell_token_id = '';
    /**
     * Generated from protobuf field <code>int64 sell_token_quantity = 3;</code>
     */
    protected $sell_token_quantity = 0;
    /**
     * Generated from protobuf field <code>bytes buy_token_id = 4;</code>
     */
    protected $buy_token_id = '';
    /**
     * min to receive
     *
     * Generated from protobuf field <code>int64 buy_token_quantity = 5;</code>
     */
    protected $buy_token_quantity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $owner_address
     * @type string $sell_token_id
     * @type int|string $sell_token_quantity
     * @type string $buy_token_id
     * @type int|string $buy_token_quantity
     *           min to receive
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\MarketContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes sell_token_id = 2;</code>
     * @return string
     */
    public function getSellTokenId()
    {
        return $this->sell_token_id;
    }

    /**
     * Generated from protobuf field <code>bytes sell_token_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSellTokenId($var)
    {
        GPBUtil::checkString($var, False);
        $this->sell_token_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sell_token_quantity = 3;</code>
     * @return int|string
     */
    public function getSellTokenQuantity()
    {
        return $this->sell_token_quantity;
    }

    /**
     * Generated from protobuf field <code>int64 sell_token_quantity = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSellTokenQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->sell_token_quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes buy_token_id = 4;</code>
     * @return string
     */
    public function getBuyTokenId()
    {
        return $this->buy_token_id;
    }

    /**
     * Generated from protobuf field <code>bytes buy_token_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyTokenId($var)
    {
        GPBUtil::checkString($var, False);
        $this->buy_token_id = $var;

        return $this;
    }

    /**
     * min to receive
     *
     * Generated from protobuf field <code>int64 buy_token_quantity = 5;</code>
     * @return int|string
     */
    public function getBuyTokenQuantity()
    {
        return $this->buy_token_quantity;
    }

    /**
     * min to receive
     *
     * Generated from protobuf field <code>int64 buy_token_quantity = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBuyTokenQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->buy_token_quantity = $var;

        return $this;
    }

}

