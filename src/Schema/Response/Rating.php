<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Rating {
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $provider;

    /**
     * @Type("double")
     */
    public $value;

    /**
     * @Type("integer")
     */
    public $count;

    /**
     * @Type("DateTime<'Y-m-d'>")
     */
    public $date;
}
