<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Search {
    /**
     * @Type("string")
     */
    public $lang = 'de';

    /**
     * @Type("array<string>")
     * @XmlList(inline = true, entry="id")
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
     * @Type("array<string>")
     * @XmlList(inline = true, entry="in")
     */
    public $in;

    /**
     * @Type("string")
     */
    public $id_ofchannel;
}
