-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 07:04 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uiujobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Pass`) VALUES
(1, 'Farah', 'ishrat.tanzila.farah@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DateOfBirth` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Interest` int(11) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `Name`, `Email`, `DateOfBirth`, `Password`, `Image`, `Interest`, `Resume`, `Type`) VALUES
(8, 'xyz', '123', '1-4-1947', '68053af2923e00204c3ca7c6a3150cf7', '13450810_537600943089982_8705103005741449503_n.jpg', 1, 'lesson-6-feasibility-analysis-and-the-system-proposal.docx', 1),
(9, 'raian', '123', '1-4-1947', '202cb962ac59075b964b07152d234b70', '13450810_537600943089982_8705103005741449503_n.jpg', 1, 'lesson-6-feasibility-analysis-and-the-system-proposal.docx', 1),
(10, '', '', '1-1-1947', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '', 0),
(11, '', '', '1-1-1947', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
