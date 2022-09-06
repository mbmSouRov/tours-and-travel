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
-- Table structure for table `product_page`
--

CREATE TABLE `product_page` (
  `Product_Id` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Places` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_page`
--

INSERT INTO `product_page` (`Product_Id`, `Description`, `Places`) VALUES
(1, 'Dhaka is the capital city of Bangladesh, in southern Asia. Set beside the Buriganga River, it’s at the center of national government, trade and culture. The 17th-century old city was the Mughal capital of Bengal', 'dhaka.jpg'),
(2, 'Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. Aggameda Khyang monastery is home to bronze..', 'cox.jpg'),
(3, 'Bandarban, is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District.', 'bandarban1.jpg'),
(4, 'Sylhet is a city in eastern Bangladesh, on the Surma River. It’s known for its Sufi shrines, like the ornate tomb and mosque of 14th-century saint Hazrat Shah Jalal, now a major pilgrimage site near Dargah Gate.', 'sylhet.jpg'),
(5, 'Rangamati Hill District, is a district in south-eastern Bangladesh. It is a part of the Chittagong Division and the town of Rangamati serves as the headquarters of the district. By area, Rangamati is the largest district of the country.', 'rangamati.jpg'),
(6, 'Khagrachari is a hilly area. It is bounded by the tripura state of India on the north, Rangamati and chittagong districts on the south, Rangamati district on the east, Chittagong District and Tripura state of India on the west.', 'khagrachori.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_page`
--
ALTER TABLE `product_page`
  ADD PRIMARY KEY (`Product_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_page`
--
ALTER TABLE `product_page`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
