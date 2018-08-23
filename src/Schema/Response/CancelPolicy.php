<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;

class CancelPolicy {
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
     * @Type("MssPhp\Schema\Response\Penalties")
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
        $this->description = nl2br($description);
    }

    /**
     * @Type("string")
     */
    public $priority;
}
