-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: lotayarealestate
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `interest`
--

DROP TABLE IF EXISTS `interest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `interest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `p_id` (`p_id`),
  KEY `u_id` (`u_id`),
  CONSTRAINT `interest_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  CONSTRAINT `interest_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interest`
--

LOCK TABLES `interest` WRITE;
/*!40000 ALTER TABLE `interest` DISABLE KEYS */;
INSERT INTO `interest` VALUES (11,12,1);
/*!40000 ALTER TABLE `interest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `name` varchar(128) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `sale_type` varchar(20) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `numberofrooms` decimal(2,0) DEFAULT NULL,
  `numberofbedroom` decimal(2,0) DEFAULT NULL,
  `coverphoto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('Naypyitaw','apartment','sale','55,minyekyaw swr st,yangon','11200',1,12,1,NULL),('Nay Pyi Taw','apartment','Rent','no96 maharthuka street kyitaw mingalartaungnyunt yangon','1200',2,1,1,NULL),('kyaw','apartment','Rent','30, toilet st, mingaladon township,yangon','2000',3,1,2,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',4,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',5,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',6,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',7,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',8,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',9,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',10,1,1,NULL),('Blob Floor','Condo','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','1200',11,1,1,NULL),('Mynamar','apartment','Rent','no 96 maharthuka street\r\nkyitaw\r\nyangon','2000',12,1,1,'coverphoto.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_activate` tinyint(1) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT 'normal',
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('kyaw','fuck',1,1,1,'admin',NULL),('kyawe225@gmail.com','Kyawayu2001@',1,1,2,'normal',NULL);
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

-- Dump completed on 2021-09-01 16:18:36
