<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=login_script" method="post">
                <div>
                    <label for="InputEmail"><h3>Emailadres:</h3></label>
                    <input name="email" type="email" id="InputEmail" aria-describedby="emailHelp" autofocus>
                    <div id="emailHelp">We delen je gegevens niet met anderen.</div>
                </div>
                <div>
                    <label for="InputPassword"><h3>wachtwoord:</h3></label>
                    <input name="password" type="password"id="InputPassword" aria-describedby="passwordHelpCheck">
                    <div id="passwordHelp">Ter controle vragen wij je om nog eens je wachtwoord in te vullen.</div>
                </div>
                <div>
                    <button type="submit">Inloggen</button>
                </div>
            </form>
        </div>
    </div>
</div>