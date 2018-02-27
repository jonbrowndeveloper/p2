<?php

namespace JB;

use DWA\Form;

class ValidationForm extends Form
{
    /**
     * Returns boolean if given value is longer than 500 words
     * @param $value
     * @return bool
     */

    public $numberOfWords;

    protected function under500($value)
    {
        $textArray = explode(" ", $value);

        $this->numberOfWords = count($textArray);

        return $this->numberOfWords < 500 ? true : false;
    }

}
