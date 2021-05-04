<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Penalties
{
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\Penalty>")
     * @XmlList(inline = true, entry = "penalty")
     */
    public $penalty;
}
