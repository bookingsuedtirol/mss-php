<?php

namespace MssPhp\Schema\Response;

use MssPhp\Utils;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\PostDeserialize;

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

    /**
     * @PostDeserialize
     */
    public function postDeserialize()
    {
        Utils::setEmptyArraysToNull(["restrictions"], $this);
    }
}
