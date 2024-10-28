<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\PostDeserialize;

class Picture
{
    /**
     * @Type("string")
     */
    public $url;

    /**
     * @Type("integer")
     */
    public $time;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $copyright;

    /**
     * @Type("integer")
     */
    public $width;

    /**
     * @Type("integer")
     */
    public $height;

    /**
     * @PostDeserialize
     */
    public function postDeserialize()
    {
        $this->url = str_replace(
            "https://easychannel.it/",
            "https://cdn.easychannel.it/",
            $this->url
        );
    }
}
