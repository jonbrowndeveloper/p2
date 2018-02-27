<?php

require 'TextBody.php';
require 'Form.php';
require 'ValidationForm.php';

use JB\ValidationForm;
use JB\TextBody;

#TODO - REMOVE DUMP METHOD BEFORE RELEASE

function dump($mixed = null)
{
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

$form = new ValidationForm($_POST);

$haveResults = false;
$inputText = $form->get('inputTextArea', '');
$alphabetical = $form->has('alphabeticalCheck');

# for display use

$numberOfWords = $form->get('numberOfWords');

# Form Validation

if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'inputTextArea' => 'required|alphaNumeric|under500',
        ]
    );

    if (!$form->hasErrors) {
        $haveResults = true;
    }
}

# Text Body logic

$textBody = new TextBody($inputText, $alphabetical);

$importanceArray

foreach ($textBody->uniqueWords as $words => $uniqueWord) {
    foreach ($inputText as $inputWords => $inputWord) {
        if ()
    }
}
