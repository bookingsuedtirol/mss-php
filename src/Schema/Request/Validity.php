<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Validity {
    /**
     * @Type("integer")
     */
    public $valid;

    /**
     * @Type("integer")
     */
    public $offers;

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
     * @Type("array<MssPhp\Schema\Request\Room>")
     * @XmlList(inline = true, entry="room")
     */
    public $room;
}
