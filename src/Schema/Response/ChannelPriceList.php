<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class ChannelPriceList
{
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(entry = "price")
     */
    public $inclusive;
}
