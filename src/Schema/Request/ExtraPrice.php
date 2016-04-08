<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class ExtraPrice {
    /**
     * @Type("integer")
     */
    public $price_id;

    /**
     * @Type("integer")
     */
    public $price_amount;
}
