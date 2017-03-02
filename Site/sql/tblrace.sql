-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 04:59 PM
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
-- Table structure for table `tblrace`
--

CREATE TABLE `tblrace` (
  `raceId` int(11) NOT NULL,
  `race` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrace`
--

INSERT INTO `tblrace` (`raceId`, `race`) VALUES
(1, 'Hill Dwarf'),
(2, 'Mountain Dwarf'),
(3, 'High Elf'),
(4, 'Wood Elf'),
(5, 'Lightfoot Halfling'),
(6, 'Stout Halfling'),
(7, 'Human');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrace`
--
ALTER TABLE `tblrace`
  ADD PRIMARY KEY (`raceId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrace`
--
ALTER TABLE `tblrace`
  MODIFY `raceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
