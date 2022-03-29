<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <footer>
            <div class="rowf-primary">
                <div class="column about">
                    <h3>Roddels met Barry B</h3>
                    <p>
                        Onze roddels halen wij bij de meest betrouwbare bronnen vandaan want alleen de beste zijn goed genoeg voor onze lezers. Vergeet vooral niet het roddel wat jij hebt ontdekt te plaatsen op onze website om deel te worden van onze meest betrouwbare bronnen.
                    </p>
                </div>

            <div class="column links">
            <h3>Andere links</h3>
                <ul>
                    <li>
                        <a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">F.A.Q</a>
                    </li>
                    <li>
                        <a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">Cookies Policy</a>
                    </li>
                    <li>
                        <a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">Terms Of Service</a>
                    </li>
                    <li>
                        <a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">Support</a>
                    </li>
                </ul>
            </div>
        </div>
            <div class="rowf copyright">
                <div class="footer-menu">
                <a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">Home</a>
                <a class="<?php echo (in_array($active, ["archive", ""]))? "active": ""?>" href="./index.php?content=archive">Archief</a>
                <a class="<?php echo ( $active == "login")? "active" : ""?>" href="./index.php?content=login">Inloggen</a>
                <a class="<?php echo ( $active == "register")? "active" : ""?>>" href="./index.php?content=register">Registreren</a>
            </div>
                <p>Copyright &copy; 2022 Roddels met Barry B</p>
            </div>
        </footer>
    </body>
</html>