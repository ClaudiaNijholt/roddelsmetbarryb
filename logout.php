<?php
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);

    session_destroy();

    header("location:./index.php?content=message&alert=logout");
?>