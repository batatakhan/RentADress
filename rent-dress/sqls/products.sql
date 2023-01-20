-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentadressdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `User_Email` varchar(255) NOT NULL DEFAULT 'root@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_image`, `User_Email`) VALUES
(1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'root@gmail.com'),
(2, 'Wedding Dress Sherri Hill', '45$', './wedding.png', 'root@gmail.com'),
(3, 'Dior Suit Men\'s', '50$', './dior.png', 'root@gmail.com'),
(4, 'Skirt Lehenga ', '30$', './lehenga2.png', 'root@gmail.com'),
(5, 'Skirt Lehenga 2', '90$', './lehenga2.png', 'root@gmail.com'),
(6, 'Dior Suit 2', '34$', './dior.png', 'tanmay@123.com'),
(7, 'new lehenga', '100$', './lehenga.png', 'firstname@gmail.com'),
(9, 'Spiderman Suit', '5000$', './spiderman.png', 'namee@gmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
