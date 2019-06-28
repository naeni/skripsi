-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: skripsi_1
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_attribut`
--

DROP TABLE IF EXISTS `tb_attribut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_attribut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) DEFAULT NULL,
  `keterangan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_attribut`
--

LOCK TABLES `tb_attribut` WRITE;
/*!40000 ALTER TABLE `tb_attribut` DISABLE KEYS */;
INSERT INTO `tb_attribut` VALUES (1,1,'Usia 1-3 Tahun','1'),(2,1,'Usia 4- 6 Tahun','2'),(3,1,'Usia 7- 12 Tahun','3'),(4,1,'Usia 13-16 Tahun','4'),(5,1,'Usia 17 – 19 Tahun','5'),(6,2,'Pra Sekolah','1'),(7,2,'SD/MI/Paket A/SLB','2'),(8,2,'SLTP/MTS/SMLB','3'),(9,2,'SMA ','4'),(10,2,'KULIAH','5'),(11,3,'1','1'),(12,3,'2','2'),(13,3,'3','3'),(14,3,'4','4'),(15,3,'>=5','5'),(16,4,'500-700rb/bln','5'),(17,4,'701-1jt/bln','4'),(18,4,'1,01jt-1,2jt/bln','3'),(19,4,'1,201-2jt','2'),(20,4,'>=2,1jt','1'),(21,5,'0-0,5 Ha','5'),(22,5,'0,6-1,0 Ha','4'),(23,5,'1,1-1,5 Ha','3'),(24,5,'1,6-2,0 Ha','2'),(25,5,'>=2,1 Ha','1');
/*!40000 ALTER TABLE `tb_attribut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bobot`
--

DROP TABLE IF EXISTS `tb_bobot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_bobot` (
  `nilai_bobot` int(11) NOT NULL,
  `keterangan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`nilai_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bobot`
--

LOCK TABLES `tb_bobot` WRITE;
/*!40000 ALTER TABLE `tb_bobot` DISABLE KEYS */;
INSERT INTO `tb_bobot` VALUES (1,'Sangat Rendah'),(2,'Rendah'),(3,'Cukup'),(4,'Baik'),(5,'sangat Baik');
/*!40000 ALTER TABLE `tb_bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hasil`
--

DROP TABLE IF EXISTS `tb_hasil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_hasil` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_peserta` int(11) DEFAULT NULL,
  `nilai_saw` int(11) DEFAULT NULL,
  `ket_saw` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai_wp` int(11) DEFAULT NULL,
  `ket_wp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hasil`
--

LOCK TABLES `tb_hasil` WRITE;
/*!40000 ALTER TABLE `tb_hasil` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_hasil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kriteria`
--

DROP TABLE IF EXISTS `tb_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_kriteria` (
  `kd_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atribut` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai_bobot` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kd_kriteria`),
  UNIQUE KEY `atribut_UNIQUE` (`atribut`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kriteria`
--

LOCK TABLES `tb_kriteria` WRITE;
/*!40000 ALTER TABLE `tb_kriteria` DISABLE KEYS */;
INSERT INTO `tb_kriteria` VALUES (1,'Usia Anak',NULL,'20'),(2,'Pendidikan',NULL,'20'),(3,'Tanggungan',NULL,'20'),(4,'Penghasilan',NULL,'15'),(5,'Luas Sawah',NULL,'10'),(6,'Tempat Tinggal',NULL,'15');
/*!40000 ALTER TABLE `tb_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penilaian`
--

DROP TABLE IF EXISTS `tb_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_penilaian` (
  `kode_penilaian` int(11) NOT NULL,
  `no_peserta` int(11) DEFAULT NULL,
  `kd_kriteria` int(11) DEFAULT NULL,
  `angka_penilaian` int(11) DEFAULT NULL,
  `nilai_bobot` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penilaian`
--

LOCK TABLES `tb_penilaian` WRITE;
/*!40000 ALTER TABLE `tb_penilaian` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_penilaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_warga`
--

DROP TABLE IF EXISTS `tb_warga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_warga` (
  `no_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lhr` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lhr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` tinytext COLLATE utf8_unicode_ci,
  `no_tlpon` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`no_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_warga`
--

LOCK TABLES `tb_warga` WRITE;
/*!40000 ALTER TABLE `tb_warga` DISABLE KEYS */;
INSERT INTO `tb_warga` VALUES (1,'Handri','Tangerang','1996-03-26','Tangerang','081808784785','2019-06-28 18:48:27');
/*!40000 ALTER TABLE `tb_warga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_warga_attribut`
--

DROP TABLE IF EXISTS `tb_warga_attribut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_warga_attribut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_warga` int(22) DEFAULT NULL,
  `id_attribut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_warga_attribut`
--

LOCK TABLES `tb_warga_attribut` WRITE;
/*!40000 ALTER TABLE `tb_warga_attribut` DISABLE KEYS */;
INSERT INTO `tb_warga_attribut` VALUES (1,1,1),(2,1,10),(3,1,15),(4,1,20),(5,1,25),(6,1,0);
/*!40000 ALTER TABLE `tb_warga_attribut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'skripsi_1'
--

--
-- Dumping routines for database 'skripsi_1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-28 23:57:37
