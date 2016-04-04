<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class FeaturesView {
    /**
     * @Type("array<MssPhp\Schema\Response\Feature>")
     * @XmlList(inline = true, entry="feature")
     */
    public $feature;
}
