<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Special
{
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
     * @Type("integer")
     */
    public $pers_age_min;

    /**
     * @Type("integer")
     */
    public $child_age_min;

    /**
     * @Type("integer")
     */
    public $child_age_max;

    /**
     * @Type("integer")
     */
    public $adult_age_min;

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
     * @Type("array<MssPhp\Schema\Response\Hotel>")
     * @XmlList(entry = "hotel")
     */
    public $hotels;

    /**
     * @Type("array<MssPhp\Schema\Response\Season>")
     * @XmlList(entry = "season")
     */
    public $seasons;

    /**
     * @Type("array<integer>")
     * @XmlList(entry = "service")
     */
    public $services;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(entry = "price")
     */
    public $inclusive;

    /**
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $pictures;

    /**
     * @Type("array<MssPhp\Schema\Response\Theme>")
     * @XmlList(entry = "theme")
     */
    public $themes;
}
