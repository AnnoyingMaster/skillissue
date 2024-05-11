CREATE DATABASE `skillissue`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `skillissue`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `felhasznalo` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`felhasznalo`,`jelszo`) VALUES 
 (1,'Skillissue','Admin','Admin',sha1('admin1'));
