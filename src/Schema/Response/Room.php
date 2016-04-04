<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Room {
    /**
     * @Type("string")
     */
    public $room_id;

    /**
     * @Type("integer")
     */
    public $room_type;

    /**
     * @Type("integer")
     */
    public $room_free;

    /**
     * @Type("integer")
     */
    public $features;

    /**
     * @Type("MssPhp\Schema\Response\FeaturesView")
     */
    public $features_view;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;

    /**
     * @Type("MssPhp\Schema\Response\Properties")
     */
    public $properties;
}
