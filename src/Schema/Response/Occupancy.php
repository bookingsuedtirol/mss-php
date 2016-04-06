<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Occupancy {
    /**
     * @Type("integer")
     */
    public $min;

    /**
     * @Type("integer")
     */
    public $max;

    /**
     * @Type("integer")
     */
    public $std;
}
