<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Matching
{
    /**
     * @Type("integer")
     */
    public $id_bok;

    /**
     * @Type("integer")
     */
    public $id_exp;

    /**
     * @Type("integer")
     */
    public $id_htl;

    /**
     * @Type("integer")
     */
    public $id_hrs;
}
