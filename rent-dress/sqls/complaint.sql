-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:01 AM
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
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `user_namee` varchar(200) NOT NULL,
  `user_phone` int(10) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_subject` varchar(100) DEFAULT NULL,
  `seller_name` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `complaint_details` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `user_namee`, `user_phone`, `user_email`, `user_subject`, `seller_name`, `product_name`, `complaint_details`) VALUES
(1, 'sample name', 12323321, 'SAMPLEEMAIL@gmail.com', 'SUBJECT FIELD', 'sherry', 'red skirt', 'I am testing'),
(2, 'rerw', 32, 'name@gmail', '4efedsfd', 'fds', 'fdsfdsfds', 'fdsfds'),
(3, 'qwe', 1233213, 'qwe@gmail.com', 'gefva', 'grgrge', 'grgre', 'grgreg'),
(4, 'new new new', 12344, 'new@gmail.com', 'new', 'new', 'new', 'SAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAaSAMPLE DATAa'),
(5, 'name', 1222, 'name@email.com', 'how to purchase', 'Burberry', 'Red Shirt', 'It has a small mis stitch in the middle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
