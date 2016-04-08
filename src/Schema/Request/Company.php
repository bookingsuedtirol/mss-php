<?php

namespace MssPhp\Schema\Request;

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
     * @Type("MssPhp\Schema\Request\Address")
     */
    public $address;
}
