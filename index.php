<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheet links -->
        <link rel="stylesheet" href="./css/grid.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./scss/style.css">
        <link rel="stylesheet" href="./scss/message.css">

        <title>Roddels met Barry B</title>
    </head>
    <body>
      <main>
            <div>
                <div><?php include("./banner.php"); ?></div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-12"><?php include("./navbar.php"); ?></div>
            </div>
        </div>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        include("./content.php");     
                    ?>
                </div>
            </div>
        </section>
        <br><br><br>
        <div class="container col-12">
            <div class="row">
                <div class="">
                    <?php 
                        include("./footer.php"); 
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/script.js"></script>
  </body>
</html>