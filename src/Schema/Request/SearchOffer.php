<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

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
     * @Type("string")
     */
    public $channel_id;

    /**
     * @Type("MssPhp\Schema\Request\Room")
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
