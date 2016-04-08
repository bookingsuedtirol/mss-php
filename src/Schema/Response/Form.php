<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Form {
    /**
     * @Type("string")
     */
    public $form_url;

    /**
     * @Type(array<MssPhp\Schema\Response\FormFields>)
     * @XmlList(inline = true, entry = "form_fields")
     */
    public $form_fields;
}
