<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class LocationName
{
    /**
     * @Type("string")
     */
    public $name_city;

    /**
     * @Type("string")
     */
    public $name_community;

    /**
     * @Type("string")
     */
    public $name_region;

    /**
     * @Type("string")
     */
    public $name_area;
}
