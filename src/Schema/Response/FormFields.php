<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Form {
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $value;
}
