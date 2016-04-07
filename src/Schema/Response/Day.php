<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Day {
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date;

    /**
     * @Type("integer")
     */
    public $free;

    /**
     * @Type("MssPhp\Schema\Response\Restrictions")
     */
    public $restrictions;
}
