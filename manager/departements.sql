-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 03:42 PM
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
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `depID` varchar(255) NOT NULL,
  `depName` varchar(100) NOT NULL,
  `Gmanager` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`depID`, `depName`, `Gmanager`) VALUES
(CEO, 'CHIEF EXECUTIVE OFFICER', 0),
(RWSS, 'RURAL WATER SUPPLY SERVICES', 0),
(DSS, 'DIRECTORATE SUPPORT SERVICES', 0),
(DUWAS, 'DIRECTORATE URBAN WATER AND SEWERAGE', 0),
(DOF, 'DIRECTORATE OF FINANCE', 0),
(DCS, 'DIRECTORATE COMMERCIAL SERVICES', 0),
(DWASDS, 'DIRECTORATE WATER AND SANITATION DEVELOPMENT SERVICES', 0),
(SPIU, 'SINGLE PROJECT IMPLEMENTATION UNIT',  0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
