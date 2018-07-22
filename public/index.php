<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Design Pattern Tutorial!</title>
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="http://localhost:8000/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/?pattern=adapter">Adapter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/?pattern=decorator">Decorator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/?pattern=strategy">Strategy</a>
        </li>
    </ul>
</nav>
<br/>
<br/>
<br/>

<div class="jumbotron">
    <h1 class="display-4">design pattern Tutorial</h1>
    <p class="lead">desired patterns like Adapter, Decorator ....</p>
    <hr class="my-4">
    <p>choose from menu your desired pattern.</p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>


<?php

require_once __DIR__ . '/../vendor/autoload.php';

if (isset($_GET['pattern']) && !file_exists(__DIR__ . '/../src/' . $_GET['pattern'] . '/index.php')) {
    echo '
          <div class="container">
            <div class="row">
                <div class="alert alert-warning col-md-9" role="alert">
            404 not found! please specify your desired design pattern by selecting from menu!
                </div>
            </div>
          </div>';
    die();
}

require_once __DIR__ . '/../src/' . $_GET['pattern'] . '/index.php';

?>

