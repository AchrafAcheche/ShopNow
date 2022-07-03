-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 03, 2022 at 11:16 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projfed`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `artid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nomart` varchar(20) NOT NULL,
  `prixart` varchar(15) NOT NULL,
  `descart` varchar(60) NOT NULL,
  `catyart` varchar(50) DEFAULT NULL,
  `imgpath` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`artid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`artid`, `username`, `nomart`, `prixart`, `descart`, `catyart`, `imgpath`) VALUES
(29, 'Mourad Abdeltif', 'Test', '2000', 'test', 'vehicule', 'iphone.jpg'),
(26, 'Achraf Acheche', 'Moteur', '1000 dt', 'Bonne etat', 'vehicule', 'c:/img.jpg'),
(21, 'Achraf Acheche', 'Telephone', '1300', 'Iphone', 'informatique et multimedia', 'iphone.jpg'),
(25, 'Achraf Acheche', 'Pull', '50', 'Lacoste', 'habillement', 'mg.jpg'),
(27, 'Achraf Acheche', 'Iphone 11', '1900 dt', 'bonne etat', 'informatique et multimedia', 'iphone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `passwd` varchar(30) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `firstname`, `lastname`, `email`, `passwd`, `telephone`) VALUES
(26, 'art', NULL, NULL, NULL, 'art', NULL),
(25, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(24, 'Mourad Abdeltif', 'Mourad', 'Abdeltif', 'mouradabdeltif@gmail.com', '123', '55112030'),
(21, 'Nedhir Hammemi', 'Nedhir', 'Hammemi', 'nedhirhhammemi@gmail.com', '123', '23357111'),
(22, 'Rahma Miladi', 'Rahma', 'Miladi', 'rahmamiladi@gmail.com', '123', '21159789'),
(23, 'Youssef Bel Chichk', 'Youssef', 'Bel Chichk', 'youssefbelchichk@gmail.com', '123', '26845120'),
(20, 'Achraf Acheche', 'Achraf', 'Acheche', 'achecheachraf@gmail.com', '123', '23369111'),
(27, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(28, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(29, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(30, 'art', NULL, NULL, NULL, 'art', NULL),
(31, 'art', NULL, NULL, NULL, 'art', NULL),
(32, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(33, 'art', NULL, NULL, NULL, 'art', NULL),
(34, 'aze', NULL, NULL, NULL, 'azeee', NULL),
(35, 'art', NULL, NULL, NULL, 'art', NULL),
(36, 'art', NULL, NULL, NULL, 'art', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
