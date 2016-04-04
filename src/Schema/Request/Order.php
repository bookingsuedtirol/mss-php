<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Order {
    /**
     * @Type("string")
     */
    public $field = 'name';

    /**
     * @Type("string")
     */
    public $dir = 'asc';
}
