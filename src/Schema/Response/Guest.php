<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Guest {
    /**
     * @Type("integer")
     */
    public $guest_id;

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
    public $prefix;

    /**
     * @Type("string")
     */
    public $gender;

    /**
     * @Type("string")
     */
    public $email;

    /**
     * @Type("string")
     */
    public $phone;

    /**
     * @Type("MssPhp\Schema\Response\Address")
     */
    public $address;
}
