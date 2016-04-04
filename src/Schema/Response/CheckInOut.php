<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class CheckInOut {
    /**
     * @Type("string")
     */
    public $from;

    /**
     * @Type("string")
     */
    public $to;
}
