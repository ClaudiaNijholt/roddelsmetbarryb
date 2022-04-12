<?php
    include("./connect_db.php");

    $firstname = $_POST["firstname"];
    $infix = mysqli_real_escape_string ($conn, $_POST["infix"]);
    $lastname = $_POST["lastname"];
    $betaalrekening = $_POST["betaalrekening"];
    
    
$sql = "INSERT INTO `users` (
                     `firstname`,
                     `infix`,
                     `lastname`,
                     `betaalrekening`)
      VALUES              (
                     '$firstname',
                     '$infix',
                     '$lastname',
                     '$betaalrekening');";
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container-fluid">
            <p>
                <strong>THANK YOU!</strong> 
            </p>
            <p>
                <strong>You'll recieve the money soon, you can check your insterted information when you get beck on the homepage and press on 'inserted data'.</strong>
            </p>
            <p>
                (!Still Not a scam!)
            </p>
        </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-primary"><a href="./index.php">GO BACK ></a></button>
        </div>  
      </div>
    </div>
  </body>
</html>