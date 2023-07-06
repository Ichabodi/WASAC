-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 09:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `name` varchar(190) NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Kayihura', 'Kayijames@gmail.com', 'Kayijames1'),
(2, 'ikabodi annah', 'ikabodi_annah@gmail.com', 'ikabodi_annah1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CID` int(255) NOT NULL,
  `CName` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CID`, `CName`) VALUES
(1, 'Afghanistan'),
(2, 'Rwanda'),
(3, 'Uganda');

-- --------------------------------------------------------

--
-- Table structure for table `depertements`
--

CREATE TABLE `depertements` (
  `depID` int(100) NOT NULL,
  `depName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `depertements`
--

INSERT INTO `depertements` (`depID`, `depName`) VALUES
(1, 'DSS'),
(2, 'DOF');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divID` int(255) NOT NULL,
  `divName` varchar(212) NOT NULL,
  `depID` int(100) NOT NULL,
  `manID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divID`, `divName`, `depID`, `manID`) VALUES
(1, 'IT', 1, 2),
(2, 'development', 1, 2),
(3, 'business', 2, 2),
(4, 'advertising', 2, 2),
(5, 'IS', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `internID` int(100) NOT NULL,
  `Names` varchar(210) NOT NULL,
  `ID` int(16) NOT NULL,
  `phone` int(15) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(122) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`internID`, `Names`, `ID`, `phone`, `birthdate`, `gender`, `country`, `email`, `password`) VALUES
(2, 'MWIZERWA Constantin', 2147483647, 2147483647, '3122-02-12', 'male', '2', 'mwizerwaconstantin@gmail.com', 'mwizerwaconstantin1'),
(3, 'ishimwe', 0, 2147483647, '2023-06-15', 'male', '3', 'ishimweelyse@gmail.com', 'elyse33');

-- --------------------------------------------------------

--
-- Table structure for table `instutition`
--

CREATE TABLE `instutition` (
  `InstuID` int(100) NOT NULL,
  `instuName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instutition`
--

INSERT INTO `instutition` (`InstuID`, `instuName`) VALUES
(1, 'university of kigali'),
(2, 'university of Rwanda'),
(3, 'UNILAK');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manID`, `name`, `email`, `password`) VALUES
(2, 'kwizera ', 'kwizerajack@gmail.com', 'kwizerajack1'),
(4, 'emelyne', 'emelyne3@gmail.com', 'emelyne3'),
(5, 'mwizerwa', 'mwizerwa2@gmail.com', 'mwizerwa2');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ReqID` int(100) NOT NULL,
  `ID` bigint(20) NOT NULL,
  `educationLevel` varchar(110) NOT NULL,
  `institution` varchar(222) NOT NULL,
  `departements` varchar(255) NOT NULL,
  `divisions` varchar(212) NOT NULL,
  `units` varchar(244) NOT NULL,
  `appLetter` varchar(255) NOT NULL,
  `ToWhom` varchar(255) NOT NULL,
  `healthInsu` varchar(255) NOT NULL,
  `propertyInsu` varchar(255) NOT NULL,
  `dateOfApp` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ReqID`, `ID`, `educationLevel`, `institution`, `departements`, `divisions`, `units`, `appLetter`, `ToWhom`, `healthInsu`, `propertyInsu`, `dateOfApp`, `status`) VALUES
(1, 1234567890, 'undergraduate', '', '2', '3', '5', 'images/emelyne internship.docx', 'images/internship.pdf', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', '2023-06-22', 'Accepted'),
(2, 372872842742, 'undergraduate', '', '1', '2', '3', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', 'images/IKABODI MBARUSHIMANA EMELYNE.pdf', '2023-06-22', 'Declined'),
(3, 2147483647, 'postgraduate', '', '2', '3', '5', 'images/emelyne internship.docx', 'images/internship.pdf', 'images/WASAC.docx', 'images/WASAC.docx', '2023-06-30', 'Pending'),
(4, 1199996576353543, 'postgraduate', '', '2', '3', '5', 'images/internship.pdf', 'images/internship.pdf', 'images/internship.pdf', 'images/internship.pdf', '2023-03-14', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `SecID` int(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`SecID`, `fullName`, `email`, `password`) VALUES
(1, 'ikabodihannah', 'ikabodihannah@gmail.com', 'ikabodihannah1');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `file0` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `Name`, `file0`, `file1`, `file2`, `file3`) VALUES
(22, 'INT', 'images/1.png', 'images/0ab89632-4f15-4c4f-a02a-2dca124ab0bf.avif', 'images/wasac_structure.pdf', 'images/QUIZ and EXERCISE 1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `UnitID` int(100) NOT NULL,
  `UnitName` varchar(244) NOT NULL,
  `divID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `UnitName`, `divID`) VALUES
(1, 'software', 1),
(2, 'maintenance', 1),
(3, 'webmasters', 2),
(4, 'dbmasters', 2),
(5, 'business mgt', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `depertements`
--
ALTER TABLE `depertements`
  ADD PRIMARY KEY (`depID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divID`),
  ADD KEY `manID` (`manID`),
  ADD KEY `depID` (`depID`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`internID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `instutition`
--
ALTER TABLE `instutition`
  ADD PRIMARY KEY (`InstuID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ReqID`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`SecID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`UnitID`),
  ADD KEY `divID` (`divID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `depertements`
--
ALTER TABLE `depertements`
  MODIFY `depID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `divID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `internID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instutition`
--
ALTER TABLE `instutition`
  MODIFY `InstuID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ReqID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `SecID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `UnitID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_1` FOREIGN KEY (`depID`) REFERENCES `depertements` (`depID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `division_ibfk_2` FOREIGN KEY (`manID`) REFERENCES `manager` (`manID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`divID`) REFERENCES `division` (`divID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
