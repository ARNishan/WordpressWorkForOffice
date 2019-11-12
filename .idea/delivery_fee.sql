-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 05:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_fee`
--

CREATE TABLE `delivery_fee` (
  `id` int(10) UNSIGNED NOT NULL,
  `Range_KM` varchar(255) DEFAULT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `DeliveryFeeTier1` varchar(255) DEFAULT NULL,
  `DeliveryFeeTier2` varchar(255) DEFAULT NULL,
  `DeliveryFeeTier3` varchar(255) DEFAULT NULL,
  `DeliveryFeeTier4` varchar(255) DEFAULT NULL,
  `DeliveryFeeTier5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_fee`
--

INSERT INTO `delivery_fee` (`id`, `Range_KM`, `start`, `end`, `DeliveryFeeTier1`, `DeliveryFeeTier2`, `DeliveryFeeTier3`, `DeliveryFeeTier4`, `DeliveryFeeTier5`) VALUES
(1, 'Within 5kms', 0, 5, '30', '30', '20', '10', 'FREE'),
(2, 'More then 5kms less then 10kms', 6, 10, '40', '30', '20', '10', 'FREE'),
(3, 'More then 10kms less then 15kms', 11, 15, '50', '35', '25', '10', 'FREE'),
(4, 'More then 15kms less then 20kms', 16, 20, '60', '40', '30', '10', 'FREE'),
(5, 'More then 20kms less then 25kms', 21, 25, 'N/A', '45', '35', '20', 'FREE'),
(6, 'More then 25kms less then 30kms', 26, 30, 'N/A', '50', '40', '25', 'FREE'),
(7, 'More then 30kms less then 35kms', 31, 35, 'N/A', '60', '45', '30', '20'),
(8, 'More then 35kms less then 40kms', 36, 40, 'N/A', '70', '60', '40', '25'),
(9, 'More then 40kms less then 45kms', 41, 45, 'N/A', '100', '65', '45', '30'),
(10, 'More then 45kms less then 50kms', 46, 50, 'N/A', '120', '90', '50', '40'),
(11, 'More then 50kms less then 55kms', 51, 55, 'N/A', '130', '120', '80', '45'),
(12, 'More then 55kms less then 60kms', 56, 60, 'N/A', '150', '140', '100', '50'),
(13, 'More then 60kms', 61, 0, 'C/F', 'C/F', 'C/F', '100+2', '50+2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
