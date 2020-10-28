<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Details {
    /**
     * @Type("array<MssPhp\Schema\Request\ExtraPrice>")
     * @XmlList(inline = true, entry = "extra_price")
     */
    public $extra_price;

    /**
     * @Type("MssPhp\Schema\Request\Coupon")
     */
    public $coupon;
}
