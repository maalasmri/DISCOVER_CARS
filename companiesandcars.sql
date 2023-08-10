-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 09:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companiesandcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Car_id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Car_id`, `Name`, `Description`, `Image`) VALUES
(1, 'Impala 2020', 'Exterier:\r\nCylinders:  V6\r\nTotal Seating: 5\r\nFuel Tank Capacity: 18.5 gal.\r\nHorsePower:305 Hp\r\n18\" Aluminum Wheels\r\nInterier:\r\n100 Watts Stereo Output\r\nAM/FM Stereo\r\nUSB Connection\r\nKeyless ignation\r\nScreen\r\n6 total speakers\r\nRear View Camera\r\nNavigation', 0x63312e6a7067),
(2, 'Accent 2020', 'Exterier:\r\nCylinders:  V4\r\nTotal Seating: 5\r\nFuel Tank Capacity: 11.9 gal.\r\nHorsePower:120 Hp\r\n15\" Aluminum Wheels\r\nInterier:\r\nAM/FM Stereo\r\nUSB Connection\r\n4 total speakers', 0x68342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Comp_id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Comp_id`, `Name`, `Description`, `Image`) VALUES
(1, 'Chevrolet', 'American Chevrolet Founded at 1911 \r\nand it is a part of General Motors, Chevrolet has many famous cars such\r\nas Tahoe, Corvette, Impala.', 0x63632e6a7067),
(2, 'Huyndai', 'The Hyundai Motor Company is a South Korean multinational automotive manufacturer, it was founded in 1967,\r\nHuyndai has many famous cars such as: Sonata, Accent, Santa fe.', 0x68682e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(5) NOT NULL,
  `Username` varchar(26) NOT NULL,
  `Password` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Password`) VALUES
(1, 'mohammed', 'M123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Comp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
