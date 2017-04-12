-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 05:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `userId` int(3) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `languages` varchar(15) NOT NULL,
  `race` varchar(30) NOT NULL,
  `class` varchar(40) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `spells` varchar(250) NOT NULL,
  `str` int(2) NOT NULL,
  `dex` int(2) NOT NULL,
  `intel` int(2) NOT NULL,
  `wis` int(2) NOT NULL,
  `con` int(2) NOT NULL,
  `cha` int(2) NOT NULL,
  `align` varchar(30) NOT NULL,
  `story` varchar(255) NOT NULL,
  `charpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchar`
--

INSERT INTO `tblchar` (`charId`, `userId`, `name`, `age`, `gender`, `height`, `weight`, `languages`, `race`, `class`, `skills`, `spells`, `str`, `dex`, `intel`, `wis`, `con`, `cha`, `align`, `story`, `charpic`) VALUES
(55, 17, 'Big Cheez', '25', 'female', '5ft 9in', '160lbs', '0', 'High Elf', 'Bard', 'Acrobatics Animal Handling Arcana', '', 12, 14, 14, 16, 12, 14, '', '', 'charpics/characterImage5413.jpg');

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
  MODIFY `charId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
