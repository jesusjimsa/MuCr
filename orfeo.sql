-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: orfeo
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `U_attended_C`
--

DROP TABLE IF EXISTS `U_attended_C`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `U_attended_C` (
  `user_email` varchar(30) NOT NULL,
  `concert_artist` varchar(30) NOT NULL,
  `concert_date` date NOT NULL,
  `concert_city` varchar(30) NOT NULL,
  PRIMARY KEY (`user_email`,`concert_artist`,`concert_date`,`concert_city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `U_attended_C`
--

LOCK TABLES `U_attended_C` WRITE;
/*!40000 ALTER TABLE `U_attended_C` DISABLE KEYS */;
/*!40000 ALTER TABLE `U_attended_C` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `U_group`
--

DROP TABLE IF EXISTS `U_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `U_group` (
  `user_email` varchar(30) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  PRIMARY KEY (`user_email`,`group_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `U_group`
--

LOCK TABLES `U_group` WRITE;
/*!40000 ALTER TABLE `U_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `U_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `U_like_A`
--

DROP TABLE IF EXISTS `U_like_A`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `U_like_A` (
  `user_email` varchar(30) NOT NULL,
  `album_name` varchar(30) NOT NULL,
  `album_artist` varchar(30) NOT NULL,
  PRIMARY KEY (`user_email`,`album_name`,`album_artist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `U_like_A`
--

LOCK TABLES `U_like_A` WRITE;
/*!40000 ALTER TABLE `U_like_A` DISABLE KEYS */;
/*!40000 ALTER TABLE `U_like_A` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `U_like_S`
--

DROP TABLE IF EXISTS `U_like_S`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `U_like_S` (
  `user_email` varchar(30) NOT NULL,
  `song_name` varchar(30) NOT NULL,
  `song_artist` varchar(30) NOT NULL,
  PRIMARY KEY (`user_email`,`song_name`,`song_artist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `U_like_S`
--

LOCK TABLES `U_like_S` WRITE;
/*!40000 ALTER TABLE `U_like_S` DISABLE KEYS */;
/*!40000 ALTER TABLE `U_like_S` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `U_listen_A`
--

DROP TABLE IF EXISTS `U_listen_A`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `U_listen_A` (
  `user_email` varchar(30) NOT NULL,
  `album_name` varchar(30) NOT NULL,
  `album_artist` varchar(30) NOT NULL,
  PRIMARY KEY (`user_email`,`album_name`,`album_artist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `U_listen_A`
--

LOCK TABLES `U_listen_A` WRITE;
/*!40000 ALTER TABLE `U_listen_A` DISABLE KEYS */;
/*!40000 ALTER TABLE `U_listen_A` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `name` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL,
  `length` int(11) NOT NULL,
  `style` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `deluxe` tinyint(1) DEFAULT NULL,
  `year` date DEFAULT NULL,
  PRIMARY KEY (`name`,`artist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concert`
--

DROP TABLE IF EXISTS `concert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concert` (
  `artist` varchar(30) NOT NULL,
  `dateP` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`artist`,`dateP`,`city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concert`
--

LOCK TABLES `concert` WRITE;
/*!40000 ALTER TABLE `concert` DISABLE KEYS */;
/*!40000 ALTER TABLE `concert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `name` varchar(30) NOT NULL,
  `URLimage` varchar(50) DEFAULT NULL,
  `style` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `song`
--

DROP TABLE IF EXISTS `song`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `song` (
  `title` varchar(30) NOT NULL,
  `singer` varchar(30) DEFAULT NULL,
  `duration` time NOT NULL,
  `style` varchar(30) DEFAULT NULL,
  `titleAlbum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`title`),
  KEY `titleAlbum` (`titleAlbum`),
  CONSTRAINT `song_ibfk_1` FOREIGN KEY (`titleAlbum`) REFERENCES `album` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL,
  `URLimage` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2018-04-25 23:54:00
