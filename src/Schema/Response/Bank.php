<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Bank {
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $iban;

    /**
     * @Type("string")
     */
    public $swift;
}
