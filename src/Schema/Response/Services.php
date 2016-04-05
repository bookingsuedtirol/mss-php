<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Services {
    /**
    * @Type("array<MssPhp\Schema\Response\Service>")
    * @XmlList(inline = true, entry = "service")
     */
    public $service;
}
