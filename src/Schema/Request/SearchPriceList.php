<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class SearchPriceList
{
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_from;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_to;

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="room_id")
     */
    public $room_id;

    /**
     * @Type("integer")
     */
    public $typ;
}
