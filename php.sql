-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'hasanakash0215@gmail.com', '0177');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `gender`, `dob`, `message`) VALUES
(1, 'kamrul hasan akash', 'hasanakash0215@gmail.com', '01773303096', 'male', '2020-09-02', 'rfghjnyhjnrf'),
(3, 'hasan akash', 'asikunnahar005@gmail.com', 'hujkl;', 'female', '2020-09-02', 'wedrfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `valid_info`
--

CREATE TABLE `valid_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valid_info`
--

INSERT INTO `valid_info` (`id`, `name`, `email`) VALUES
(1, 'kamrul hasan akash', 'hasanakash0215@gmail.com'),
(2, 'hasan akash', 'asikunnahar005@gmail.com'),
(3, 'kamrul hasan akash', 'hasanakash0215@gmail.com'),
(4, 'kamrul hasan akash', 'hasanakash0215@gmail.com'),
(5, 'kamrul hasan akash', 'hasanakash0215@gmail.com'),
(6, 'kamrul hasan akash', 'hasanakash0215@gmail.com'),
(7, 'kamrul hasan akash', 'hasanakash0215@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `valid_info_1`
--

CREATE TABLE `valid_info_1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valid_info_1`
--

INSERT INTO `valid_info_1` (`id`, `name`, `email`, `password`) VALUES
(1, 'kamrul hasan akash', 'hasanakash0215@gmail.com', '01773303096A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valid_info`
--
ALTER TABLE `valid_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valid_info_1`
--
ALTER TABLE `valid_info_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `valid_info`
--
ALTER TABLE `valid_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `valid_info_1`
--
ALTER TABLE `valid_info_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
