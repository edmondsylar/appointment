-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 10:11 AM
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
  `role` enum('doctor','admin') NOT NULL DEFAULT 'doctor',
  `password` varchar(250) NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `specialty` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `doctors`
--
DELIMITER $$
CREATE TRIGGER `id_trigger` BEFORE INSERT ON `doctors` FOR EACH ROW SET NEW.id = uuid()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` enum('admin','doctor') NOT NULL DEFAULT 'doctor',
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`, `createdOn`) VALUES
('5af386ba-62a0-11ea-a618-28d24460ef18', 'Edmond Musiitwa', 'edmondmusiitwa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', '2020-03-10 07:25:44');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `id_tigger` BEFORE INSERT ON `users` FOR EACH ROW SET NEW.id = uuid()
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

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
