<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Rateplan
{
    /**
     * @Type("string")
     */
    public $code;

    /**
     * @Type("string")
     */
    public $source;
}
