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
     * @Type("DateTime<'Y-m-d'>")
     */
    public $arrival;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $departure;

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

    /**
     * @Type("MssPhp\Schema\Response\Insurance")
     */
    public $insurance;

    /**
     * @Type("MssPhp\Schema\Response\Coupon")
     */
    public $coupon;
}
