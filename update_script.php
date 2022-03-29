<?php
    include ("./connect_db.php");
    
    $title = $_POST["title"];
    $rumor = $_POST["rumor"];

    $sql = "UPDATE `register` 
            SET `title` = '$title',
                `rumor` = '$rumor',
            WHERE `register`.`id` = '$id';";

    mysqli_query($conn, $sql);
    
    header("Location: ./read.php");
?>