<?php

namespace MssPhp\Schema\Response;

use MssPhp\Utils;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\PostDeserialize;

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

    /**
     * @PostDeserialize
     */
    public function postDeserialize()
    {
        Utils::setEmptyArraysToNull(["inclusive"], $this);
    }
}
