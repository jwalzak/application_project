-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 06:34 PM
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
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `classId` int(11) NOT NULL,
  `class` varchar(40) NOT NULL,
  `skills` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`classId`, `class`, `skills`) VALUES
(1, 'Barbarian', 'Animal Handling, Athletics, Intimidation, Nature, Perception, Survival'),
(2, 'Bard', 'Acrobatics, Animal Handling, Arcana, Athletics, Deception, History, Insight, Intimidation, Investigation, Medicine, Nature, Perception, Performance, Persuasion, Religion, Sleight of Hand, Stealth, Survival'),
(3, 'Cleric', 'History, Insight, Medicine, Persuasion, Religion'),
(4, 'Druid', 'Arcana, Animal Handling, Insight, Medicine, Nature, Perception, Religion, Survival'),
(5, 'Fighter', 'Acrobatics, Animal Handling, Athletics, History, Insight, Intimidation, Perception, Survival'),
(6, 'Monk', 'Acrobatics, Athletics, History, Insight, Religion, Stealth'),
(7, 'Paladin', 'Athletics, Insight, Intimidation, Medicine, Persuasion, Religion'),
(8, 'Ranger', 'Animal Handling, Athletics, Insight, Investigation, Nature, Perception, Stealth, Survival'),
(9, 'Rogue', 'Acrobatics\", \"Athletics\", \"Deception\", Insight, Intimidation, Investigation, Perception, Performance, Persuasion, Sleight of Hand, Stealth'),
(10, 'Sorcerer', 'Arcana, Deception, Insight, Intimidation, Persuasion, Religion'),
(11, 'Warlock', 'Arcana, Deception, History, Intimidation, Investigation, Nature, Religion'),
(12, 'Wizard', 'Arcana, History, Insight, Investigation, Medicine, Religion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`classId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
