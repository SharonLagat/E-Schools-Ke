-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2018 at 11:55 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eschoolske`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp_pages`
--

DROP TABLE IF EXISTS `mp_pages`;
CREATE TABLE IF NOT EXISTS `mp_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `page_desc` text,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `parent` varchar(255) NOT NULL DEFAULT '0',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `page_alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `page_name` (`page_alias`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mp_pages`
--

INSERT INTO `mp_pages` (`page_id`, `page_title`, `page_desc`, `meta_keywords`, `meta_desc`, `sort_order`, `parent`, `status`, `page_alias`) VALUES
(2, 'Student\\\'s Site', '', 'tags', 'dasdasd', 1, '-1', 'A', 'student-s-site'),
(4, 'Contact Us', '', 'dasd', 'asdasd', 3, '-1', 'A', 'contact-us'),
(13, 'School Buzz', '', '', '', 0, '-1', 'A', 'school-buzz');

-- --------------------------------------------------------

--
-- Table structure for table `mp_tagline`
--

DROP TABLE IF EXISTS `mp_tagline`;
CREATE TABLE IF NOT EXISTS `mp_tagline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagline1` varchar(255) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mp_tagline`
--

INSERT INTO `mp_tagline` (`id`, `tagline1`, `tagline2`) VALUES
(1, 'Welcome', 'This is an education platform for finding and adding tutor\\\'s information and adding upcoming sports and events');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
