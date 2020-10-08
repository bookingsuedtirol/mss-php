<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class SeoText {
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $typ;
    
    /**
     * @Type("integer")
     */
    public $external_id;
    
    /**
     * @Type("string")
     */
    public $headline_deu;

    /**
     * @Type("string")
     */
    public $description_deu;

    /**
     * @Type("string")
     */
    public $video_deu;

    /**
     * @Type("string")
     */
    public $url_deu;

    /**
     * @Type("string")
     */
    public $pagetitle_deu;

    /**
     * @Type("string")
     */
    public $metadesc_deu;
    
    /**
     * @Type("string")
     */
    public $headline_ita;

    /**
     * @Type("string")
     */
    public $description_ita;

    /**
     * @Type("string")
     */
    public $video_ita;

    /**
     * @Type("string")
     */
    public $url_ita;

    /**
     * @Type("string")
     */
    public $pagetitle_ita;

    /**
     * @Type("string")
     */
    public $metadesc_ita;
    
    /**
     * @Type("string")
     */
    public $headline_eng;

    /**
     * @Type("string")
     */
    public $description_eng;

    /**
     * @Type("string")
     */
    public $video_eng;

    /**
     * @Type("string")
     */
    public $url_eng;

    /**
     * @Type("string")
     */
    public $pagetitle_eng;

    /**
     * @Type("string")
     */
    public $metadesc_eng;
    
    /**
     * @Type("string")
     */
    public $headline_spa;

    /**
     * @Type("string")
     */
    public $description_spa;

    /**
     * @Type("string")
     */
    public $video_spa;

    /**
     * @Type("string")
     */
    public $url_spa;

    /**
     * @Type("string")
     */
    public $pagetitle_spa;

    /**
     * @Type("string")
     */
    public $metadesc_spa;
    
    /**
     * @Type("string")
     */
    public $headline_fra;

    /**
     * @Type("string")
     */
    public $description_fra;

    /**
     * @Type("string")
     */
    public $video_fra;

    /**
     * @Type("string")
     */
    public $url_fra;

    /**
     * @Type("string")
     */
    public $pagetitle_fra;

    /**
     * @Type("string")
     */
    public $metadesc_fra;
    
    /**
     * @Type("string")
     */
    public $headline_rus;

    /**
     * @Type("string")
     */
    public $description_rus;

    /**
     * @Type("string")
     */
    public $video_rus;

    /**
     * @Type("string")
     */
    public $url_rus;

    /**
     * @Type("string")
     */
    public $pagetitle_rus;

    /**
     * @Type("string")
     */
    public $metadesc_rus;
    
    /**
     * @Type("string")
     */
    public $headline_dan;

    /**
     * @Type("string")
     */
    public $description_dan;

    /**
     * @Type("string")
     */
    public $video_dan;

    /**
     * @Type("string")
     */
    public $url_dan;

    /**
     * @Type("string")
     */
    public $pagetitle_dan;

    /**
     * @Type("string")
     */
    public $metadesc_dan;

    /**
     * @Type("MssPhp\Schema\Response\Pictures")
     */
    public $pictures;
}
