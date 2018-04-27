-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymate`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `creation_date` datetime NOT NULL,
  `updation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `type`, `creation_date`, `updation_date`) VALUES
(16, 'Rahul', 'rahul.kumar@gmail.com', 'Gaurav1', '', '0000-00-00 00:00:00', '2018-04-27 09:57:37'),
(17, 'asfasdfadsf', 'asdf@adsfl.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 09:57:37'),
(18, 'Gaurav', 'rahul.kumar1@gmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 09:57:37'),
(19, 'rohit', 'rohit@gmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 09:57:37'),
(20, 'gaurav', 'gaurav@gmail.com', 'gaurav1', 'normal', '2018-04-27 05:11:21', '2018-04-27 10:41:21'),
(21, 'gaurav', 'gaurav1@gmail.com', 'gaurav1', 'normal', '2018-04-27 05:12:23', '2018-04-27 10:42:23'),
(22, 'asdfl', 'adf@dgmail.com', 'gaurav', 'normal', '2018-04-27 05:13:31', '2018-04-27 10:43:31'),
(23, 'test', 'test@gmail.com', 'testing1', 'normal', '2018-04-27 05:20:01', '2018-04-27 10:50:01'),
(24, 'alsdjf', 'gab@gmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 11:06:47'),
(25, 'gaurav', 'kapill@gmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 11:08:31'),
(26, 'gaurav', 'gaurav22@gmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 11:14:55'),
(27, 'Gaurav', 'adf121212@dgmail.com', '123456', '', '0000-00-00 00:00:00', '2018-04-27 21:41:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
