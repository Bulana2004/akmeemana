-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: akmeemana
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `navbar`
--

DROP TABLE IF EXISTS `navbar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navbar` (
  `navId` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL,
  PRIMARY KEY (`navId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navbar`
--

/*!40000 ALTER TABLE `navbar` DISABLE KEYS */;
INSERT INTO `navbar` VALUES (1,'Home','index.php',0),(2,'AboutUs,AboutUs,Citizenship Charter','#,about.php,citizenship.php',1),(3,'Bookings','booking.php',0),(4,'Publications','publication.php',0),(5,'Services,Services,Libraries','#,service.php,library.php',1),(6,'News,Tender Notices,News Gallery','#,tenders.php,news.php',1),(7,'Application','application.php',0),(8,'Contact','contact.php',0);
/*!40000 ALTER TABLE `navbar` ENABLE KEYS */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

--
-- Table structure for table `publication`
--

DROP TABLE IF EXISTS `publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publication` (
  `id` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `section` varchar(50) NOT NULL,
  `files` varchar(1600) DEFAULT NULL,
  `des` varchar(1500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publication`
--

/*!40000 ALTER TABLE `publication` DISABLE KEYS */;
/*!40000 ALTER TABLE `publication` ENABLE KEYS */;

--
-- Table structure for table `sin_news`
--

DROP TABLE IF EXISTS `sin_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sin_news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sin_news`
--

/*!40000 ALTER TABLE `sin_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `sin_news` ENABLE KEYS */;

--
-- Table structure for table `sin_publication`
--

DROP TABLE IF EXISTS `sin_publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sin_publication` (
  `id` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `section` varchar(50) NOT NULL,
  `files` varchar(1600) DEFAULT NULL,
  `des` varchar(1600) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sin_publication`
--

/*!40000 ALTER TABLE `sin_publication` DISABLE KEYS */;
/*!40000 ALTER TABLE `sin_publication` ENABLE KEYS */;

--
-- Table structure for table `sin_tenders`
--

DROP TABLE IF EXISTS `sin_tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sin_tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sin_tenders`
--

/*!40000 ALTER TABLE `sin_tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sin_tenders` ENABLE KEYS */;

--
-- Table structure for table `sinnavbar`
--

DROP TABLE IF EXISTS `sinnavbar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sinnavbar` (
  `navid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL,
  PRIMARY KEY (`navid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sinnavbar`
--

/*!40000 ALTER TABLE `sinnavbar` DISABLE KEYS */;
INSERT INTO `sinnavbar` VALUES (1,'මුල්පිටුව','index.php',0),(2,'අපි ගැන,අපි ගැන,පුරවැසි ප්‍රඥප්තිය','#,about.php,citizenship.php',1),(3,'වෙන් කිරීම්','booking.php',0),(4,'ප්‍රකාශන','publication.php',0),(5,'සේවා, සේවා, පුස්තකාල','#,service.php,library.php',1),(6,'පුවත්,ටෙන්ඩර් දැන්වීම්,පුවත් ගැලරිය','#,tenders.php,news.php',1),(7,'යෙදුම්','application.php',0),(8,'අමතන්න','contact.php',0);
/*!40000 ALTER TABLE `sinnavbar` ENABLE KEYS */;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `paragraph` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'hq720.jpg','',''),(2,'sabawa.jpg','','');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

--
-- Table structure for table `tam_news`
--

DROP TABLE IF EXISTS `tam_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tam_news` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(600) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tam_news`
--

/*!40000 ALTER TABLE `tam_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `tam_news` ENABLE KEYS */;

--
-- Table structure for table `tam_publication`
--

DROP TABLE IF EXISTS `tam_publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tam_publication` (
  `id` int(10) NOT NULL,
  `year` int(5) NOT NULL,
  `section` varchar(50) NOT NULL,
  `files` varchar(1600) DEFAULT NULL,
  `des` varchar(1600) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`,`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tam_publication`
--

/*!40000 ALTER TABLE `tam_publication` DISABLE KEYS */;
/*!40000 ALTER TABLE `tam_publication` ENABLE KEYS */;

--
-- Table structure for table `tam_tenders`
--

DROP TABLE IF EXISTS `tam_tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tam_tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tam_tenders`
--

/*!40000 ALTER TABLE `tam_tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tam_tenders` ENABLE KEYS */;

--
-- Table structure for table `tamnavbar`
--

DROP TABLE IF EXISTS `tamnavbar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tamnavbar` (
  `navid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_dropdown` tinyint(1) NOT NULL,
  PRIMARY KEY (`navid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamnavbar`
--

/*!40000 ALTER TABLE `tamnavbar` DISABLE KEYS */;
INSERT INTO `tamnavbar` VALUES (1,'முகப்பு பக்கம்','index.php',0),(2,'எங்களைப் பற்றி, எங்களைப் பற்றி, குடியுரிமை சாசனம்','#,about.php,citizenship.php\r\n',1),(3,'முன்பதிவுகள்','booking.php',0),(4,'வெளியீடுகள்','publication.php',0),(5,'சேவைகள், சேவைகள், நூலகங்கள்','#,service.php,library.php\r\n',1),(6,'செய்தி, டெண்டர் அறிவிப்புகள், செய்தி தொகுப்பு','#,tenders.php,news.php',1),(7,'விண்ணப்பம்','application.php',0),(8,'அழைப்பு','contact.php',0);
/*!40000 ALTER TABLE `tamnavbar` ENABLE KEYS */;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` int(10) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'1111');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'akmeemana'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-02 10:29:04
