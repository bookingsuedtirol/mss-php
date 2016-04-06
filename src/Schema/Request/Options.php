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
}
