<?php

if(isset($_SESSION['login'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=skillissue', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "SELECT time, felhasznalo, comment FROM `comment` ORDER BY time DESC";
        $result = $dbh->prepare($sqlSelect);
        $result->execute();
        /*$data = array();
        if($row = $result->fetch(PDO::FETCH_NUM)>0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
        }*/

    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }
}
else {
    header("Location: .");
}
?>
