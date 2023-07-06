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
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `did` int(2) NOT NULL,
  `dname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `dname`) VALUES
(11, 'Nyarugenge'),
(12, 'Gasabo'),
(13, 'Kicukiro'),
(21, 'Nyanza'),
(22, 'Gisagara'),
(23, 'Nyaruguru'),
(24, 'Huye'),
(25, 'Nyamagabe'),
(26, 'Ruhango'),
(27, 'Muhanga'),
(28, 'Kamonyi'),
(31, 'Karongi'),
(32, 'Rutsiro'),
(33, 'Rubavu'),
(34, 'Nyabihu'),
(35, 'Ngororero'),
(36, 'Rusizi'),
(37, 'Nyamasheke'),
(41, 'Rulindo'),
(42, 'Gakenke'),
(43, 'Musanze'),
(44, 'Burera'),
(45, 'Gicumbi'),
(51, 'Rwamagana'),
(52, 'Nyagatare'),
(53, 'Gatsibo'),
(54, 'Kayonza'),
(55, 'Kirehe'),
(56, 'Ngoma'),
(57, 'Bugesera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
