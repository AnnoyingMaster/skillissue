<?php

$MAPPA = './images/memes/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

$ablakcim = array(
    'cim' => 'Skill Issue',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Skill Issue - Tágítsd az elméd!'
);


$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'rolunk', 'szoveg' => 'Rólunk', 'menun' => array(1,1)),
    'tesztek' => array('fajl' => 'tesztek', 'szoveg' => 'Tesztek', 'menun' => array(0,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'msg_response' => array('fajl' => 'response', 'szoveg' => '', 'menun' => array(0,0)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'upload' => array('fajl' => 'upload', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

?>