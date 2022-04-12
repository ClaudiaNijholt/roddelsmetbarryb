<?php
    include ("./connect_db.php");
    
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $infix = $_POST["infix"];
    $lastname = $_POST["lastname"];
    $betaalrekening = $_POST["betaalrekening"];

    $sql = "UPDATE `users` 
            SET `firstname` = '$firstname',
                `infix` = '$infix',
                `lastname` = '$lastname',
                `betaalrekening` = '$betaalrekening'
            WHERE `users`.`id` = '$id';";

    mysqli_query($conn, $sql);
    
    header("Location: ./read.php");
?>