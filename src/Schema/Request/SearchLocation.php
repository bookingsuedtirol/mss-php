<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class SearchLocation {
    /**
     * @Type("array<string>")
     * @XmlList(inline = true, entry="location")
     */
    public $location;

    /**
     * @Type("string")
     */
    public $location_lts;
}
