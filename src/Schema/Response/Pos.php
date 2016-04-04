<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Pos {
    /**
     * @Type("array<string>")
     * @XmlList(inline = true, entry="id_pos")
     */
    public $id_pos;
}
