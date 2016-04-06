<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Price {
    /**
     * @Type("string")
     */
    public $price_id;

    /**
     * @Type("integer")
     */
    public $price_typ;

    /**
     * @Type("integer")
     */
    public $supplement;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $description;

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
     * @Type("integer")
     */
    public $unit;

    /**
    * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;
}
