<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class SourceData {
    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("string")
     */
    public $headline;

    /**
     * @Type("string")
     */
    public $url;
}
