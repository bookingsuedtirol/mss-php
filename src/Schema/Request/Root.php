<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("root")
 */
class Root {
    /**
     * @Type("string")
     */
    public $version = '1.0';

    /**
     * @Type("MssPhp\Schema\Request\Header")
     */
    public $header;

    /**
     * @Type("MssPhp\Schema\Request\Request")
     */
    public $request;
}
