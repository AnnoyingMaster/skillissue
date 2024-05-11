<form action="<?= ($url == '/') ? '.' : ('?oldal=matek') ?>" method="post">
    <label id="teszt" for="teszt1">Matematika teszt</label>
    <input id="teszt1" class="tesztek" type="submit" value="Matematika teszt" />
</form>
<br></br>
<form action="<?= ($url == '/') ? '.' : ('?oldal=angol') ?>" method="post">
    <label id="teszt" for="teszt2">Angol teszt</label>
    <input id="teszt2" class="tesztek" type="submit" value="Angol teszt" />
</form>
