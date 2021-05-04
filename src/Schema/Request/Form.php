<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Form
{
    /**
     * @Type("string")
     */
    public $url_success;

    /**
     * @Type("string")
     */
    public $url_failure;
}
