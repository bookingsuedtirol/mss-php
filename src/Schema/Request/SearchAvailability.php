<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class SearchAvailability {
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_from;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_to;
}
