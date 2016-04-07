<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Room {
    /**
     * @Type("string")
     */
    public $room_id;

    /**
     * @Type("string")
     */
    public $room_lts_id;

    /**
     * @Type("integer")
     */
    public $room_type;

    /**
     * @Type("string")
     */
    public $room_code;

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
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("MssPhp\Schema\Response\Properties")
     */
    public $properties;

    /**
     * @Type("MssPhp\Schema\Response\Occupancy")
     */
    public $occupancy;

    /**
     * @Type("MssPhp\Schema\Response\RoomNumbers")
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
}
