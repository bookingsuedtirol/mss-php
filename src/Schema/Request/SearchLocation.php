<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class SearchLocation {
    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="location")
     */
    public $location;

    /**
    * @Type("array<string>")
    * @XmlList(inline = true, entry="location_lts")
     */
    public $location_lts;
}
