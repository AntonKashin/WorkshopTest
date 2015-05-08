-- phpMyAdmin SQL Dump
-- version 4.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2014 at 08:17 PM
-- Server version: 5.6.22
-- PHP Version: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ws_test`
--
CREATE DATABASE IF NOT EXISTS `ws_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ws_test`;

-- --------------------------------------------------------

--
-- Table structure for table `questionqueue`
--

DROP TABLE IF EXISTS `questionqueue`;
CREATE TABLE IF NOT EXISTS `questionqueue` (
`Id` int(4) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Status` int(4) NOT NULL,
  `StartTime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionqueue`
--

INSERT INTO `questionqueue` (`Id`, `Question`, `Status`, `StartTime`) VALUES
(13, 'How?', 3, '2014-12-10 19:12:18'),
(15, 'Why?', 1, '2014-12-10 19:12:31'),
(21, 'Who?', 0, '2014-12-10 19:11:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionqueue`
--
ALTER TABLE `questionqueue`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionqueue`
--
ALTER TABLE `questionqueue`
MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE USER 'ws_test'@'localhost' IDENTIFIED BY PASSWORD '*0243E14DB5A6F182F0A9EACAC19966D1EDD6B3F7';

GRANT ALL PRIVILEGES ON `ws_test`.* TO 'ws_test'@'localhost';