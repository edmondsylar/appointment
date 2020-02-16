-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 06:03 AM
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
  `service` varchar(250) NOT NULL,
  `Select Provider` varchar(250) NOT NULL,
  `Fullname` varchar(250) NOT NULL,
  `email` varbinary(250) NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `Notes` longtext NOT NULL,
  `Address` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `appointments`
--
DELIMITER $$
CREATE TRIGGER `id_t` BEFORE INSERT ON `appointments` FOR EACH ROW SET NEW.id = uuid()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` varchar(250) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Secondname` varbinary(250) NOT NULL,
  `Phone` varbinary(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `specialty` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `doctors`
--
DELIMITER $$
CREATE TRIGGER `id_trigger` BEFORE INSERT ON `doctors` FOR EACH ROW SET NEW.id = uuid()
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
