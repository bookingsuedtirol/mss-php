<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlList;

class Hotel
{
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
     * @Type("MssPhp\Schema\Response\HotelLocation")
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
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $logo;

    /**
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $pictures;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $available_from;

    /**
     * * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $prices_changed_at;

    /**
     * * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $availability_changed_at;

    /**
     * @Type("string")
     */
    public $bookable_until;

    /**
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $gallery;

    /**
     * @Type("array<MssPhp\Schema\Response\Feature>")
     * @XmlList(entry = "feature")
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
    public $board;

    /**
     * @Type("integer")
     */
    public $board_tq;

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
    public $adult_age_min;

    /**
     * @Type("integer")
     */
    public $child_age_max;

    /**
     * @Type("integer")
     */
    public $adult_cnt_max;

    /**
     * @Type("integer")
     */
    public $child_cnt_max;

    /**
     * @Type("array<MssPhp\Schema\Response\Rating>")
     * @XmlList(entry = "rating")
     */
    public $ratings;

    /**
     * @Type("MssPhp\Schema\Response\SourceData")
     */
    public $source_data;

    /**
     * @Type("MssPhp\Schema\Response\CouponService")
     */
    public $coupon;
}
