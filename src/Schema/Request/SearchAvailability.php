<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class SearchAvailability {
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_from;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_to;

    /**
    * @Type("array<integer>")
    * @XmlList(inline = true, entry="offer_id")
     */
    public $offer_id;

    /**
    * @Type("array<integer>")
    * @XmlList(inline = true, entry="room_id")
     */
    public $room_id;
}
