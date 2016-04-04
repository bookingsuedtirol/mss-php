<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class OnlinePayment {
    /**
     * @Type("integer")
     */
    public $methods;

    /**
     * @Type("integer")
     */
    public $prepayment;

    /**
     * @Type("integer")
     */
    public $ccards;

    /**
     * @Type("MssPhp\Schema\Response\Bank")
     */
    public $bank;
}
