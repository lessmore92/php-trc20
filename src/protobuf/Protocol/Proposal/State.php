<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Proposal;

use UnexpectedValueException;

/**
 * Protobuf type <code>protocol.Proposal.State</code>
 */
class State
{
    /**
     * Generated from protobuf enum <code>PENDING = 0;</code>
     */
    const PENDING = 0;
    /**
     * Generated from protobuf enum <code>DISAPPROVED = 1;</code>
     */
    const DISAPPROVED = 1;
    /**
     * Generated from protobuf enum <code>APPROVED = 2;</code>
     */
    const APPROVED = 2;
    /**
     * Generated from protobuf enum <code>CANCELED = 3;</code>
     */
    const CANCELED = 3;

    private static $valueToName = [
        self::PENDING     => 'PENDING',
        self::DISAPPROVED => 'DISAPPROVED',
        self::APPROVED    => 'APPROVED',
        self::CANCELED    => 'CANCELED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value]))
        {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const))
        {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Protocol\Proposal_State::class);
