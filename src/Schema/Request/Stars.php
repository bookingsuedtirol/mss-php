<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Stars
{
    /**
     * @Type("double")
     */
    public $min;

    /**
     * @Type("double")
     */
    public $max;
}
