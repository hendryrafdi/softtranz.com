-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: softtranz
-- ------------------------------------------------------
-- Server version	5.1.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id_member` int(3) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `web` varchar(255) DEFAULT NULL,
  `quote` varchar(255) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Achmad Fauzi','images/member/AchmadFauzi.jpg','00-00-0000','Aji',NULL,'Silahkan Isi Sendiri'),(2,'Adhari Fajriansyah','images/member/AdhariFajriansyah.jpg','00-00-0000','Adari',NULL,'Silhkan Isi Sendiri'),(3,'Amir Maolana','images/member/AmirMaolana.jpg','00-00-0000','Amir',NULL,'Silahkan Isi Sendiri'),(4,'Anggita Dian Cahyani','images/member/AnggitaDianCahyani.jpg','00-00-0000','Anggita',NULL,'Silahkan Isi Sendiri'),(5,'Arief Darmawan','images/member/AriefDarmawan.jpg','00-00-0000','Markus',NULL,'Silahkan Isi Sendiri'),(6,'Arief Setia Pambudi','images/member/AriefSetiaPambudi.jpg','00-00-0000','Mas Arip','http://basecampsoftware.org','Silahkan Isi Sendiri'),(7,'Arif Rahman Setiadi','images/member/ArifSetiadi.jpg','00-00-0000','Cimeng',NULL,'Silahkan Isi Sendiri'),(8,'Arista Primastuti','images/member/AristaPrimastuti.jpg','00-00-0000','Arista',NULL,'Silahkan Isi Sendiri'),(9,'Badrul Hudu Mutaman','images/member/BadrulHudaMutaman.jpg','00-00-0000','Badrol',NULL,'Silahkan Isi Sendiri'),(10,'Edi Suryono','images/member/EdiSuryono.jpg','00-00-0000','Edi',NULL,'Silhkan Isi Sendiri'),(11,'Fahri','images/member/Fahri.jpg','00-00-0000','Fahri',NULL,'Silahkan Isi Sendiri'),(12,'Fernando Anrest','images/member/FernandoAnrest.jpg','00-00-0000','Nando',NULL,'Silahkan Isi Sendiri'),(13,'Frets Eric Leonardo Latupeirisa','images/member/FretsEric.jpg','27-12-1995','Ambon','http://E-ric.info','Silahkan Isi Sendiri');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-19 12:42:36