<!DOCTYPE html>
<html>
<head>

    <title>Word Perspective</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->


    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

<div class='container-fluid'>

    <h1 class='text-center'>Word Perspective!</h1>

    <h4 class='text-center'>show the most important words</h4>

</div>

<div class='container'>
    <div class='row'>
        <div class='col'>

            <form>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionRadios" id="optionRadios1" value="option1" checked>
                    <label class="form-check-label" for="optionRadios1">
                        Show my text in its default order
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionRadios" id="optionRadios1" value="option2">
                    <label class="form-check-label" for="optionRadios1">
                        Show my text in alphabetical order
                    </label>
                </div>

            </form>

            <br>

            <form>
                <div class='form-group'>
                    <button type="submit" class="btn btn-primary">Go!</button>
                </div>
            </form>

        </div>
        <div class='col'>

            <div class="form-group">
                <label for="outputTextArea">Output</label>
                <textarea class="form-control" id="outputTextArea" rows="16"></textarea>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            1 of 3
        </div>
        <div class="col-6">
            2 of 3 (wider)
        </div>
        <div class="col">
            3 of 3
        </div>
    </div>
    <div class="row">
        <div class="col">
            1 of 3
        </div>
        <div class="col-5">
            2 of 3 (wider)
        </div>
        <div class="col">
            3 of 3
        </div>
    </div>
</div>


</body>

</html>