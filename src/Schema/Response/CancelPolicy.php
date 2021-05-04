<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class CancelPolicy
{
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("integer")
     */
    public $refundable;

    /**
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $refundable_until;

    /**
     * @Type("array<MssPhp\Schema\Response\Penalty>")
     * @XmlList(entry = "penalty")
     */
    public $penalties;

    /**
     * @AccessType("public_method")
     * @Type("string")
     */
    public $description;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = nl2br(trim($description));
    }

    /**
     * @Type("string")
     */
    public $priority;
}
