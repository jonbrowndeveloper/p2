<?php
require 'form.php';
require 'TextBody.php';
require 'index-logic.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>Word Perspective</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>


</head>

<body>

<div class='container-fluid'>

    <h1 class='text-center'>Word Perspective!</h1>

    <h4 class='text-center'>show the most important words</h4>

</div>

<div class='container'>
    <div class='row'>
        <div class='col'>

            <form method='POST' action='index.php'>
                <div class="form-group">
                    <label for="inputTextArea">Input</label>
                    <textarea class="form-control" name='inputTextArea' id="inputTextArea" rows="16"><?php echo $inputText ?></textarea>
                    <p id="passwordHelpBlock" class="form-text text-muted">
                        Paste in any text that contains letters and numbers that is under 250 words.
                    </p>
                </div>
                <label>
                    <input type='checkbox' name='alphabeticalCheck' value='1' <?= ($alphabetical) ? 'checked' : '' ?>>
                    Alphabetical
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberOfWords" id="numberOfWords" value="10" checked>
                    <label class="form-check-label" for="optionRadios1">
                        10 most important words
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberOfWords" id="numberOfWords" value="25">
                    <label class="form-check-label" for="optionRadios1">
                        25 most important words
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberOfWords" id="numberOfWords" value="50">
                    <label class="form-check-label" for="optionRadios1">
                        50 most important words
                    </label>
                </div>
                <br>
                <div class='form-group'>
                    <button type="submit" class="btn btn-primary">Go!</button>
                </div>
            </form>
        </div>
        <div class='col'>
            <?php if ($haveResults): ?>
                <div class="form-group">
                    <label for="outputTextArea">Output</label>
                    <textarea class="form-control" id="outputTextArea" rows="16" readonly><?= $finalText ?></textarea>
                </div>
            <?php elseif (!$haveResults): ?>
                <div class="form-group">
                    <label for="outputTextArea">Output</label>
                    <textarea class="form-control" id="outputTextArea" rows="16" readonly>Your text will appear here...</textarea>
                </div>
            <?php endif; ?>


        </div>
    </div>
</div>

</body>

</html>