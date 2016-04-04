<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("root")
 */
class Root {
    /**
     * @Type("MssPhp\Schema\Response\Header")
     */
    public $header;

    /**
     * @Type("MssPhp\Schema\Response\Result")
     */
    public $result;
}
