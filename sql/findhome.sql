-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 01:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `subject`, `message`, `status`) VALUES
(2, 'Sanjida', '000000', 'sanjida.islam2024@gmail.com', 'SSSS', 'ddddd', 1),
(3, 'Sanjida1', '01310458645', 'sanjida.islam2024@gmail.com', 'CSE 482 Project', 'Notification Message ', 1),
(4, 'Sanjida2', '01310458645', 'sanjida.islam2024@gmail.com', 'CSE 482 Project', 'Notification Done ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `owner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `location`, `type`, `city`, `country`, `beds`, `baths`, `area`, `price`, `address`, `owner`) VALUES
(4, 'Sky View', 'Mirpur', 'Commercial', 'Dhaka', 'Bangladesh', 3, 3, '2500', '900000', 'Mirpur, Dhaka, Bangladesh', '1'),
(5, 'Property 1', 'Uttara', 'Residential', 'Dhaka', 'Bangladesh', 4, 3, '1650', '15000000', 'Uttara, Dhaka, Bangladesh', '1'),
(6, 'Property2', 'Mirpur', 'Commercial', 'Dhaka', 'Bangladesh', 4, 3, '1200', '1000000', 'Mirpur,Dhaka,Bangladesh', '1'),
(8, 'AK Property33', 'Bashundhara', 'Commercial', 'Rajshahi', 'Bangladesh', 4, 3, '14000', '50000000', 'Block F Road 20 House 659 ', '2'),
(9, 'RRR', 'Mirpur', 'Residential', 'Dhaka', 'Bangladesh', 4, 3, '1300', '5000000', 'Mirpur Dhaka Bangladesh', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `licenseno` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `dob`, `occupation`, `gender`, `nationality`, `cell`, `address`, `licenseno`, `nid`, `type`) VALUES
(1, 'Islam Sanjida', 'sanjida.islam20@northsouth.edu', '786786', '1999-12-08', 'Businessman', 'Female', 'Bangladeshi', '0177777777', 'Bashundhara RA', '123', '123', 'Buyer'),
(2, 'Smrity', 'sanjida.islam30@northsouth.edu', '12345', '1999-12-08', 'Businessman', 'Female', 'Bangladeshi', '017888888', 'Bashundhara RA', '0', '123456', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
