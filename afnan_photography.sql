-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 04:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afnan_photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `ID` int(11) NOT NULL,
  `AlbumName` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`ID`, `AlbumName`, `Image`) VALUES
(1, '16 el rashidy street, Sheraton', ''),
(2, 'ttt', ''),
(3, 'aaaa', ''),
(4, '16 el rashidy street, Sheraton', ''),
(5, 'aaa', ''),
(6, 'aaa', ''),
(7, 'ttt', ''),
(8, 'sheruf', ''),
(9, 'sss', ''),
(10, 'op', ''),
(11, 'op', ''),
(12, 'io', ''),
(13, 'io', ''),
(14, 'sh1111', ''),
(15, 'sh1111', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`FirstName`, `LastName`, `Date`, `Time`, `City`, `Comment`) VALUES
('Seif', 'Nagi', '2021-05-26', '00:00:00.000000', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-19', '00:00:00.000000', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-11', '00:00:00.000000', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-11', '', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-20', '', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-28', '', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-27', '', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-27', '09:59', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-27', '21:59', 'Ismailia', ''),
('Seif', 'Nagi', '2021-05-27', '21:59', 'Ismailia', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL,
  `CityName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `CityName`) VALUES
(13, 'Alexandria'),
(2, 'Cairo'),
(1, 'Ismailia'),
(14, 'ZagZeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `ImageGallery` varchar(250) NOT NULL,
  `NameGallery` varchar(250) NOT NULL,
  `IDAlbum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `ImageGallery`, `NameGallery`, `IDAlbum`) VALUES
(8, '', 'oooo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `Image_Name` varchar(200) NOT NULL,
  `Image_Description` varchar(200) NOT NULL,
  `Image_Type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `ID_Package_Type` int(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` int(10) NOT NULL,
  `City` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`ID_Package_Type`, `Description`, `Price`, `City`) VALUES
(4, 'Pack 1', 2000, 'Cairo'),
(2, 'Pack 2', 500, 'Cairo');

-- --------------------------------------------------------

--
-- Table structure for table `package type`
--

CREATE TABLE `package type` (
  `ID` int(20) NOT NULL,
  `Package_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package type`
--

INSERT INTO `package type` (`ID`, `Package_Name`) VALUES
(1, 'Weeding'),
(2, 'Casual'),
(4, 'Engagment');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD KEY `City` (`City`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`),
  ADD KEY `CityID` (`CityID`),
  ADD KEY `CityName` (`CityName`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDAlbum` (`IDAlbum`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD KEY `ID_Package_Type` (`ID_Package_Type`),
  ADD KEY `City` (`City`);

--
-- Indexes for table `package type`
--
ALTER TABLE `package type`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package type`
--
ALTER TABLE `package type`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`City`) REFERENCES `city` (`CityName`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`IDAlbum`) REFERENCES `album` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
