<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Field
{
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $value;
}
