<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class RoomPrice {
    /**
     * @Type("string")
     */
    public $room_id;

    /**
     * @Type("integer")
     */
    public $room_seq;

    /**
     * @Type("string")
     */
    public $offer_id;

    /**
    * @Type("MssPhp\Schema\Response\PriceDetails")
    */
    public $price_details;

    /**
     * @Type("MssPhp\Schema\Response\Price")
     */
    public $price_total;

    /**
    * @Type("MssPhp\Schema\Response\Price")
     */
    public $price_inclusive;
}
