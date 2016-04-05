<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Result {
    /**
     * @Type("array<MssPhp\Schema\Response\Hotel>")
     * @XmlList(inline = true, entry = "hotel")
     */
    public $hotel;

    /**
     * @Type("array<MssPhp\Schema\Response\Special>")
     * @XmlList(inline = true, entry = "special")
     */
    public $special;
}
