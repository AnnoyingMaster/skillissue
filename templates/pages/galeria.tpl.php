<div id="galeria">
    <h1>Mémek</h1>
    <p>Ha szereted a mémeket és szükséd van egy kis nevetésre akkor jó helyen jársz!</p>
    <p>Megtekintheted a felhasználóink által feltöltött képeinket, valamint, ha te is regisztrált látogatónk vagy felöltheted saját mémjeid, hogy mások is élvezhessék.</p>
    <?php if(isset($_SESSION['login'])) { ?>
    <form action="<?= ($url == '/') ? '.' : ('?oldal=upload') ?>" method="post">
        <input type="submit" value="Feltöltés" />
    </form>
    <?php } ?>
    <br><br>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
        ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>
            <p>Név:  <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
        <?php
    }
    ?>
</div>