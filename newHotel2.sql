-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2023 at 03:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newHotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(11) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `adults` tinyint(11) NOT NULL,
  `children` tinyint(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_price` decimal(11,0) NOT NULL,
  `total_price` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ID`, `guest_name`, `email`, `hotel_name`, `checkin_date`, `checkout_date`, `adults`, `children`, `room_type`, `room_price`, `total_price`) VALUES
(1, 'tebogo', 'Tebogochonco@gmail.com', 'Madikwe Hills', '2023-08-26', '2023-08-27', 2, 0, 'single', 100, 100),
(2, 'tebogo', 'Tebogochonco@gmail.com', 'Madikwe Hills', '2023-08-26', '2023-08-27', 2, 0, 'single', 100, 100),
(3, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-26', '2023-08-29', 2, 0, 'single', 100, 300),
(4, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-26', '2023-08-29', 2, 2, 'double', 200, 600),
(5, 'tebogo', 'tebogo@gmail.com', '', '2023-08-26', '2023-08-31', 2, 2, 'single', 200, 1000),
(6, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-26', '2023-08-31', 2, 2, 'double', 200, 1000),
(7, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-31', '2023-09-02', 2, 2, 'double', 200, 400),
(8, 'tebogo', 't@yahoo.com', 'Manor Hills', '2023-08-26', '2023-09-02', 2, 2, 'double', 200, 1400),
(9, 'tebogo', 'tebogo@gmail.com', 'Cascades', '2023-08-26', '2023-09-02', 2, 0, 'single', 200, 1400),
(10, 'tebogo', 'Tebogochonco@gmail.com', 'Madikwe Hills', '2023-08-28', '2023-08-31', 2, 0, 'single', 200, 600),
(11, 'Ago', 'Ago@gmail.com', '', '2023-08-27', '2023-08-28', 2, 0, 'single', 200, 200),
(12, 'Ago', 'Ago@gmail.com', 'Cascades', '2023-08-27', '2023-08-28', 2, 0, 'single', 200, 200),
(13, 'Ago', 'Ago@gmail.com', 'Madikwe Hills', '2023-08-27', '2023-08-28', 2, 0, 'double', 200, 200),
(14, 'tebogo', 'tebogo@gmail.com', 'Madikwe Hills', '2023-08-28', '2023-08-31', 2, 0, 'single', 200, 600),
(15, 'tebogo', 'tebogo@gmail.com', 'The Riverleaf Hotel', '2023-08-28', '2023-08-31', 2, 0, 'single', 200, 600),
(16, 'tebogo', 'tebogo@gmail.com', 'The Riverleaf Hotel', '2023-08-28', '2023-08-31', 2, 0, 'single', 200, 600),
(17, 'tebogo', 'tebogo@gmail.com', 'The Riverleaf Hotel', '2023-08-28', '2023-08-31', 2, 0, 'single', 200, 600),
(18, 'tebogo', 'Tebogochonco@gmail.com', 'The Riverleaf Hotel', '2023-08-29', '2023-08-30', 2, 0, 'single', 200, 200),
(19, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-31', '2023-09-06', 2, 0, 'double', 200, 1200),
(20, 'tebogo', 'Tebogochonco@gmail.com', 'Cascades', '2023-08-31', '2023-09-02', 2, 0, 'double', 200, 600),
(21, 'tebogo', 'Tebogochonco@gmail.com', 'Madikwe Hills', '2023-08-28', '2023-08-30', 2, 0, 'double', 200, 400),
(22, 'tebogo', 'Tebogochonco@gmail.com', 'Madikwe Hills', '2023-08-28', '2023-09-06', 2, 0, 'single', 100, 900),
(23, 'sli', 'sli@gmail.com', 'Madikwe Hills', '2023-08-28', '2023-08-30', 2, 0, 'double', 200, 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'Tebogo', '1234'),
(2, 'Tebogo02', '1234'),
(3, 'Lesego', '2345'),
(4, 'lala', '2345'),
(8, 'Mmusa', '4321'),
(9, 'Lulu', '0987'),
(10, 'Paul', '0987'),
(11, 'Ago', '2345'),
(12, 'Tete', '3456'),
(13, 'Ten', '0909'),
(14, 'Cam', '1212'),
(15, 'Sam', '123'),
(16, 'sli', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
