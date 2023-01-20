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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `houseNum` int(10) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Zipcode` varchar(6) NOT NULL,
  `userType` enum('b','l','a') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `houseNum`, `Street`, `Zipcode`, `userType`, `email`, `password`, `number`) VALUES
(1, 'jake', 'JR', 'paul', 3500, 'Dalhouse', 'T2N4V5', 'b', 'tanmay@123gmail.com', '1234', 858585858),
(2, 'jake', 'jr', 'paul', 123, 'asds', 'adsdsa', 'b', 'tanmay@123.com', '1234', 1234567890),
(3, 'jj', 'jj', 'jj', 124, 'jjj', 'jjjjjj', 'b', 'firstname@gmail.com', '1234', 1234567890),
(4, 'a', 'a', 'a1', 11, 'asa', '123334', 'b', 'test@123.com', '123', 1234567890),
(5, 'ahmed', 'as', 'as', 10, 'ds', '123456', 'a', 'test@gmail.com', '12345', 1234567890),
(6, 'NEWUSER', 'MIDDLE', 'LAST', 34, 'JAJ', '432243', 'l', 'namee@gmail.com', 'password', 1234567890),
(7, 'peepo', 'pee', 'poo', 3, 'pe', '43434', 'b', 'charles@gmail.com', '1234', 1234567777),
(8, 'fds', 'fds', 'fds', 4, 'fds', '43224', 'l', 'email@email.com', 'asdf', 432894);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
