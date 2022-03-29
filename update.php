<?php
    $id = $_GET["id"];

    include("./connect_db.php");

    $sql = " SELECT * FROM `register` WHERE `id` = $id";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
        <br>
        <div class="container">
      <div class="row">
        <div class="col-6">
        <!-- formulier -->
            <form action="./index.php?content=update_script" method="post">
            <div>
                <label for="InputTitle"><h3>Titel:</h3></label>
                <input name="title" type="title" id="InputTitle" aria-describedby="titleHelp" autofocus>
            </div>
            <div>
                <label for="InputRumor"><h3>Roddel:</h3></label>
                <input name="rumor" type="rumor" id="InputRumor" aria-describedby="rumorHelpCheck">
                <div id="rumorHelp">Alle anderen mensen op deze site kunnen niet wachten om je roddel te lezen.</div>
            </div>
              <input type="hidden" value="<?php echo $id; ?>" name="id" >
              <button class="btn btn-primary">SEND</button>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>