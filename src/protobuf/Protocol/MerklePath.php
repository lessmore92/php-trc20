<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.MerklePath</code>
 */
class MerklePath extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes rt = 3;</code>
     */
    protected $rt = '';
    /**
     * Generated from protobuf field <code>repeated .protocol.AuthenticationPath authentication_paths = 1;</code>
     */
    private $authentication_paths;
    /**
     * Generated from protobuf field <code>repeated bool index = 2;</code>
     */
    private $index;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type \Protocol\AuthenticationPath[]|\Google\Protobuf\Internal\RepeatedField $authentication_paths
     * @type bool[]|\Google\Protobuf\Internal\RepeatedField $index
     * @type string $rt
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\ShieldContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.AuthenticationPath authentication_paths = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthenticationPaths()
    {
        return $this->authentication_paths;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.AuthenticationPath authentication_paths = 1;</code>
     * @param \Protocol\AuthenticationPath[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthenticationPaths($var)
    {
        $arr                        = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\AuthenticationPath::class);
        $this->authentication_paths = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bool index = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>repeated bool index = 2;</code>
     * @param bool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndex($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->index = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes rt = 3;</code>
     * @return string
     */
    public function getRt()
    {
        return $this->rt;
    }

    /**
     * Generated from protobuf field <code>bytes rt = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRt($var)
    {
        GPBUtil::checkString($var, False);
        $this->rt = $var;

        return $this;
    }

}

