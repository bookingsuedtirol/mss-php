<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Themes {
    /**
     * @Inline;
     * @Type("array<MssPhp\Schema\Response\Theme>")
     * @XmlList(inline = true, entry="theme")
     */
    public $theme;
}
