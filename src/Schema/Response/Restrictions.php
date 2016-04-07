<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Restrictions {
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Restriction>")
     * @XmlList(inline = true, entry = "restriction")
     */
    public $restriction;
}
