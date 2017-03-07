-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 02:15 AM
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
-- Table structure for table `character_sheet`
--

CREATE TABLE `character_sheet` (
  `char_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `charname_f` varchar(20) NOT NULL,
  `charname_l` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `race` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `weight` decimal(4,1) NOT NULL,
  `height` decimal(4,1) NOT NULL,
  `str` int(2) NOT NULL,
  `str_mod` int(2) NOT NULL,
  `total_str` int(2) NOT NULL,
  `dex` int(2) NOT NULL,
  `dex_mod` int(2) NOT NULL,
  `dex_total` int(2) NOT NULL,
  `charisma` int(2) NOT NULL,
  `char_mod` int(2) NOT NULL,
  `char_total` int(2) NOT NULL,
  `wis` int(2) NOT NULL,
  `wis_mod` int(2) NOT NULL,
  `total_wis` int(2) NOT NULL,
  `intelligence` int(2) NOT NULL,
  `int_mod` int(2) NOT NULL,
  `total_int` int(2) NOT NULL,
  `char_story` varchar(5000) NOT NULL,
  `alignment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `race` varchar(30) NOT NULL,
  `class` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchar`
--

INSERT INTO `tblchar` (`charId`, `userId`, `name`, `age`, `gender`, `height`, `weight`, `race`, `class`) VALUES
(2, 1, 'Guy Smiley', '5000yrs', 'male', '12ft', '400lbs', 'High Elf', 'Sorcerer'),
(3, 1, 'Frank N. Stein', '3yrs', 'other', 'Tall', 'Heavy', 'Half Orc', 'Barbarian'),
(7, 2, 'Al Yankovic', '40', 'other', '6ft', '170lbs', 'Human', 'Bard'),
(8, 0, 'Rob Lowe', '48', 'male', '6ft', '170lbs', 'Half Orc', 'Druid'),
(9, 0, 'Ron Burgendy', '40', 'male', '6ft', '180lbs', 'Hill Dwarf', 'Bard'),
(10, 0, 'test', 'test', 'male', '5ft', '200lbs', 'Mountain Dwarf', 'Bard'),
(11, 0, 'dog the dog', '50', 'male', '5ft ', '120lbs', 'Hill Dwarf', 'Bard'),
(12, 0, 'Hiro', '12', 'male', '4ft', '90lbs', 'High Elf', 'Bard'),
(13, 0, 'Mud', '12', 'male', '2Inches', '50lbs', 'Hill Dwarf', 'Bard'),
(14, 0, 'Bartman', '10', 'male', '3ft', '60lbs', 'Mountain Dwarf', 'Bard'),
(15, 0, 'New guy', '12', 'male', '5ft', '200lbs', 'Mountain Dwarf', 'Bard'),
(16, 0, 'test', 'test', 'male', '120', '120', 'Wood Elf', 'Bard'),
(17, 0, '', '', '', '', '', '', 'Bard'),
(18, 0, '', '', '', '', '', '', 'Bard'),
(19, 0, '', '', '', '', '', '', 'Bard'),
(20, 0, '', '', '', '', '', '', 'Monk'),
(21, 0, '', '', '', '', '', '', 'Bard'),
(22, 0, '', '', '', '', '', '', 'Bard'),
(23, 0, '', '', '', '', '', '', 'Druid'),
(24, 0, '', '', '', '', '', '', 'Bard'),
(25, 0, '', '', '', '', '', '', 'Bard'),
(26, 0, '', '', '', '', '', '', 'Bard'),
(27, 0, '', '', '', '', '', '', 'Fighter');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `classId` int(11) NOT NULL,
  `class` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`classId`, `class`) VALUES
(1, 'Barbarian'),
(2, 'Bard'),
(3, 'Cleric'),
(4, 'Druid'),
(5, 'Fighter'),
(6, 'Monk'),
(7, 'Paladin'),
(8, 'Ranger'),
(9, 'Rogue'),
(10, 'Sorcerer'),
(11, 'Warlock'),
(12, 'Wizard');

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
(7, 'Human'),
(8, 'Dragonborn'),
(9, 'Forest Gnome'),
(10, 'Rock Gnome'),
(11, 'Half Elf'),
(12, 'Half Orc'),
(13, 'Tiefling');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `oauth` int(11) NOT NULL COMMENT 'Store the user''s oauth credentials here so we can keep the user connected to their account.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `oauth`) VALUES
(1, 'MightyMax', '', '', '', '', 0),
(2, 'RadScorpion', 'Gary', 'Groovy', 'mc@test.com', 'Dongs', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_sheet`
--
ALTER TABLE `character_sheet`
  ADD PRIMARY KEY (`char_id`);

--
-- Indexes for table `tblchar`
--
ALTER TABLE `tblchar`
  ADD PRIMARY KEY (`charId`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`classId`);

--
-- Indexes for table `tblrace`
--
ALTER TABLE `tblrace`
  ADD PRIMARY KEY (`raceId`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_sheet`
--
ALTER TABLE `character_sheet`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblchar`
--
ALTER TABLE `tblchar`
  MODIFY `charId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblrace`
--
ALTER TABLE `tblrace`
  MODIFY `raceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `character_sheet`
--
ALTER TABLE `character_sheet`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`char_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
