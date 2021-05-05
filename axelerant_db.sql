-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2021 at 04:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axelerant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

DROP TABLE IF EXISTS `opinions`;
CREATE TABLE IF NOT EXISTS `opinions` (
  `opinions_id` int(11) NOT NULL AUTO_INCREMENT,
  `opinions_author_name` varchar(250) NOT NULL,
  `opinions_vote` int(250) NOT NULL,
  PRIMARY KEY (`opinions_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`opinions_id`, `opinions_author_name`, `opinions_vote`) VALUES
(1, 'Miguel de Cervantes', 6),
(2, 'Charles Dickens', 7),
(3, 'J.R.R. Tolkien', 31),
(4, 'Antoine de Saint-Exuper', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
