-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `self_test`
--

CREATE TABLE `self_test` (
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `travel` text NOT NULL,
  `returns` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `fever` varchar(50) NOT NULL,
  `cough` varchar(50) NOT NULL,
  `breathing` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `self_test`
--

INSERT INTO `self_test` (`type`, `name`, `address`, `zone`, `age`, `gender`, `mobile`, `travel`, `returns`, `passport`, `contact`, `fever`, `cough`, `breathing`, `details`) VALUES
('international', 'Yash', 'Race Course', 'east', 20, 'male', '+917888888888', 'Germany', '2020-06-04', 'IND200092', 'Yes', 'Yes', 'Yes', 'No', 'Head Ache'),
('international', 'Anuraj Srivasta', 'Hospital Compound', 'north', 25, 'female', '+919999999999', 'Italy', '2020-06-02', 'IND200879', 'Yes', 'Yes', 'No', 'Yes', 'ALI Symptoms');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0, 'shubham', 'shubhamgupta@gmail.com', 'admin', '3b6beb51e76816e632a40d440eab0097'),
(0, 'yash8005', 'y.patel8005@gmail.com', 'user', 'c296539f3286a899d8b3f6632fd62274'),
(0, 'anuraj', 'anuraj@gmail.com', 'user', 'bed937879d55034351f4605de4ada3da'),
(0, 'rajat', 'rajat@gmail.com', 'admin', 'd2ff3b88d34705e01d150c21fa7bde07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `self_test`
--
ALTER TABLE `self_test`
  ADD KEY `id` (`passport`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
