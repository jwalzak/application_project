-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 02:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `oauth` int(11) NOT NULL COMMENT 'Store the user''s oauth credentials here so we can keep the user connected to their account.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_sheet`
--
ALTER TABLE `character_sheet`
  ADD PRIMARY KEY (`char_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_sheet`
--
ALTER TABLE `character_sheet`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `character_sheet`
--
ALTER TABLE `character_sheet`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`char_id`) REFERENCES `user_info` (`userid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
