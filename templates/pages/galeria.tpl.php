<h2>Kép galéria</h2>
<?php
    if (!empty($uzenet))
    {
        foreach($uzenet as $u)
            echo "<p>$u</p>";
    }
?>
<?php if(isset($_SESSION['login'])) { ?>
<form action="?oldal=galeria" method="post" enctype="multipart/form-data">
    <label>
        <input type="file" name="kep" required>
    </label>
    <input type="submit" name="kuld" value="Feltöltés">
</form>
<?php } ?>
