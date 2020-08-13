<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Options {
    /**
     * @Type("integer")
     */
    public $hotel_details;

    /**
     * @Type("integer")
     */
    public $offer_details;

    /**
     * @Type("integer")
     */
    public $room_details;

    /**
     * @Type("integer")
     */
    public $special_details;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $picture_date;

    /**
     * @Type("integer")
     */
    public $lts_bookable;

    /**
     * @Type("integer")
     */
    public $get_availability;

    /**
     * @Type("integer")
     */
    public $get_restrictions;

    /**
     * @Type("integer")
     */
    public $get_roomdetails;

    /**
     * @Type("integer")
     */
    public $get_masterpackages;

    /**
     * @Type("integer")
     */
    public $base_price;

    /**
     * @Type("integer")
     */
    public $pricelist_details;

    /**
     * @Type("integer")
     */
    public $only_subscribed_hotels;

    /**
     * @Type("integer")
     */
    public $only_available;
}
