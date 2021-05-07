<?php

namespace MssPhp;

final class Utils
{
    /**
     * @param array<string> $properties The object’s properties to iterate over
     * @param object $object
     */
    public static function setEmptyArraysToNull(
        array $properties,
        object $object
    ) {
        foreach ($properties as $property) {
            $value = $object->{$property};
            $object->{$property} =
                is_array($value) && empty($value) ? null : $value;
        }
    }
}
