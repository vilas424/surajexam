-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2014 at 03:51 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `tag` varchar(10) DEFAULT NULL,
  `datee` varchar(30) DEFAULT NULL,
  `timee` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`qid`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `username`, `tag`, `datee`, `timee`) VALUES
(12, 'can any1 help me out in splitting a string ??', 'sonu1', 'C', '03/05/2014', '1399130315'),
(13, 'how are abstract classes different from normal classes?', 'sonu1', 'C++', '03/05/2014', '1399131189'),
(14, 'display data from database into jtable...pls help me any1', 'sonu1', 'JAVA', '03/05/2014', '1399131221');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
