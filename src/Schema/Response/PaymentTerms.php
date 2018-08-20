<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class PaymentTerms {
    /**
    * @Inline
    * @Type("array<MssPhp\Schema\Response\PaymentTerm>")
    * @XmlList(inline = true, entry = "payment_term")
     */
    public $payment_term;
}
