<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Room
{
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $room_id;

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("integer")
     */
    public $room_type;

    /**
     * @Type("integer")
     */
    public $room_seq;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry = "person")
     */
    public $person;
}
