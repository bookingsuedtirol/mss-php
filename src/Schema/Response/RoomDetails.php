<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class RoomDetails
{
    /**
     * @Inline
     * @Type("array<MssPhp\Schema\Response\RoomDetail>")
     * @XmlList(inline = true, entry = "room_detail")
     */
    public $room_detail;
}
