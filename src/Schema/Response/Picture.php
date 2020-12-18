<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;

class Picture {
    /**
     * @AccessType("public_method")
     * @Type("string")
     */
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = str_replace('https://www.easymailing.eu', 'https://www.bookingsuedtirol.com', $url);
    }

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
}
