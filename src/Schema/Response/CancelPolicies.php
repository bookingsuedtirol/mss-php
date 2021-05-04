<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class CancelPolicies
{
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\CancelPolicy>")
     * @XmlList(inline = true, entry = "cancel_policy")
     */
    public $cancel_policy;
}
