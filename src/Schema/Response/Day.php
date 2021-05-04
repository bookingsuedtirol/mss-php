<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Day
{
    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date;

    /**
     * @Type("integer")
     */
    public $free;

    /**
     * @Type("array<MssPhp\Schema\Response\Restriction>")
     * @XmlList(entry = "restriction")
     */
    public $restrictions;
}
