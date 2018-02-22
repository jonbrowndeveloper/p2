<?php

namespace P2;

 class TextBody
{
    private $textArray;
    private $isAphabetical = false;

    ## Form Validation

    public function __construct($textInput, $alphabetical)
    {
        $this->textArray = explode(" ", $textInput);

        $this->isAphabetical = $alphabetical;
    }

}
