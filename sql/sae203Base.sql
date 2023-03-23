-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jeux` (
  `jeux_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du jeux',
  `jeux_nom` varchar(40) NOT NULL COMMENT 'nom du jeux',
  `jeux_plateforme` varchar(30) NOT NULL COMMENT 'nom de la console de jeux',
  `jeux_année` year(4) NOT NULL COMMENT 'année de parution',
  `jeux_jaquette` varchar(40) NOT NULL COMMENT 'jaquette du jeux',
  PRIMARY KEY (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeux`
--

LOCK TABLES `jeux` WRITE;
/*!40000 ALTER TABLE `jeux` DISABLE KEYS */;
INSERT INTO `jeux` VALUES (1,'Mystery of the Emblem','Super Famicom',1994,'jaquette_jeu01.jpg'),(2,'Genealogy of the Holy War','Super Famicom',1996,'jaquette_jeu02.jpg'),(3,'Thracia 776','Super Famicom',1999,'jaquette_jeu03.jpg'),(4,'The Binding Blade','GBA',2002,'jaquette_jeu04.jpg'),(5,'The Blazing Blade','GBA',2003,'jaquette_jeu05.jpg'),(6,'The Sacred Stones','GBA',2005,'jaquette_jeu06.jpg'),(7,'Path of Radiance','GameCube',2005,'jaquette_jeu07.jpg'),(8,'Radiant Dawn','Wii',2007,'jaquette_jeu08.jpg'),(9,'Awakening','3DS',2013,'jaquette_jeu09.jpg'),(10,'Fates','3DS',2015,'jaquette_jeu10.jpg'),(11,'Echoes - Shadows of Valentia','3DS',2017,'jaquette_jeu11.jpg'),(12,'Three Houses','Nintendo Switch',2019,'jaquette_jeu12.jpg'),(13,'Engage','Nintendo Switch',2023,'jaquette_jeu13.jpg'),(14,'Heroes','Mobile',2017,'jaquette_jeu14.jpg'),(15,'Warriors','Nintendo Switch',2017,'jaquette_jeu15.jpg');
/*!40000 ALTER TABLE `jeux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnages` (
  `personnages_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du personnage',
  `personnages_photo` varchar(50) NOT NULL COMMENT 'nom de l''image',
  `personnages_nom` varchar(30) NOT NULL COMMENT 'nom du personnage',
  `personnages_affiliation` varchar(50) DEFAULT NULL COMMENT 'pays et titre honorifique du personnage',
  `personnages_classe` varchar(30) DEFAULT NULL COMMENT 'classe du personnage',
  `personnages_arme` varchar(30) DEFAULT NULL COMMENT 'arme du personnage',
  `perso_arme_prim` varchar(30) DEFAULT NULL COMMENT 'arme primaire',
  `perso_arme_second` varchar(30) DEFAULT NULL COMMENT 'arme secondaire',
  `_jeux_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`personnages_id`),
  KEY `jeux_id` (`_jeux_id`),
  CONSTRAINT `jeux_id` FOREIGN KEY (`_jeux_id`) REFERENCES `jeux` (`jeux_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnages`
--

LOCK TABLES `personnages` WRITE;
/*!40000 ALTER TABLE `personnages` DISABLE KEYS */;
INSERT INTO `personnages` VALUES (1,'photoPerso01.png','Marth','Royaumes d\'Altea','Lord','Épée','arme_epee.gif','',1),(2,'photoPerso02.png','Shiida','Royaumes de Talys (Princesse)','Chevalier Pégase','Lance','arme_lance.gif','',1),(3,'photoPerso03.png','Tiki','Dragons Divins','Manakete','Dracopierre','arme_dracopierre.gif','',1),(4,'photoPerso04.png','Sigurd','Royaume de Grannvale (Duché)','Lord Chevalier ','Lance, Épée','arme_lance.gif','arme_epee.gif',2),(5,'photoPerso05.png','Deirdre','Royaume de Grannvale (Impératrice)','Prêtresse ','Tome, Bâton','arme_tome.gif','arme_baton.gif',2),(6,'photoPerso06.png','Seliph','Royaume de Grannvale (Prince)','Lord Junior ','Épée','arme_epee.gif','',2),(7,'photoPerso07.png','Leif','Royaume de Leonster (Prince)','Lord','Épée','arme_epee.gif','',3),(8,'photoPerso08.png','Nanna','Royaume de Nordion (Princesse)','Troubadour','Épée, Bâton','arme_epee.gif','arme_baton.gif',3),(9,'photoPerso09.png','Finn','Royaume de Leonster','Chevalier','Lance','arme_lance.gif','',3),(10,'photoPerso10.png','Roy','Pherae (Marquis)','Lord','Épée','arme_epee.gif','',4),(11,'photoPerso11.png','Lilina','Ositia (Princesse)','Mage','Tome','arme_tome.gif','',4),(12,'photoPerso12.png','Sophia','Arcadia','Chaman','Tome','arme_tome.gif','',4),(13,'photoPerso13.png','Lyn','Caelin (Princesse)','Lord','Épée','arme_epee.gif','',5),(14,'photoPerso14.png','Eliwood','Pherae (Marquis)','Lord','Épée','arme_epee.gif','',5),(15,'photoPerso15.png','Hector','Ositia (Marquis)','Lord','Hache','arme_hache.gif','',5),(16,'photoPerso16.png','Eirika','Royaume de Renais (Princesse)','Lord','Épée','arme_epee.gif','',6),(17,'photoPerso17.png','Ephraim','Royaume de Renais (Prince)','Lord','Lance','arme_lance.gif','',6),(18,'photoPerso18.png','Seth','Royaume de Renais','Paladin','Lance','arme_lance.gif','',6),(19,'photoPerso19.png','Ike','Crimea (Mercenaire)','Rôdeur','Épée','arme_epee.gif','',7),(20,'photoPerso20.png','Titania','Crimea (Mercenaire)','Paladin','Hache','arme_hache.gif','',7),(21,'photoPerso21.png','Soren','Crimea (Mercenaire)','Mage','Tome','arme_tome.gif','',7),(22,'photoPerso22.png','Micaiah','Daein (Liberation Army)','Mage','Tome','arme_tome.gif','',8),(23,'photoPerso23.png','Sothe','Daein (Liberation Army)','Voleur','Dague, Épée','arme_dague.gif','arme_epee.gif',8),(24,'photoPerso24.png','Lucia','Daein (Liberation Army)','Bretteur','Épée','arme_epee.gif','',8),(25,'photoPerso25.png','Robin','Royaume d\'Ylisse (Veilleurs)','Stratège','Épée, Tome','arme_epee.gif','arme_tome.gif',9),(26,'photoPerso26.png','Chrom','Royaume d\'Ylisse (Prince)','Lord','Épée','arme_epee.gif','',9),(27,'photoPerso27.png','Lucina','?','Lord','Épée','arme_epee.gif','',9),(28,'photoPerso28.png','Cordelia','Royaume d\'Ylisse (Veilleurs)','Chevalier Pégase','Lance','arme_lance.gif','',9),(29,'photoPerso29.png','Corrin','Royaumes d\'Hoshido et de Nohr','Prince / Princesse (Nohr)','Épée, Dracopierre','arme_epee.gif','arme_dracopierre.gif',10),(30,'photoPerso30.png','Azura','Royaumes d\'Hoshido et de Nohr (Princesse)','Danceuse','Lance','arme_lance.gif','',10),(31,'photoPerso31.png','Xander','Royaumes de Nohr (Prince)','Paladin','Épée','arme_epee.gif','',10),(32,'photoPerso32.png','Ryoma','Royaumes d\'Hoshido (Prince)','Escrimeur','Épée','arme_epee.gif','',10),(33,'photoPerso33.png','Alm','Royaumes de Zofia, Délivrance (Mercenaire)','Combattant','Épée','arme_epee.gif','',11),(34,'photoPerso34.png','Celica	','Royaume de Zofia','Prêtresse','Épée, Tome','arme_epee.gif','arme_tome.gif',11),(35,'photoPerso35.png','Duma','Royaume de Rigel (Dieu, Dragons Divins)','Dieu Déchu','N/A','','',11),(36,'photoPerso36.png','Mila','Royaume de Zofia (Déesse, Dragon Divins)','N/A','N/A','','',11),(37,'photoPerso37.png','Byleth','Église de Seiros (Mercenaire, Professeur)','Roturier','Épée','arme_epee.gif','',12),(38,'photoPerso38.png','Sothis','Déesse de Fódlan','N/A','N/A','','',12),(39,'photoPerso39.png','Rhea','Église de Seiros','Archevêque','Épée','arme_epee.gif','',12),(40,'photoPerso40.png','Edelgard','Empire Adrestien (Princesse)','Noble','Hache','arme_hache.gif','',12),(41,'photoPerso41.png','Alear','Lythos','Enfant Dragon','Épée','arme_epee.gif','',13),(42,'photoPerso42.png','Veyle','?','Enfant Déchu','Tome, Dague','arme_tome.gif','arme_dague.gif',13),(43,'photoPerso43.png','Lumera','Lythos','Dragon Divin','N/A','','',13),(44,'photoPerso44.png','Sommie','Lythos (Esprit Gardien)','N/A','N/A','','',13),(45,'photoPerso45.png','Alfonse','Royaume d\'Askr (Prince)','Prince','Épée','arme_epee.gif','',14),(46,'photoPerso46.png','Sharena','Royaume d\'Askr (Princesse)','Princesse','Lance','arme_lance.gif','',14),(47,'photoPerso47.png','Veronica','Embla (Princesse)','Princesse','Tome','arme_tome.gif','',14),(48,'photoPerso48.png','Eir','Hel (Princesse)','Princesse','Dague','arme_dague.gif','',14),(49,'photoPerso49.png','Rowan','Aytolisian (Prince)','Lord','Épée','arme_epee.gif','',15),(50,'photoPerso50.png','Lianna','Aytolisian (Princesse)','Lord','Épée','arme_epee.gif','',15);
/*!40000 ALTER TABLE `personnages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-23  1:59:27
