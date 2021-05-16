-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 02:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_name` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(11) DEFAULT 0,
  `weight` int(11) DEFAULT 0,
  `height` int(11) DEFAULT 0,
  `width` int(11) DEFAULT 0,
  `length` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_name`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES
(8, 'JVC001', 'King Kong', 12, 'CD', 33, 0, 0, 0, 0),
(9, 'JVC002', 'Fast & Furious', 50, 'CD', 80, 0, 0, 0, 0),
(10, 'GGWP001', 'Building a World', 12, 'Books', 0, 2, 0, 0, 0),
(11, 'GGWP002', 'unit-number', 11, 'Books', 0, 1, 0, 0, 0),
(12, 'TR001', 'Chair', 345, 'Furniture', 0, 0, 104, 60, 60),
(13, 'GGWP003', 'EMERGENCIES', 10, 'Books', 0, 1, 0, 0, 0),
(14, 'JVC003', 'Taken', 12, 'CD', 40, 0, 0, 0, 0),
(16, 'JVC004', 'Frozen', 12, 'CD', 80, 0, 0, 0, 0),
(19, 'GGWP004', 'Building', 12, 'Books', 0, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
