<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Error {
    /**
     * @Type("integer")
     */
    public $code;

    /**
     * @Type("string")
     */
    public $message;
}
