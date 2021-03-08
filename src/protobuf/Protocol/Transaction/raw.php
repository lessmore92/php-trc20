<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Transaction.raw</code>
 */
class raw extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes ref_block_bytes = 1;</code>
     */
    protected $ref_block_bytes = '';
    /**
     * Generated from protobuf field <code>int64 ref_block_num = 3;</code>
     */
    protected $ref_block_num = 0;
    /**
     * Generated from protobuf field <code>bytes ref_block_hash = 4;</code>
     */
    protected $ref_block_hash = '';
    /**
     * Generated from protobuf field <code>int64 expiration = 8;</code>
     */
    protected $expiration = 0;
    /**
     * transaction note
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     */
    protected $data = '';
    /**
     * scripts not used
     *
     * Generated from protobuf field <code>bytes scripts = 12;</code>
     */
    protected $scripts = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 14;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 fee_limit = 18;</code>
     */
    protected $fee_limit = 0;
    /**
     * Generated from protobuf field <code>repeated .protocol.authority auths = 9;</code>
     */
    private $auths;
    /**
     *only support size = 1, repeated list here for extension
     *
     * Generated from protobuf field <code>repeated .protocol.Transaction.Contract contract = 11;</code>
     */
    private $contract;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $ref_block_bytes
     * @type int|string $ref_block_num
     * @type string $ref_block_hash
     * @type int|string $expiration
     * @type \Protocol\authority[]|\Google\Protobuf\Internal\RepeatedField $auths
     * @type string $data
     *           transaction note
     * @type \Protocol\Transaction\Contract[]|\Google\Protobuf\Internal\RepeatedField $contract
     *          only support size = 1, repeated list here for extension
     * @type string $scripts
     *           scripts not used
     * @type int|string $timestamp
     * @type int|string $fee_limit
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes ref_block_bytes = 1;</code>
     * @return string
     */
    public function getRefBlockBytes()
    {
        return $this->ref_block_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes ref_block_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRefBlockBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->ref_block_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ref_block_num = 3;</code>
     * @return int|string
     */
    public function getRefBlockNum()
    {
        return $this->ref_block_num;
    }

    /**
     * Generated from protobuf field <code>int64 ref_block_num = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRefBlockNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->ref_block_num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes ref_block_hash = 4;</code>
     * @return string
     */
    public function getRefBlockHash()
    {
        return $this->ref_block_hash;
    }

    /**
     * Generated from protobuf field <code>bytes ref_block_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRefBlockHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->ref_block_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expiration = 8;</code>
     * @return int|string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Generated from protobuf field <code>int64 expiration = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.authority auths = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuths()
    {
        return $this->auths;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.authority auths = 9;</code>
     * @param \Protocol\authority[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuths($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\authority::class);
        $this->auths = $arr;

        return $this;
    }

    /**
     * transaction note
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * transaction note
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     *only support size = 1, repeated list here for extension
     *
     * Generated from protobuf field <code>repeated .protocol.Transaction.Contract contract = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     *only support size = 1, repeated list here for extension
     *
     * Generated from protobuf field <code>repeated .protocol.Transaction.Contract contract = 11;</code>
     * @param \Protocol\Transaction\Contract[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContract($var)
    {
        $arr            = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\Transaction\Contract::class);
        $this->contract = $arr;

        return $this;
    }

    /**
     * scripts not used
     *
     * Generated from protobuf field <code>bytes scripts = 12;</code>
     * @return string
     */
    public function getScripts()
    {
        return $this->scripts;
    }

    /**
     * scripts not used
     *
     * Generated from protobuf field <code>bytes scripts = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setScripts($var)
    {
        GPBUtil::checkString($var, False);
        $this->scripts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 14;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee_limit = 18;</code>
     * @return int|string
     */
    public function getFeeLimit()
    {
        return $this->fee_limit;
    }

    /**
     * Generated from protobuf field <code>int64 fee_limit = 18;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_limit = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(raw::class, \Protocol\Transaction_raw::class);
