<?php

use DWA\Form;
use P2\TextBody;

#TODO - REMOVE DUMP METHOD BEFORE RELEASE

function dump($mixed = null)
{
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

$form = new Form($_POST);

$haveResults = false;
$inputText = $form->get('inputTextArea', '');
$numberOfWords = $form->get('numberOfWords');
$finalText = '';

$textBody = new TextBody($inputText, $form->has('alphabeticalCheck'));

dump($textBody);