<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class PriceList {
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $offer_typ;

    /**
     * @Type("integer")
     */
    public $offer_base_id;

    /**
     * @Type("integer")
     */
    public $special_typ;

    /**
     * @Type("integer")
     */
    public $prl_mode;

    /**
     * @Type("integer")
     */
    public $prl_unit;

    /**
     * @Type("integer")
     */
    public $days_arrival;

    /**
     * @Type("integer")
     */
    public $days_departure;

    /**
     * @Type("integer")
     */
    public $days_dur_min;

    /**
     * @Type("integer")
     */
    public $days_dur_max;

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
    public $children_min;

    /**
     * @Type("integer")
     */
    public $children_max;

    /**
     * @Type("integer")
     */
    public $adults_min;

    /**
     * @Type("integer")
     */
    public $adults_max;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("MssPhp\Schema\Response\Season")
     */
    public $season;
}
