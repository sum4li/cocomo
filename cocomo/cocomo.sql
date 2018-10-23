-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2016 at 12:21 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cocomo`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(5) NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(50) NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`) VALUES
(1, 'lol'),
(2, 'Pitro');

-- --------------------------------------------------------

--
-- Table structure for table `project_result`
--

CREATE TABLE IF NOT EXISTS `project_result` (
  `id_project_result` int(5) NOT NULL AUTO_INCREMENT,
  `id_project` int(5) NOT NULL,
  `step_1` varchar(10) NOT NULL,
  `step_2` varchar(10) NOT NULL,
  `step_3` varchar(10) NOT NULL,
  `effort` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `person` varchar(10) NOT NULL,
  PRIMARY KEY (`id_project_result`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project_result`
--

INSERT INTO `project_result` (`id_project_result`, `id_project`, `step_1`, `step_2`, `step_3`, `effort`, `duration`, `person`) VALUES
(1, 1, '117', '80.73', '2421.9', '6.08', '4.96', '1.22'),
(2, 2, '183', '190.32', '5709.6', '29.12', '7.35', '3.96');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
