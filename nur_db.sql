-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 12:49 PM
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
  `Event_id` int(10) NOT NULL,
  `Event_details` varchar(1000) NOT NULL,
  `Event_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`Event_id`, `Event_details`, `Event_date`) VALUES
(1, 'Awrudu', '08/31/2017');

-- --------------------------------------------------------

--
-- Table structure for table `post_news`
--

CREATE TABLE `post_news` (
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
(5, '0sequence.PNG', '53392', 'image/png', 'ttttttttttttttt');

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
(8, 'user', 'Imal', 'Thiunuwan', '13001221', 'imal1@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(2, 'user', 'sadsd', 'sdsds', 'sdsadsad', 'a@gmail.com', '202cb962ac59075b964b07152', '{password_confirmation}'),
(3, 'user', 'dsf', 'sdfsf', 'fsdf', 'sdfsdf', 'd9729feb74992cc3482b35016', '{password_confirmation}'),
(4, 'user', 'Imal', 'Thiunuwan', '12031', 'imal@gmail.com', '202cb962ac59075b964b07152', '{password_confirmation}'),
(5, 'user', 'Imali', 'S', '4546565', 'ithiunuwan@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(6, 'user', 'fd', 'dg', 'gdsfg', 'i@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(7, 'user', 'fd', 'dg', 'gdsfgdsfs', 'as@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(9, 'user', 'asa', 'saya', '130000', 'asa@gmail.com', '250cf8b51c773f3f8dc8b4be8', '250cf8b51c773f3f8dc8b4be867a9a02'),
(10, 'Admin', 'Geeth', 'Madushan', '12345', 'geeth@gmail.com', '123', '123'),
(16, 'user', 'Senith', 'Randula', '1362656652', 'senith@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'user', 'Imali', 'Sadesha', '636986', 'imali@gmail.com', '202cb962ac59075b964b07152', '202cb962ac59075b964b07152d234b70'),
(13, 'user', 'Malani', 'Weerakkody', '6134565423', 'malani@gmail.com', '$1$Ne/.S30.$dnui5H6SzbRAiIV3bennH0', '$1$zY..A63.$DJkqh45xneXiGekdd70Ap0'),
(14, 'user', 'Indrarathna', 'Kumbalathara', '46123654632', 'indra@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(15, 'user', 'Chamindu', 'Madhusanka', '8562314', 'chamindu@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(17, 'user', 'ranul', 'vindula', '11111111', 'r@v', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(18, 'Admin', 'senith', 'randula', '222222222', 's@r', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `post_news`
--
ALTER TABLE `post_news`
  ADD PRIMARY KEY (`File_id`);

--
-- Indexes for table `upload_data`
--
ALTER TABLE `upload_data`
  ADD PRIMARY KEY (`File_id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`File_id`);

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
  MODIFY `Event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post_news`
--
ALTER TABLE `post_news`
  MODIFY `File_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `upload_data`
--
ALTER TABLE `upload_data`
  MODIFY `File_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `File_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
