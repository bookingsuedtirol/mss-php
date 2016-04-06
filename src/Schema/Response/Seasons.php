<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Seasons {
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Season>")
     * @XmlList(inline = true, entry = "season")
     */
    public $season;
}
