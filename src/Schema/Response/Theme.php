<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Theme
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
