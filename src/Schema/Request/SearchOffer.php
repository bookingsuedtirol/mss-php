<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class SearchOffer {
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $arrival;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $departure;

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("string")
     */
    public $feature;

    /**
     * @Type("array<string>")
     * @XmlList(inline = true, entry="channel_id")
     */
    public $channel_id;

    /**
     * @Type("array<MssPhp\Schema\Request\Room>")
     * @XmlList(inline = true, entry = "room")
    */
    public $room;

    /**
     * @Type("integer")
     */
    public $typ;

    /**
     * @Type("MssPhp\Schema\Request\Rateplan")
     */
    public $rateplan;
}
