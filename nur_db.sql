-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2017 at 11:00 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nur_db`
--
CREATE DATABASE IF NOT EXISTS `nur_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nur_db`;

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE IF NOT EXISTS `add_event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Event_details` longtext NOT NULL,
  `Event_date` varchar(20) NOT NULL,
  UNIQUE KEY `Event_id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `Event_details`, `Event_date`) VALUES
(27, 'Bhakthi Geetha', '2017-06-21'),
(28, 'Blood Donation', '2017-07-26'),
(25, 'Awurudu Uthsawaya ', '2017-04-28'),
(26, 'Seela Wyaparaya', '2017-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `post_news`
--

CREATE TABLE IF NOT EXISTS `post_news` (
  `File_id` int(10) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `File_size` varchar(50) NOT NULL,
  `File_type` varchar(50) NOT NULL,
  `News` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_news`
--

INSERT INTO `post_news` (`File_id`, `File_name`, `File_size`, `File_type`, `News`) VALUES
(1, '0abap programs.PNG', '14349', 'image/png', 'rrrrrrrrrrrrrrrrrrrrrrrr'),
(2, '0abap programs.PNG', '14349', 'image/png', 'rrrrrrrrrrrrrrrrrrrrrrrr'),
(3, '0abap programs.PNG', '14349', 'image/png', 'rrrrrrrrrrrrrrrrrrrrrrrr'),
(4, '0sequence.PNG', '53392', 'image/png', 'sssssssssssss'),
(5, '0sequence.PNG', '53392', 'image/png', 'ttttttttttttttt'),
(0, '0IMG_1908.jpg', '630401', 'image/jpeg', 'This is Imal');

-- --------------------------------------------------------

--
-- Table structure for table `upload_data`
--

CREATE TABLE IF NOT EXISTS `upload_data` (
  `File_id` int(10) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `File_size` varchar(50) NOT NULL,
  `File_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_data`
--

INSERT INTO `upload_data` (`File_id`, `File_name`, `File_size`, `File_type`) VALUES
(0, '0Journey 2.jpg', '979130', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE IF NOT EXISTS `upload_files` (
  `File_id` int(50) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `File_size` varchar(100) NOT NULL,
  `File_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Type` varchar(25) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Nur_id` varchar(25) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `password_confirmation` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `Type`, `First_name`, `Last_name`, `Nur_id`, `Email_address`, `Password`, `password_confirmation`) VALUES
(16, 'user', 'Senith', 'Randula', '1362656652', 'senith@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'user', 'Imali', 'Sadesha', '636986', 'imali@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(13, 'user', 'Malani', 'Weerakkody', '6134565423', 'malani@gmail.com', '$1$Ne/.S30.$dnui5H6SzbRAiIV3bennH0', '$1$zY..A63.$DJkqh45xneXiGekdd70Ap0'),
(14, 'user', 'Indrarathna', 'Kumbalathara', '46123654632', 'indra@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(15, 'Admin', 'Chamindu', 'Madhusanka', '8562314', 'chamindu@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
