<?php
    var_dump($_POST);
    include("./connect_db.php");
    include("./functions.php");

    $email = sanatize($_POST["email"]);
    $password = sanatize($_POST["password"]);

    if (empty($email) || empty($password)){
        header("location:./index.php?content=message&alert=loginform-empty");
    } else{
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $sql);

        // var_dump(mysqli_num_rows($result));

        if (!mysqli_num_rows($result)){
            header("location:./index.php?content=message&alert=email-unknown");
        }
        else {
            $record = mysqli_fetch_assoc($result);

            if (!$record["activated"]){
                header("location:./index.php?content=message&alert=not-activated&email=$email");
            }
            elseif (!password_verify($password, $record["password"])){
                header("location:./index.php?content=message&alert=no-pw-match&email=$email");
            }
            else{
                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];

                switch($record["userrole"]) {
                    case 'customer':
                        header("location:./index.php?content=c-home");
                    break;
                    case 'root':
                        header("location:./index.php?content=r-home");
                    break;
                    case 'admin':
                        header("location:./index.php?content=a-home");
                    break;
                    case 'moderator':
                        header("location:./index.php?content=m-home");
                    break;
                    default:
                        header("location:./index.php?content=home");
                    break;

                }
            }
        }
    }
?>