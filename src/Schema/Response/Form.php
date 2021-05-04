<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

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
}
