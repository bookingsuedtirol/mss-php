<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Company {
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $taxnumber;

    /**
     * @Type("MssPhp\Schema\Response\Address")
     */
    public $address;
}
