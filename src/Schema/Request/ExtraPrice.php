<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class ExtraPrice {
    /**
     * @Type("integer")
     */
    public $price_id;

    /**
     * @Type("double")
     */
    public $price_amount;
}
