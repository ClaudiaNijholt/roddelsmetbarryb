<?php
    include("./connect_db.php");
    
    $title = $_POST["title"];
    $rumor = $_POST["rumor"];
    
    var_dump($title, $rumor);
    
$sql = "INSERT INTO `register`(
                     `title`,
                     `rumor`)
      VALUES              (
                     '$title',
                     '$rumor');";
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/message.css">
  <body>
    <h1>halololo</h1>
  </body>
</html>