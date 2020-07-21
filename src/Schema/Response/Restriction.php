<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Restriction {
    /**
     * @Type("integer")
     */
    public $obj_id;

    /**
     * @Type("integer")
     */
    public $obj_sub_id;

    /**
     * @Type("integer")
     */
    public $obj_sub_only;

    /**
     * @Type("integer")
     */
    public $service;

    /**
     * @Type("integer")
     */
    public $arrival;

    /**
     * @Type("integer")
     */
    public $departure;

    /**
     * @Type("integer")
     */
    public $min;

    /**
     * @Type("integer")
     */
    public $min_arrival;

    /**
     * @Type("integer")
     */
    public $max;

    /**
     * @Type("integer")
     */
    public $max_arrival;

    /**
     * @Type("integer")
     */
    public $close;

    /**
     * @Type("integer")
     */
    public $children_min;

    /**
     * @Type("integer")
     */
    public $children_max;

    /**
     * @Type("integer")
     */
    public $holes;

    /**
     * @Type("integer")
     */
    public $days_arrival_min;

    /**
     * @Type("integer")
     */
    public $days_arrival_max;

    /**
     * @Type("integer")
     */
    public $pers_age_min;
}
