<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Hotels
{
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Hotel>")
     * @XmlList(inline = true, entry = "hotel")
     */
    public $hotel;
}
