<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

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
     * @AccessType("public_method")
     */
    public $email;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    /**
     * @Type("string")
     */
    public $phone;

    /**
     * @Type("MssPhp\Schema\Response\Address")
     */
    public $address;
}
