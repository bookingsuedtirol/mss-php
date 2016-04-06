<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Inline;

class OfferDescription {
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Offer>")
     * @XmlList(inline = true, entry="offer")
     */
    public $offer;
}
