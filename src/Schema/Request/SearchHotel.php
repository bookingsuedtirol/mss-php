<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class SearchHotel {
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("integer")
     */
    public $type;

    /**
     * @Type("Stars")
     */
    public $stars;

    /**
     * @Type("integer")
     */
    public $feature;

    /**
     * @Type("integer")
     */
    public $theme;
}
