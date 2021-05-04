<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class SearchDistance
{
    /**
     * @Type("double")
     */
    public $latitude;

    /**
     * @Type("double")
     */
    public $longitude;

    /**
     * @Type("integer")
     */
    public $radius;
}
