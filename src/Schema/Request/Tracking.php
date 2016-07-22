<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Tracking {
    /**
     * @Type("string")
     */
    public $partner;

    /**
     * @Type("string")
     */
    public $media;

    /**
     * @Type("string")
     */
    public $campain;
}
