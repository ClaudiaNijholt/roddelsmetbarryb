<div class="side-menu col-3">
    <lu>
        <h3>Opties</h3>
        <li class="link-deco"><a class="link-deco" href="">Post plaatsen</a></li>
        <li class="link-deco"><a class="link-deco" href="">Mijn Gegevens</a></li>

    </lu>
</div>
<div class="dashboard col-9">
    <div class="col-12">
        <h2>Een post plaatsen</h2>
    </div>
    <div class="row">    
        <form action="./index.php?content=login_script" method="post">
            <div>
                <label for="InputTitle"><h3>Titel:</h3></label>
                <input name="title" type="title" id="InputTitle" aria-describedby="titleHelp" autofocus>
            </div>
            <div>
                <label for="InputPassword"><h3>Foto:</h3></label>
                <input name="password" type="password"id="InputPassword" aria-describedby="passwordHelpCheck">
                <div id="passwordHelp">Kies een foto die bij je roddel past.</div>
            </div>
            <div>
                <label for="InputRumor"><h3>Roddel:</h3></label>
                <input name="rumor" type="rumor"id="InputRumor" aria-describedby="rumorHelpCheck">
                <div id="rumorHelp">Alle anderen mensen op deze site kunnen niet wachten om je roddel te lezen.</div>
            </div>
            <div>
                <button type="submit">Roddel plaatsen</button>
            </div>
        </form>
    </div>
</div>