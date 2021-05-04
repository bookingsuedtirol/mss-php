<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Coupon
{
    /**
     * @Type("string")
     */
    public $coupon_type;

    /**
     * @Type("string")
     */
    public $coupon_code;

    /**
     * @Type("string")
     */
    public $coupon_status;

    /**
     * @Type("integer")
     */
    public $coupon_valid;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    public $coupon_valid_from;

    /**
     * @Type("DateTime<'Y-m-d\TH:i:sO'>")
     */
    public $coupon_valid_to;

    /**
     * @Type("string")
     */
    public $coupon_title;

    /**
     * @Type("integer")
     */
    public $coupon_percent;

    /**
     * @Type("double")
     */
    public $coupon_amount;
}
