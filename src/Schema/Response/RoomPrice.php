<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class RoomPrice
{
    /**
     * @Type("integer")
     */
    public $room_id;

    /**
     * @Type("integer")
     */
    public $room_seq;

    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(entry = "price")
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

    /**
     * @Type("integer")
     */
    public $cancel_policy_id;

    /**
     * @Type("integer")
     */
    public $payment_term_id;
}
