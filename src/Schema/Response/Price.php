<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Price
{
    /**
     * @Type("integer")
     */
    public $price_id;

    /**
     * @Type("integer")
     */
    public $price_typ;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $price_title;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("string")
     */
    public $price_description;

    /**
     * @Type("integer")
     */
    public $supplement;

    /**
     * @Type("integer")
     */
    public $price_supplement;

    /**
     * @Type("double")
     */
    public $price_ws;

    /**
     * @Type("double")
     */
    public $price_bb;

    /**
     * @Type("double")
     */
    public $price_hb;

    /**
     * @Type("double")
     */
    public $price_fb;

    /**
     * @Type("double")
     */
    public $price_ai;

    /**
     * @Type("double")
     */
    public $price_amount;

    /**
     * @Type("double")
     */
    public $price_value;

    /**
     * @Type("double")
     */
    public $price_total;

    /**
     * @Type("integer")
     */
    public $unit;

    /**
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $pictures;
}
