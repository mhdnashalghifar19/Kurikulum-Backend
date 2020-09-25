-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: pondokit
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
-- Table structure for table `MATERI`
--

DROP TABLE IF EXISTS `MATERI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MATERI` (
  `id_materi` int NOT NULL AUTO_INCREMENT,
  `nama_materi` varchar(50) DEFAULT NULL,
  `id_mentor` int DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `FK_MATERI` (`id_mentor`),
  CONSTRAINT `FK_MATERI` FOREIGN KEY (`id_mentor`) REFERENCES `MENTOR` (`id_mentor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MATERI`
--

LOCK TABLES `MATERI` WRITE;
/*!40000 ALTER TABLE `MATERI` DISABLE KEYS */;
INSERT INTO `MATERI` VALUES (1,'DataBase',1),(2,'ReactNative',2),(3,'JavaScript',3);
/*!40000 ALTER TABLE `MATERI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MENTOR`
--

DROP TABLE IF EXISTS `MENTOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MENTOR` (
  `id_mentor` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mentor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MENTOR`
--

LOCK TABLES `MENTOR` WRITE;
/*!40000 ALTER TABLE `MENTOR` DISABLE KEYS */;
INSERT INTO `MENTOR` VALUES (1,'Syofyan'),(2,'Wandi'),(3,'Hafif');
/*!40000 ALTER TABLE `MENTOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NILAI`
--

DROP TABLE IF EXISTS `NILAI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `NILAI` (
  `id_nilai` int NOT NULL AUTO_INCREMENT,
  `nilai` int DEFAULT NULL,
  `id_santri` int DEFAULT NULL,
  `id_materi` int DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_santri` (`id_santri`),
  KEY `id_materi` (`id_materi`),
  CONSTRAINT `NILAI_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `SANTRI` (`id_santri`),
  CONSTRAINT `NILAI_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `MATERI` (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NILAI`
--

LOCK TABLES `NILAI` WRITE;
/*!40000 ALTER TABLE `NILAI` DISABLE KEYS */;
INSERT INTO `NILAI` VALUES (1,100,2,3),(2,90,1,2),(3,80,3,1);
/*!40000 ALTER TABLE `NILAI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SANTRI`
--

DROP TABLE IF EXISTS `SANTRI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SANTRI` (
  `id_santri` int NOT NULL AUTO_INCREMENT,
  `nama_santri` varchar(50) DEFAULT NULL,
  `id_mentor` int DEFAULT NULL,
  PRIMARY KEY (`id_santri`),
  KEY `FK_SANTRI` (`id_mentor`),
  CONSTRAINT `FK_SANTRI` FOREIGN KEY (`id_mentor`) REFERENCES `MENTOR` (`id_mentor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SANTRI`
--

LOCK TABLES `SANTRI` WRITE;
/*!40000 ALTER TABLE `SANTRI` DISABLE KEYS */;
INSERT INTO `SANTRI` VALUES (1,'Fadil',1),(2,'Rijlan',3),(3,'Haka',1);
/*!40000 ALTER TABLE `SANTRI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_article` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Perkenalan PHP'),(2,'Javascript Dasar'),(3,'Python');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pivot`
--

DROP TABLE IF EXISTS `pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pivot` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int DEFAULT NULL,
  `tag_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  KEY `tag_id` (`tag_id`),
  CONSTRAINT `pivot_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  CONSTRAINT `pivot_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pivot`
--

LOCK TABLES `pivot` WRITE;
/*!40000 ALTER TABLE `pivot` DISABLE KEYS */;
INSERT INTO `pivot` VALUES (1,1,2),(2,3,1),(3,2,3);
/*!40000 ALTER TABLE `pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'Backend'),(2,'Frontend'),(3,'Web Dev');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-25  9:55:23
