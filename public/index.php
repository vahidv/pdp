<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>pdp!</title>
</head>
<body>
<nav class="navbar bg-dark navbar-dark navbar-expand-sm">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link home active" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link php" href="/?pattern=php">Php</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Creational
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item simpleFactory" href="/?type=creational&pattern=simpleFactory">SimpleFactory</a>
                <a class="dropdown-item factoryMethod" href="/?type=creational&pattern=factoryMethod">FactoryMethod</a>
                <a class="dropdown-item abstractFactory" href="/?type=creational&pattern=abstractFactory">AbstractFactory</a>
                <a class="dropdown-item builder" href="/?type=creational&pattern=builder">Builder</a>
                <a class="dropdown-item prototype" href="/?type=creational&pattern=prototype">Prototype</a>
                <a class="dropdown-item singleton" href="/?type=creational&pattern=singleton">singleton</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Structural
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item adapter" href="/?type=structural&pattern=adapter">Adapter</a>
                <a class="dropdown-item bridge" href="/?type=structural&pattern=bridge">bridge</a>
                <a class="dropdown-item composite" href="/?type=structural&pattern=composite">composite</a>
                <a class="dropdown-item decorator" href="/?type=structural&pattern=decorator">Decorator</a>
                <a class="dropdown-item facade" href="/?type=structural&pattern=facade">facade</a>
                <a class="dropdown-item flyweight" href="/?type=structural&pattern=flyweight">flyweight</a>
                <a class="dropdown-item proxy" href="/?type=structural&pattern=proxy">proxy</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Behavioral
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item strategy" href="/?type=behavioral&pattern=strategy">Strategy</a>
                <a class="dropdown-item chain" href="/?type=behavioral&pattern=chain">Chain</a>
                <a class="dropdown-item command" href="/?type=behavioral&pattern=command">Command</a>
                <a class="dropdown-item iterator" href="/?type=behavioral&pattern=iterator">Iterator</a>
                <a class="dropdown-item mediator" href="/?type=behavioral&pattern=mediator">Mediator</a>
                <a class="dropdown-item memento" href="/?type=behavioral&pattern=memento">Memento</a>
                <a class="dropdown-item observer" href="/?type=behavioral&pattern=observer">Observer</a>
                <a class="dropdown-item visitor" href="/?type=behavioral&pattern=visitor">Visitor</a>
                <a class="dropdown-item state" href="/?type=behavioral&pattern=state">State</a>
                <a class="dropdown-item template" href="/?type=behavioral&pattern=template">Template</a>
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

<div class="row">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-description" role="tab"
               aria-controls="v-pills-description" aria-selected="true">Description</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-execution" role="tab"
               aria-controls="v-pills-execution" aria-selected="false">Execution Result</a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-description" role="tabpanel"
                 aria-labelledby="v-pills-description-tab">
                ...
            </div>
            <div class="tab-pane fade" id="v-pills-execution" role="tabpanel" aria-labelledby="v-pills-execution-tab">
                ...
            </div>
        </div>
    </div>
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


if (isset($_GET['pattern']) && isset($_GET['type']) && !file_exists(__DIR__ . '/../src/' . $_GET['type'] . '/' . $_GET['pattern'])) {
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

$app    = App::getInstance();
$result = $app->dispatch($_GET['type'], $_GET['pattern']);
?>

<script>
    var executionResult = <?php echo $result ?>;
    document.querySelector("div#v-pills-execution").innerHTML = executionResult.result;
    document.querySelector("div#v-pills-description").innerHTML = executionResult.description;
</script>
