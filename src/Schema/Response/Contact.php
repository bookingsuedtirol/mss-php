<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Contact {
    /**
     * @Type("string")
     */
    public $email;

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
