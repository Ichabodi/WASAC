-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 10:43 PM
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
  `authID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`authID`, `Fname`, `Lname`, `username`, `email`, `password`) VALUES
(1, 'MWIZERWA', 'Constantin', 'ikabodiemelyne3@gmail.com', '', 'Constantin1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CID` varchar(255) NOT NULL,
  `Cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CID`, `Cname`) VALUES
('AC', 'Ascension Island'),
('AD', 'Andorra'),
('AG', 'Antigua &amp; Barbuda'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AS', 'American Samoa'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AX', 'Åland Islands'),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia &amp; Herzegovina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BN', 'Brunei'),
('BO', 'Bolivia'),
('BQ', 'Caribbean Netherlands'),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos (Keeling) Islands'),
('CD', 'Congo - Kinshasa'),
('CF', 'Central African Republic'),
('CG', 'Congo - Brazzaville'),
('CI', 'Côte d’Ivoire'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CR', 'Costa Rica'),
('CV', 'Cape Verde'),
('CW', 'Curaçao'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czechia'),
('DE', 'Germany'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DZ', 'Algeria'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('ER', 'Eritrea'),
('ET', 'Ethiopia'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands (Islas Malvinas)'),
('FM', 'Micronesia'),
('FO', 'Faroe Islands'),
('FR', 'France'),
('GA', 'Gabon'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GG', 'Guernsey'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong'),
('HM', 'Heard &amp; McDonald Islands'),
('HN', 'Honduras'),
('HR', 'Croatia'),
('HT', 'Haiti'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IN', 'India'),
('IO', 'British Indian Ocean Territory'),
('IQ', 'Iraq'),
('IR', 'Iran'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Laos'),
('LB', 'Lebanon'),
('LI', 'Liechtenstein'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libya'),
('MC', 'Monaco'),
('MD', 'Moldova'),
('ME', 'Montenegro'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('ML', 'Mali'),
('MN', 'Mongolia'),
('MO', 'Macao'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('PF', 'French Polynesia'),
('SV', 'El Salvador'),
('SZ', 'Eswatini'),
('TD', 'Chad'),
('TF', 'French Southern Territories'),
('VG', 'British Virgin Islands'),
('XK', 'Kosovo'),
('YT', 'Mayotte');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `depID` int(255) NOT NULL,
  `depName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`depID`, `depName`) VALUES
(1, 'ULK'),
(2, 'UNILAK'),
(3, 'UNIVERSITY OF KIGALI'),
(4, 'UNIVERSITE DE KIGALI'),
(5, 'DOF'),
(6, 'SPUI');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divID` int(100) NOT NULL,
  `divName` varchar(255) NOT NULL,
  `depID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divID`, `divName`, `depID`) VALUES
(7, 'IT', 1),
(10, 'SUPPORT', 5),
(11, 'management', 2);

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `ID` int(16) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `InternID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internrequest`
--

CREATE TABLE `internrequest` (
  `ReqID` int(11) NOT NULL,
  `InternID` int(16) NOT NULL,
  `FieldOfStudy` varchar(255) NOT NULL,
  `educationLevel` varchar(255) NOT NULL,
  `Instutition` varchar(255) NOT NULL,
  `UnitOfInterest` varchar(255) NOT NULL,
  `appLetter` blob NOT NULL,
  `ToWhom` blob NOT NULL,
  `healthInsu` blob NOT NULL,
  `PropertyInsu` blob NOT NULL,
  `DateOfApp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LogID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manID` int(100) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manID`, `Names`, `email`, `password`) VALUES
(1, 'Emma ISHIMWE', 'ishimwe3@gmail.com', '1234'),
(2, 'Emma ISHIMWE', 'ishimwe3@gmail.com', 'weeeeee'),
(3, 'eme gana', 'ichabolyne3@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `SecID` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `UnitID` int(100) NOT NULL,
  `divID` int(255) NOT NULL,
  `UnitName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `divID`, `UnitName`) VALUES
(1, 7, 'sd'),
(2, 10, 'management'),
(3, 10, 'management'),
(4, 10, 'Software development'),
(5, 10, 'Software development'),
(6, 10, 'Software development'),
(7, 10, 'Software development'),
(8, 10, 'management'),
(9, 10, 'management'),
(10, 10, 'management'),
(11, 10, 'management'),
(12, 10, 'management'),
(13, 10, 'management'),
(14, 10, 'management');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`authID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`depID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divID`),
  ADD KEY `depID` (`depID`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`InternID`);

--
-- Indexes for table `internrequest`
--
ALTER TABLE `internrequest`
  ADD PRIMARY KEY (`ReqID`),
  ADD KEY `InternID` (`InternID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LogID`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manID`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`SecID`);

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
  MODIFY `authID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `depID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `divID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `InternID` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internrequest`
--
ALTER TABLE `internrequest`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `SecID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `UnitID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `division_ibfk_3` FOREIGN KEY (`depID`) REFERENCES `departements` (`depID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `internrequest`
--
ALTER TABLE `internrequest`
  ADD CONSTRAINT `internrequest_ibfk_1` FOREIGN KEY (`InternID`) REFERENCES `identity` (`InternID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`divID`) REFERENCES `division` (`divID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
