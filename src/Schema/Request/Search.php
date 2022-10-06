<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Search
{
    /**
     * @Type("string")
     */
    public $lang = "de";

    /**
     * @Type("string")
     */
    public $result_id;

    /**
     * @Type("string")
     */
    public $agent;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry = "id")
     */
    public $id;

    /**
     * @Type("MssPhp\Schema\Request\SearchHotel")
     */
    public $search_hotel;

    /**
     * @Type("MssPhp\Schema\Request\SearchLocation")
     */
    public $search_location;

    /**
     * @Type("MssPhp\Schema\Request\SearchDistance")
     */
    public $search_distance;

    /**
     * @Type("MssPhp\Schema\Request\SearchOffer")
     */
    public $search_offer;

    /**
     * @Type("MssPhp\Schema\Request\SearchLts")
     */
    public $search_lts;

    /**
     * @Type("MssPhp\Schema\Request\SearchSpecial")
     */
    public $search_special;

    /**
     * @Type("MssPhp\Schema\Request\SearchAvailability")
     */
    public $search_availability;

    /**
     * @Type("MssPhp\Schema\Request\SearchPriceList")
     */
    public $search_pricelist;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry = "in")
     */
    public $in;

    /**
     * @Type("string")
     */
    public $id_ofchannel;

    /**
     * @Type("string")
     */
    public $transaction_id;

    /**
     * @Type("string")
     */
    public $booking_id;

    /**
     * @Type("string")
     */
    public $guest_email;

    /**
     * @Type("integer")
     */
    public $root_id;

    /**
     * @Type("integer")
     */
    public $external_id;

    /**
     * @Type("string")
     */
    public $typ;

    /**
     * @Type("integer")
     */
    public $location_details;

    /**
     * @Type("string")
     */
    public $coupon_code;

    /**
     * @Type("string")
     */
    public $coupon_type;

    /**
     * @Type("double")
     */
    public $total_price;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $arrival;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $departure;
}
