<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\TransactionInfo;

use UnexpectedValueException;

/**
 * Protobuf type <code>protocol.TransactionInfo.code</code>
 */
class code
{
    /**
     * Generated from protobuf enum <code>SUCESS = 0;</code>
     */
    const SUCESS = 0;
    /**
     * Generated from protobuf enum <code>FAILED = 1;</code>
     */
    const FAILED = 1;

    private static $valueToName = [
        self::SUCESS => 'SUCESS',
        self::FAILED => 'FAILED',
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
class_alias(code::class, \Protocol\TransactionInfo_code::class);
