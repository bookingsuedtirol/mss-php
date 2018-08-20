<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

class Hotel {
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $id_lts;

    /**
     * @Type("integer")
     */
    public $bookable;

    /**
     * @Type("string")
     * @AccessType("public_method")
     */
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = trim($name);
    }

    /**
     * @Type("integer")
     */
    public $type;

    /**
     * @Type("double")
     */
    public $stars;

    /**
     * @Type("MssPhp\Schema\Response\Address")
     */
    public $address;

    /**
     * @Type("integer")
     */
    public $themes;

    /**
     * @Type("integer")
     */
    public $features;

    /**
     * @Type("MssPhp\Schema\Response\Location")
     */
    public $location;

    /**
     * @Type("MssPhp\Schema\Response\LocationName")
     */
    public $location_name;

    /**
     * @Type("MssPhp\Schema\Response\Geolocation")
     */
    public $geolocation;

    /**
     * @Type("MssPhp\Schema\Response\Contact")
     */
    public $contact;

    /**
     * @Type("string")
     */
    public $headline;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\HotelPayment")
     */
    public $hotel_payment;

    /**
     * @Type("MssPhp\Schema\Response\Matching")
     */
    public $matching;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $logo;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $gallery;

    /**
     * @Type("MssPhp\Schema\Response\FeaturesView")
     */
    public $features_view;

    /**
     * @Type("MssPhp\Schema\Response\Channel")
     */
    public $channel;

    /**
     * @Type("MssPhp\Schema\Response\LtsData")
     */
    public $lts_data;

    /**
     * @Type("MssPhp\Schema\Response\Pos")
     */
    public $pos;

    /**
     * @Type("integer")
     */
    public $price_engine;

    /**
     * @Type("string")
     */
    public $language;

    /**
     * @Type("MssPhp\Schema\Response\CheckInOut")
     */
    public $check_in;

    /**
     * @Type("MssPhp\Schema\Response\CheckInOut")
     */
    public $check_out;

    /**
     * @Type("integer")
     */
    public $price_from;

    /**
     * @Type("integer")
     */
    public $pers_age_min;

    /**
     * @Type("MssPhp\Schema\Response\Ratings")
     */
    public $ratings;
}
