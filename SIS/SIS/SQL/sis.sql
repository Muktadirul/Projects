-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 12:15 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `sis_class`
--

CREATE TABLE `sis_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_class`
--

INSERT INTO `sis_class` (`class_id`, `class_name`, `capacity`) VALUES
(1, '6', 39),
(4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sis_resource`
--

CREATE TABLE `sis_resource` (
  `r_id` int(11) NOT NULL,
  `r_type` varchar(255) NOT NULL,
  `r_link` varchar(255) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_resource`
--

INSERT INTO `sis_resource` (`r_id`, `r_type`, `r_link`, `t_id`) VALUES
(1, 'abcd', 'http://localhost:8080/SIS/CreateSubject.php', 4),
(2, 'abcde', 'http://localhost:8080/SIS/CreateSubject.php', 6),
(3, 'abcdf', 'http://localhost:8080/SIS/CreateSubject.php', 2),
(4, 'abcdg', 'http://localhost:8080/SIS/CreateSubject.php', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sis_student`
--

CREATE TABLE `sis_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_student`
--

INSERT INTO `sis_student` (`student_id`, `student_name`, `class_id`, `roll`, `contact`) VALUES
(4, 'stu5', 4, 54, '54354');

-- --------------------------------------------------------

--
-- Table structure for table `sis_subject`
--

CREATE TABLE `sis_subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sis_teacher`
--

CREATE TABLE `sis_teacher` (
  `T_id` int(11) NOT NULL,
  `T_name` varchar(255) NOT NULL,
  `T_address` varchar(255) NOT NULL,
  `T_qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_teacher`
--

INSERT INTO `sis_teacher` (`T_id`, `T_name`, `T_address`, `T_qualification`) VALUES
(5, 'tea', 'dfdfdfdf', 'qqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sis_class`
--
ALTER TABLE `sis_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `sis_resource`
--
ALTER TABLE `sis_resource`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sis_student`
--
ALTER TABLE `sis_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `sis_subject`
--
ALTER TABLE `sis_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sis_teacher`
--
ALTER TABLE `sis_teacher`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sis_class`
--
ALTER TABLE `sis_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sis_resource`
--
ALTER TABLE `sis_resource`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sis_student`
--
ALTER TABLE `sis_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sis_subject`
--
ALTER TABLE `sis_subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sis_teacher`
--
ALTER TABLE `sis_teacher`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
