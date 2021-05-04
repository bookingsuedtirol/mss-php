<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Penalty
{
    /**
     * @Type("integer")
     */
    public $percent;

    /**
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $datefrom;

    /**
     * @Type("integer")
     */
    public $daysarrival;
}
