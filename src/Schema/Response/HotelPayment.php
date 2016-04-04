<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class HotelPayment {
    /**
     * @Type("integer")
     */
    public $methods;
}
