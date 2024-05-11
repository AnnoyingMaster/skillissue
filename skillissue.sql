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

CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `time` DATETIME DEFAULT NOW(),
  `felhasznalo` varchar(12) NOT NULL default '',
  `comment` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `comment` (`id`,`time`,`felhasznalo`,`comment`) VALUES 
 (1,NOW(),'Admin','komment teszt 0-1-2-3-4-5-6-7-8-9-10');
 