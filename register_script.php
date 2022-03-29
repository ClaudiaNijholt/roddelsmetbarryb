<?php
    if (empty($_POST["email"])) {
        header("location: ./index.php?content=message&alert=no-email");
    }
    else {
        include("./connect_db.php");
        include("./functions.php");
        $email = sanatize($_POST["email"]);
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result)) {
            header("location: ./index.php?content=message&alert=emailexists");
        }
        else {
            $password = 'geheim';
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
                
            $sql = "INSERT INTO `register` (`id`,
                                            `email`,
                                            `password`,
                                            `userrole`,
                                            `activated`)
                        VALUES             (NULL,                        
                                            '$email',
                                            '$password_hash',
                                            'customer',
                                            0)";

            if (mysqli_query($conn, $sql)) {
                $id = mysqli_insert_id($conn);
                $to = $email;
                $subject = "Activatielink voor uw account op juicynoodles.com";
                $message = '    <!doctype html>
                                    <html>
                                        <head>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                        </head>
                                        <body class="bg-light">
                                            <div class="container">
                                                <div>
                                                    <div>
                                                        <h1>Roddelsmetbarryb</h1>
                                                        <h5>Activatielink voor uw account op roddelsmetbarry.pro</h5>
                                                        <hr>
                                                        <div>
                                                        <p>
                                                        Onderaan deze link bevindt zich een knop waarmee u uw wachtwoord in kunt vullen op www.roddelsmetbarry.pro.
                                                        </p>
                                                        <p>
                                                        Alvast bedankt
                                                        </p>
                                                        <a class="btn btn-primary" href="http://www.roddelsmetbarry.pro/index.php?content=activate&id=' . $id . '&pwh='. $password_hash .'" target="_blank">Activeer uw account</a>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </body>
                                    </html>';
                                                
                                                $headers = "MIME-version: 1.0\r\n";
                                                $headers = "Content-type: text/html; charset=UTF-8\r\n";
                                                $headers .= "From: admin@rmbb.com\r\n";
                                                $headers .="Cc: moderator@rmbb.com\r\n";
                                                $headers .="Bcc: root@rmbb.com";
                                                mail($to, $subject, $message, $headers);

                header("location: ./index.php?content=message&alert=register-success");
            }
            else {
                header("location: ./index.php?content=message&alert=register-error");
            }
        }
    }
?>