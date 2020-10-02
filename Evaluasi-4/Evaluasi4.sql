-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: latihan
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Barang`
--

DROP TABLE IF EXISTS `Barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(125) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `nama_kurir` varchar(125) DEFAULT NULL,
  `nama_pengirim` varchar(125) DEFAULT NULL,
  `asal_barang` varchar(125) DEFAULT NULL,
  `tujuan_barang` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Barang`
--

LOCK TABLES `Barang` WRITE;
/*!40000 ALTER TABLE `Barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `Barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `santri`
--

DROP TABLE IF EXISTS `santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `santri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) DEFAULT NULL,
  `divisi` varchar(125) DEFAULT NULL,
  `asal` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `santri`
--

LOCK TABLES `santri` WRITE;
/*!40000 ALTER TABLE `santri` DISABLE KEYS */;
INSERT INTO `santri` VALUES (2,'Fauzil','Backend','Padang'),(4,'Rahmat','Backend','Jakarta');
/*!40000 ALTER TABLE `santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sprint4`
--

DROP TABLE IF EXISTS `sprint4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sprint4` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(125) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `nama_kurir` varchar(125) DEFAULT NULL,
  `nama_pengirim` varchar(125) DEFAULT NULL,
  `asal_barang` varchar(125) DEFAULT NULL,
  `tujuan_barang` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sprint4`
--

LOCK TABLES `sprint4` WRITE;
/*!40000 ALTER TABLE `sprint4` DISABLE KEYS */;
INSERT INTO `sprint4` VALUES (10,'Laptop',10000000,'Kurir 1','Hanif','Jakarta Selatan','Palembang'),(12,'Lemari',500000,'Kurir 5','Fauzil','Bandung','Palembang');
/*!40000 ALTER TABLE `sprint4` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-02 16:49:22
