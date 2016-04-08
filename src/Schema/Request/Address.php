<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Address {
    /**
     * @Type("string")
     */
    public $street;

    /**
     * @Type("integer")
     */
    public $zipcode;

    /**
     * @Type("string")
     */
    public $city;

    /**
     * @Type("string")
     */
    public $country;
}
