<?php

namespace MssPhp;

final class Utils
{
    /**
     * @param array<string> $properties The object’s properties to iterate over
     */
    public static function setEmptyArraysToNull(
        array $properties,
        object $object
    ): void {
        foreach ($properties as $property) {
            /**
             * @var mixed
             */
            $value = $object->{$property};

            $object->{$property} =
                is_array($value) && empty($value) ? null : $value;
        }
    }
}
