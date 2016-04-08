<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Special {
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $status;

    /**
     * @Type("integer")
     */
    public $valid;

    /**
     * @Type("integer")
     */
    public $offer_typ;

    /**
     * @Type("integer")
     */
    public $special_typ;

    /**
     * @Type("integer")
     */
    public $special_premium;

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
     * @Type("DateTime<'Y-m-d'>")
     */
    public $valid_start;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $valid_end;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\Hotels")
     */
    public $hotels;

    /**
     * @Type("MssPhp\Schema\Response\Seasons")
     */
    public $seasons;

    /**
     * @Type("MssPhp\Schema\Response\Services")
     */
    public $services;

    /**
     * @Type("MssPhp\Schema\Response\Inclusive")
     */
    public $inclusive;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("MssPhp\Schema\Response\Themes")
     */
    public $themes;
}
