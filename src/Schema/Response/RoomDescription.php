<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class RoomDescription {
    /**
    * @Type("array<MssPhp\Schema\Response\Room>")
    * @XmlList(inline = true, entry="room")
     */
    public $room;
}
