-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` varchar(250) NOT NULL,
  `service` varchar(250) DEFAULT NULL,
  `Provider` varchar(250) DEFAULT NULL,
  `Fullname` varchar(250) DEFAULT NULL,
  `email` varbinary(250) DEFAULT NULL,
  `Phone` varchar(250) DEFAULT NULL,
  `Notes` longtext DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `status` enum('approved','declined','pending') NOT NULL DEFAULT 'pending',
  `district` varchar(250) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `service`, `Provider`, `Fullname`, `email`, `Phone`, `Notes`, `date`, `status`, `district`, `created`) VALUES
('5e4c0507019b75.93312221', 'Gynecologyst', 'Edmond Musiitwa', 'Kajuguli Eron', 0x6b616a75677540676d61696c2e636f6d, '078989879', 'This is a test registration', '2020-02-13', 'pending', 'Wakiso', '2020-02-18 15:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created`) VALUES
('e6ff6277-525e-11ea-99be-28d24460ef18', 'Wakiso', '2020-02-18 14:56:54');

--
-- Triggers `districts`
--
DELIMITER $$
CREATE TRIGGER `table_trigger` BEFORE INSERT ON `districts` FOR EACH ROW SET NEW.id = uuid()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `specialty` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `email`, `password`, `Phone`, `district`, `specialty`, `address`, `created`) VALUES
('e6e07e97-525e-11ea-99be-28d24460ef18', 'Edmond Musiitwa', 'edmondmusiitwa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '0701207194', 'Wakiso', 'Gynecologyst', 'Kampala', '2020-02-18 14:56:54');

--
-- Triggers `doctors`
--
DELIMITER $$
CREATE TRIGGER `id_trigger` BEFORE INSERT ON `doctors` FOR EACH ROW SET NEW.id = uuid()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
