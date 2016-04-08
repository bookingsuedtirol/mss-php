<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

class RoomDetail {
    /**
     * @Type("integer")
     */
    public $number;

    /**
     * @Type("string")
     */
    public $availability;
}
