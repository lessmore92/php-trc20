<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/asset_issue_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.UpdateAssetContract</code>
 */
class UpdateAssetContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     */
    protected $owner_address = '';
    /**
     * Generated from protobuf field <code>bytes description = 2;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>bytes url = 3;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>int64 new_limit = 4;</code>
     */
    protected $new_limit = 0;
    /**
     * Generated from protobuf field <code>int64 new_public_limit = 5;</code>
     */
    protected $new_public_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $owner_address
     * @type string $description
     * @type string $url
     * @type int|string $new_limit
     * @type int|string $new_public_limit
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Contract\AssetIssueContract::initOnce();
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
     * Generated from protobuf field <code>bytes description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>bytes description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, False);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>bytes url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, False);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 new_limit = 4;</code>
     * @return int|string
     */
    public function getNewLimit()
    {
        return $this->new_limit;
    }

    /**
     * Generated from protobuf field <code>int64 new_limit = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNewLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->new_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 new_public_limit = 5;</code>
     * @return int|string
     */
    public function getNewPublicLimit()
    {
        return $this->new_public_limit;
    }

    /**
     * Generated from protobuf field <code>int64 new_public_limit = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNewPublicLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->new_public_limit = $var;

        return $this;
    }

}

