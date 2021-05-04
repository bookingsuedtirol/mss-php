<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Feature
{
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $title;
}
