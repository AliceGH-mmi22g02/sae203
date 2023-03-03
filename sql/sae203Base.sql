-- MySQL dump 10.19  Distrib 10.3.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.29-MariaDB-0+deb10u1

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
  `jeux_jaquette` varchar(30) NOT NULL COMMENT 'jaquette du jeux',
  PRIMARY KEY (`jeux_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeux`
--

LOCK TABLES `jeux` WRITE;
/*!40000 ALTER TABLE `jeux` DISABLE KEYS */;
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
  `personnages_photo` varchar(30) NOT NULL COMMENT 'nom de l''image',
  `personnages_nom` varchar(30) NOT NULL COMMENT 'nom du personnage',
  `personnages_affiliation` varchar(50) DEFAULT NULL COMMENT 'pays et titre honorifique du personnage',
  `personnages_classe` varchar(30) DEFAULT NULL COMMENT 'classe du personnage',
  `personnages_arme` varchar(30) DEFAULT NULL COMMENT 'arme du personnage',
  `personnages_apparition` varchar(30) DEFAULT NULL COMMENT 'première apparition du personnage',
  `#jeux_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`personnages_id`),
  KEY `jeux_id` (`#jeux_id`),
  CONSTRAINT `jeux_id` FOREIGN KEY (`#jeux_id`) REFERENCES `jeux` (`jeux_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnages`
--

LOCK TABLES `personnages` WRITE;
/*!40000 ALTER TABLE `personnages` DISABLE KEYS */;
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

-- Dump completed on 2023-03-02 16:59:01
