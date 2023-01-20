-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:57 AM
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
-- Table structure for table `product_leased_admin`
--

CREATE TABLE `product_leased_admin` (
  `order_id` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(20) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_leased_admin`
--

INSERT INTO `product_leased_admin` (`order_id`, `id`, `product_name`, `product_price`, `product_image`, `customer_email`) VALUES
(1, 6, 'Dior Suit 2', '34$', './dior.png', 'firstname@gmail.com'),
(2, 7, 'new lehenga', '100$', './lehenga.png', 'firstname@gmail.com'),
(3, 6, 'Dior Suit 2', '34$', './dior.png', 'firstname@gmail.com'),
(4, 7, 'new lehenga', '100$', './lehenga.png', 'firstname@gmail.com'),
(5, 1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'firstname@gmail.com'),
(6, 1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'firstname@gmail.com'),
(7, 1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'firstname@gmail.com'),
(8, 6, 'Dior Suit 2', '34$', './dior.png', 'firstname@gmail.com'),
(9, 7, 'new lehenga', '100$', './lehenga.png', 'tanmay@123.com'),
(10, 1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'tanmay@123.com'),
(11, 2, 'Wedding Dress Sherri Hill', '45$', './wedding.png', 'tanmay@123.com'),
(12, 2, 'Wedding Dress Sherri Hill', '45$', './wedding.png', 'firstname@gmail.com'),
(13, 3, 'Dior Suit Men\'s', '50$', './dior.png', 'firstname@gmail.com'),
(14, 2, 'Wedding Dress Sherri Hill', '45$', './wedding.png', 'firstname@gmail.com'),
(15, 3, 'Dior Suit Men\'s', '50$', './dior.png', 'firstname@gmail.com'),
(16, 1, 'SabhyaSachi Lehenga', '35$', './lehenga.png', 'firstname@gmail.com'),
(17, 2, 'Wedding Dress Sherri Hill', '45$', './wedding.png', 'firstname@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_leased_admin`
--
ALTER TABLE `product_leased_admin`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_leased_admin`
--
ALTER TABLE `product_leased_admin`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
