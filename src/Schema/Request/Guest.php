<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Guest {
    /**
     * @Type("string")
     */
    public $gender;

    /**
     * @Type("string")
     */
    public $prefix;

    /**
     * @Type("string")
     */
    public $firstname;

    /**
     * @Type("string")
     */
    public $lastname;

    /**
     * @Type("string")
     */
    public $email;

    /**
     * @Type("string")
     */
    public $phone;

    /**
     * @Type("MssPhp\Schema\Request\Address")
     */
    public $address;

    /**
     * @Type("integer")
     */
    public $newsletter;
}
