-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 02:05 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nur_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(10) NOT NULL,
  `Event_details` longtext NOT NULL,
  `Event_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `Event_details`, `Event_date`) VALUES
(27, 'Bhakthi Geetha', '2017-06-21'),
(28, 'Blood Donation', '2017-07-26'),
(29, 'Alms Giving', '2017-09-05'),
(25, 'Awurudu Uthsawaya ', '2017-04-28'),
(26, 'Seela Wyaparaya', '2017-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `post_news`
--

CREATE TABLE `post_news` (
  `File_id` int(10) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `File_size` varchar(50) NOT NULL,
  `File_type` varchar(50) NOT NULL,
  `News` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_news`
--

INSERT INTO `post_news` (`File_id`, `File_name`, `File_size`, `File_type`, `News`) VALUES
(8, '0sln.jpg', '298851', 'image/jpeg', 'sl nurses'),
(9, '04.jpg', '260553', 'image/jpeg', 'Nurses sssss'),
(10, '07.jpg', '850153', 'image/jpeg', 'Foreign nurse');

-- --------------------------------------------------------

--
-- Table structure for table `upload_data`
--

CREATE TABLE `upload_data` (
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

CREATE TABLE `upload_files` (
  `File_id` int(50) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `File_size` varchar(100) NOT NULL,
  `File_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `id` int(10) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Nur_id` varchar(25) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `password_confirmation` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `Type`, `First_name`, `Last_name`, `Nur_id`, `Email_address`, `Password`, `password_confirmation`) VALUES
(16, 'user', 'Senith', 'Randula', '1362656652', 'senith@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'user', 'Imali', 'Sadesha', '636986', 'imali@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(13, 'user', 'Malani', 'Weerakkody', '6134565423', 'malani@gmail.com', '$1$Ne/.S30.$dnui5H6SzbRAiIV3bennH0', '$1$zY..A63.$DJkqh45xneXiGekdd70Ap0'),
(14, 'user', 'Indrarathna', 'Kumbalathara', '46123654632', 'indra@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(15, 'Admin', 'Chamindu', 'Madhusanka', '8562314', 'chamindu@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD UNIQUE KEY `Event_id` (`id`);

--
-- Indexes for table `post_news`
--
ALTER TABLE `post_news`
  ADD UNIQUE KEY `File_id` (`File_id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `post_news`
--
ALTER TABLE `post_news`
  MODIFY `File_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
