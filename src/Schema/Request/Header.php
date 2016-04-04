<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Header {
    /**
     * @Type("MssPhp\Schema\Request\Credentials")
     */
    public $credentials;

    /**
     * @Type("string")
     */
    public $method = 'getHotelList';

    /**
     * @Type("MssPhp\Schema\Request\Paging")
     */
    public $paging;
}
