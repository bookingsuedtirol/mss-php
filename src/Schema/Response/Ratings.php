<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Ratings
{
    /**
     * @Inline;
     * @Type("array<MssPhp\Schema\Response\Rating>")
     * @XmlList(inline = true, entry="rating")
     */
    public $rating;
}
