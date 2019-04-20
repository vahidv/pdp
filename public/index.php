<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>tests!</title>
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link home active" href="http://localhost:8000/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link php" href="/?pattern=php">Php</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Structural
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item adapter" href="/?pattern=adapter">Adapter</a>
                <a class="dropdown-item bridge" href="/?pattern=bridge">bridge</a>
                <a class="dropdown-item composite" href="/?pattern=composite">composite</a>
                <a class="dropdown-item decorator" href="/?pattern=decorator">Decorator</a>
                <a class="dropdown-item facade" href="/?pattern=facade">facade</a>
                <a class="dropdown-item flyweight" href="/?pattern=flyweight">flyweight</a>
                <a class="dropdown-item proxy" href="/?pattern=proxy">proxy</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Creational
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item simpleFactory" href="/?pattern=simpleFactory">SimpleFactory</a>
                <a class="dropdown-item factoryMethod" href="/?pattern=factoryMethod">FactoryMethod</a>
                <a class="dropdown-item abstractFactory" href="/?pattern=abstractFactory">AbstractFactory</a>
                <a class="dropdown-item builder" href="/?pattern=builder">Builder</a>
                <a class="dropdown-item prototype" href="/?pattern=prototype">Prototype</a>
                <a class="dropdown-item singleton" href="/?pattern=singleton">singleton</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Behavioral
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item strategy" href="/?pattern=strategy">Strategy</a>
                <a class="dropdown-item chain" href="/?pattern=chain">Chain</a>
                <a class="dropdown-item command" href="/?pattern=command">Command</a>
                <a class="dropdown-item iterator" href="/?pattern=iterator">Iterator</a>
                <a class="dropdown-item mediator" href="/?pattern=mediator">Mediator</a>
                <a class="dropdown-item memento" href="/?pattern=memento">Memento</a>
                <a class="dropdown-item observer" href="/?pattern=observer">Observer</a>
                <a class="dropdown-item visitor" href="/?pattern=visitor">Visitor</a>
                <a class="dropdown-item state" href="/?pattern=state">State</a>
                <a class="dropdown-item template" href="/?pattern=template">Template</a>
            </div>
        </li>
    </ul>
</nav>
<br/>
<br/>
<br/>

<div class="jumbotron">
    <h1 class="display-4">running</h1>
    <!--    <p class="lead">desired patterns like Adapter, Decorator ....</p>-->
    <!--    <hr class="my-4">-->
    <!--    <p>choose from menu your desired pattern.</p>-->
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

use src\App;

require_once __DIR__ . '/../vendor/autoload.php';


if (isset($_GET['pattern']) && !file_exists(__DIR__ . '/../src/' . $_GET['pattern'])) {
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

$app = App::getInstance();
$app->dispatch($_GET['pattern']);

?>

