<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.AuthenticationPath</code>
 */
class AuthenticationPath extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated bool value = 1;</code>
     */
    private $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type bool[]|\Google\Protobuf\Internal\RepeatedField $value
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\ShieldContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bool value = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated bool value = 1;</code>
     * @param bool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->value = $arr;

        return $this;
    }

}
