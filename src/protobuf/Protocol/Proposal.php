<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Proposal
 *
 * Generated from protobuf message <code>protocol.Proposal</code>
 */
class Proposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     */
    protected $proposal_id = 0;
    /**
     * Generated from protobuf field <code>bytes proposer_address = 2;</code>
     */
    protected $proposer_address = '';
    /**
     * Generated from protobuf field <code>int64 expiration_time = 4;</code>
     */
    protected $expiration_time = 0;
    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     */
    protected $create_time = 0;
    /**
     * Generated from protobuf field <code>.protocol.Proposal.State state = 7;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>map<int64, int64> parameters = 3;</code>
     */
    private $parameters;
    /**
     * Generated from protobuf field <code>repeated bytes approvals = 6;</code>
     */
    private $approvals;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $proposal_id
     * @type string $proposer_address
     * @type array|\Google\Protobuf\Internal\MapField $parameters
     * @type int|string $expiration_time
     * @type int|string $create_time
     * @type string[]|\Google\Protobuf\Internal\RepeatedField $approvals
     * @type int $state
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     * @return int|string
     */
    public function getProposalId()
    {
        return $this->proposal_id;
    }

    /**
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProposalId($var)
    {
        GPBUtil::checkInt64($var);
        $this->proposal_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes proposer_address = 2;</code>
     * @return string
     */
    public function getProposerAddress()
    {
        return $this->proposer_address;
    }

    /**
     * Generated from protobuf field <code>bytes proposer_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProposerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->proposer_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> parameters = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Generated from protobuf field <code>map<int64, int64> parameters = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr              = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::INT64);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expiration_time = 4;</code>
     * @return int|string
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    /**
     * Generated from protobuf field <code>int64 expiration_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes approvals = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApprovals()
    {
        return $this->approvals;
    }

    /**
     * Generated from protobuf field <code>repeated bytes approvals = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApprovals($var)
    {
        $arr             = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->approvals = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protocol.Proposal.State state = 7;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.protocol.Proposal.State state = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Protocol\Proposal\State::class);
        $this->state = $var;

        return $this;
    }

}

