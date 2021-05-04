<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Paging
{
    /**
     * @Type("integer")
     */
    public $count = 0;

    /**
     * @Type("integer")
     */
    public $total = 0;
}
