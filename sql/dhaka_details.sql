-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 05:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhaka_details`
--

CREATE TABLE `dhaka_details` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhaka_details`
--

INSERT INTO `dhaka_details` (`id`, `images`, `place_name`, `product_code`, `product_price`, `availability`, `type`) VALUES
(1, 'Ahsan.jpg', 'Ahsan Manzil', 'AhsanManzil202', 'BDT 7000', 'Available', 'Mid-Range'),
(2, 'Panam.jpg', 'Panam Nagar', 'Panam203', 'BDT 6000', 'Available', 'Low-Cost'),
(3, 'sheraton.jpg', 'Hotel Sheraton', 'Sheraton204', 'BDT 10000', 'Currently Unavailable', 'Luxurious'),
(4, 'Zindapark.jpg', 'Zinda Park', 'ZindaPark205', 'BDT 6000', 'Available', 'LoW-Cost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhaka_details`
--
ALTER TABLE `dhaka_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhaka_details`
--
ALTER TABLE `dhaka_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
