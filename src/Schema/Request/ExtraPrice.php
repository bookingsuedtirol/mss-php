<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class ExtraPrice {
    /**
     * @Type("string")
     */
    public $price_id;

    /**
     * @Type("integer")
     */
    public $price_amount;
}
