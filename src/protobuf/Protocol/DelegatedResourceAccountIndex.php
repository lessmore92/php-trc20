<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.DelegatedResourceAccountIndex</code>
 */
class DelegatedResourceAccountIndex extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes account = 1;</code>
     */
    protected $account = '';
    /**
     * Generated from protobuf field <code>repeated bytes fromAccounts = 2;</code>
     */
    private $fromAccounts;
    /**
     * Generated from protobuf field <code>repeated bytes toAccounts = 3;</code>
     */
    private $toAccounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $account
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $fromAccounts
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $toAccounts
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes account = 1;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>bytes account = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, False);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes fromAccounts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFromAccounts()
    {
        return $this->fromAccounts;
    }

    /**
     * Generated from protobuf field <code>repeated bytes fromAccounts = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFromAccounts($var)
    {
        $arr                = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->fromAccounts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes toAccounts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getToAccounts()
    {
        return $this->toAccounts;
    }

    /**
     * Generated from protobuf field <code>repeated bytes toAccounts = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setToAccounts($var)
    {
        $arr              = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->toAccounts = $arr;

        return $this;
    }

}

