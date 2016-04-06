<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Header {
    /**
     * @Type("MssPhp\Schema\Response\Error")
     */
    public $error;

    /**
     * @Type("string")
     */
    public $result_id;

    /**
     * @Type("string")
     */
    public $source;

    /**
     * @Type("MssPhp\Schema\Response\Paging")
     */
    public $paging;

    /**
     * @Type("string")
     */
    public $time;
}
