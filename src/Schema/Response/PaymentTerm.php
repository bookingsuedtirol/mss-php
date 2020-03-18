<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class PaymentTerm {
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("integer")
     */
    public $owner_id;

    /**
     * @Type("integer")
     */
    public $methods;

    /**
     * @Type("integer")
     */
    public $ccards;

    /**
     * @Type("integer")
     */
    public $prepayment;

    /**
     * @Type("integer")
     */
    public $priority;

    /**
     * @Type("MssPhp\Schema\Response\Bank")
     */
    public $bank;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\Insurance")
     */
    public $insurance;
}
