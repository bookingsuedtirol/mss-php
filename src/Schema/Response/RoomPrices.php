<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class RoomPrices {
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\RoomPrice>")
     * @XmlList(inline = true, entry = "price")
     */
    public $price;
}
