<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Request {
    /**
     * @Type("MssPhp\Schema\Request\Search")
     */
    public $search;

    /**
     * @Type("MssPhp\Schema\Request\Options")
     */
    public $options;

    /**
     * @Type("MssPhp\Schema\Request\Order")
     */
    public $order;

    /**
     * @Type("MssPhp\Schema\Request\Data")
     */
    public $data;

    /**
     * @Type("MssPhp\Schema\Request\Logging")
     */
    public $logging;
}
