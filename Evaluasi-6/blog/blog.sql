-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: phpmvc
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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'Tutorial Bootstrap 4 #1 ','pengertian-dan-pengenalan-bootstrap-4-1.png','2020-10-19 07:18:40','Tutorial Bootstrap 4 untuk Pemula: Pengenalan BS4 dan Persiapan Project\r\nSudah lama dinantikan, Bootstrap 4 akhirnya rilis versi stabil.\r\n\r\nSaya sendiri sudah mengerjakan beberapa project dengan Bootstrap 4 dan hasilnya cukup memuaskan.\r\nApa itu Bootstrap 4?\r\n\r\nBootstrap adalah framework CSS untuk membaut tampilan web. Bootstrap meneydiakan class dan komponen yang siap dipakai, sehingga kita tidak perlu menulis kode CSS dari nol.\r\n\r\nBootstrap awalnya dikembangkan oleh developer Twitter, lalu dibuat open source agar semua orang dapat berkontribusi di dalamnya.\r\n','Rijlan Pelem'),(2,'Tutorial Laravel #1','laravel1.png','2020-10-19 08:44:55','Pengertian dan Cara Install Laravel\r\n<br><br>\r\n\r\nPengertian Laravel\r\nLaravel adalah sebuah framework PHP yang sangat populer saat ini. sama seperti halnya codeigniter jika teman-teman sudah pernah mendengar tentang codeigniter, laravel dan codeigniter sama-sama merupakan framework atau kerangka kerja PHP yang dibuat untuk mempermudah para developer atau programmer dalam membangun sistem/aplikasi yang berukuran kecil, bahkan sampai sekala besar.\r\n<br><br>\r\n\r\nSampai pada saat tutorial ini dibuat, pengembangan laravel sudah mencapai versi 5.7. jadi pada seri tutorial lengkap laravel bahasa indonesia ini kita akan menggunakan Laravel versi 5.7.\r\n<br><br>\r\n\r\nTapi jangan khawatir, jika pada saat teman-teman membaca tutorial ini, jika versi laravel sudah lewat dari versi 5.7, teman-teman masih bisa mengikuti tutorial ini. karena perbedaan dari versi pengembangan laravel tidak akan jauh berbeda dari setiap versi rilis nya.\r\n<br><br>\r\n\r\n Laravel dibuat oleh Taylor Otwell, dan saat ini laravel menjadi salah satu framework PHP yang paling banyak digunakan di dunia. karena kemudahan penggunaannya, banyaknya dukungan seperti misalnya dokumentasi yang baik dan dukungan library yang lengkap. sehingga bisa kita sebut jika “Laravel seperti memanjakan penggunanya”.\r\n<br><br>\r\n\r\nLaravel juga menggunakan metode MVC (Model, View, Controller). Apa itu MVC ? MVC merupakan suatu metode untuk memisahkan bagian-bagian web aplikasi. Yang disebut dengan MODEL biasanya bagian yang berurusan dengan database. VIEW adalah bagian antarmuka atau bagian depan aplikasi, segala sesuatu yang diproses dalam sistem akan ditampilkan pada view, sedangkan CONTROLLER adalah bagian yang menangani atau mengenengahi antar model dan view, jadi controller lah yang berperan sebagai pengendali dari sebuah sistem.\r\n<br><br>\r\n\r\nSama halnya dengan semua framework PHP. Jika teman-teman masih bingung dan belum mengerti apa itu laravel, sebaiknya teman-teman lanjutkan saja membacanya, setelah masuk ke tutorial laravel selanjutnya saya yakin teman-teman pasti akan lebih mengerti tentang pengertian laravel dan kegunaan laravel.','Diki Alfarabi Hadi');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (2,'Muhammad Nasrullah Al-Ghifari','133040123','mhdnasrl@gmail.com','Backend'),(4,'Rahmat Bagus Latami','133040123','rijlanftn@gmail.com','Backend'),(6,'Rijlan Nurfatoni','123040133','fauzilazm@gmail.com','Cyber'),(9,'Irsyad Fauzan','1450401220','irfauzan@gmail.com','Hacker'),(13,'Dzul Ma\'arij','133040123','dzulmrj@gmail.com','Mobile'),(14,'Fauzil Azim','130024560','rahmatbgl@gmail.com','Frontend');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'user','password'),(2,'arul','123'),(3,'rijlan','12345'),(4,'leon','1999'),(5,'muhammad','12345');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-19 11:09:43
