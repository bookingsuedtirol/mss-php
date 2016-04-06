<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class RoomPrices {
    /**
     * @Type("array<MssPhp\Schema\Response\RoomPrice>")
     * @XmlList(inline = true, entry = "price")
     */
    public $price;
}
