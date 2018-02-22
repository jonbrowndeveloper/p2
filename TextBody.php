<?php

namespace P2;

 class TextBody
{
    private $textArray;
    private $isAphabetical = false;

    ## Form Validation

    public function __construct($textInput, $alphabetical)
    {
        $this->textArray = str_split($textInput);

        $this->isAphabetical = $alphabetical;
    }

}
