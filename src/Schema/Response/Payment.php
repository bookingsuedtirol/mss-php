<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Payment {
    /**
     * @Type("integer")
     */
    public $method;

    /**
     * @Type("double")
     */
    public $price;

    /**
     * @Type("double")
     */
    public $prepayment;

    /**
     * @Type("integer")
     */
    public $invoice;
}
