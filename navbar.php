<?php     
        $active = (isset($_GET["content"]))? $_GET ["content"]: "";
      ?>

      <div class="container">
        <nav>
          <ul>
            <li><a class="<?php echo (in_array($active, ["home", ""]))? "active": ""?>" href="./index.php?content=home">Home</a></li>
            <li><a class="<?php echo (in_array($active, ["archive", ""]))? "active": ""?>" href="./index.php?content=archive">Archief</a></li>
            <li class="li-center">
              <img class="navbar-img"src="./img/logo_small.png" alt="">
            </li>
            <?php
              if (isset($_SESSION["id"])){
                switch ($_SESSION["userrole"]){
                  case 'customer':
                    echo '
                    <li class="li-right" '; echo ( $active == "logout")? "active" : ""; echo '><a href="./index.php?content=logout">Uitloggen</a>
                    </li>
                    <li class="li-right" '; echo ( $active == "dashboard")? "active" : ""; echo '><a href="./index.php?content=dashboard"> Dashboard</a>
                    </li>';
                  break;
                  case 'root':
                    echo '
                    <li class="li-right" '; echo ( $active == "logout")? "active" : ""; echo '><a href="./index.php?content=logout">Uitloggen</a>
                    </li>';
                    echo '<li class="li-right" '; echo ( $active == "a-dashboard")? "active" : ""; echo '><a href="./index.php?content=a-dashboard">Admin dashboard</a>
                    </li>';
                  break;
                  case 'admin':
                    echo '
                    <li class="li-right" '; echo ( $active == "logout")? "active" : ""; echo '><a href="./index.php?content=logout">Uitloggen</a>
                    </li>';
                    echo '<li class="li-right" '; echo ( $active == "a-dashboard")? "active" : ""; echo '><a href="./index.php?content=a-dashboard">Admin dashboard</a>
                    </li>';
                  break;
                  case 'moderator':
                    echo '
                    <li class="li-right" '; echo ( $active == "logout")? "active" : ""; echo '><a href="./index.php?content=logout">Uitloggen</a>
                    </li>';
                    echo '<li class="li-right" '; echo ( $active == "a-dashboard")? "active" : ""; echo '><a href="./index.php?content=a-dashboard">Admin dashboard</a>
                    </li>';
                  break;
                }
              }
              else{
                echo '<li class="li-right" '; echo ( $active == "login")? "active" : ""; echo '><a href="./index.php? content=login">Inloggen</a>
                </li>
                <li class="li-right" '; echo ( $active == "register")? "active" : ""; echo '><a href="./index.php?content=register"> Registreren</a>
                </li>';
              }
            
            ?>
          </ul>
        </nav>
      </div>
