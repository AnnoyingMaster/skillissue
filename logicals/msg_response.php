<?php
if(isset($_SESSION['login']) && isset($_POST['comment']) && strlen($_POST['comment'])<81 && strlen($_POST['comment'])>5) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=skillissue', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlInsert = "insert into comment(id, felhasznalo, comment)
                          values(0, :felhasznalo, :comment)";

        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(':felhasznalo' => $_SESSION['login'], ':comment' => $_POST['comment']));
        if ($count = $stmt->rowCount()) {
            $uzenet = "Az üzenet sikeresen elküldve<br>";
            $ujra = false;
        }
    } catch (PDOException $e) {
        $uzenet = "Hiba: " . $e->getMessage();
        $ujra = true;
    }
}
else if (!isset($_SESSION['login']) && isset($_POST['comment']) && strlen($_POST['comment'])<81 && strlen($_POST['comment'])>5){
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=skillissue', 'root', '',
          array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlInsert = "insert into comment(id, felhasznalo, comment)
                          values(0, 'Vendég', :comment)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array( ':comment' => $_POST['comment']));

        if($count = $stmt->rowCount()) {
            $uzenet = "Az üzenet sikeresen elküldve<br>";
            $ujra = false;
        }
}
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
}
}
else {
    $uzenet = "Az üzenetet nem sikerült elküldeni. Az üzenet maximum 80 karakter hosszúságú lehet és legalább 5 karakter!";
    $ujra = true;
}
?>