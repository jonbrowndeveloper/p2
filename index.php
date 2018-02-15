<!DOCTYPE html>
<html>
<head>

    <title>Jon Brown</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>

<h1>HangMan</h1>

<img src='/img/hangman.png' alt='picture of a hangman'>

<form>

    <input type='radio' name='easy' value='easy' checked> Easy<br>
    <input type='radio' name='medium' value='medium'> Medium<br>
    <input type='radio' name='hard' value='hard'> Hard<br>

</form>

<form method='GET' action='game.php' width='400' height='600'>

    <input type='submit' value='Begin Game!'>

</form>

</body>

</html>