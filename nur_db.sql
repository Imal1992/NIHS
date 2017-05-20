-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 07:46 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nur_db`
--

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
  `Password` varchar(25) NOT NULL,
  `password_confirmation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(9, 'user', 'asa', 'saya', '130000', 'asa@gmail.com', '250cf8b51c773f3f8dc8b4be8', '250cf8b51c773f3f8dc8b4be867a9a02');
