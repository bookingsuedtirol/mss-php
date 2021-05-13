<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;

class Picture
{
    /**
     * @Type("string")
     */
    public $url;

    /**
     * @Type("integer")
     */
    public $time;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $copyright;

    /**
     * @Type("integer")
     */
    public $width;

    /**
     * @Type("integer")
     */
    public $height;
}
