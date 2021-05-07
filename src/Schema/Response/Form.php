<?php

namespace MssPhp\Schema\Response;

use MssPhp\Utils;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\PostDeserialize;

class Form
{
    /**
     * @Type("string")
     */
    public $form_url;

    /**
     * @Type("integer")
     */
    public $form_iframe;

    /**
     * @Type("array<MssPhp\Schema\Response\FormMethods>")
     * @XmlList(inline = true, entry = "form_methods")
     */
    public $form_methods;

    /**
     * @Type("array<MssPhp\Schema\Response\Field>")
     * @XmlList(entry = "field")
     */
    public $form_fields;

    /**
     * @PostDeserialize
     */
    public function postDeserialize()
    {
        Utils::setEmptyArraysToNull(["form_fields"], $this);
    }
}
