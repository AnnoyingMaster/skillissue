<h1>Feltöltés a galériába:</h1>
<?php
if (!empty($uzenet))
{
    echo '<ul>';
    foreach($uzenet as $u)
        echo "<li>$u</li>";
    echo '</ul>';
}
?>
<form id="upload" action="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>" method="post"
      enctype="multipart/form-data">
    <label>Első:
        <input type="file" name="elso" required>
    </label>
    <label>Második:
        <input type="file" name="masodik">
    </label>
    <label>Harmadik:
        <input type="file" name="harmadik">
    </label>
    <input type="submit" name="kuld">
</form>