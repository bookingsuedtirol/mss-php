<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Coupon {
    /**
     * @Type("string")
     */
    public $coupon_code;

    /**
     * @Type("string")
     */
    public $coupon_type;
}
