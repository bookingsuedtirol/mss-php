<?php

namespace MssPhp\Handler;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Visitor\DeserializationVisitorInterface;
use JMS\Serializer\Handler\DateHandler;

class CustomDateHandler
{
    /**
     * Add a handler to deserialize DateTime
     * Differences from the default DateHandler:
     * - treat empty strings as null instead of throwing an error
     * - output the formatted string instead of a DateTime object
     */
    public static function register(HandlerRegistry $registry)
    {
        $registry->registerHandler(
            GraphNavigator::DIRECTION_DESERIALIZATION,
            "DateTime",
            "xml",
            /**
             * @param mixed $data
             */
            function (
                DeserializationVisitorInterface $visitor,
                $data,
                array $type
            ) {
                if (!((string) $data)) {
                    return null;
                }

                $dateTime = (new DateHandler())->deserializeDateTimeFromXml(
                    $visitor,
                    $data,
                    $type
                );

                $format = $type["params"][0] ?? DateTime::ATOM;

                return $dateTime->format($format);
            }
        );
    }
}
