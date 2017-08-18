-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 09:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `eng_score`
--

CREATE TABLE IF NOT EXISTS `eng_score` (
  `id` int(11) NOT NULL,
  `chooseclick` int(11) NOT NULL,
  `guessword` int(11) NOT NULL,
  `speel` int(11) NOT NULL,
  `rightwrong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eng_score`
--

INSERT INTO `eng_score` (`id`, `chooseclick`, `guessword`, `speel`, `rightwrong`) VALUES
(25, 5, 5, 2, 4),
(26, 3, 4, 1, 2),
(27, 0, 0, 0, 0),
(28, 4, 0, 0, 0),
(29, 0, 0, 0, 0),
(30, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `math_score`
--

CREATE TABLE IF NOT EXISTS `math_score` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `add` int(11) NOT NULL,
  `sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math_score`
--

INSERT INTO `math_score` (`id`, `count`, `add`, `sub`) VALUES
(25, 5, 5, 5),
(26, 5, 4, 1),
(27, 5, 0, 0),
(28, 3, 0, 0),
(29, 0, 0, 0),
(30, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(25, 'Raian', 'raiancse@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 'abcd', 'abcd@abcd', 'e2fc714c4727ee9395f324cd2e7f331f'),
(27, 'user1', 'user1@yahoo.com', '24c9e15e52afc47c225b757e7bee1f9d'),
(28, 'user2', 'user2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'r1', '1@1', 'c4ca4238a0b923820dcc509a6f75849b'),
(30, '123', '123@123', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
