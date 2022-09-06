-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 06:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
-- Table structure for table `cox_details`
--

CREATE TABLE `cox_details` (
  `coxhotel_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `is_private` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cox_details`
--

INSERT INTO `cox_details` (`coxhotel_id`, `images`, `place_name`, `features`, `product_price`, `type`, `is_private`) VALUES
(1, 'himchori.jpg', 'Himchori', 'Mountains,', 'BDT 5000', 'Low-Budget', 2),
(2, 'inani.png', 'Inani Beach', 'Sea Beach', 'BDT 700', 'Luxurious', 0),
(3, 'Sonadia_Island.jpg', 'Sonadia Island', 'Island', 'BDT 8000', 'Mid-Budget', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cox_details`
--
ALTER TABLE `cox_details`
  ADD PRIMARY KEY (`coxhotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cox_details`
--
ALTER TABLE `cox_details`
  MODIFY `coxhotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
