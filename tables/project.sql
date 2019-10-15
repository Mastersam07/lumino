-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2019 at 01:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'hormolara', 'hormolara'),
(3, 'Iwasokun', 'Iwasokun'),
(4, 'lara', 'lara');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `initials` varchar(5) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Phone_number` varchar(11) NOT NULL,
  `School` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Location` text NOT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `status`, `initials`, `Firstname`, `Lastname`, `Phone_number`, `School`, `Department`, `Location`, `lat`, `lng`) VALUES
(2, 'Dr.', 'A.M', 'Oludare', 'Ojo', '08135129753', 'SOC', 'Computer Science', 'CRC room 14, behind computer science department, opp cegist', '7.305279', '5.133775'),
(7, 'Dr.', 'O.K', 'Boyinbode', '', '08036279195', 'SOC', 'Information Tech', 'Postgraduate Research Lab', '7.299176', '5.134467'),
(8, 'Dr.', 'G.B', 'Iwasokun', 'Iwasokun', '09067945634', 'SOC', 'Cyber Security', 'Room 10, Adamu Building,beside SAAT', '7.301283', '5.135122');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Phone_number` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Matric_no` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Email`, `Password`, `Firstname`, `Lastname`, `Phone_number`, `Address`, `Department`, `Matric_no`) VALUES
(1, 'wasiuomolara216@gmail.com', 'lara', 'wasiu', 'omolara', '08100449287', 'pd 22a isale general ilesa', 'CSC', 'CSC/14/9753'),
(8, 'ope@gmail.com', 'olami', 'olami', 'olami', '08136876605', 'ilesa brewireis ilupeju, omiasoro', '', ''),
(9, 'lara40@gmail.com', 'lara', 'lara', 'lara', '09087564231', 'ilaramokin, oke odo', '', ''),
(10, 'abada', 'abada', 'abada', 'abada', '08180690050', 'abada', 'eee', 'abada'),
(11, 'abada@abada.com', 'abada', 'abada', 'abada', '08180690050', 'abada', 'eee', 'abada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
