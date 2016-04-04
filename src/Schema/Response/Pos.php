<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Pos {
    /**
     * @Type("array<string>")
     * @XmlList(inline = true, entry="id_pos")
     */
    public $id_pos;
}
