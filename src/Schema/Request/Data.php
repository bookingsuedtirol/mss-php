<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Data
{
    /**
     * @Type("MssPhp\Schema\Request\Guest")
     */
    public $guest;

    /**
     * @Type("MssPhp\Schema\Request\Company")
     */
    public $company;

    /**
     * @Type("MssPhp\Schema\Request\Payment")
     */
    public $payment;

    /**
     * @Type("string")
     */
    public $note;

    /**
     * @Type("MssPhp\Schema\Request\Details")
     */
    public $details;

    /**
     * @Type("MssPhp\Schema\Request\Form")
     */
    public $form;

    /**
     * @Type("MssPhp\Schema\Request\Tracking")
     */
    public $tracking;

    /**
     * @Type("integer")
     */
    public $insurance;
}
