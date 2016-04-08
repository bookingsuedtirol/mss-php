<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Form {
    /**
     * @Type("string")
     */
    public $form_url;

    /**
     * @Type("MssPhp\Schema\Response\FormFields")
     */
    public $form_fields;
}