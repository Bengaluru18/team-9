-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: codeforgood
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
-- Table structure for table `Feedback`
--

DROP TABLE IF EXISTS `Feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Feedback`
--

LOCK TABLES `Feedback` WRITE;
/*!40000 ALTER TABLE `Feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `Feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Moneyallocated`
--

DROP TABLE IF EXISTS `Moneyallocated`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Moneyallocated` (
  `Sid` int(11) NOT NULL,
  `Schoolname` varchar(20) DEFAULT NULL,
  `Infrastucture` int(11) DEFAULT NULL,
  `Classroom` int(11) DEFAULT NULL,
  `Health` int(11) DEFAULT NULL,
  `Acadamicsupport` int(11) DEFAULT NULL,
  `stakeholder` int(11) DEFAULT NULL,
  `teachermentorship` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Moneyallocated`
--

LOCK TABLES `Moneyallocated` WRITE;
/*!40000 ALTER TABLE `Moneyallocated` DISABLE KEYS */;
INSERT INTO `Moneyallocated` VALUES (1,'PVK',2000,3000,4000,0,1000,0),(2,'PVS',2300,0,4500,0,0,0),(3,'DPS',2300,0,4506,0,0,0);
/*!40000 ALTER TABLE `Moneyallocated` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assessment` (
  `name` varchar(20) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `plaster` varchar(20) NOT NULL,
  `water` varchar(20) NOT NULL,
  `painting` varchar(20) NOT NULL,
  `rennovation` varchar(20) NOT NULL,
  `approval` varchar(20) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
INSERT INTO `assessment` VALUES ('','','','','','','',''),('','','','','','','',''),('Vinit Shahdeo','Bad','Bad','bad','conducted','no','no',''),('Vinit Shahdeo','Bad','Bad','bad','conducted','no','no',''),('Vinit Shahdeo','Bad','Bad','bad','conducted','no','no',''),('Vinit Shahdeo','Bad','Bad','bad','conducted','no','no',''),('Vinit Shahdeo','Bad','Bad','good','conducted','no','no','hkl'),('G','Bad','Good','bad','conducted','yes','yes','FGF'),('Vinit Shahdeo','Bad','Bad','good','not conducted','no','yes','gg'),('Vinit Shahdeo','Bad','Bad','good','not conducted','yes','yes','hhhfdjfhffd'),('Jp Morgans','Bad','Good','good','not conducted','no','yes','rtee'),('Jp Morgans','Good','Bad','bad','not conducted','yes','yes','ghfg'),('Jp Morgans','Good','Bad','bad','not conducted','yes','yes','ghfg'),('Jp Morgans','Good','Bad','bad','not conducted','yes','yes','ghfg'),('Jp Morgans','Good','Bad','bad','not conducted','yes','yes','ghfg'),('Vinit Shahdeo','Bad','Bad','good','not conducted','no','yes','gg');
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataentry`
--

DROP TABLE IF EXISTS `dataentry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataentry` (
  `school` varchar(30) NOT NULL,
  `money` int(40) NOT NULL,
  `computer` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataentry`
--

LOCK TABLES `dataentry` WRITE;
/*!40000 ALTER TABLE `dataentry` DISABLE KEYS */;
INSERT INTO `dataentry` VALUES ('Vidya Bharti',30,60),('dps',40,90),('Vidya Bharti',30,60),('dps',40,90),('DPS',100,50),('VELLORE',78,45),('DPS',20000,40),('vit',50000,70);
/*!40000 ALTER TABLE `dataentry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `needassessment`
--

DROP TABLE IF EXISTS `needassessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `needassessment` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `address` varchar(300) NOT NULL,
  `totalclass` int(11) NOT NULL,
  `medium` varchar(11) NOT NULL,
  `stud_no` int(11) NOT NULL,
  `hm_name` varchar(40) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `teachermentorship` int(1) NOT NULL,
  `stakeholder` int(1) NOT NULL,
  `health` int(1) NOT NULL,
  `ngo` int(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `needassessment`
--

LOCK TABLES `needassessment` WRITE;
/*!40000 ALTER TABLE `needassessment` DISABLE KEYS */;
INSERT INTO `needassessment` VALUES (1,'Vidya Bharti Public School','Kormangala, Bangalore',12,'English',600,'Srivivasana','88708559',1,1,1,1),(2,'PVK','2nd Stage Bogadi Mysore-570026',4,'kannada',300,'Rekha','9449323916',0,1,1,0),(3,'PVS','4th Stage Nelmangla, Banglore-570026',7,'English',200,'Reshma','9449323916',0,1,0,0),(4,'DPS','4th Stage Nagarbavi, Banglore-580004',7,'English',200,'Reshma','9449323916',0,1,0,1),(5,'TTH','4th Stage Madivala, Banglore-580008',7,'English',200,'Reshma','9449323916',0,0,0,1),(6,'WTP','4th Stage Kengeri, Banglore-580028',5,'English',400,'Reshma','9449323916',1,0,0,1);
/*!40000 ALTER TABLE `needassessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources` (
  `sid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `infrastructure` varchar(20) NOT NULL,
  `classroom` varchar(20) NOT NULL,
  `health` varchar(20) NOT NULL,
  `academic` varchar(20) NOT NULL,
  `stakeholder` varchar(20) NOT NULL,
  `mentorship` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
INSERT INTO `resources` VALUES (13,'PVS','1','0','0','4','0','2'),(12,'DPS','4','2','0','2','0','4'),(12,'PVK','1','2','5','2','0','2'),(15,'TTH','1','0','5','0','0','2'),(14,'WTP','1','0','0','2','0','2');
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hm_name` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `computers` varchar(11) NOT NULL,
  `library` varchar(5) NOT NULL,
  `chemicals` varchar(5) NOT NULL,
  `water` varchar(5) NOT NULL,
  `sanitation` varchar(5) NOT NULL,
  `handwash` varchar(5) NOT NULL,
  `ngo` varchar(5) NOT NULL,
  `health` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES ('Vidya Bharti Public School','Bangalore','Srivivasana','88708559','45','yes','no','yes','yes','yes','yes','yes'),('Vinit Shahdeo','PHULSU','Vinit Shahdeo','8870855940','6','no','yes','yes','yes','yes','no','yes'),('Vinit Shahdeo','PHULSU','Vinit Shahdeo','8870855940','6','no','yes','yes','yes','yes','no','yes'),('Jp Morgans','Block, VIT University','Vinit Shahdeo','8870855940','6','no','yes','yes','yes','no','yes','no'),('Jp Chase','Ranchi','Vinit Shahdeo','7858832120','6','no','yes','no','yes','yes','no','yes');
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Vinit Shahdeo','vinitshahdeo@gmail.com','12345'),('Disha S','Dishas1211@gmail.com','15432'),('Sujay ','sujay@gmail.com','09432'),('abhishek ','abhishek@gmail.com','08342'),('aayush','aayush@gmail.com','54321');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer` (
  `name` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer`
--

LOCK TABLES `volunteer` WRITE;
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
INSERT INTO `volunteer` VALUES ('sujay','89845955678','sujayhshahdeo','karnataka','667514','vh967'),('aayush','89870855678','aayushshahdeo','karnataka','634514','vh567'),('Vinit Shahdeo','08870855940','vinishahdeo','Tamilnadu','632014','md345'),('abhishek','08870855678','abhishahdeo','karnataka','633414','md567');
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-08  6:13:54
