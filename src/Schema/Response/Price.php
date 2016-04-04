<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Price {
    /**
     * @Type("string")
     */
    public $price_id;

    /**
     * @Type("integer")
     */
    public $price_typ;

    /**
     * @Type("integer")
     */
    public $supplement;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("double")
     */
    public $price_ws;

    /**
     * @Type("double")
     */
    public $price_bb;

    /**
     * @Type("double")
     */
    public $price_hb;

    /**
     * @Type("double")
     */
    public $price_fb;

    /**
     * @Type("double")
     */
    public $price_ai;

    /**
     * @Type("MssPhp\Schema\Response\Price")
     */
    public $price_total;

    /**
    * @Type("array<MssPhp\Schema\Response\Price>")
    * @XmlList(inline = true, entry="price_inclusive")
     */
    public $price_inclusive;

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
     * @Type("integer")
     */
    public $unit;

    /**
    * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;
}
