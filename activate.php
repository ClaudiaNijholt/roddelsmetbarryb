<?php
    if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
        header("location: ./index.php?content=message&alert=hacker-alert");
    }
?>



<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Kies een nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" autofocus>
                    <div id="passwordHelp" class="form-text">Kies een veilig wachtwoord.</div>
                </div>
                <div class="mb-3">
                    <label for="InputPasswordCheck" class="form-label">Herhaal uw wachtwoord:</label>
                    <input name="passwordCheck" type="password" class="form-control" id="InputPasswordCheck" aria-describedby="passwordHelpCheck">
                    <div id="passwordHelpCheck" class="form-text">Ter controle vragen wij je om nog eens je wachtwoord in te vullen.</div>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
                    <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"];?>">
                    <button type="submit" class="btn btn-success btn-lg">Account activeren</button>

                </div>
            </form>
        </div>
    </div>
</div>