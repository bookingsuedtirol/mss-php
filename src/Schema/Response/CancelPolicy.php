<?php

namespace MssPhp\Schema\Response;

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
     * @Type("string")
     */
    public $description;
}
