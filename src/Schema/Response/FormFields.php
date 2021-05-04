<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class FormFields
{
    /**
     * @Inline;
     * @Type("array<MssPhp\Schema\Response\Field>")
     * @XmlList(inline = true, entry="field")
     */
    public $field;
}
