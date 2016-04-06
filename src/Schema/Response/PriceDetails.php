<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Inline;

class PriceDetails {
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(inline = true, entry = "price")
     */
    public $price;
}
