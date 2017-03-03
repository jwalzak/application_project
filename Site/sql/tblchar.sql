-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 02:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroschema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblchar`
--

CREATE TABLE `tblchar` (
  `charId` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `race` varchar(30) NOT NULL,
  `class` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchar`
--

INSERT INTO `tblchar` (`charId`, `name`, `age`, `gender`, `height`, `weight`, `race`, `class`) VALUES
(2, 'Guy Smiley', '5000yrs', 'male', '12ft', '400lbs', 'High Elf', 'Sorcerer'),
(3, 'Frank N. Stein', '3yrs', 'other', 'Tall', 'Heavy', 'Half Orc', 'Barbarian'),
(4, 'Regan The RayGun', '9yrs', 'female', '4ft', '70lbs', 'Half Elf', 'Rogue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblchar`
--
ALTER TABLE `tblchar`
  ADD PRIMARY KEY (`charId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblchar`
--
ALTER TABLE `tblchar`
  MODIFY `charId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
