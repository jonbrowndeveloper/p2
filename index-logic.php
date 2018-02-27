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

$importanceArray = [];

// going through each unique word and counting how many times it occurs in the main word set

foreach ($textBody->uniqueWords as $words => $uniqueWord) {
    foreach ($textBody->textArray as $inputWords => $inputWord) {
        if ($inputWord == $uniqueWord) {
            if (!isset($importanceArray[0])) {
                $importanceArray[0] = [];
            }

            if (!isset($importanceArray[$words]['word'])) {
                $importanceArray[$words]['word'] = $uniqueWord;
            }

            if (!isset($importanceArray[$words]['number'])) {
                $importanceArray[$words]['number'] = 1;
            } else {
                $importanceArray[$words]['number']++;
            }
        }
    }
}

// custom usort function to compare the 'number' int within the importance array

usort($importanceArray, "numberCompare");

function numberCompare($first, $second)
{
    if ($first['number'] == $second['number']) {
        return 0;
    }

    return ($first['number'] < $second['number'] ? 1 : -1);
}

// set number of important words to user defined number

if (count($importanceArray) > $numberOfWords) {
    $importanceArray = array_slice($importanceArray, 0, $numberOfWords);
}

// create final array based off of the number of words chosen by the user and the importance of each word

$uniqueArrayFinal = [];

$fontModifier = 1;

if (count($textBody->textArray) < 50) {
    $fontModifier = 4;
} else if (count($textBody->textArray) < 200) {
    $fontModifier = 3;
} else if (count($textBody->textArray) < 500) {
    $fontModifier = 2;
}

foreach ($textBody->uniqueWords as $uniqueWordsFE => $uniqueWordFE) {
    foreach ($importanceArray as $importantWordsFE => $importantWordFE) {
        if ($uniqueWordFE == $importanceArray[$importantWordsFE]['word']) {
            if (!isset($uniqueArrayFinal[$importantWordsFE]['word'])) {
                $uniqueArrayFinal[$importantWordsFE]['word'] = $importanceArray[$importantWordsFE]['word'];
            }
            if (!isset($uniqueArrayFinal[$importantWordsFE]['number'])) {
                $uniqueArrayFinal[$importantWordsFE]['fontSize'] = (($importanceArray[$importantWordsFE]['number'] * $fontModifier) + 12);
            }
        }
    }
}