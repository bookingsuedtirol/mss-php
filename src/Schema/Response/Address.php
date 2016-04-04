<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Address {
    /**
     * @Type("string")
     */
    public $street;

    /**
     * @Type("string")
     */
    public $zip;

    /**
     * @Type("integer")
     */
    public $city;

    /**
     * @Type("string")
     */
    public $country;

    /**
     * @Type("string")
     */
    public $url_streetview;
}
