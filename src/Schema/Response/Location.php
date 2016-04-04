<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Location {
    /**
     * @Type("integer")
     */
    public $id_city;

    /**
     * @Type("integer")
     */
    public $id_community;

    /**
     * @Type("integer")
     */
    public $id_region;

    /**
     * @Type("integer")
     */
    public $id_area;
}
