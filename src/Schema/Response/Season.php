<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Season {
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_start;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_end;

    /**
     * @Type("MssPhp\Schema\Response\Price")
     */
    public $price;
}
