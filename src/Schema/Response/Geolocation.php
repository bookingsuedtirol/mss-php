<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Geolocation {
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
    public $altitude;

    /**
     * @Type("integer")
     */
    public $distance;
}
