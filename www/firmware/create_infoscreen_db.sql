-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Vært: 10.246.17.48:3306
-- Genereringstid: 21. 02 2015 kl. 21:06:12
-- Serverversion: 5.5.41-MariaDB-1~wheezy
-- PHP-version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infoscreen`
--
DROP DATABASE IF EXISTS `infoscreen`;
CREATE DATABASE `infoscreen` DEFAULT CHARACTER SET latin1 COLLATE latin1_danish_ci;
-- --------------------------------------------------------
USE `infoscreen`;
--
-- Struktur-dump for tabellen `IS_boxes`
--

INSERT INTO `IS_boxes` (`boxID`, `scheme`, `name`, `type`, `position`, `template`, `left`, `top`, `background`, `displayColor`, `editColor`, `padding`, `width`, `height`, `zindex`, `active`) VALUES
(1, 4, 'Video', 0, 'absolute', 1, 1101, 155, '', 'undefined', 'FF0000', 0, 608, 282, 1, '1'),
(2, 4, 'Hjemmesider', 0, 'absolute', 1, 25, 631, '', 'undefined', '00FF00', 0, 1886, 442, 2, '1'),
(3, 4, 'top', 0, 'absolute', 1, 0, 0, '', 'undefined', '0000FF', 0, 1920, 155, 3, '1'),
(112, 1, 'Info', 0, 'absolute', 1, 622, 220, '', '', '00FF00', 0, 580, 840, 3, '1'),
(111, 1, 'Medlemsliste', 0, 'absolute', 1, 20, 220, '', '', 'FFFF00', 0, 580, 840, 2, '1'),
(110, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(77, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(79, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(80, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(100, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(101, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(83, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(102, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(109, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(108, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(106, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(105, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(103, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(88, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(91, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(92, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(107, 1, 'Banner', 0, 'absolute', 1, 0, 0, '', '', 'FF0000', 0, 1920, 200, 1, '1'),
(86, 4, 'new_layer 86', 0, 'absolute', 1, 64, 177, '', 'undefined', 'FF00AA', 0, 432, 301, 6, '1'),
(85, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(84, 4, 'new_layer 84', 0, 'absolute', 1, 1102, 446, '', 'undefined', 'FFAA00', 0, 450, 180, 5, '1'),
(74, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(73, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(72, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(71, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(70, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(67, 0, '', 0, '', 0, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(113, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(114, 0, '', 0, '', 1, 0, 0, '', '', '', 0, 0, 0, 0, '0'),
(115, 8, 'new_layer 115', 0, 'absolute', 1, 0, 0, '', '', 'FF0000', 0, 800, 90, 1, '1'),
(116, 8, 'new_layer 116', 0, 'absolute', 1, 9, 106, '', '', 'FFFF00', 0, 392, 476, 2, '1'),
(117, 8, 'new_layer 117', 0, 'absolute', 1, 425, 113, '', '', '00FF00', 0, 320, 240, 3, '1'),
(118, 9, 'Top box', 0, 'absolute', 1, 0, 0, '', '', 'FF0000', 0, 800, 90, 1, '1'),
(119, 9, 'Agenda', 0, 'absolute', 1, 3, 93, '', '', 'FFFF00', 0, 397, 418, 2, '1'),
(120, 9, 'new_layer 120', 0, 'absolute', 1, 405, 93, '', '', '00FF00', 0, 382, 237, 3, '1'),
(121, 9, 'new_layer 121', 0, 'absolute', 1, 12, 520, '', '', '0000FF', 0, 777, 75, 4, '1'),
(122, 10, 'Topbanner', 0, 'absolute', 1, 0, 0, '', '', 'FF0000', 0, 800, 90, 1, '1'),
(123, 10, 'new_layer 123', 0, 'absolute', 1, 1, 89, '', '', 'FFFF00', 0, 436, 414, 2, '1'),
(124, 10, 'new_layer 124', 0, 'absolute', 1, 499, 87, '', '', '00FF00', 0, 300, 200, 3, '1'),
(126, 4, 'new_layer 126', 0, 'absolute', 1, 539, 180, '', 'undefined', 'FFFF00', 0, 526, 325, 7, '1'),
(128, 4, 'new_layer 128', 0, 'absolute', 1, 305, 400, '', '5EA9FF', 'FF8636', 0, 300, 200, 8, '1'),
(129, 11, 'new_layer 129', 0, 'absolute', 1, 0, 0, '', 'FFFFFF', 'FF0000', 0, 1920, 200, 1, '1'),
(130, 11, 'udahds', 0, 'absolute', 1, 19, 211, '', 'FFB48F', 'FFFF00', 0, 911, 839, 2, '1'),
(131, 11, 'new_layer 131', 0, 'absolute', 1, 416, 595, '', '792BFF', '00FF00', 0, 972, 348, 7, '1'),
(132, 11, 'new_layer 132', 0, 'absolute', 1, 47, 303, '', 'FFFFFF', '0000FF', 0, 455, 485, 4, '1'),
(133, 11, 'new_layer 133', 0, 'absolute', 1, 1447, 775, '', 'FFE047', 'FFAA00', 0, 451, 279, 5, '1'),
(134, 11, 'new_layer 134', 0, 'absolute', 1, 563, 29, '', 'FFFFFF', 'FF00AA', 0, 741, 1048, 8, '1'),
(135, 11, 'new_layer 135', 0, 'absolute', 1, 0, 515, '', '8EFF38', '999999', 0, 1920, 51, 9, '1'),
(137, 11, 'new_layer 137', 0, 'absolute', 1, 784, 333, '', '67FF26', 'FF0000', 0, 1028, 407, 11, '1'),
(138, 12, 'new_layer 138', 0, 'absolute', 1, 48, 0, '', 'FFFFFF', 'FF0000', 0, 928, 171, 1, '1'),
(139, 12, 'new_layer 139', 0, 'absolute', 1, -127, 208, '', 'FFFFFF', 'FFFF00', 0, 440, 376, 2, '1'),
(140, 12, 'new_layer 140', 0, 'absolute', 1, 544, 553, '', 'FFFFFF', '00FF00', 0, 412, 167, 3, '1'),
(141, 12, 'new_layer 141', 0, 'absolute', 1, 16, 631, '', 'FFFFFF', '0000FF', 0, 381, 111, 4, '1'),
(142, 12, 'new_layer 142', 0, 'absolute', 1, 380, 184, '', 'FFFFFF', 'FFAA00', 0, 627, 332, 5, '1'),
(143, 13, 'BorderBox', 0, 'absolute', 1, 10, 5, '', '000000', 'FF0000', 0, 1902, 152, 2, '1'),
(144, 13, 'WhiteFront', 0, 'absolute', 1, 11, 6, '', 'FFFFFF', 'FFFF00', 0, 1900, 150, 2, '1'),
(145, 13, 'SignaturImage', 0, 'absolute', 1, 33, 31, '', 'FFFFFF', '00FF00', 0, 249, 100, 3, '1'),
(146, 13, 'Top billede', 0, 'absolute', 1, 881, 31, '', 'FFFFFF', '0000FF', 0, 1000, 100, 4, '1'),
(147, 13, 'Mødelokaler', 0, 'absolute', 1, 64, 181, '', 'FFFFFF', 'FFAA00', 0, 967, 813, 1, '1'),
(148, 13, 'RSS feed', 0, 'absolute', 1, 329, 1023, '', 'FFFFFF', 'FF00AA', 0, 1592, 51, 6, '1'),
(149, 13, 'Dato og tid', 0, 'absolute', 1, 49, 1029, '', 'FFFFFF', '999999', 0, 264, 47, 7, '1'),
(150, 13, 'Blå splitterboks', 0, 'absolute', 1, 313, 1005, '', '0022FF', '67FF26', 0, 21, 75, 8, '1'),
(155, 14, 'new_layer 155', 0, 'absolute', 1, 125, 125, '', 'FFFFFF', 'FF0000', 0, 300, 200, 1, '1'),
(152, 13, 'Teambuilding', 0, 'absolute', 1, 1480, 172, '', 'FFFFFF', 'FF0000', 0, 400, 400, 9, '1'),
(153, 13, 'Eksklusive', 0, 'absolute', 1, 1481, 591, '', 'FFFFFF', 'FF0000', 0, 400, 400, 10, '1'),
(154, 13, 'Video', 0, 'absolute', 1, 64, 704, '', 'FFFFFF', 'FF0000', 0, 449, 289, 11, '1');

-- --------------------------------------------------------

--
-- Table structure for table `IS_boxestemp`
--

DROP TABLE IF EXISTS `IS_boxestemp`;
CREATE TABLE IF NOT EXISTS `IS_boxestemp` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `IS_schemes`
--

DROP TABLE IF EXISTS `IS_schemes`;
CREATE TABLE IF NOT EXISTS `IS_schemes` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `IS_schemes`
--

INSERT INTO `IS_schemes` (`id`, `name`, `active`, `starttime`, `endtime`, `period`, `width`, `height`, `background`, `backgroundImage`, `imageStyle`) VALUES
(1, 'First design', 0, '00:00:00', '00:00:00', 0, 1920, 1080, 'FF3E30', 'upload/images/logo1.jpg', '2'),
(9, 'Rawdeal', 0, '00:00:00', '00:00:00', 0, 800, 600, 'F9FFBF', '', '1'),
(4, 'Test', 0, '00:00:00', '00:00:00', 0, 1920, 1080, 'FFFFFF', '', '1'),
(11, 'Ulrik', 1, '00:00:00', '00:00:00', 0, 1920, 1080, 'FFFFFF', '', '1'),
(10, 'Boomerang', 0, '00:00:00', '00:00:00', 0, 800, 600, 'F6FFA8', '', '1'),
(8, 'Test ny', 0, '00:00:00', '00:00:00', 0, 800, 600, 'FFF708', '', '1'),
(12, 'hotel', 0, '00:00:00', '00:00:00', 0, 1024, 768, 'FFFFFF', '', '1'),
(13, 'Sinatur', 0, '00:00:00', '00:00:00', 0, 1920, 1080, 'FFFFFF', '', '1'),
(14, 'test', 0, '00:00:00', '00:00:00', 0, 800, 600, 'FFFFFF', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `IS_systemdata`
--

DROP TABLE IF EXISTS `IS_systemdata`;
CREATE TABLE IF NOT EXISTS `IS_systemdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sdtype` tinytext NOT NULL,
  `sdvalue` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `IS_systemdata`
--

INSERT INTO `IS_systemdata` (`id`, `sdtype`, `sdvalue`) VALUES
(1, 'reload', ''),
(2, 'version', '1.10'),
(4, 'zoom', '75');

-- --------------------------------------------------------

--
-- Table structure for table `IS_templatedata`
--

DROP TABLE IF EXISTS `IS_templatedata`;
CREATE TABLE IF NOT EXISTS `IS_templatedata` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `IS_templatedata`
--

INSERT INTO `IS_templatedata` (`id`, `boxid`, `templateid`, `text1`, `text2`, `text3`, `text4`, `int1`, `int2`, `int3`, `int4`) VALUES
(1, 2, 1, 'http://www.qsd.dk', '', '', '', 0, 0, 0, 0),
(2, 2, 1, 'http://www.capable.dk', '', '', '', 0, 0, 0, 0),
(3, 2, 2, 'JEG ER FUCKING SEJ!!!! dfkgs ægæld kgæls gkælgæklgsælkg kælgsgælkfd', 'up', '', '', 0, 0, 0, 1),
(4, 1, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(5, 3, 4, 'upload/images/logo1.jpg', '', '', '', 1920, 0, 0, 0),
(17, 112, 1, 'http://www.capable.dk/agenda.htm', '', '', '', 0, 0, 0, 0),
(6, 2, 1, 'http://www.qsd.dk', '', '', '', 0, 0, 0, 0),
(12, 86, 2, 'Test mig ... kom så virk for en i hule ........', 'left', '', '', 0, 2, 0, 2),
(11, 84, 2, 'ULRIK er lidt sej...', 'left', '', '', 0, 4, 0, 3),
(13, 81, 2, '', '', '', '', 0, 0, 0, 0),
(14, 86, 3, '', '', '', '', 0, 0, 0, 0),
(15, 112, 2, '', '', '', '', 0, 0, 0, 0),
(16, 111, 2, '', 'up', '', '', 0, 2, 0, 2),
(33, 3, 6, '', '', '', '', 0, 0, 0, 0),
(18, 115, 4, 'upload/images/boomerrang.jpg', '', '', '', 0, 0, 0, 0),
(19, 116, 2, '', 'up', '', '', 0, 2, 0, 1),
(20, 116, 1, 'http://www.capable.dk/agenda.htm', '', '', '', 0, 0, 0, 0),
(21, 117, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(22, 118, 4, 'upload/images/boomerrang.jpg', '', '', '', 0, 0, 0, 0),
(23, 119, 1, '../onscreen/upload/link/agenda.htm', '', '', '', 0, 0, 0, 0),
(24, 119, 2, '', 'up', '', '', 0, 2, 0, 1),
(25, 120, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(26, 121, 2, '', '', '', '', 0, 1, 0, 5),
(27, 121, 2, '', '', '', '', 0, 0, 0, 6),
(28, 122, 4, 'upload/images/boomerrang.jpg', '', '', '', 0, 0, 0, 0),
(29, 123, 1, 'http://www.capable.dk/agenda.htm', '', '', '', 0, 0, 0, 0),
(30, 123, 2, '', 'up', '', '', 0, 2, 0, 4),
(31, 124, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(32, 122, 4, 'upload/images/logo1.jpg', '', '', '', 0, 0, 0, 0),
(34, 3, 6, 'upload/images/boomerrang.jpg', '', '', '', 0, 0, 0, 0),
(35, 3, 6, '', '', '', '', 0, 0, 0, 0),
(36, 123, 6, 'onscreen/upload/images/hus', '', '', '', 0, 0, 0, 0),
(37, 125, 6, 'onscreen/upload/images/hus', '', '', '', 0, 0, 0, 0),
(38, 125, 7, 'fsdffsdf<br>[IS_cellsplit]<b>fdsfs</b><br>[IS_cellsplit]<i>fdsfsd</i><br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]', '100[IS_cellsplit]300[IS_cellsplit]200[IS_cellsplit]250[IS_cellsplit]', '', '', 3, 3, 0, 0),
(39, 125, 2, '', '', '', '', 0, 0, 0, 2),
(40, 126, 2, '', '', '', '', 0, 1, 0, 3),
(41, 126, 7, 'ewterwt<br>[IS_cellsplit]erterwte<br>[IS_cellsplit]', '100[IS_cellsplit]300[IS_cellsplit]300[IS_cellsplit]', '', '', 1, 2, 0, 0),
(42, 126, 6, 'onscreen/upload/images/sne', '', '', '', 5, 0, 0, 0),
(43, 126, 6, '', '', '', '', 0, 0, 0, 0),
(44, 126, 7, '10:00 - 11:00<br>[IS_cellsplit]Sportsstævne<br>[IS_cellsplit]', '100[IS_cellsplit]200[IS_cellsplit]200[IS_cellsplit]', '', '', 1, 2, 0, 0),
(45, 129, 4, 'upload/images/logo1.jpg', '', '', '', 0, 0, 0, 0),
(46, 130, 6, 'onscreen/upload/images/hus', '', '', '', 3, 0, 0, 0),
(47, 131, 2, '', 'up', '', '', 0, 3, 0, 1),
(48, 131, 1, 'http://www.rdhuset.dk', '', '', '', 0, 0, 0, 0),
(49, 132, 7, 'weiuyroiuwqeyriuwqehfwe<br>rf<br>wer<br>we¨rwer<br>[IS_cellsplit]rweqrqwejroiweqrhpoweqhrfq<br>er<br>f<br>er<br>fe<br>rw<br>[IS_cellsplit]ferqwferwfer<br>w<br>f<br>ewr<br>f<br>erw<br>[IS_cellsplit]frewferwferwfer<br><div>gfdg</div><div>dfsg</div><div>dsg</div><div>fdsg</div><div>sfdgs</div><div>d</div>[IS_cellsplit]ferwf<br>[IS_cellsplit]erwferwfe<br>[IS_cellsplit]', '100[IS_cellsplit]300[IS_cellsplit]400[IS_cellsplit]', '', '', 3, 2, 0, 0),
(50, 133, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(51, 131, 6, 'onscreen/upload/images/sne', '', '', '', 10, 0, 0, 0),
(52, 134, 1, 'http://www.capable.dk', '', '', '', 0, 0, 0, 0),
(53, 133, 4, '', '', '', '', 0, 0, 0, 0),
(54, 133, 2, '', '', '', '', 0, 0, 0, 0),
(55, 133, 4, '', '', '', '', 0, 0, 0, 0),
(56, 135, 4, '', '', '', '', 0, 0, 0, 0),
(57, 135, 2, '', '', '', '', 0, 0, 0, 6),
(58, 135, 7, 'dqwd<br>[IS_cellsplit]<font color="#FF3366">qweqw</font><br>[IS_cellsplit]ewqe<br>[IS_cellsplit]qw<br>[IS_cellsplit]', '100[IS_cellsplit]200[IS_cellsplit]200[IS_cellsplit]', '', '', 2, 2, 0, 0),
(59, 137, 2, '', 'left', '', '', 0, 1, 0, 7),
(60, 135, 8, 'http://nyhederne.tv2.dk/rss', 'left', '', '', 0, 2, 0, 0),
(62, 139, 7, '<b><font size="5">Mølleåen</font></b>[IS_cellsplit]Dansk lærerforening[IS_cellsplit]Varandastuen[IS_cellsplit]<br>[IS_cellsplit]Furesøen[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]', '20[IS_cellsplit]200[IS_cellsplit]400[IS_cellsplit]', '', '', 10, 2, 0, 0),
(61, 138, 4, 'upload/images/sinatur.png', '', '', '', 0, 0, 0, 0),
(63, 139, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(64, 137, 4, 'upload/images/logo1.jpg', '', '', '', 0, 0, 0, 0),
(65, 139, 2, '', '', '', '', 0, 0, 0, 0),
(66, 139, 3, 'upload/movie/Chrome_ImF.mp4', '', '', '', 0, 0, 0, 0),
(67, 140, 1, 'http://www.capable.dk', '', '', '', 0, 0, 0, 0),
(68, 139, 9, '', '', '', '', 0, 0, 0, 0),
(69, 139, 9, '', '', '', '', 0, 0, 0, 0),
(70, 141, 9, '', '', '', '', 0, 0, 0, 0),
(71, 142, 7, 'Test[IS_cellsplit]123 super[IS_cellsplit]Næste møde[IS_cellsplit]Hvem kommer[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]', '100[IS_cellsplit]100[IS_cellsplit]200[IS_cellsplit]', '[[IS_cellsplit]1[IS_cellsplit]', '', 3, 2, 0, 0),
(72, 144, 4, 'upload/images/sinatur.png', '', '', '', 0, 0, 0, 0),
(73, 145, 4, 'upload/images/sinatur.png', '', '', '', 0, 0, 0, 0),
(74, 146, 4, 'upload/images/top.png', '', '', '', 0, 0, 0, 0),
(75, 147, 7, '<p class="MsoNormal"><span style="font-size: 28pt; line-height: 44.4266662597656px; font-family: Calibri; color: rgb(166, 166, 166); font-weight: bold;" lang="da">Vi byder velkommen til</span></p>[IS_cellsplit]<p class="MsoNormal"><br></p>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>TEVA Danmark A/S</b></span></font>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>FURESØ</b></span></font>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>ISS Facility Service A/S</b></span></font>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>MØLLEÅEN</b></span></font>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>DIS - Danish International Students</b></span></font>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>LYNGBY SØ</b></span></font>[IS_cellsplit]<span style="color: rgb(166, 166, 166); font-family: Calibri; font-size: 24px; font-weight: bold; line-height: 28.5599994659424px;">SDC A/S</span><br>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>VERANDASTUEN</b></span></font>[IS_cellsplit]<br>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>BAGSVÆRD SØ</b></span></font>[IS_cellsplit]<br>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>2C</b></span></font>[IS_cellsplit]<br>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>2D</b></span></font>[IS_cellsplit]<br>[IS_cellsplit]<font color="#a6a6a6" face="Calibri"><span style="font-size: 24px; line-height: 28.5599994659424px;"><b>VEJLESØ</b></span></font>[IS_cellsplit]<br>[IS_cellsplit]<span style="color: rgb(166, 166, 166); font-family: Calibri; font-size: 24px; font-weight: bold; line-height: 28.5599994659424px;">FREDERIKSDAL</span><br>[IS_cellsplit]', '50[IS_cellsplit]600[IS_cellsplit]400[IS_cellsplit]', '[[IS_cellsplit]1[IS_cellsplit]3[IS_cellsplit]4[IS_cellsplit]5[IS_cellsplit]', '', 10, 2, 0, 0),
(78, 151, 2, '', 'up', '', '', 0, 0, 0, 8),
(79, 152, 4, 'upload/images/teambuilding.png', '', '', '', 0, 0, 0, 0),
(80, 153, 4, 'upload/images/eksklusice.png', '', '', '', 0, 0, 0, 0),
(81, 154, 3, 'upload/movie/sinatur.mp4', '', '', '', 0, 0, 0, 0),
(82, 147, 4, 'upload/images/capable.jpg', '', '', '', 0, 0, 0, 0),
(83, 147, 4, 'upload/images/capable.jpg', '', '', '', 0, 0, 0, 0),
(84, 155, 3, '', '', '', '', 0, 0, 0, 0),
(85, 155, 4, 'upload/images/capable.jpg', '', '', '', 0, 0, 0, 0),
(86, 155, 7, '<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]<br>[IS_cellsplit]', '50[IS_cellsplit]400[IS_cellsplit]400[IS_cellsplit]', '[[IS_cellsplit]', '', 2, 2, 0, 0),
(87, 155, 2, '', '', '', '', 0, 0, 0, 0),
(88, 155, 6, '', '', '', '', 0, 0, 0, 0),
(89, 155, 8, '', '', '', '', 0, 0, 0, 0),
(90, 155, 1, '', '', '', '', 0, 0, 0, 0),
(76, 149, 9, '', '', '', '', 0, 0, 0, 0),
(77, 148, 8, 'http://nyhederne.tv2.dk/rss', '', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `IS_texts`
--

DROP TABLE IF EXISTS `IS_texts`;
CREATE TABLE IF NOT EXISTS `IS_texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textinput` text NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `IS_texts`
--

INSERT INTO `IS_texts` (`id`, `textinput`, `active`) VALUES
(1, '<b><font size="4">VELKOMMEN&nbsp;</font></b><div><br></div><div><b>Omklædning 1:</b></div><div>HERRER</div><div><b><br></b></div><div><b>Omklædning 2:</b></div><div>DAMER</div><div><br></div><div>jkfhdaslgkhsdfkgsfdjkgh djkgf</div><div>dfsg</div><div>sdfgfdg</div><div>dfsg</div><div>sfdg</div><div>s</div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div>HEJ GEJ GEJGE JGEJGEJ</div><div><br></div><div><br></div><div><br></div><div>yrtyrtyrty</div>', '1'),
(7, 'TEST!!!!! SCROL<div><br></div><div>SCROLL SCROLL</div><div><br></div><div><br></div><div><br></div><div>fsdjkalfhslfdkægjfda''hgsdjhdksfh''h''sdg¨dfg</div><div>fdsg</div><div>fdg</div><div><br></div><div>g</div><div>fdg</div><div>sfdg</div><div>sfdg</div>', '1'),
(2, '<p>321424124321423<br>fsdafsadfsdafsadfsd</p><p>&nbsp;</p>', '1'),
(3, '<p>fsdfsfsdfstrettertwtrewttwer</p><p>t</p><p>rewt</p><p>erwtert</p><p>trw</p><p>t</p>', '1'),
(4, '<table width="813" style="width: 609pt; border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0">\r\n\r\n <colgroup><col width="215" style="width: 161pt; mso-width-source: userset; mso-width-alt: 7862;">\r\n <col width="143" style="width: 107pt; mso-width-source: userset; mso-width-alt: 5229;">\r\n <col width="256" style="width: 192pt; mso-width-source: userset; mso-width-alt: 9362;">\r\n <col width="199" style="width: 149pt; mso-width-source: userset; mso-width-alt: 7277;">\r\n <tbody><tr height="20" style="height: 15pt;">\r\n  <td width="813" height="20" class="xl70" style="border: 0px windowtext; width: 609pt; height: 15pt; background-color: transparent;" colspan="4"><strong><font face="Calibri" size="3">Medlemmer\r\n  i Sorø-gruppe 1 i Boomerang<br></font></strong></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl66" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><strong><font face="Calibri" size="3">Firma</font></strong></td>\r\n  <td class="xl66" style="border: 0px windowtext; background-color: transparent;"><strong><font face="Calibri" size="3">Navn</font></strong></td>\r\n  <td class="xl66" style="border: 0px windowtext; background-color: transparent;"><strong><font face="Calibri" size="3">Branche</font></strong></td>\r\n  <td class="xl66" style="border: 0px windowtext; background-color: transparent;"><strong><font face="Calibri" size="3">Mail</font></strong></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Advodan</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Jacob B. Madsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Advokat</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:jabm@advodan.dk"><span style="color: windowtext;"><font face="Calibri" size="3">jabm@advodan.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Allan Hebo</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Iværksætter</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:admin@heboit.dk"><span style="color: windowtext;"><font face="Calibri" size="3">admin@heboit.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">AM Marketing</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Mie Levy Kortsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Freelance marketing</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:mie@ammarketing.dk"><span style="color: windowtext;"><font face="Calibri" size="3">mie@ammarketing.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Bogføringsværkstedet</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Lotte Sennenwaldt</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Bogføring</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:lotte@bogfoerings-vaerksted.dk"><span style="color: windowtext;"><font face="Calibri" size="3">lotte@bogfoerings-vaerksted.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Boutique Yvonne</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Yvonne Uldahl</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Modetøj til den voksne pige</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:uldahl@mail.tele.dk"><span style="color: windowtext;"><font face="Calibri" size="3">uldahl@mail.tele.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Butik Havehuset</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Lotte Jensen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Ting til hus og have</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:kontakt@butikhavehuset.dk"><span style="color: windowtext;"><font face="Calibri" size="3">kontakt@butikhavehuset.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Capable IT</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Michael Lykkegaard</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:michael.lykkegaard@capable.dk"><span style="color: windowtext;"><font face="Calibri" size="3">michael.lykkegaard@capable.dk</font></span></a></td>\r\n </tr>\r\n <tr height="60" style="height: 45pt;">\r\n  <td height="60" class="xl65" style="border: 0px windowtext; height: 45pt; background-color: transparent;"><font face="Calibri" size="3">Chokoman</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Jørgen Gornitzka</font></td>\r\n  <td width="256" class="xl69" style="border: 0px windowtext; width: 192pt; background-color: transparent;"><font size="3"><font face="Calibri"><strong>Chokoladeoplevelser</strong><font class="font5"> i form af smagninger, teambuilding og kurser i fyldt chokolade\r\n  og flødeboller</font></font></font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:chokoman@chokoman.dk"><span style="color: windowtext;"><font face="Calibri" size="3">chokoman@chokoman.dk</font></span></a></td>\r\n </tr>\r\n <tr height="40" style="height: 30pt;">\r\n  <td height="40" class="xl65" style="border: 0px windowtext; height: 30pt; background-color: transparent;"><font face="Calibri" size="3">CostCutterCompany</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Carsten Lund</font></td>\r\n  <td width="256" class="xl68" style="border: 0px windowtext; width: 192pt; background-color: transparent;"><font face="Calibri" size="3">Kontraktstyring &amp; Rådgivning\r\n  vedr. besparelser på indirekte omkostninger</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:cl@cc-company.dk"><span style="color: windowtext;"><font face="Calibri" size="3">cl@cc-company.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Danbolig Sorø</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Else Jürgensen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Ejendomsmægler</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:else.jurgensen@danbolig.dk"><span style="color: windowtext;"><font face="Calibri" size="3">else.jurgensen@danbolig.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Deloitte</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Morten Kristiansen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Revision</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:mkristiansen@deloitte.dk"><span style="color: windowtext;"><font face="Calibri" size="3">mkristiansen@deloitte.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">DesignMekker</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Esben Søltoft</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:designmekker@designmekker.dk"><span style="color: windowtext;"><font face="Calibri" size="3">designmekker@designmekker.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">DL Net</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Johannes Dahl Lumholt</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Online Markedsføring</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:johannes@dl-net.dk"><span style="color: windowtext;"><font face="Calibri" size="3">johannes@dl-net.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">DSV Transport</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Henrik Christoffersen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:henrik.christoffersen@dsvtransport.dk"><span style="color: windowtext;"><font face="Calibri" size="3">henrik.christoffersen@dsvtransport.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Ergolet</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Dan Betak</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Hjælpemidler</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:dbe@ergolet.dk"><span style="color: windowtext;"><font face="Calibri" size="3">dbe@ergolet.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Eva Biehe</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Psykoterapeut</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:eva@biehe.dk"><span style="color: windowtext;"><font face="Calibri" size="3">eva@biehe.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Farmers Marked</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Dinny Rebild</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:sdrebild@gmail.com"><span style="color: windowtext;"><font face="Calibri" size="3">sdrebild@gmail.com</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Hartmanns</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Carsten Madsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Rekruttering</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:carsten.madsen@hartmanns.dk"><span style="color: windowtext;"><font face="Calibri" size="3">carsten.madsen@hartmanns.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Haverefugiet</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Ella Hilker</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">emh@haverefugiet.dk</font></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">If Forsikring</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font size="3"><font face="Calibri">Morten Busk<span style="mso-spacerun: yes;">&nbsp;</span></font></font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Privat forsikring</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:mob@if-viborg.dk"><span style="color: windowtext;"><font face="Calibri" size="3">mob@if-viborg.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">IF forsikring</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Tina Bech</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Erhvervsforsikring</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:tina.bech@if.dk"><span style="color: windowtext;"><font face="Calibri" size="3">tina.bech@if.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Jeanette Bernholm</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Jeannette Bernholm</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Mobil frisør</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:jb@jeanettebernholm.dk"><span style="color: windowtext;"><font face="Calibri" size="3">jb@jeanettebernholm.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Jens Essendrop</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Jens Essendrop</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Reklamefotograf</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:essendrop@mac.com"><span style="color: windowtext;"><font face="Calibri" size="3">essendrop@mac.com</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Kongskilde Friluftsgård</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Renè de la Cruz</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Restauration og festlokaler</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:rc@d-kf.dk"><span style="color: windowtext;"><font face="Calibri" size="3">rc@d-kf.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Lemann Grafisk</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Preben Lemann</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Trykkeri</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:lemann.grafisk@gmail.com"><span style="color: windowtext;"><font face="Calibri" size="3">lemann.grafisk@gmail.com</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">LL Services</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Lotte Brøns</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><u><font face="Calibri" size="3">Salgskonsulent og havedesigner</font></u></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:info@luxuslife.dk"><span style="color: windowtext;"><font face="Calibri" size="3">info@luxuslife.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Lyse Rum</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Helle Nielsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Indretningsarkitekt</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:helle@lyserum.dk"><span style="color: windowtext;"><font face="Calibri" size="3">helle@lyserum.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Mads Massør</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Mads Krøyer</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Massør</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:post@madsmassor.dk"><span style="color: windowtext;"><font face="Calibri" size="3">post@madsmassor.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">MB Sikring</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Michael Bøje</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Alarmer</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:mb@mb-sikring.dk"><span style="color: windowtext;"><font face="Calibri" size="3">mb@mb-sikring.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Nordea Dianalund</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Marianne Klærke</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Bank/Privatkunder</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:marianne.klaerke@nordea.dk"><span style="color: windowtext;"><font face="Calibri" size="3">marianne.klaerke@nordea.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Nowweb</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Brian Rønnow</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Udformning af hjemmesider</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:info@nowweb.dk"><span style="color: windowtext;"><font face="Calibri" size="3">info@nowweb.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Ny Kropsholdning</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Tina Madsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Rolf metode terapeut/ bindevævsmassage</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:info@nykropsholdning.dk"><span style="color: windowtext;"><font face="Calibri" size="3">info@nykropsholdning.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Ostenfeld Biler</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Carsten Ostenfeld</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Reparation og salg af biler</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:salg@ostenfeld-biler.dk"><span style="color: windowtext;"><font face="Calibri" size="3">salg@ostenfeld-biler.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Porskrog Consult</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Michael Porskrog</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Auditør</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:michael@porskrog.dk"><span style="color: windowtext;"><font face="Calibri" size="3">michael@porskrog.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Renskib</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Martin Massenberg</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Bådplejeprodukter m.v.</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:info@renskib.dk"><span style="color: windowtext;"><font face="Calibri" size="3">info@renskib.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Satisfactor</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Susanne Bauerfeind</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">HR</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:sb@satisfactor.dk"><span style="color: windowtext;"><font face="Calibri" size="3">sb@satisfactor.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Sonja Petersen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Sonja Petersen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Oversættelse og undervisning (tysk/dansk)</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:sonja@sonjas.dk"><span style="color: windowtext;"><font face="Calibri" size="3">sonja@sonjas.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Soraya Hudpleje</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Helle Jensen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Alternativ Hudpleje</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:sorayahudpleje@hotmail.com"><span style="color: windowtext;"><font face="Calibri" size="3">sorayahudpleje@hotmail.com</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Sorø Event &amp; Turist</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Jesper Nygård</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Event og Turisme</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:jesper@soroeturisme.dk"><span style="color: windowtext;"><font face="Calibri" size="3">jesper@soroeturisme.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Sorø Kommune</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Birgitte Nielsen</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Konsulent</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:bini@soroe.dk"><span style="color: windowtext;"><font face="Calibri" size="3">bini@soroe.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Sorø Kommune</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Peter Fjerring</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Udviklingskonsulent</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:pefj@soroe.dk"><span style="color: windowtext;"><font face="Calibri" size="3">pefj@soroe.dk</font></span></a></td>\r\n </tr>\r\n <tr height="20" style="height: 15pt;">\r\n  <td height="20" class="xl65" style="border: 0px windowtext; height: 15pt; background-color: transparent;"><font face="Calibri" size="3">Topp Salg</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Malene Topp</font></td>\r\n  <td class="xl65" style="border: 0px windowtext; background-color: transparent;"><font face="Calibri" size="3">Telesalg og Mødebooking</font></td>\r\n  <td class="xl67" style="border: 0px windowtext; background-color: transparent;"><a href="mailto:malene@toppsalg.dk"><span style="color: windowtext;"><font face="Calibri" size="3">malene@toppsalg.dk</font></span></a></td>\r\n </tr>\r\n\r\n</tbody></table>', '1'),
(6, '<br>Test af helt ny tekst', '1'),
(5, '<p align="left">Fantastiske Toyota :-)</p>', '1'),
(8, '<p class="MsoNormal"><span lang="da" style="font-size:\r\n28.0pt;line-height:119%;font-family:Calibri;color:#A6A6A6;mso-style-textfill-type:\r\nsolid;mso-style-textfill-fill-color:#A6A6A6;mso-style-textfill-fill-alpha:100%;\r\nfont-weight:bold;language:da;mso-ansi-language:da;mso-ligatures:none">Vi byder velkommen til</span><span lang="da" style="font-size:28.0pt;line-height:119%;font-family:Calibri;\r\ncolor:#A6A6A6;mso-style-textfill-type:solid;mso-style-textfill-fill-color:#A6A6A6;\r\nmso-style-textfill-fill-alpha:100%;font-weight:bold;language:da;mso-ligatures:\r\nnone"><o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><br></p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `IS_timeline`
--

DROP TABLE IF EXISTS `IS_timeline`;
CREATE TABLE IF NOT EXISTS `IS_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL,
  `sorting` int(11) NOT NULL,
  `delay` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

--
-- Dumping data for table `IS_timeline`
--

INSERT INTO `IS_timeline` (`id`, `boxid`, `dataid`, `sorting`, `delay`, `active`) VALUES
(127, 2, 6, 4, 10000, '1'),
(2, 2, 2, 2, 10000, '1'),
(3, 2, 3, 3, 10000, '1'),
(4, 1, 4, 1, 0, '1'),
(5, 3, 5, 1, 0, '1'),
(179, 137, 59, 1, 0, '1'),
(180, 135, 60, 1, 0, '1'),
(172, 134, 52, 1, 0, '1'),
(171, 131, 51, 3, 20000, '1'),
(170, 133, 50, 1, 0, '1'),
(169, 132, 49, 1, 0, '1'),
(168, 131, 48, 2, 10000, '1'),
(167, 131, 47, 1, 610000, '1'),
(166, 130, 46, 1, 0, '1'),
(165, 129, 45, 1, 0, '1'),
(162, 126, 42, 3, 30000, '1'),
(164, 126, 44, 4, 600000, '1'),
(159, 125, 39, 3, 1000, '1'),
(156, 123, 36, 3, 10000, '1'),
(155, 3, 35, 2, 1000, '1'),
(152, 122, 32, 2, 10000, '1'),
(151, 124, 31, 1, 0, '1'),
(150, 123, 30, 2, 40000, '1'),
(149, 123, 29, 1, 20000, '1'),
(148, 122, 28, 1, 10000, '1'),
(147, 121, 27, 2, 1000, '1'),
(146, 121, 26, 1, 0, '1'),
(145, 120, 25, 1, 0, '1'),
(144, 119, 24, 2, 40000, '1'),
(143, 119, 23, 1, 620000, '1'),
(142, 118, 22, 1, 0, '1'),
(141, 117, 21, 1, 0, '1'),
(140, 116, 20, 2, 20000, '1'),
(139, 116, 19, 1, 40000, '1'),
(138, 115, 18, 1, 0, '1'),
(137, 112, 17, 2, 20000, '1'),
(135, 112, 15, 1, 20000, '1'),
(133, 81, 13, 1, 1000, '1'),
(131, 84, 11, 2, 10000, '1'),
(132, 86, 12, 1, 10000, '1'),
(136, 111, 16, 1, 2401000, '1'),
(128, 7, 11, 2, 10000, '1'),
(181, 138, 61, 1, 0, '1'),
(185, 139, 65, 1, 50000, '1'),
(184, 137, 64, 2, 0, '1'),
(186, 139, 66, 2, 10000, '1'),
(187, 140, 67, 1, 0, '1'),
(188, 139, 68, 3, 0, '1'),
(190, 141, 70, 1, 0, '1'),
(191, 142, 71, 1, 0, '1'),
(193, 145, 73, 1, 0, '1'),
(194, 146, 74, 1, 0, '1'),
(195, 147, 75, 1, 15000, '1'),
(196, 149, 76, 1, 0, '1'),
(197, 148, 77, 1, 0, '1'),
(198, 151, 78, 1, 0, '1'),
(199, 152, 79, 1, 0, '1'),
(200, 153, 80, 1, 0, '1'),
(201, 154, 81, 1, 0, '1'),
(203, 147, 83, 2, 5000, '1'),
(204, 155, 84, 1, 0, '1'),
(205, 155, 85, 2, 0, '1'),
(206, 155, 86, 3, 0, '1'),
(207, 155, 87, 4, 0, '1'),
(208, 155, 88, 5, 0, '1'),
(209, 155, 89, 6, 0, '1'),
(210, 155, 90, 7, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `IS_usergrouprel`
--

DROP TABLE IF EXISTS `IS_usergrouprel`;
CREATE TABLE IF NOT EXISTS `IS_usergrouprel` (
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IS_usergrouprel`
--

INSERT INTO `IS_usergrouprel` (`userid`, `groupid`) VALUES
(1, 1),
(2, 2),
(3, 4),
(4, 4),
(5, 3),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `IS_usergroups`
--

DROP TABLE IF EXISTS `IS_usergroups`;
CREATE TABLE IF NOT EXISTS `IS_usergroups` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `IS_usergroups`
--

INSERT INTO `IS_usergroups` (`id`, `name`, `description`, `type1`, `type2`, `type3`, `type4`, `type5`, `type6`, `type7`, `type8`, `type9`, `type10`) VALUES
(1, 'Admin', 'Administratorgruppe', 0, 1, 0, 0, 0, 0, 1, 1, 1, 1),
(2, 'Chefen', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'Test', 'Test gruppe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Omklædning', 'Omklædning', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `IS_userrights`
--

DROP TABLE IF EXISTS `IS_userrights`;
CREATE TABLE IF NOT EXISTS `IS_userrights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `IS_userrights`
--

INSERT INTO `IS_userrights` (`id`, `groupid`, `type`, `typeid`) VALUES
(1, 1, 'texts', 1),
(2, 1, 'box', 1),
(3, 1, 'menu', 2),
(4, 1, 'menu', 3),
(5, 1, 'menu', 4),
(6, 1, 'menu', 5),
(7, 1, 'menu', 6),
(8, 2, 'menu', 4),
(9, 4, 'box', 137),
(10, 2, 'box', 137),
(11, 2, 'box', 139),
(12, 3, 'box', 138),
(13, 2, 'box', 138),
(14, 1, 'box', 136),
(15, 1, 'box', 137),
(16, 1, 'box', 138),
(17, 1, 'box', 139),
(18, 1, 'box', 140),
(21, 1, 'box', 141),
(20, 4, 'box', 140),
(22, 1, 'box', 142),
(23, 1, 'box', 143),
(24, 1, 'box', 144),
(25, 1, 'box', 145),
(26, 1, 'box', 146),
(27, 1, 'box', 147),
(28, 1, 'box', 148),
(29, 1, 'box', 149),
(30, 1, 'box', 150),
(31, 1, 'box', 151),
(32, 1, 'box', 152),
(33, 1, 'box', 153),
(34, 1, 'box', 154),
(36, 1, 'box', 155);

-- --------------------------------------------------------

--
-- Table structure for table `IS_users`
--

DROP TABLE IF EXISTS `IS_users`;
CREATE TABLE IF NOT EXISTS `IS_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `IS_users`
--

INSERT INTO `IS_users` (`id`, `username`, `password`, `active`) VALUES
(1, 'admin', 'capable', '1'),
(6, 'testperson', '1234', '1');

create user db_user;
grant all on infoscreen.* to 'db_user'@'localhost' identified by 'Inf0Scr33n';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;