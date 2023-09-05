-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 07:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `names` varchar(240) NOT NULL,
  `address` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `country` varchar(80) NOT NULL,
  `zip_code` int(16) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `names`, `address`, `city`, `country`, `zip_code`, `phone`, `email`, `password`) VALUES
(1, 'Ndahiro emmanuel', 'kigali', 'masaka', 'Rwanda', 1234, '0787549324', 'ndahiroemmy@gmail.com', 'emmy');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_item` varchar(120) NOT NULL,
  `pro_type` varchar(123) DEFAULT NULL,
  `pro_price` varchar(460) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_item`, `pro_type`, `pro_price`) VALUES
(1, 'myfolder/IMG-20220928-WA0016.jpg', 'dressngs', '20k Rwf'),
(3, 'myfolder/IMG-20220928-WA0019.jpg', 'dressngsDFGHGDSF', '217k Rwf'),
(5, 'myfolder/IMG-20220928-WA0018.jpg', 'dressngsDFGHGDSF', '217k Rwf'),
(6, 'myfolder/IMG-20220928-WA0024.jpg', 'dressngsDFGHGDSF', '217k Rwf'),
(7, 'myfolder/IMG-20220928-WA0023.jpg', 'dressngsDFGHGDSF', '20k'),
(8, 'myfolder/IMG-20220928-WA0022.jpg', 'dressngsDFGHGDSF', '20k'),
(9, 'myfolder/IMG-20220928-WA0021.jpg', 'dressngsDFGHGDSF', '217k Rwf'),
(15, 'myfolder/IMG-20220928-WA0020.jpg', 'dressngs', '20k');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(77) NOT NULL,
  `password` varchar(878) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(2, 'mugisha keneth', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_item` (`prod_item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
