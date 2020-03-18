<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Insurance {
    /**
     * @Type("integer")
     */
    public $insurance_type;

    /**
     * @Type("string")
     */
    public $insurance_url;
}
