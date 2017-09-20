-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 08:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neuromender3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cyclinggamedata`
--

CREATE TABLE `CyclingGameData` (
  `CyclingGameID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `GameNo` int(11) NOT NULL,
  `DiamondNo` int(11) NOT NULL,
  `TimeInterval` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Rotation` int(11) NOT NULL,
  `DistanceRoute` double NOT NULL,
  `DiamondGap` double NOT NULL,
  `TimeCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cyclinggamedata`
--
ALTER TABLE `CyclingGameData`
  ADD PRIMARY KEY (`CyclingGameID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `SessionID` (`SessionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cyclinggamedata`
--
ALTER TABLE `CyclingGameData`
  MODIFY `CyclingGameID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cyclinggamedata`
--
ALTER TABLE `CyclingGameData`
  ADD CONSTRAINT `CycleSessonID_FK` FOREIGN KEY (`SessionID`) REFERENCES `session` (`SessionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CycleUserID_FK` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
