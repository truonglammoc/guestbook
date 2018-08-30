-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: guestbook
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `message` text,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (25,'Tri Truong 2','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:42:43','2018-08-30 10:47:55',0),(26,'Tri Truong  1','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:44:37','2018-08-30 10:47:49',0),(27,'Tri Truong 3','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:02','2018-08-30 10:48:02',0),(28,'Tri Truong 4','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:12','2018-08-30 10:48:12',0),(29,'Tri Truong 5','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:28','2018-08-30 10:48:28',0),(30,'Tri Truong 6','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:35','2018-08-30 10:48:35',0),(31,'Tri Truong 7','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:42','2018-08-30 10:48:42',0),(32,'Tri Truong 8','Magna laborum deserunt incididunt minim pariatur sint est deserunt consectetur ex enim dolore dolore tempor duis anim minim voluptate.','2018-08-30 10:48:51','2018-08-30 15:00:39',0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `mail_UNIQUE` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'vtriqn@gmail.com','admin','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'guestbook'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-30 15:04:43
