-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 09:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_traffic_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `traffic_data`
--

CREATE TABLE `traffic_data` (
  `id` int(10) NOT NULL,
  `region` varchar(30) NOT NULL,
  `tl_condition` varchar(30) NOT NULL,
  `traffic` int(10) NOT NULL,
  `duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic_data`
--

INSERT INTO `traffic_data` (`id`, `region`, `tl_condition`, `traffic`, `duration`) VALUES
(1, 'Dago 01', 'Active', 25, 60),
(2, 'Dago 02', 'Broken', 0, 0),
(3, 'Dago 03', 'Active', 28, 70),
(4, 'Dago 04', 'Deactivated', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traffic_data`
--
ALTER TABLE `traffic_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traffic_data`
--
ALTER TABLE `traffic_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
