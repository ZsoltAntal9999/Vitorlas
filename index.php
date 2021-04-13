<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
    <title>Vitorlás bérlés</title>

    <style>
        body{
            min-height: 75rem;
            padding-top: 4.5rem;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
        <button type="button" class="navbar-toggler" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand">Vitorláshajó-kölcsönzés</span>
    <div class="navbar-collapse collapse " id="menuid">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=napidij.php">Napi díj személyre</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=bevetel.php">Bevételek</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=ujhajo.php">Új hajó</a></li>
        </ul>
    </div>
    </nav>

    <div class="tarolo">
        <?php
            if(isset($_GET['p'])){
                include $_GET["p"];
            }
            else{
                include("fooldal.php");
            }
        ?>
    </div>
</body>
</html>