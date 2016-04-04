<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Credentials {
    /**
     * @Type("string")
     */
    public $user;

    /**
     * @Type("string")
     */
    public $password;

    /**
     * @Type("string")
     */
    public $source;
}
