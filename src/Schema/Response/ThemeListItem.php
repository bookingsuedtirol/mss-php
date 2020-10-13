<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class ThemeListItem {
    /**
     * @Type("integer")
     */
    public $id;

    /**
     * @Type("integer")
     */
    public $filter_id;

    /**
     * @Type("integer")
     */
    public $virtual_id;

    /**
     * @Type("integer")
     */
    public $sequence;

    /**
     * @Type("string")
     */
    public $title_deu;

    /**
     * @Type("string")
     */
    public $title_ita;

    /**
     * @Type("string")
     */
    public $title_eng;

    /**
     * @Type("string")
     */
    public $title_spa;

    /**
     * @Type("string")
     */
    public $title_fra;

    /**
     * @Type("string")
     */
    public $title_rus;

    /**
     * @Type("string")
     */
    public $title_dan;
}
