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
-- Table structure for table `chatting`
--

DROP TABLE IF EXISTS `chatting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chatting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chatting`
--

LOCK TABLES `chatting` WRITE;
/*!40000 ALTER TABLE `chatting` DISABLE KEYS */;
INSERT INTO `chatting` VALUES (1,'Qidut','::1','#astuti :matabelo','February 20th 2013');
/*!40000 ALTER TABLE `chatting` ENABLE KEYS */;
UNLOCK TABLES;

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
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `web` varchar(255) DEFAULT NULL,
  `quote` varchar(255) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Achmad Fauzi','images/member/AchmadFauzi.jpg','Jakarta','00-00-0000','Aji',NULL,'Silahkan Isi Sendiri'),(2,'Adhari Fajriansyah','images/member/AdhariFajriansyah.jpg','Jakarta','00-00-0000','Adari',NULL,'Silhkan Isi Sendiri'),(3,'Amir Maolana','images/member/AmirMaolana.jpg','Jakarta','00-00-0000','Amir',NULL,'Silahkan Isi Sendiri'),(4,'Anggita Dian Cahyani','images/member/AnggitaDianCahyani.jpg','Jakarta','00-00-0000','Anggita',NULL,'Silahkan Isi Sendiri'),(5,'Arief Darmawan','images/member/AriefDarmawan.jpg','Jakarta','00-00-0000','Markus',NULL,'Silahkan Isi Sendiri'),(6,'Arief Setia Pambudi','images/member/AriefSetiaPambudi.jpg','Jakarta','00-00-0000','Mas Arip','http://basecampsoftware.org','Silahkan Isi Sendiri'),(7,'Arif Rahman Setiadi','images/member/ArifSetiadi.jpg','Jakarta','00-00-0000','Cimeng',NULL,'Silahkan Isi Sendiri'),(8,'Arista Primastuti','images/member/AristaPrimastuti.jpg','Jakarta','00-00-0000','Arista',NULL,'Silahkan Isi Sendiri'),(9,'Badrul Huda Mutaman','images/member/BadrulHudaMutaman.jpg','Jakarta','00-00-0000','Badrol',NULL,'Silahkan Isi Sendiri'),(10,'Edi Suryono','images/member/EdiSuryono.jpg','Jakarta','00-00-0000','Edi',NULL,'Silhkan Isi Sendiri'),(11,'Fahri','images/member/Fahri.jpg','Jakarta','00-00-0000','Fahri',NULL,'Silahkan Isi Sendiri'),(12,'Fernando Anrest','images/member/FernandoAnrest.jpg','Jakarta','00-00-0000','Nando',NULL,'Silahkan Isi Sendiri'),(13,'Frets Eric Leonardo Latupeirisa','images/member/FretsEric.jpg','Jakarta','27-12-1995','Ambon','http://E-ric.info','Silahkan Isi Sendiri'),(14,'Hendry Abi Rafdi','images/member/HendryAbiRafdi.jpg','Jakarta','25-01-1996','Hendry','http://www.the-fox.name/','Silahkan isi sendiri'),(15,'Ibnu Iman Aziz','images/member/IbnuImanAziz.jpg','Jakarta','00-00-0000','Ibnu',NULL,'Silahkan isi sendiri'),(16,'Karezky Danugraha','images/member/KarezkiDanugraha.jpg','Jakarta','19-02-1996','Karezky',NULL,'Silahkan isi sendiri'),(17,'Lericha Marianti Sitorus','images/member/LerichaMariantiSitorus.jpg','Jakarta','00-00-0000','Lericha',NULL,'Silahkan isi sendiri'),(18,'Malika Ikrimah','images/member/MalikaIkrimah.jpg','Jakarta','00-00-0000','Malika',NULL,'Silahkan isi sendiri'),(19,'Muhamad Rizqi Fadila','images/member/MuhamadRizqiFadila.jpg','Jakarta','00-00-0000','Qidut','http://www.ol-reliable.net/','Silahkan isi sendiri'),(20,'Muhammad Faqih Zulfikar','images/member/MuhammadFaqihZulfikar.jpg','Jakarta','00-00-0000','Faqih',NULL,'Silahkan isi sendiri'),(21,'Muhammad Rival Sajidin','images/member/MuhammadRivalSajidin.jpg','Jakarta','00-00-000','Rival',NULL,'Silahkan isi sendiri'),(22,'Muhammad Yudistira Kardin','images/member/MuhammadYudistiraKardin.jpg','Jakarta','00-00-0000','Yudhis',NULL,'Silahkan isi sendiri'),(35,'Sayyid Mutaqin','images/member/SayyidMutaqin.jpg','Jakarta','00-00-000','Sayyid',NULL,'Silahkan isi sendiri'),(23,'Niko Velas L.I','images/member/NikoVelas.jpg','Jakarta','00-00-0000','Niko',NULL,'Silahkan isi sendiri'),(24,'Nurul Shabrina','images/member/NurulSabrina.jpg','Jakarta','00-00-0000','Nurul',NULL,'Silahkan isi sendiri'),(25,'Prabowo Cahya A.P.D','images/member/PrabowoCahya.jpg','Jakarta','00-00-000','Bowo',NULL,'Silahkan isi sendiri'),(26,'Rahman Adi','images/member/RahmanAdi.jpg','Jakarta','00-00-0000','Adi',NULL,'Silahkan isi sendiri'),(27,'Risky Syahputra','images/member/RiskySyahputra.jpg','Jakarta','00-00-0000','Kikykids',NULL,'Silahkan isi sendiri'),(28,'Robith Saukil Islam','images/member/RobitSaukilIslam.jpg','Jakarta','00-00-0000','Ritz',NULL,'Silahkan isi sendiri'),(29,'Sadana Davin','images/member/SadanaDavin.jpg','Jakarta','00-00-0000','Sadana',NULL,'Silahkan isi sendiri'),(30,'Sari Irmayeni','images/member/SariIrmayeni.jpg','Jakarta','00-00-000','Sari',NULL,'Silahkan isi sendiri'),(31,'Sayyid Mutaqin','images/member/SayyidMutaqin.jpg','Jakarta','00-00-0000','Sayyid',NULL,'Silahkan isi sendiri'),(32,'Septianingsih','images/member/SeptiaNingsih.jpg','Jakarta','00-00-0000','Septi',NULL,'Silahkan isi sendiri'),(33,'Yara Fathan','images/member/YaraFathan.jpg','Jakarta','00-00-0000','Yara',NULL,'Silahkan isi sendiri');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `nama` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sosial_media`
--

DROP TABLE IF EXISTS `sosial_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sosial_media` (
  `id_sosial` int(3) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `jangkrik` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `kaskus` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sosial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sosial_media`
--

LOCK TABLES `sosial_media` WRITE;
/*!40000 ALTER TABLE `sosial_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `sosial_media` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-20 19:22:08
