<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class ChannelPriceList {
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("MssPhp\Schema\Response\Inclusive")
     */
    public $inclusive;
}
