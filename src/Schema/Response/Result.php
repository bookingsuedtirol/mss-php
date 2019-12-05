<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Result {
    /**
     * @Type("array<MssPhp\Schema\Response\Hotel>")
     * @XmlList(inline = true, entry = "hotel")
     */
    public $hotel;

    /**
     * @Type("array<MssPhp\Schema\Response\Special>")
     * @XmlList(inline = true, entry = "special")
     */
    public $special;

    /**
     * @Type("MssPhp\Schema\Response\Booking")
     */
    public $booking;

    /**
     * @Type("MssPhp\Schema\Response\Booking")
     */
    public $inquiry;

    /**
     * @Type("MssPhp\Schema\Response\Form")
     */
    public $form;

    /**
     * @Type("MssPhp\Schema\Response\Tracking")
     */
    public $tracking;

    /**
     * @Type("array<MssPhp\Schema\Response\Source>")
     * @XmlList(inline = true, entry = "source")
     */
    public $source;

     /**
     * @Type("array<MssPhp\Schema\Response\Location>")
     * @XmlList(inline = true, entry = "location")
     */
    public $location;
}
