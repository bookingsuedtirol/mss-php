<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Paging
{
    /**
     * @Type("integer")
     */
    public $start = 0;

    /**
     * @Type("integer")
     */
    public $limit = 0;
}
