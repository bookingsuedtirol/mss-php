<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Room
{
    /**
     * @Type("integer")
     */
    public $room_id;

    /**
     * @Type("string")
     */
    public $room_lts_id;

    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("integer")
     */
    public $room_type;

    /**
     * @Type("string")
     */
    public $room_code;

    /**
     * @Type("string")
     */
    public $room_title;

    /**
     * @Type("string")
     */
    public $room_description;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @AccessType("public_method")
     * @Type("string")
     */
    public $description;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = nl2br(trim($description));
    }

    /**
     * @Type("string")
     */
    public $room_persons;

    /**
     * @Type("integer")
     */
    public $room_free;

    /**
     * @Type("integer")
     */
    public $features;

    /**
     * @Type("MssPhp\Schema\Response\FeaturesView")
     */
    public $features_view;

    /**
     * @Type("double")
     */
    public $room_total;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(inline = true, entry = "room_price")
     */
    public $room_price;

    /**
     * @Type("MssPhp\Schema\Response\CancelPolicy")
     */
    public $cancel_policy;

    /**
     * @Type("MssPhp\Schema\Response\PaymentTerm")
     */
    public $payment_term;

    /**
     * @Type("MssPhp\Schema\Response\Properties")
     */
    public $properties;

    /**
     * @Type("MssPhp\Schema\Response\Occupancy")
     */
    public $occupancy;

    /**
     * @Type("array<MssPhp\Schema\Response\RoomNumbers>")
     * @XmlList(inline = true, entry = "room_numbers")
     */
    public $room_numbers;

    /**
     * @Type("MssPhp\Schema\Response\RoomDetails")
     */
    public $room_details;

    /**
     * @Type("MssPhp\Schema\Response\Days")
     */
    public $days;

    /**
     * @Type("integer")
     */
    public $price_from;

    /**
     * @Type("array<MssPhp\Schema\Response\PriceList>")
     * @XmlList(inline = true, entry = "pricelist")
     */
    public $pricelist;
}
