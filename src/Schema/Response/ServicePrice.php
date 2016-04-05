<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class ServicePrice {
    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(inline = true, entry = "price")
     */
    public $price;
}