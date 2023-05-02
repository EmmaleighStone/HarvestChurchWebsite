-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 10:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harvestchurch`
--

-- --------------------------------------------------------

--
-- Table structure for table `newmembers`
--

CREATE TABLE `newmembers` (
  `MemberID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `middleInitial` text NOT NULL,
  `lastName` text NOT NULL,
  `birthday` date NOT NULL,
  `streetAddress` text NOT NULL,
  `city` text NOT NULL,
  `stateM` text NOT NULL,
  `zipCode` int(11) NOT NULL,
  `email` text NOT NULL,
  `cellPhone` int(11) NOT NULL,
  `homePhone` int(11) NOT NULL,
  `maritalStatus` text NOT NULL,
  `anniversary` date NOT NULL,
  `spouseFirstName` text NOT NULL,
  `spouseMiddleInt` text NOT NULL,
  `spouseLastName` text NOT NULL,
  `spouseBirthday` date NOT NULL,
  `childFirstName1` text DEFAULT NULL,
  `childMiddleInt1` text DEFAULT NULL,
  `childLastName1` text DEFAULT NULL,
  `childGender1` text DEFAULT NULL,
  `childBirthday1` date DEFAULT NULL,
  `childFirstName2` text DEFAULT NULL,
  `childMiddleInt2` text DEFAULT NULL,
  `childLastName2` text DEFAULT NULL,
  `childGender2` text DEFAULT NULL,
  `childBirthday2` date DEFAULT NULL,
  `childFirstName3` text DEFAULT NULL,
  `childMiddleInt3` text DEFAULT NULL,
  `childLastName3` text DEFAULT NULL,
  `childGender3` text DEFAULT NULL,
  `childBirthday3` date DEFAULT NULL,
  `childFirstName4` text DEFAULT NULL,
  `childMiddleInt4` text DEFAULT NULL,
  `childLastName4` text DEFAULT NULL,
  `childGender4` text DEFAULT NULL,
  `childBirthday4` date DEFAULT NULL,
  `musicGenre` text NOT NULL,
  `instrument` text NOT NULL,
  `playInstrument` text DEFAULT NULL,
  `yearsOfPlaying` int(11) DEFAULT NULL,
  `sundaySchoolMinistry` text DEFAULT NULL,
  `adult` text DEFAULT NULL,
  `miscellaneous` text DEFAULT NULL,
  `churchOutreach` text DEFAULT NULL,
  `maintenance` text DEFAULT NULL,
  `foodPantry` text DEFAULT NULL,
  `mediaSpecialist` text DEFAULT NULL,
  `kitchen` text DEFAULT NULL,
  `classroom` text DEFAULT NULL,
  `tutor` text DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prayerrequest`
--

CREATE TABLE `prayerrequest` (
  `prayerID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `prayerDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionform`
--

CREATE TABLE `questionform` (
  `QuestionID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `QuestionDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newmembers`
--
ALTER TABLE `newmembers`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `prayerrequest`
--
ALTER TABLE `prayerrequest`
  ADD PRIMARY KEY (`prayerID`);

--
-- Indexes for table `questionform`
--
ALTER TABLE `questionform`
  ADD PRIMARY KEY (`QuestionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newmembers`
--
ALTER TABLE `newmembers`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prayerrequest`
--
ALTER TABLE `prayerrequest`
  MODIFY `prayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questionform`
--
ALTER TABLE `questionform`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
