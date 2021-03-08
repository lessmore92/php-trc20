<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Permission;

use UnexpectedValueException;

/**
 * Protobuf type <code>protocol.Permission.PermissionType</code>
 */
class PermissionType
{
    /**
     * Generated from protobuf enum <code>Owner = 0;</code>
     */
    const Owner = 0;
    /**
     * Generated from protobuf enum <code>Witness = 1;</code>
     */
    const Witness = 1;
    /**
     * Generated from protobuf enum <code>Active = 2;</code>
     */
    const Active = 2;

    private static $valueToName = [
        self::Owner   => 'Owner',
        self::Witness => 'Witness',
        self::Active  => 'Active',
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
class_alias(PermissionType::class, \Protocol\Permission_PermissionType::class);

