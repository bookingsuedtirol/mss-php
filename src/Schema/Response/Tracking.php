<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Tracking {
    /**
     * @Type("MssPhp\Schema\Response\Pixel")
     */
    public $pixel;
}
