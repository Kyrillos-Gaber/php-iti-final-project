<?php
require_once('download.php'); 
require_once("../../../vendor/autoload.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>for download file press on down</title>
</head>

<body>
    <form  method="post" enctype="multipart/from-data" >
        <div class="container row m-5">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">download file</h5>
                    <p class="card-text">you have 7 times download.</p>
                    <input type="submit" name="submit" class="btn btn-primary" value="down"/>
                </div>
            </div>
        </div>
    </form>
</body>

</html>