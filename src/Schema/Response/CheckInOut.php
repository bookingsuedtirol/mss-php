<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class CheckInOut {
    /**
     * @Type("DateTime<'hh:mm'>")
     */
    public $from;

    /**
     * @Type("DateTime<'hh:mm'>")
     */
    public $to;
}
