-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`id`, `first_name`, `last_name`, `email`, `description`) VALUES
(1, 'Sashane', 'De Silva', 'sashane1306d@gmail.com', 'hello this is a good website'),
(2, 'thausha', 'perera', 'tharusha123@gmail.com', 'a good website '),
(3, 'kamal', 'silva', 'kamal123@yahoo.com', 'Very user friendly'),
(4, 'kamal', 'silva', 'kamal123@yahoo.com', 'thanks for the help');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `firstname`, `lastname`, `country`, `city`, `mobile`, `email`, `password`) VALUES
(1, 'Sashane', 'De Silva', 'Sri Lanka', 'Homagama', 2147483647, 'sashane1306d@gmail.com', '12345'),
(2, 'thausha', 'perera', 'Sri Lanka', 'balangoda', 769832463, 'tharusha123@gmail.com', '1144');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_form`
--
ALTER TABLE `application_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
