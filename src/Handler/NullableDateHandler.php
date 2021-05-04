<?php

namespace MssPhp\Handler;

use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Exception\RuntimeException;

class NullableDateHandler extends DateHandler
{
    private $defaultFormat;
    private $defaultTimezone;

    public function deserializeDateTimeFromXml(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        if ($this->isEmptyDate($data)) {
            return null;
        }

        return $this->parseDateTime($data, $type);
    }

    public function deserializeDateTimeImmutableFromXml(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        if ($this->isEmptyDate($data)) {
            return null;
        }

        return $this->parseDateTime($data, $type, true);
    }

    public function deserializeDateIntervalFromXml(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        if ($this->isEmptyDate($data)) {
            return null;
        }

        return $this->parseDateInterval($data);
    }

    private function isEmptyDate($data)
    {
        return empty((string)$data);
    }

    private function parseDateTime($data, array $type, $immutable = false)
    {
        $timezone = !empty($type['params'][1]) ? new \DateTimeZone($type['params'][1]) : $this->defaultTimezone;
        $format = $this->getDeserializationFormat($type);

        if ($immutable) {
            $datetime = \DateTimeImmutable::createFromFormat($format, (string)$data, $timezone);
        } else {
            $datetime = \DateTime::createFromFormat($format, (string)$data, $timezone);
        }

        if (false === $datetime) {
            throw new RuntimeException(sprintf('Invalid datetime "%s", expected format %s.', $data, $format));
        }

        if ($format === 'U') {
            $datetime = $datetime->setTimezone($timezone);
        }

        return $datetime;
    }

    private function parseDateInterval($data)
    {
        $dateInterval = null;

        try {
            $dateInterval = new \DateInterval($data);
        } catch (\Exception $e) {
            throw new RuntimeException(sprintf('Invalid dateinterval "%s", expected ISO 8601 format', $data), null, $e);
        }

        return $dateInterval;
    }

    /**
     * @param array $type
     *  @return string
     */
    private function getDeserializationFormat(array $type)
    {
        if (isset($type['params'][2])) {
            return $type['params'][2];
        }

        if (isset($type['params'][0])) {
            return $type['params'][0];
        }

        return $this->defaultFormat;
    }
}
