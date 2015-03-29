-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: infoscreen
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Database: `infoscreen`
--
DROP DATABASE IF EXISTS `infoscreen`;
CREATE DATABASE `infoscreen` DEFAULT CHARACTER SET latin1 COLLATE latin1_danish_ci;
-- --------------------------------------------------------
USE `infoscreen`;
--

--
-- Table structure for table `IS_boxes`
--

DROP TABLE IF EXISTS `IS_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_boxes` (
  `boxID` int(11) NOT NULL AUTO_INCREMENT,
  `scheme` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `position` varchar(30) NOT NULL,
  `template` int(11) NOT NULL DEFAULT '1',
  `left` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `background` varchar(50) NOT NULL,
  `displayColor` varchar(10) NOT NULL,
  `editColor` varchar(10) NOT NULL,
  `padding` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `zindex` int(11) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`boxID`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_boxes`
--

LOCK TABLES `IS_boxes` WRITE;
/*!40000 ALTER TABLE `IS_boxes` DISABLE KEYS */;
INSERT INTO `IS_boxes` VALUES (28,3,'Splitter',0,'absolute',1,241,1005,'','1E4867','00FF00',0,35,75,3,'1'),(3,1,'Logo',0,'absolute',1,51,15,'','FFFFFF','00FF00',0,410,125,3,'1'),(23,0,'',0,'',1,0,0,'','','',0,0,0,0,'0'),(24,1,'new_layer 24',0,'absolute',1,1240,50,'','C0C0C0','FFFF00',0,5,940,10,'1'),(5,1,'Newsfeed',0,'absolute',1,275,1017,'','FCFCFC','FFAA00',0,1645,64,10,'1'),(6,1,'Ur dato',0,'absolute',1,24,1025,'','FCFCFC','FF00AA',0,209,49,6,'1'),(7,1,'Splitter',0,'absolute',1,241,1005,'','1E4867','33B4FF',0,35,75,11,'1'),(8,1,'Mødelokaler',0,'absolute',1,51,170,'','FCFCFC','999999',0,1185,856,8,'1'),(9,0,'',0,'',1,0,0,'','','',0,0,0,0,'0'),(10,1,'Reklame top',0,'absolute',1,1400,91,'','FCFCFC','FF0000',0,451,415,9,'1'),(11,1,'Reklame bund',0,'absolute',1,1400,550,'','FCFCFC','FF0000',0,451,415,10,'1'),(26,3,'Logo',0,'absolute',1,51,15,'','FFFFFF','FF0000',0,411,125,1,'1'),(27,3,'Ur dato',0,'absolute',1,23,1028,'','FCFCFC','FFFF00',0,209,49,2,'1'),(14,2,'Logo',0,'absolute',1,51,15,'','FFFFFF','00FF00',0,411,125,3,'1'),(25,2,'Divider',0,'absolute',1,1240,51,'','C0C0C0','FFFF00',0,5,940,11,'1'),(16,2,'Newsfeed',0,'absolute',1,276,1020,'','FCFCFC','FFAA00',0,1645,60,5,'1'),(17,2,'Ur dato',0,'absolute',1,23,1028,'','FCFCFC','FF00AA',0,209,49,6,'1'),(18,2,'Splitter',0,'absolute',1,241,1005,'','1E4867','999999',0,35,75,7,'1'),(19,2,'Video',0,'absolute',1,61,244,'','FCFCFC','C0FF61',0,1116,635,8,'1'),(20,0,'',0,'',1,0,0,'','','',0,0,0,0,'0'),(21,2,'Økologisk',0,'absolute',1,1428,725,'','FCFCFC','FF0000',0,300,200,9,'1'),(22,2,'Aftenensmenu',0,'absolute',1,1295,95,'','FCFCFC','4DFFF3',0,540,625,10,'1'),(29,3,'News feed',0,'absolute',1,275,1020,'','FCFCFC','0000FF',0,1645,60,4,'1'),(30,3,'Divider',0,'absolute',1,1240,51,'','C0C0C0','FFAA00',0,5,940,5,'1'),(31,3,'Aftenens menu',0,'absolute',1,1295,95,'','FCFCFC','FF00AA',0,540,625,6,'1'),(32,3,'Økologisk',0,'absolute',1,1428,725,'','FCFCFC','999999',0,300,200,7,'1'),(33,3,'Video',0,'absolute',1,61,244,'','FCFCFC','B3FFE3',0,1116,635,8,'1'),(34,4,'Logo',0,'absolute',1,51,15,'','FCFCFC','FF0000',0,411,125,1,'1'),(35,4,'Ur dato',0,'absolute',1,23,1028,'','FCFCFC','FFFF00',0,209,49,2,'1'),(36,4,'Splitter',0,'absolute',1,241,1005,'','1E4867','00FF00',0,35,75,3,'1'),(37,4,'Newsfeed',0,'absolute',1,275,1020,'','FCFCFC','0000FF',0,1645,60,4,'1'),(38,4,'Divider',0,'absolute',1,1240,51,'','C0C0C0','FFAA00',0,5,940,5,'1'),(39,4,'Fester',0,'absolute',1,152,240,'','FCFCFC','FF00AA',0,1083,763,6,'1'),(40,4,'Furesø',0,'absolute',1,53,251,'','FFFFFF','999999',0,85,85,7,'1'),(41,4,'Top agenda',0,'absolute',1,52,168,'','FCFCFC','E2FF52',0,1183,70,8,'1'),(42,4,'Mølleåen',0,'absolute',1,53,355,'','FFFFFF','FF0000',0,85,85,9,'1'),(43,4,'Bagsværdsø',0,'absolute',1,53,460,'','FFFFFF','FF0000',0,85,85,10,'1'),(44,4,'Lyngby sø',0,'absolute',1,53,565,'','FFFFFF','FF0000',0,85,85,11,'1'),(45,4,'Verandastuen',0,'absolute',1,53,670,'','FFFFFF','FF0000',0,85,85,12,'1'),(46,4,'Vejlesø',0,'absolute',1,53,775,'','FFFFFF','FF0000',0,85,85,13,'1'),(47,4,'Frederiksdal',0,'absolute',1,53,880,'','FFFFFF','FF0000',0,85,85,14,'1'),(48,4,'Reklame Top',0,'absolute',1,1400,91,'','FCFCFC','FF0000',0,451,415,15,'1'),(49,4,'Reklame bund',0,'absolute',1,1400,551,'','FCFCFC','FF0000',0,451,415,16,'1'),(50,5,'Logo',0,'absolute',1,51,15,'','fcfcfc','FF0000',0,411,125,1,'1'),(51,5,'Ur dato',0,'absolute',1,23,1028,'','fcfcfc','FFFF00',0,209,40,9,'1'),(52,5,'Diveder',0,'absolute',1,0,0,'','1e4867','00FF00',0,0,0,3,'1'),(53,5,'Splitter',0,'absolute',1,241,1005,'','1e4867','0000FF',0,35,75,4,'1'),(54,5,'Video',0,'absolute',1,0,0,'','fcfcfc','FFAA00',0,1920,1080,5,'1');
/*!40000 ALTER TABLE `IS_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_boxestemp`
--

DROP TABLE IF EXISTS `IS_boxestemp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_boxestemp` (
  `boxID` int(11) NOT NULL AUTO_INCREMENT,
  `scheme` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `position` varchar(30) NOT NULL,
  `template` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `background` varchar(50) NOT NULL,
  `displayColor` varchar(10) NOT NULL,
  `editColor` varchar(10) NOT NULL,
  `padding` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `zindex` int(11) NOT NULL,
  PRIMARY KEY (`boxID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_boxestemp`
--

LOCK TABLES `IS_boxestemp` WRITE;
/*!40000 ALTER TABLE `IS_boxestemp` DISABLE KEYS */;
/*!40000 ALTER TABLE `IS_boxestemp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_schemes`
--

DROP TABLE IF EXISTS `IS_schemes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `active` int(11) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `period` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `background` varchar(10) NOT NULL,
  `backgroundImage` varchar(200) NOT NULL,
  `imageStyle` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_schemes`
--

LOCK TABLES `IS_schemes` WRITE;
/*!40000 ALTER TABLE `IS_schemes` DISABLE KEYS */;
INSERT INTO `IS_schemes` VALUES (1,'Mødelokaler',1,'06:00:00','17:30:00',0,1920,1080,'FCFCFC','','1'),(2,'Menu',1,'16:00:00','21:00:00',0,1920,1080,'FCFCFC','','1'),(4,'Fest',0,'00:00:00','00:00:00',0,1920,1080,'FCFCFC','','1'),(3,'Menu2',0,'00:00:00','00:00:00',0,1920,1080,'FCFCFC','','1'),(5,'Test',1,'20:59:00','23:00:00',0,1920,1080,'FCFCFC','','1');
/*!40000 ALTER TABLE `IS_schemes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_systemdata`
--

DROP TABLE IF EXISTS `IS_systemdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_systemdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sdtype` tinytext NOT NULL,
  `sdvalue` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_systemdata`
--

LOCK TABLES `IS_systemdata` WRITE;
/*!40000 ALTER TABLE `IS_systemdata` DISABLE KEYS */;
INSERT INTO `IS_systemdata` VALUES (1,'zoom','75'),(2,'version','1.15CS'),(3,'reload','');
/*!40000 ALTER TABLE `IS_systemdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_templatedata`
--

DROP TABLE IF EXISTS `IS_templatedata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_templatedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxid` int(11) NOT NULL,
  `templateid` int(11) NOT NULL,
  `text1` longtext NOT NULL,
  `text2` longtext NOT NULL,
  `text3` longtext NOT NULL,
  `text4` longtext NOT NULL,
  `int1` int(11) NOT NULL,
  `int2` int(11) NOT NULL,
  `int3` int(11) NOT NULL,
  `int4` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_templatedata`
--

LOCK TABLES `IS_templatedata` WRITE;
/*!40000 ALTER TABLE `IS_templatedata` DISABLE KEYS */;
INSERT INTO `IS_templatedata` VALUES (1,3,4,'upload/images/sinatur.png','','','',0,0,0,0),(2,4,4,'upload/images/top.png','','','',0,0,0,0),(3,6,9,'','','','',0,0,0,0),(4,8,7,'<FONT color=#595959 size=7 face=arial><B>Vi byder velkommen til</B></FONT>[IS_cellsplit]<FONT color=#595959 size=7 face=arial><B>Lokale</B></FONT>[IS_cellsplit]<FONT size=6 face=arial><B>VIRKSOMHEDS KONFERENCE</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>FURESØEN</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>FOSS</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>MØLLEÅEN</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>Netværk for Division-&amp; Funktionsdirektører</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>LYNGBY SØ</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>SAMPENSION</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>BAGSVÆRD SØ</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>Ressourcecenter Ydre Nørrebro</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>VERANDASTUEN</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>DTU - Uddannelse &amp; Studerende</B></FONT>[IS_cellsplit]<SPAN style=\"COLOR: rgb(89,89,89); FONT-SIZE: xx-large\"><FONT face=arial>VEJLESØ</FONT></SPAN><BR>[IS_cellsplit]<STRONG><FONT size=6 face=Arial>Markmann Training</FONT></STRONG><BR>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>FREDERIKSDAL</FONT>[IS_cellsplit]<P align=left><FONT size=6 face=Arial><B>Ungdomsskolen</B></FONT></P>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">1A</SPAN><BR>[IS_cellsplit]<FONT size=6 face=arial><B>Incentive</B></FONT>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">1B</SPAN><BR>[IS_cellsplit]<FONT size=6 face=Arial><B>Dong Energy</B></FONT>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>1C</FONT>[IS_cellsplit]<FONT size=6></FONT>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">2A</SPAN><BR>[IS_cellsplit]<FONT size=6 face=arial><B>LEAD AUDITOR UDDANNELSE</B></FONT>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">2C</SPAN><BR>[IS_cellsplit]<FONT size=6 face=arial><B>Glostrup Hospital</B></FONT>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">2D</SPAN><BR>[IS_cellsplit]<STRONG><FONT size=6 face=Arial>Rødkilde Skole</FONT></STRONG>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">3A</SPAN><BR>[IS_cellsplit]<SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">X</SPAN><BR>[IS_cellsplit]<FONT color=#595959 size=6 face=arial>4A</FONT>[IS_cellsplit]<FONT size=6 face=arial><B>X</B></FONT>[IS_cellsplit]<BR><SPAN style=\"FONT-FAMILY: arial; COLOR: rgb(89,89,89); FONT-SIZE: xx-large\">RESTAURANT</SPAN>[IS_cellsplit]','50[IS_cellsplit]700[IS_cellsplit]300[IS_cellsplit]','[[IS_cellsplit]1[IS_cellsplit]2[IS_cellsplit]3[IS_cellsplit]5[IS_cellsplit]7[IS_cellsplit]','',17,2,0,0),(5,5,8,'http://nyhederne.tv2.dk/rss','','','',0,1,0,0),(6,10,4,'upload/images/teambuilding.png','','','',0,0,0,0),(7,11,4,'upload/images/eksklusice.png','','','',0,0,0,0),(8,17,9,'','','','',0,0,0,0),(9,14,4,'upload/images/sinatur.png','','','',0,0,0,0),(10,16,8,'http://nyhederne.tv2.dk/rss','','','',0,1,0,0),(11,15,4,'upload/images/top.png','','','',0,0,0,0),(12,19,4,'upload/images/vinglas.png','','','',0,0,0,0),(13,20,4,'upload/images/oekologogisk.png','','','',0,0,0,0),(14,21,4,'upload/images/oekologogisk.png','','','',0,0,0,0),(15,22,2,'','','','',0,0,0,1),(43,50,4,'upload/images/sinatur.png','','','',0,0,0,0),(44,51,9,'','','','',0,0,0,0),(45,54,3,'upload/movie/Sinatur_Hotel.mp4','','','',0,0,0,0),(46,10,4,'upload/images/Event_billeder_hjemmeside/Sinatur_ophold.png','','','',0,0,0,0),(21,19,3,'upload/movie/Sinatur_Hotel.mp4','','','',0,0,0,0),(16,10,4,'upload/images/eksklusice.png','','','',0,0,0,0),(17,10,6,'','','','',0,0,0,0),(18,10,6,'','','','',0,0,0,0),(19,10,4,'upload/images/eksklusice.png','','','',0,0,0,0),(20,11,4,'upload/images/teambuilding.png','','','',0,0,0,0),(22,19,7,'','','','',0,0,0,0),(23,26,4,'upload/images/sinatur.png','','','',0,0,0,0),(24,27,9,'','','','',0,0,0,0),(25,29,8,'http://nyhederne.tv2.dk/rss','','','',0,1,0,0),(26,31,2,'','','','',0,0,0,1),(27,32,4,'upload/images/oekologogisk.png','','','',0,0,0,0),(28,33,3,'upload/movie/Sinatur_Hotel.mp4','','','',0,0,0,0),(29,35,9,'','','','',0,0,0,0),(30,37,8,'http://nyhederne.tv2.dk/rss','','','',0,1,0,0),(31,34,4,'upload/images/sinatur.png','','','',0,0,0,0),(32,39,7,'<br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">FURESØEN</span><br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">Henrik</span><br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">MØLLEÅEN</span><br>[IS_cellsplit]<font color=\"#595959\" face=\"calibri\" size=\"6\">Karina &amp; Michael</font>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">BAGSVÆRD SØ</span>[IS_cellsplit]<br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">LYNGBY SØ</span><br>[IS_cellsplit]<br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">VERANDASTUEN</span><br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">Peter Hansen</span>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">VEJLESØ</span><br>[IS_cellsplit]<br>[IS_cellsplit]<span style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: xx-large;\">FREDERIKSDAL</span><br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]','85[IS_cellsplit]600[IS_cellsplit]300[IS_cellsplit]','[[IS_cellsplit]1[IS_cellsplit]2[IS_cellsplit]3[IS_cellsplit]4[IS_cellsplit]5[IS_cellsplit]6[IS_cellsplit]7[IS_cellsplit]','',8,2,0,0),(33,41,7,'<b style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: -webkit-xxx-large;\">Vi byder velkommen til</b><br>[IS_cellsplit]<b style=\"color: rgb(89, 89, 89); font-family: calibri; font-size: -webkit-xxx-large;\">Lokale</b><br>[IS_cellsplit]','50[IS_cellsplit]700[IS_cellsplit]300[IS_cellsplit]','[[IS_cellsplit]1[IS_cellsplit]','',1,2,0,0),(34,40,4,'upload/images/white.png','','','',0,0,0,0),(35,42,4,'upload/images/dk_flag.jpg','','','',0,0,0,0),(36,43,4,'upload/images/wedding.jpg','','','',0,0,0,0),(37,44,4,'upload/images/white.png','','','',0,0,0,0),(38,46,4,'upload/images/dk_flag.jpg','','','',0,0,0,0),(39,47,4,'upload/images/white.png','','','',0,0,0,0),(40,45,4,'upload/images/white.png','','','',0,0,0,0),(41,48,4,'upload/images/teambuilding.png','','','',0,0,0,0),(42,49,4,'upload/images/eksklusice.png','','','',0,0,0,0),(47,10,4,'upload/images/Event_billeder_hjemmeside/Sinatur_event.png','','','',0,0,0,0),(48,31,6,'','','','',0,0,0,0),(49,31,4,'upload/images/vinglas.png','','','',0,0,0,0),(50,8,4,'upload/images/vinglas.png','','','',0,0,0,0);
/*!40000 ALTER TABLE `IS_templatedata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_texts`
--

DROP TABLE IF EXISTS `IS_texts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textinput` text NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_texts`
--

LOCK TABLES `IS_texts` WRITE;
/*!40000 ALTER TABLE `IS_texts` DISABLE KEYS */;
INSERT INTO `IS_texts` VALUES (1,'<p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"6\" face=\"\">Marineret æblesalat med hjemmerøget lakse-pluk</font></p>\r\n<p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"6\" face=\"\">Indbagt Testrup ost med spinat</font></p>\r\n<p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"6\" face=\"\">Dansk limousine kalv marineret i Herslev øl,</font></p><p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"6\" face=\"Times New Roman\">Hertil spidskål, rødløg og sennepscreme.</font></p>\r\n<p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"6\" face=\"\">2 danske gårdoste med hjemmelavet knækbrød</font></p>\r\n<p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"5\" face=\"\"><font size=\"6\">Lun pære, bagt med karamel og hasselnødder, </font></font></p><p style=\"text-align: center;\" class=\"MsoNormal\" align=\"center\"><font size=\"5\" face=\"\"><font size=\"6\">serveret med hjemmerørt økologisk vaniljeis</font></font></p>','1');
/*!40000 ALTER TABLE `IS_texts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_timeline`
--

DROP TABLE IF EXISTS `IS_timeline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL,
  `sorting` int(11) NOT NULL,
  `delay` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_timeline`
--

LOCK TABLES `IS_timeline` WRITE;
/*!40000 ALTER TABLE `IS_timeline` DISABLE KEYS */;
INSERT INTO `IS_timeline` VALUES (1,3,1,1,0,'1'),(2,4,2,1,0,'1'),(3,6,3,1,0,'1'),(4,8,4,1,0,'1'),(5,5,5,1,0,'1'),(6,10,6,1,12000,'1'),(7,11,7,1,0,'1'),(8,17,8,1,0,'1'),(9,14,9,1,0,'1'),(10,16,10,1,0,'1'),(11,15,11,1,0,'1'),(21,19,21,1,0,'1'),(13,20,13,1,0,'1'),(14,21,14,1,0,'1'),(15,22,15,1,0,'1'),(22,19,22,2,0,'1'),(23,26,23,1,0,'1'),(24,27,24,1,0,'1'),(25,29,25,1,0,'1'),(26,31,26,1,10000,'1'),(27,32,27,1,0,'1'),(28,33,28,1,0,'1'),(29,35,29,1,0,'1'),(30,37,30,1,0,'1'),(31,34,31,1,0,'1'),(32,39,32,1,0,'1'),(33,41,33,1,0,'1'),(34,40,34,1,0,'1'),(35,42,35,1,0,'1'),(36,43,36,1,0,'1'),(37,44,37,1,0,'1'),(38,46,38,1,0,'1'),(39,47,39,1,0,'1'),(40,45,40,1,0,'1'),(41,48,41,1,0,'1'),(42,49,42,1,0,'1'),(43,50,43,1,0,'1'),(44,51,44,1,0,'1'),(45,54,45,1,0,'1'),(46,10,46,2,12000,'1'),(47,10,47,3,12000,'1');
/*!40000 ALTER TABLE `IS_timeline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_usergrouprel`
--

DROP TABLE IF EXISTS `IS_usergrouprel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_usergrouprel` (
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_usergrouprel`
--

LOCK TABLES `IS_usergrouprel` WRITE;
/*!40000 ALTER TABLE `IS_usergrouprel` DISABLE KEYS */;
INSERT INTO `IS_usergrouprel` VALUES (1,1),(2,2),(3,2),(4,3),(5,1),(6,1),(7,3),(8,2);
/*!40000 ALTER TABLE `IS_usergrouprel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_usergroups`
--

DROP TABLE IF EXISTS `IS_usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_usergroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `type1` int(11) NOT NULL,
  `type2` int(11) NOT NULL,
  `type3` int(11) NOT NULL,
  `type4` int(11) NOT NULL,
  `type5` int(11) NOT NULL,
  `type6` int(11) NOT NULL,
  `type7` int(11) NOT NULL,
  `type8` int(11) NOT NULL,
  `type9` int(11) NOT NULL,
  `type10` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_usergroups`
--

LOCK TABLES `IS_usergroups` WRITE;
/*!40000 ALTER TABLE `IS_usergroups` DISABLE KEYS */;
INSERT INTO `IS_usergroups` VALUES (1,'admin','Administratorgruppe',0,0,0,0,0,0,0,0,0,0),(2,'Recep','Reception',0,0,0,0,0,0,0,0,0,0),(3,'Tilretter','Må rette i alt',0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `IS_usergroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_userrights`
--

DROP TABLE IF EXISTS `IS_userrights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_userrights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_userrights`
--

LOCK TABLES `IS_userrights` WRITE;
/*!40000 ALTER TABLE `IS_userrights` DISABLE KEYS */;
INSERT INTO `IS_userrights` VALUES (1,1,'menu',2),(2,1,'menu',3),(3,1,'menu',4),(4,1,'menu',5),(5,1,'menu',6),(6,1,'box',1),(7,1,'box',2),(8,1,'box',3),(9,1,'box',4),(10,1,'box',5),(11,1,'box',6),(12,1,'box',7),(13,1,'box',8),(14,1,'box',9),(15,1,'box',10),(16,1,'box',11),(17,1,'box',12),(18,1,'box',13),(19,1,'box',14),(20,1,'box',15),(21,1,'box',16),(22,1,'box',17),(23,1,'box',18),(24,1,'box',19),(25,1,'box',20),(26,1,'box',21),(27,1,'box',22),(42,1,'box',34),(30,2,'box',8),(31,1,'box',23),(32,1,'box',24),(33,1,'box',25),(34,1,'box',26),(35,1,'box',27),(36,1,'box',28),(37,1,'box',29),(38,1,'box',30),(39,1,'box',31),(40,1,'box',32),(41,1,'box',33),(43,1,'box',35),(44,1,'box',36),(45,1,'box',37),(46,1,'box',38),(47,1,'box',39),(48,1,'box',40),(49,1,'box',41),(50,1,'box',42),(51,1,'box',43),(52,1,'box',44),(53,1,'box',45),(54,1,'box',46),(55,1,'box',47),(56,1,'box',48),(57,1,'box',49),(58,3,'menu',3),(59,3,'menu',4),(60,2,'box',39),(61,3,'box',39),(62,2,'box',31),(63,3,'box',31),(64,3,'box',22),(65,2,'box',22),(66,3,'box',8),(67,1,'box',50),(68,1,'box',51),(69,1,'box',52),(70,1,'box',53),(71,1,'box',54);
/*!40000 ALTER TABLE `IS_userrights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `IS_users`
--

DROP TABLE IF EXISTS `IS_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IS_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `IS_users`
--

LOCK TABLES `IS_users` WRITE;
/*!40000 ALTER TABLE `IS_users` DISABLE KEYS */;
INSERT INTO `IS_users` VALUES (1,'admin','capable','1'),(6,'henrik','Skjoldsvej4717','1'),(8,'reception','1234','1'),(7,'retter','1234','1');
/*!40000 ALTER TABLE `IS_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-29  9:28:57
