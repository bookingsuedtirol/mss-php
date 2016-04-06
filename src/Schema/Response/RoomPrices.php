<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class RoomPrices {
    /**
     * @Type("array<MssPhp\Schema\Response\RoomPrice>")
     * @XmlList(inline = true, entry = "price")
     */
    public $price;
}
