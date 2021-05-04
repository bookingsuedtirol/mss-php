<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Order
{
    /**
     * @Type("string")
     */
    public $field;

    /**
     * @Type("string")
     */
    public $dir;
}
