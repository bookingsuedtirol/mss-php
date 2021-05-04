<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

class Contact
{
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
     * @Type("string")
     */
    public $fax;

    /**
     * @Type("string")
     */
    public $web;
}
