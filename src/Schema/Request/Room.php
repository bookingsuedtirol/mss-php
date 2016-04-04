<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;

class Room {
    /**
     * @Type("integer")
     */
    public $room_seq;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry="person")
     */
    public $person;
}
