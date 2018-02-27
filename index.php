<?php
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

    <h1 class='text-center'>Word Perspective</h1>

    <h4 class='text-center'>a word cloud of important words</h4>

</div>

<div class='container'>
    <div class='row'>
        <div class='col'>

            <!-- Input text area -->

            <form method='POST' action='index.php'>
                <div class="form-group">
                    <label for="inputTextArea">Input</label>
                    <textarea class="form-control"
                              name='inputTextArea'
                              id="inputTextArea"
                              rows="16"><?php echo $inputText ?></textarea>
                    <p id="passwordHelpBlock" class="form-text text-muted">
                        Paste in any text that contains letters and numbers that is under 500 words.
                    </p>
                </div>
                <label>
                    <input type='checkbox' name='alphabeticalCheck' value='1' <?= ($alphabetical) ? 'checked' : '' ?>>
                    Alphabetical
                </label>
                <div class="form-check">
                    <input class="form-check-input"
                           type="radio"
                           name="numberOfWords"
                           id="numberOfWords"
                           value="10"
                           checked>
                    <label class="form-check-label" for="optionRadios1">
                        10 most important words
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberOfWords" id="numberOfWords" value="25"
                        <?php if ($numberOfWords == 25) : ?>
                            <?php echo "checked" ?>
                        <?php endif; ?>>
                    <label class="form-check-label" for="optionRadios1">
                        25 most important words
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input"
                           type="radio"
                           name="numberOfWords"
                           id="numberOfWords"
                           value="50" <?php if ($numberOfWords == 50) : ?>
                        <?php echo "checked" ?>
                    <?php endif; ?>>
                    <label class="form-check-label" for="optionRadios1">
                        50 most important words
                    </label>
                </div>
                <br>
                <div class='form-group'>
                    <button type="submit" class="btn btn-primary">Go!</button>
                </div>
            </form>

            <!-- Display errors after posting below input text area -->

            <?php if ($form->hasErrors) : ?>
                <div class='alert-danger'>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>

        <!-- Output text area -->

        <div class='col'>
            <?php if ($haveResults): ?>
                <br>
                <div class="container">
                    <?php foreach ($uniqueArrayFinal

                    as $wordsFinals => $wordFinal) : ?>
                    <span style='color:black;font-size:<?= $uniqueArrayFinal[$wordsFinals]['fontSize'] ?>px'><?= $uniqueArrayFinal[$wordsFinals]['word'] ?>
                        <?php endforeach; ?>
                </div>
            <?php elseif (!$haveResults): ?>
                <br>
                <div class="container">
                    Your text will appear here...
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>

</html>