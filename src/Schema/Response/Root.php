<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("root")
 */
class Root
{
    /**
     * @Type("MssPhp\Schema\Response\Header")
     */
    public $header;

    /**
     * @Type("MssPhp\Schema\Response\Result")
     */
    public $result;

    /**
     * Recursively convert the current object to a multi-dimensional array
     * and omit properties with null values.
     */
    public function toArrayWithoutNull()
    {
        $noNull = fn($value) => $value !== null;

        $toArray = function ($value) use (&$toArray, &$noNull) {
            return is_scalar($value)
                ? $value
                : array_map($toArray, \array_filter((array) $value, $noNull));
        };

        return $toArray($this);
    }
}
