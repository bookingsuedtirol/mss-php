<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Picture {
    /**
     * @Type("string")
     */
    public $url;

    /**
     * @Type("integer")
     */
    public $time;
}
