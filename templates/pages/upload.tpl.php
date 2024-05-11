<h1>Feltöltés a galériába:</h1>

<form id="upload" action="<?= ($url == '/') ? '.' : ('?oldal=upload') ?>" method="post"
      enctype="multipart/form-data">
    <label>
        <input type="file" name="elso" required>
    </label>
    <?php
        if (!empty($uzenet))
        {
            foreach($uzenet as $u)
                echo "<p>$u</p>";
        }
    ?>
    <br></br>
    <input type="submit" name="kuld" value="Feltöltés">
</form>