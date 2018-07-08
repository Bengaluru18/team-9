-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 04:39 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeforgood`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
CREATE TABLE IF NOT EXISTS `assessment` (
  `name` varchar(20) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `plaster` varchar(20) NOT NULL,
  `water` varchar(20) NOT NULL,
  `painting` varchar(20) NOT NULL,
  `rennovation` varchar(20) NOT NULL,
  `approval` varchar(20) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`name`, `floor`, `plaster`, `water`, `painting`, `rennovation`, `approval`, `remarks`) VALUES
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('Vinit Shahdeo', 'Bad', 'Bad', 'bad', 'conducted', 'no', 'no', ''),
('Vinit Shahdeo', 'Bad', 'Bad', 'bad', 'conducted', 'no', 'no', ''),
('Vinit Shahdeo', 'Bad', 'Bad', 'bad', 'conducted', 'no', 'no', ''),
('Vinit Shahdeo', 'Bad', 'Bad', 'bad', 'conducted', 'no', 'no', ''),
('Vinit Shahdeo', 'Bad', 'Bad', 'good', 'conducted', 'no', 'no', 'hkl'),
('G', 'Bad', 'Good', 'bad', 'conducted', 'yes', 'yes', 'FGF'),
('Vinit Shahdeo', 'Bad', 'Bad', 'good', 'not conducted', 'no', 'yes', 'gg'),
('Vinit Shahdeo', 'Bad', 'Bad', 'good', 'not conducted', 'yes', 'yes', 'hhhfdjfhffd'),
('Jp Morgans', 'Bad', 'Good', 'good', 'not conducted', 'no', 'yes', 'rtee'),
('Jp Morgans', 'Good', 'Bad', 'bad', 'not conducted', 'yes', 'yes', 'ghfg'),
('Jp Morgans', 'Good', 'Bad', 'bad', 'not conducted', 'yes', 'yes', 'ghfg'),
('Jp Morgans', 'Good', 'Bad', 'bad', 'not conducted', 'yes', 'yes', 'ghfg'),
('Jp Morgans', 'Good', 'Bad', 'bad', 'not conducted', 'yes', 'yes', 'ghfg'),
('Vinit Shahdeo', 'Bad', 'Bad', 'good', 'not conducted', 'no', 'yes', 'gg'),
('Dps Ranchi', 'Bad', 'Bad', 'good', 'not conducted', 'yes', 'no', 'Not any!!'),
('Pv K', 'Bad', 'Bad', 'good', 'not conducted', 'yes', 'yes', 'Not any'),
('Kv Bangalore', 'Bad', 'Good', 'bad', 'not conducted', 'yes', 'no', 'not any'),
('Kv Bangalore', 'Bad', 'Good', 'bad', 'not conducted', 'yes', 'no', 'not any'),
('Dps Bangalore', 'Bad', 'Worse', 'worse', 'not conducted', 'yes', 'yes', 'nOT ANY!!');

-- --------------------------------------------------------

--
-- Table structure for table `dataentry`
--

DROP TABLE IF EXISTS `dataentry`;
CREATE TABLE IF NOT EXISTS `dataentry` (
  `school` varchar(30) NOT NULL,
  `money` int(40) NOT NULL,
  `computer` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataentry`
--

INSERT INTO `dataentry` (`school`, `money`, `computer`) VALUES
('Vidya Bharti', 30, 60),
('dps', 40, 90),
('Vidya Bharti', 30, 60),
('dps', 40, 90),
('DPS', 100, 50),
('VELLORE', 78, 45),
('DPS', 20000, 40),
('vit', 50000, 70),
('DPS Bangalore', 70000, 70),
('DAV Public School', 2345, 32),
('DPS DELHI', 123456, 40),
('vit', 12345, 12);

-- --------------------------------------------------------

--
-- Table structure for table `needassessment`
--

DROP TABLE IF EXISTS `needassessment`;
CREATE TABLE IF NOT EXISTS `needassessment` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `address` varchar(300) NOT NULL,
  `totalclass` int(11) NOT NULL,
  `medium` varchar(11) NOT NULL,
  `stud_no` int(11) NOT NULL,
  `hm_name` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `teachermentorship` int(1) NOT NULL,
  `stakeholder` int(1) NOT NULL,
  `health` int(1) NOT NULL,
  `ngo` int(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needassessment`
--

INSERT INTO `needassessment` (`sid`, `name`, `address`, `totalclass`, `medium`, `stud_no`, `hm_name`, `phone`, `teachermentorship`, `stakeholder`, `health`, `ngo`) VALUES
(1, 'Vidya Bharti Public School', 'Kormangala, Bangalore', 12, 'English', 600, 'Srivivasana', 88708559, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `sid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `infrastructure` varchar(20) NOT NULL,
  `classroom` varchar(20) NOT NULL,
  `health` varchar(20) NOT NULL,
  `academic` varchar(20) NOT NULL,
  `stakeholder` varchar(20) NOT NULL,
  `mentorship` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`sid`, `name`, `infrastructure`, `classroom`, `health`, `academic`, `stakeholder`, `mentorship`) VALUES
(12, '', '3', '', '3', '', '3', ''),
(12, '', '3', '', '3', '', '3', ''),
(19, '', '2000', '', '459', '', '657', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hm_name` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `computers` varchar(11) NOT NULL,
  `library` varchar(5) NOT NULL,
  `chemicals` varchar(5) NOT NULL,
  `water` varchar(5) NOT NULL,
  `sanitation` varchar(5) NOT NULL,
  `handwash` varchar(5) NOT NULL,
  `ngo` varchar(5) NOT NULL,
  `health` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`name`, `address`, `hm_name`, `phone`, `computers`, `library`, `chemicals`, `water`, `sanitation`, `handwash`, `ngo`, `health`) VALUES
('Vidya Bharti Public School', 'Bangalore', 'Srivivasana', '88708559', '45', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes'),
('Vinit Shahdeo', 'PHULSU', 'Vinit Shahdeo', '8870855940', '6', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes'),
('Vinit Shahdeo', 'PHULSU', 'Vinit Shahdeo', '8870855940', '6', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes'),
('Jp Morgans', 'Block, VIT University', 'Vinit Shahdeo', '8870855940', '6', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no'),
('Jp Chase', 'Ranchi', 'Vinit Shahdeo', '7858832120', '6', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes'),
('Dps Ranchi', 'Ranchi', 'Ram Singh', '7858832120', '245', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
('Pv K', 'Mysore', 'Raj', '7871234149', '123', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes'),
('Dps Bangalore', 'bangalore', 'Shree', '8870855940', '45', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no'),
('Dps Bangalore', 'bangalore', 'Shree', '8870855940', '45', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `name` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`name`, `status`) VALUES
('Vidya Bharti Public School', 'Approved'),
('DPS Bangalore', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Vinit Shahdeo', 'vinitshahdeo@gmail.com', '12345'),
('Vaibhaw ', 'vaibhaw@gmail.com', '12345'),
('Shreya', 'shreya@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(30) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `contact`, `email`, `area`, `pin`, `password`) VALUES
('', '', 'vinitshahdeo', 'Tamilnadu', '632014', 'md5()'),
('', '', 'vinitshahdeo', 'Tamilnadu', '632014', 'md5()'),
('', '', 'vinitshahdeo', 'Tamilnadu', '632014', 'md5()'),
('', '', 'vinitshahdeo', 'Tamilnadu', '632014', 'md5()'),
('', '', 'vinitshahdeo', 'Tamilnadu', '632014', 'md5()'),
('Vinit Shahdeo', '08870855940', 'vinitshahdeo', 'Tamilnadu', '632014', 'servic'),
('Vinit Shahdeo', '08870855940', 'vinitshahdeo', 'Tamilnadu', '632014', 'servicebe'),
('Vinit Shahdeo', '08870855940', 'vinitshahdeo', 'Tamilnadu', '632014', 'servicebe'),
('Vinit Shahdeo', '08870855940', 'vinitshahdeo', 'Tamilnadu', '632014', 'servicebefo'),
('Shreya', '8870855940', 'shrey@gmail.com', 'Jharkhand', '829202', '1234'),
('Dish', '07858832120', 'disha@gmail.com', 'JHARKHAND', '829202', '12345'),
('Shreya', '98765', 'shreyaw@gmail.com', 'JHARKHAND', '829202', '987'),
('Sam', '8870855940', 'vinitshahdeo@gmail.com', 'Jharkhand', '829202', '1234'),
('Vinit Shahdeo', '08870855940', 'vinitshahdeo', 'Tamilnadu', '632014', 's123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
