<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\AccessType;

class Booking {
    /**
     * @Type("integer")
     */
    public $booking_id;

    /**
     * @Type("string")
     */
    public $storno_id;

    /**
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $booking_date;

    /**
     * @Type("string")
     */
    public $source;

    /**
     * @Type("integer")
     */
    public $hotel_id;

    /**
     * @Type("string")
     * @AccessType("public_method")
     * Normally this should be "DateTime<'Y-m-d'>",
     * but MSS returns an empty string if no date
     * is provided which would lead to a serialize error. 
     */
    public $arrival;

    public function getArrival()
    {
        return $this->formatDate($this->arrival);
    }

    public function setArrival($arrival)
    {
        $this->arrival = $this->parseDate($arrival);
    }

    /**
     * @Type("string")
     * @AccessType("public_method")
     * Same as for $arrival
     */
    public $departure;

    public function getDeparture()
    {
        return $this->formatDate($this->departure);
    }

    public function setDeparture($departure)
    {
        $this->departure = $this->parseDate($departure);
    }

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("integer")
     */
    public $booking_status;

    /**
     * @Type("integer")
     */
    public $cancelled;

    /**
     * @Type("string")
     */
    public $note;

    /**
     * @Type("MssPhp\Schema\Response\Hotel")
     */
    public $hotel;

    /**
     * @Type("MssPhp\Schema\Response\Guest")
     */
    public $guest;

    /**
     * @Type("MssPhp\Schema\Response\Company")
     */
    public $company;

    /**
     * @Type("MssPhp\Schema\Response\Payment")
     */
    public $payment;

    /**
     * @Type("array<MssPhp\Schema\Response\Room>")
     * @XmlList(inline = true, entry = "room")
     */
    public $room;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(inline = true, entry = "extra_price")
     */
    public $extra_price;

    /**
     * @Type("array<MssPhp\Schema\Response\Offer>")
     * @XmlList(inline = true, entry = "offer")
     */
    public $offer;

    private function parseDate($date)
    {
        if (!$date) return null;
        return \DateTime::createFromFormat('Y-m-d', $date, new \DateTimeZone('UTC'));
    }

    private function formatDate($date)
    {
        if (!$date) return null;
        return $date->format('Y-m-d');
    }
}
