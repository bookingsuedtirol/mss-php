<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class SearchSpecial {
    /**
    * @Type("array<integer>")
    * @XmlList(inline = true, entry="offer_id")
     */
    public $offer_id;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_from;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date_to;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="theme")
     */
    public $theme;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="poi_id")
     */
    public $poi_id;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="poi_cat")
     */
    public $poi_cat;

    /**
     * @Type("MssPhp\Schema\Request\Validity")
     */
    public $validity;

    /**
     * @Type("integer")
     */
    public $typ;

    /**
     * @Type("integer")
     */
    public $premium;
}
