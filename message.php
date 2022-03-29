<?php
    $alert=(isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id=(isset($_GET["id"]))? $_GET["id"]: "";
    $pwh=(isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email=(isset($_GET["email"]))? $_GET["email"]: "";

    switch ($alert) {
        case "no-email" :
            echo '<div class="alert alert-info" role="alert">
                U heeft geen email ingevuld, probeer het opnieuw.
            </div>';
            header("refresh: 3; ./index.php?content=register");
        break;  
        case "emailexists":
            echo '<div class="alert alert-warning" role="alert">
                Het email wat u heeft ingevuld bestaat al, probeer het opnieuw met een ander emailadres.
            </div>';
            header("refresh: 3; ./index.php?content=register");
        break;
        case "register-error":
            echo '<div class="alert alert-danger" role="alert">
                Er is iets fout gegaan in het registratieproces. probeer het nogmaals of neem contact op met ...
            </div>';
            header("refresh: 3; ./index.php?content=register");
        break;
            case "register-success":
                echo '<div class="alert alert-success" role="alert">
                    U bent succesvol geregistreerd, u ontvangt een email van ons met daarin een activatielink.
                </div>';
                header("refresh: 3; ./index.php?content=home");
                break;
        case "hacker-alert":
            echo '<div class="alert alert-danger" role="alert">
                U heeft geen rechten op deze pagina
            </div>';
            header("refresh: 3; ./index.php?content=home");
        break;
        case "password-empty":
            echo '<div class="alert alert-info" role="alert">
                U heeft een van beide wachtwoord niet ingevuld. Vul deze alsjeblieft in.
            </div>';
            header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "nomatch-password":
            echo '<div class="alert alert-warning" role="alert">
                De door u ingevulde wachtwoorden komen niet met elkaar overeen. probeer het opnieuw.
            </div>';
            header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "no-id-pwh-match":
            echo '<div class="alert alert-warning" role="alert">
                U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina.
            </div>';
            header("refresh: 3; ./index.php?content=register");
        break;
        case "update-success":
            echo '<div class="alert alert-success" role="alert">
                U bent succesvol geregistreerd. U wordt doorgestuurd naar de inlogpagina.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "update-error":
            echo '<div class="alert alert-danger" role="alert">
                Het regegistreren is niet gelukt. Kies een nieuw wachtwoord.
            </div>';
            header("refresh: 3; ./index.php?content=activate&$id&pwh=$pwh");
        break;
        case "already-active":
            echo '<div class="alert alert-danger" role="alert">
                Uw account is al actief. Log in met uw zelfgekozen wachtwoord en emailadres.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "no-match-pwh":
            echo '<div class="alert alert-danger" role="alert">
                Uw activatielink gegevens kloppen niet. Registreer opnieuw. 
            </div>';
            header("refresh: 3; ./index.php?content=register");
        break;
        case "loginform-empty":
            echo '<div class="alert alert-danger" role="alert">
                U heeft een van beide velden niet ingevuld. Vul deze alsjeblieft in.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "email-unknown":
            echo '<div class="alert alert-danger" role="alert">
                Het door u ingevulde emailadres is niet bij ons bekend, probeer het opnieuw.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "not-activated":
            echo '<div class="alert alert-danger" role="alert">
                Uw account is nog niet geactiveerd. Check uw mail <span class="badge badge-primary"> '. $email .' </span> voor een mail met een activatielink.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "no-pw-match":
            echo '<div class="alert alert-danger" role="alert">
                Uw ingevulde wachtwoord voor het emailadres <span class="badge badge-primary"> '. $email .' </span> klopt niet. Probeer het opnieuw.
            </div>';
            header("refresh: 3; ./index.php?content=login");
        break;
        case "logout":
            echo '<div class="alert alert-success" role="alert">
                U bent uitgelogd, u wordt doorgestuurd naar de homepagina.
            </div>';
            header("refresh: 3; ./index.php?content=home");
        break;
        default:
        header("location: ./index.php?content=home");
        break;
    }
?>