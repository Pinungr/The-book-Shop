-- MySQL dump 10.13  Distrib 5.1.40, for Win32 (ia32)
--
-- Host: localhost    Database: obs
-- ------------------------------------------------------
-- Server version	5.1.40-community

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
-- Table structure for table `book_obs`
--

DROP TABLE IF EXISTS `book_obs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_obs` (
  `isbn` varchar(20) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `pname` varchar(30) DEFAULT NULL,
  `nop` int(11) DEFAULT NULL,
  `descr` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_obs`
--

LOCK TABLES `book_obs` WRITE;
/*!40000 ALTER TABLE `book_obs` DISABLE KEYS */;
INSERT INTO `book_obs` VALUES ('0-07-060168-2','Data Structure','0070601682.jpg',1,'Lipschutz, Seymour','TMH',484,'widely accepted and prescribed as text books for data structure in many universities',265,'4','4'),('0-07-135346-1','Programming with C++','0071353461.jpg',1,'John Hubbard','TMH',409,'One of the must read books in C++',285,'4','3'),('1-93-401525-3','Let us C','1934015253.jpg',8,'Yashwant P. Kanetkar','Infinity SciencePress',500,'This is an imported edition for Let us C',651,'4','2'),('0-07-014590-0','Programming with C','0070145900.jpg',2,'Byron Gottfried','TMH',544,'book on C',230,'4','1'),('0-07-060168-8','Think Like A Publisher','thinklikepublisher.jpg',1,'Dean Wesley','Bharti Bhawan',100,'nnnnnn',500,'1','2'),('0-07-060168-9','Think Like A Publisher-II','book1.png',2,'Dean Wesley','Bharti Bhawan',100,'fffff',500,'1','1');
/*!40000 ALTER TABLE `book_obs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_obs`
--

DROP TABLE IF EXISTS `cart_obs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_obs` (
  `isbnno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_obs`
--

LOCK TABLES `cart_obs` WRITE;
/*!40000 ALTER TABLE `cart_obs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_obs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisher_obs`
--

DROP TABLE IF EXISTS `publisher_obs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publisher_obs` (
  `pub_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) DEFAULT NULL,
  `pubaddr` varchar(50) DEFAULT NULL,
  `pemail` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `cellno` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher_obs`
--

LOCK TABLES `publisher_obs` WRITE;
/*!40000 ALTER TABLE `publisher_obs` DISABLE KEYS */;
INSERT INTO `publisher_obs` VALUES (1,'BPB','123,Jawahar lal  Nehru Road','bpb@bpbonline.com','Charu','Mehta','9866338844'),(2,'Techmedia','123, Sabderjung','t.cm@techmedia.com','Manoj','Mishra','9662234923'),(3,'Prentice hall','23, Sardar Patel Road','phi@prentice.com','Ratikant','Singh','9553377388'),(4,'','','','','',''),(5,'kk','','','','',''),(6,'Bharti Bhawan','123,Cuttack Road BBSR','bbhawan@bhartigrps.com','krishna','kaper','8984167472'),(7,'TMH','234, Okhla Industrial Estate\r\nNew Delhi ','tmh@tmhpub.com','Archana','Mahto','9856247812');
/*!40000 ALTER TABLE `publisher_obs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tran_obs`
--

DROP TABLE IF EXISTS `tran_obs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tran_obs` (
  `tran_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) DEFAULT NULL,
  `cart_date` datetime DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tran_obs`
--

LOCK TABLES `tran_obs` WRITE;
/*!40000 ALTER TABLE `tran_obs` DISABLE KEYS */;
INSERT INTO `tran_obs` VALUES (1,'anukampa','2014-01-31 00:00:00','-60177'),(2,'anukampa','2014-01-31 00:00:00','-135354'),(3,'anukampa','2014-01-31 00:00:00','-401620'),(4,'','2014-02-03 00:00:00','-401620'),(5,'','2014-02-03 00:00:00','-401620'),(6,'','2014-02-03 00:00:00','-401620'),(7,'','2014-02-03 00:00:00','-60183'),(8,'','2014-02-03 00:00:00','-60177'),(9,'','2014-02-03 00:00:00','-60183'),(10,'krish@','2014-02-03 00:00:00','-60177'),(11,'krish@','2014-02-03 00:00:00','-401620'),(12,'krish@','2014-02-03 00:00:00','-60183'),(13,'','2014-02-03 00:00:00','-401620'),(14,'','2014-02-03 00:00:00','-60183'),(15,'','2014-02-03 00:00:00','-60177'),(16,'','2014-02-03 00:00:00','-401620');
/*!40000 ALTER TABLE `tran_obs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_obs`
--

DROP TABLE IF EXISTS `user_obs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_obs` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `mstatus` varchar(30) DEFAULT NULL,
  `dobd` int(11) DEFAULT NULL,
  `dobm` varchar(30) DEFAULT NULL,
  `doby` varchar(20) DEFAULT NULL,
  `padd` varchar(100) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `secr` varchar(100) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_obs`
--

LOCK TABLES `user_obs` WRITE;
/*!40000 ALTER TABLE `user_obs` DISABLE KEYS */;
INSERT INTO `user_obs` VALUES ('','','','male','married',1,'jan','1970','','gyy','','','Enter the secret question',''),('Rasmi R.','Satapathy','rasmi.ranjan@gmail.com','male','married',26,'oct','1973','2222,Nayapalli','9437362785','Admin','citzen','2','cricket'),('Anukampa','Behera','anukampa@citzen.com','female','married',21,'oct','1976','187/A, chakeisihani','9437362785','anukampa','guddu','3','tommy'),('krishna','kaper','krishna.giftian@gmail.com','female','unmarried',8,'dec','1991','xyz','8093609823','krish@','krishna08','3','mitthu'),('Sumit','Mitra','sumit@citzen.net','male','married',18,'aug','1973','187/A, chakeisihani','9437017636','sumit','guddu','4','sarangi sir');
/*!40000 ALTER TABLE `user_obs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-06 17:21:29
