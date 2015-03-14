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
CREATE DATABASE `infoscreen` DEFAULT CHARACTER SET latin1 COLLATE latin1_danish_ci;
-- --------------------------------------------------------
USE `infoscreen`;
--
-- Struktur-dump for tabellen `IS_boxes`
--

CREATE TABLE IF NOT EXISTS `IS_boxes` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_boxestemp`
--

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
-- Struktur-dump for tabellen `IS_schemes`
--

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

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_systemdata`
--

CREATE TABLE IF NOT EXISTS `IS_systemdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sdtype` tinytext NOT NULL,
  `sdvalue` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_templatedata`
--

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

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_texts`
--

CREATE TABLE IF NOT EXISTS `IS_texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textinput` text NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_timeline`
--

CREATE TABLE IF NOT EXISTS `IS_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL,
  `sorting` int(11) NOT NULL,
  `delay` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_usergrouprel`
--

CREATE TABLE IF NOT EXISTS `IS_usergrouprel` (
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_usergroups`
--

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

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_userrights`
--

CREATE TABLE IF NOT EXISTS `IS_userrights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `IS_users`
--

CREATE TABLE IF NOT EXISTS `IS_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `IS_systemdata` (`id`, `sdtype`, `sdvalue`) VALUES
(1, 'reload', ''),
(2, 'version', '1.10'),
(4, 'zoom', '75');

INSERT INTO IS_users (username, password, active) VALUES ('admin', 'capable', 1);

INSERT INTO IS_usergroups (name, description) VALUES ('admin', 'Administratorgruppe');

INSERT INTO IS_userrights (groupid, type, typeid) VALUES (1, 'menu', 5);

create user db_user;
grant all on infoscreen.* to 'db_user'@'localhost' identified by 'Inf0Scr33n';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;