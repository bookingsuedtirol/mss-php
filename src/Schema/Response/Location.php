<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Location {
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("integer")
     */
    public $root_id;

    /**
     * @Type("integer")
     */
    public $parent_id;

    /**
     * @Type("string")
     */
    public $virtual_id;

    /**
     * @Type("string")
     */
    public $typ;

    /**
     * @Type("integer")
     */
    public $visible;

    /**
     * @Type("double")
     */
    public $latitude;

    /**
     * @Type("double")
     */
    public $longitude;

    /**
     * @Type("string")
     */
    public $name_deu;

    /**
     * @Type("string")
     */
    public $name_ita;

    /**
     * @Type("string")
     */
    public $name_spa;

    /**
     * @Type("string")
     */
    public $name_fra;

    /**
     * @Type("string")
     */
    public $name_rus;

    /**
     * @Type("string")
     */
    public $name_dan;

    /**
     * @Type("string")
     */
    public $name_eng;
}