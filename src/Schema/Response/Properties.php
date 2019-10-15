<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Properties {
    /**
     * @Type("integer")
     */
    public $area;

    /**
     * @Type("integer")
     */
    public $bed_rooms;

    /**
     * @Type("integer")
     */
    public $living_rooms;

    /**
     * @Type("integer")
     */
    public $dining_rooms;

    /**
     * @Type("integer")
     */
    public $bath_rooms;

    /**
     * @Type("integer")
     */
    public $wc_rooms;

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

    /**
     * @Type("integer")
     */
    public $mfp;
}
