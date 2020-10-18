<?php
/** Display page: shows who is checked in or not checked in ..., ..., ..., */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to db
require('/home/jonlaygo/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotlight Display Page</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > <!--bootstrap component-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> <!--data tables component-->
</head>
<body>
<div class="container">

    <!--jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">SpotLight</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cupiditate,
                dignissimos facere harum inventore maiores nihil non quod quos ratione recusandae sapiente ut,
                velit vitae voluptate. Eveniet laudantium rem voluptatibus.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">col-sm-8</div>
        <div class="col-sm-4">col-sm-4</div>
    </div>
    <div class="row">
        <!--gym 1 display-->
        <div class="col-sm">
            <label for="gym1">Gym1</label>
            <div id="gym1">

            </div>
        </div>

        <!--gym 2 display-->
        <div class="col-sm">
            <label for="gym2">Gym2</label>
            <div id="gym2">

            </div>
        </div>

        <!--gym 3 display-->
        <div class="col-sm">
            <label for="gym3">Gym3</label>
            <div id="gym3">

            </div>
        </div>
    </div>

    <button>Refresh</button>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script> <!--bootstrap component-->
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> <!--bootstrap component-->
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> <!--bootstrap component-->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> <!--data tables component-->

</body>
</html>