<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Offer {
    /**
     * @Type("string")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $offer_gid;

    /**
     * @Type("integer")
     */
    public $offer_typ;

    /**
     * @Type("integer")
     */
    public $offer_show;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("MssPhp\Schema\Response\Themes")
     */
    public $themes;
}
