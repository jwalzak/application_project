-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 11:13 PM
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
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `bard` varchar(500) NOT NULL,
  `barbarian` varchar(500) NOT NULL,
  `cleric` varchar(500) NOT NULL,
  `druid` varchar(500) NOT NULL,
  `fighter` varchar(500) NOT NULL,
  `monk` varchar(500) NOT NULL,
  `paladin` varchar(500) NOT NULL,
  `ranger` varchar(500) NOT NULL,
  `rogue` varchar(500) NOT NULL,
  `sorcerer` varchar(500) NOT NULL,
  `warlock` varchar(500) NOT NULL,
  `wizard` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `bard`, `barbarian`, `cleric`, `druid`, `fighter`, `monk`, `paladin`, `ranger`, `rogue`, `sorcerer`, `warlock`, `wizard`) VALUES
(1, 'Club, Dagger, Greatclub, Handaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear, Light Crossbow, Dart, Shortbow, Sling, Hand Crossbow, Longsword, Rapiers, Short Swords', 'Club, Dagger, Greatclub, Handaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear, Light Crossbow, Dart, Shortbow, Sling, Battleaxe, Flail, Glaive, Greataxe, Greatsword, Halberd, Lance, Shortsword, Maul, Morningstart, Pike, Rapier, Scimtar, Shortsword, Trident, War Pick, Warhammer, Whip, Blowgun, Hand Crossbow, Heavy Crossbow, Longbow, Net', '', '', 'Club, Dagger, Greatclub, Handaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear, Light Crossbow, Dart, Shortbow, Sling, Battleaxe, Flail, Glaive, Greataxe, Greatsword, Halberd, Lance, Shortsword, Maul, Morningstart, Pike, Rapier, Scimtar, Shortsword, Trident, War Pick, Warhammer, Whip, Blowgun, Hand Crossbow, Heavy Crossbow, Longbow, Net', '', 'Club, Dagger, Greatclub, Handaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear, Light Crossbow, Dart, Shortbow, Sling, Battleaxe, Flail, Glaive, Greataxe, Greatsword, Halberd, Lance, Shortsword, Maul, Morningstart, Pike, Rapier, Scimtar, Shortsword, Trident, War Pick, Warhammer, Whip, Blowgun, Hand Crossbow, Heavy Crossbow, Longbow, Net', 'Club, Dagger, Greatclub, Handaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear, Light Crossbow, Dart, Shortbow, Sling, Battleaxe, Flail, Glaive, Greataxe, Greatsword, Halberd, Lance, Shortsword, Maul, Morningstart, Pike, Rapier, Scimtar, Shortsword, Trident, War Pick, Warhammer, Whip, Blowgun, Hand Crossbow, Heavy Crossbow, Longbow, Net', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
