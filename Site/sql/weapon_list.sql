-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 12:30 AM
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
-- Table structure for table `weapon_list`
--

CREATE TABLE `weapon_list` (
  `id` int(100) NOT NULL,
  `class` text NOT NULL,
  `Club` int(1) NOT NULL,
  `Dagger` int(1) NOT NULL,
  `Graeatclub` int(1) NOT NULL,
  `Handaxe` int(1) NOT NULL,
  `Javelin` int(1) NOT NULL,
  `Light Hammer` int(1) NOT NULL,
  `Mace` int(1) NOT NULL,
  `Quarter Staff` int(1) NOT NULL,
  `Sickle` int(1) NOT NULL,
  `Spear` int(1) NOT NULL,
  `Light Crossbow` int(1) NOT NULL,
  `Dart` int(1) NOT NULL,
  `Shortbow` int(1) NOT NULL,
  `Sling` int(1) NOT NULL,
  `Battleaxe` int(1) NOT NULL,
  `Flail` int(1) NOT NULL,
  `Glaive` int(1) NOT NULL,
  `Greataxe` int(1) NOT NULL,
  `Greatsword` int(1) NOT NULL,
  `Halberd` int(1) NOT NULL,
  `Lance` int(1) NOT NULL,
  `Shortsword` int(1) NOT NULL,
  `Maul` int(1) NOT NULL,
  `Morningstar` int(1) NOT NULL,
  `Pike` int(1) NOT NULL,
  `Rapier` int(1) NOT NULL,
  `Scimtar` int(1) NOT NULL,
  `Trident` int(1) NOT NULL,
  `War Pick` int(1) NOT NULL,
  `Warhammer` int(1) NOT NULL,
  `Whip` int(1) NOT NULL,
  `Blowgun` int(1) NOT NULL,
  `Hand Crossbow` int(1) NOT NULL,
  `Heavy Crossbow` int(1) NOT NULL,
  `Longbow` int(1) NOT NULL,
  `Net` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapon_list`
--

INSERT INTO `weapon_list` (`id`, `class`, `Club`, `Dagger`, `Graeatclub`, `Handaxe`, `Javelin`, `Light Hammer`, `Mace`, `Quarter Staff`, `Sickle`, `Spear`, `Light Crossbow`, `Dart`, `Shortbow`, `Sling`, `Battleaxe`, `Flail`, `Glaive`, `Greataxe`, `Greatsword`, `Halberd`, `Lance`, `Shortsword`, `Maul`, `Morningstar`, `Pike`, `Rapier`, `Scimtar`, `Trident`, `War Pick`, `Warhammer`, `Whip`, `Blowgun`, `Hand Crossbow`, `Heavy Crossbow`, `Longbow`, `Net`) VALUES
(1, 'wizard', 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'barbarian', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'fighter', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'paladin', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'ranger', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weapon_list`
--
ALTER TABLE `weapon_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weapon_list`
--
ALTER TABLE `weapon_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
