<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Days
{
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Day>")
     * @XmlList(inline = true, entry = "day")
     */
    public $day;
}
