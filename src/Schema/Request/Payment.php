<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Payment {
    /**
     * @Type("integer")
     */
    public $method;

    /**
     * @Type("integer")
     */
    public $invoice;
}
