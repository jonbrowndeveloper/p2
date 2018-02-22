<?php

require 'Form.php';
require 'TextBody.php';

use DWA\Form;
use P2\TextBody;

$haveResults = false;
$text = isset($_POST['inputTextArea']) ? $_POST['inputTextArea'] : '';
$alphabetical = isset($_POST['optionRadios']) ? true : false;

echo $text;
echo $alphabetical;