-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 01:52 PM
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
  `depID` varchar(255) NOT NULL,
  `depName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`depID`, `depName`) VALUES
('CEO', 'CHIEF EXECUTIVE OFFICER'),
('DCS', 'DIRECTORATE COMMERCIAL SERVICES'),
('DOF', 'DIRECTORATE OF FINANCE'),
('DSS', 'DIRECTORATE SUPPORT SERVICES'),
('DUWAS', 'DIRECTORATE URBAN WATER AND SEWERAGE'),
('DWASDS', 'DIRECTORATE WATER AND SANITATION DEVELOPMENT SERVICES'),
('RWSS', 'RURAL WATER SUPPLY SERVICES'),
('SPIU', 'SINGLE PROJECT IMPLEMENTATION UNIT');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divID` varchar(255) NOT NULL,
  `divName` varchar(255) NOT NULL,
  `depID` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `freeOccupation` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divID`, `divName`, `depID`, `manager`, `freeOccupation`) VALUES
('CEO01', 'corporate planning and strategy', 'CEO', '', 0),
('CEO02', 'internal auditor', 'CEO', '', 0),
('CEO03', 'comp sec', 'CEO', '', 0),
('CEO04', 'legal advisory', 'CEO', '', 0),
('DCS01', 'manager billing and revenue collection', 'DCS', '', 0),
('DCS02', 'manager marketing and customer care', 'DCS', '', 0),
('DOF01', 'financial contr. utility', 'DOF', '', 0),
('DOF02', 'management accountant', 'DOF', '', 0),
('DOF03', 'head of project fin management', 'DOF', '', 0),
('DSS01', 'HRM', 'DSS', '', 0),
('DSS02', 'procurement management', 'DSS', '', 0),
('DSS03', 'IT', 'DSS', '', 0),
('DSS04', 'ADM & LOG', 'DSS', '', 0),
('DUWS01', 'water operations manager', 'DUWS', '', 0),
('DUWS02', 'sewerage operations manager', 'DUWS', '', 0),
('DUWS03', 'water production manager', 'DUWS', '', 0),
('DUWS04', 'non-revenue water manager', 'DUWS', '', 0),
('DUWS05', 'quality assurance', 'DUWS', '', 0),
('DWASDS01', 'manager of water and sanitation infrastracture planning', 'DSS', '', 0),
('SPIU01', 'SPIU coordinator', 'SPIU', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `internID` int(11) NOT NULL,
  `ID` int(16) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internrequest`
--

CREATE TABLE `internrequest` (
  `ReqID` int(11) NOT NULL,
  `ID` int(16) NOT NULL,
  `educationLevel` varchar(255) NOT NULL,
  `Instutution` varchar(255) NOT NULL,
  `divisionOfInterest` varchar(255) NOT NULL,
  `fieldOfStudy` varchar(255) NOT NULL,
  `ToWhom` varchar(255) NOT NULL,
  `appLetter` varchar(255) NOT NULL,
  `propertyInsurance` varchar(255) NOT NULL,
  `healthInsurance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `UnitID` varchar(255) NOT NULL,
  `DivID` varchar(255) NOT NULL,
  `DepID` varchar(10) NOT NULL,
  `UnitName` varchar(255) NOT NULL,
  `HeadOfUnit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `DivID`, `DepID`, `UnitName`, `HeadOfUnit`) VALUES
('BUS', 'DSS03', 'DSS', 'business', ''),
('CDPM', 'DSS01', 'DSS', 'carrier devrlopment and performance management', ''),
('CM', '', 'RWSS', 'community mobilization', ''),
('DWM', '', 'RWSS', 'delegated water management', ''),
('GS', 'DSS04', 'DSS', 'general store', ''),
('HB', 'DCS01', 'DCS', 'head of billing', ''),
('HBA', 'CEO01', 'CEO', 'head of business analysis and planning', ''),
('HD', 'DUWAS01', 'DUWAS', 'head of design(zoning and mapping)', ''),
('HEW', 'DUWAS01', 'DUWAS', 'head of extension works', ''),
('HGM', 'DUWAS03', 'DUWAS', 'head general maintenance', ''),
('HIR', '', 'DWASDS', 'head of investment and resources', ''),
('HLDPM', 'DUWAS04', 'DUWAS', 'head leak detection and pressure mgt', ''),
('HM', 'DCS01', 'DCS', 'head of matering', ''),
('HME', 'CEO01', '', 'head of M & E', ''),
('HOB', '', 'DCS', 'head of branch', ''),
('HOCC', 'DCS02', 'DCS', 'head of call center', ''),
('HOM', 'DCS02', 'DCS', 'head of marketing', ''),
('HOPFM', '', 'DWASDS', 'head of project fin management', ''),
('HORC', 'DCS01', 'DCS', 'head of revenue collection', ''),
('HPFM', '', 'DOF', 'head of project fin management', ''),
('HPR', '', 'CEO', 'head of public relation', ''),
('HPUO', 'DSS02', 'DSS', 'head of procurement for utility operations', ''),
('HSAC', 'DUWAS05', 'DUWAS', 'head standards and control', ''),
('HSCL', 'DUWAS05', 'DUWAS', 'head sanitation central laboratory', ''),
('HSO', 'DUWAS02', 'DUWAS', 'head sewer operations', ''),
('HSP', 'DWSDS01', 'DWASDS', 'head of sanitation planning', ''),
('HSW', 'DUWAS02', 'DUWAS', 'head sewer works', ''),
('HTI', 'DUWAS04', 'DUWAS', 'head of thefty inspection', ''),
('HWCL', 'DUWAS05', 'DUWAS', 'head water central laboratory', ''),
('HWRS', 'DUWAS03', 'DUWAS', 'head of water resource mgt', ''),
('HWSP', 'DWASDS01', 'DWASDS', 'head of water supply planning', ''),
('hWTP', 'DUWAS03', 'DUWAS', 'head of WTPs(WTPs engineer)', ''),
('IT', 'DSS03', 'DSS', 'IT infrastracture and support', ''),
('LOG', 'DSS04', 'DSS', 'logistics and estatement', ''),
('O&M', '', 'RWSS', 'operation and maintenance', ''),
('PM', 'DSS01', 'DSS', 'personnel management', ''),
('RRM', '', 'RWSS', 'rural resource mobilization', ''),
('SM', 'DUWAS02', 'DUWAS', 'sewer maintenance', ''),
('WDNM', 'DUWAS01', 'DUWAS', 'water distribution and network maintenance', '');

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
  ADD PRIMARY KEY (`divID`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`internID`);

--
-- Indexes for table `internrequest`
--
ALTER TABLE `internrequest`
  ADD PRIMARY KEY (`ReqID`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`UnitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `authID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internrequest`
--
ALTER TABLE `internrequest`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
