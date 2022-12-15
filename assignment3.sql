-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2022 at 04:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_bin NOT NULL,
  `password` varchar(255) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(6) NOT NULL,
  `fname` varchar(100) COLLATE latin1_bin NOT NULL,
  `lname` varchar(100) COLLATE latin1_bin NOT NULL,
  `gender` enum('m','f','o') COLLATE latin1_bin NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) COLLATE latin1_bin NOT NULL,
  `city` varchar(100) COLLATE latin1_bin NOT NULL,
  `province` enum('AB','BC','MB','NB','NL','NT','NS','NU','ON','PE','QC','SK','YT') COLLATE latin1_bin NOT NULL,
  `pcode` varchar(100) COLLATE latin1_bin NOT NULL,
  `phone` varchar(191) COLLATE latin1_bin NOT NULL,
  `email` varchar(191) COLLATE latin1_bin NOT NULL,
  `currentmed` varchar(200) COLLATE latin1_bin NOT NULL,
  `allergies` varchar(200) COLLATE latin1_bin NOT NULL,
  `refdoctor` varchar(200) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `city`, `province`, `pcode`, `phone`, `email`, `currentmed`, `allergies`, `refdoctor`) VALUES
(25, 'Dhanushka', 'Ranathunga', 'm', '2022-11-28', '170 Cherryhill Circle', 'London', 'ON', 'N6H 2M1', '5148125701', 'dksoftrc@gmail.com', 'nothing', 'nothing', 'Kasun Bandara'),
(27, 'Chathurani', 'Perera', 'f', '2022-11-02', '446, 6eme Avenue', 'Verdun', 'QC', 'H4G3A1', '15148125701', 'dhanushka.kavindu@outlook.com', 'nothing', 'nothing', 'Kasun Bandara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
