-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektly`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `created_at`) VALUES
(1, '', '', '', '', '2024-05-25 02:02:17.097518'),
(2, 'asffasfasd', '8976898789', 'asfas@gmail.com', 'fasfa', '2024-05-25 02:10:17.452131'),
(3, 'asffasfasd', '8976898789', 'asfas@gmail.com', 'fasfa', '2024-05-25 02:11:09.119020'),
(4, 'asffasfasd', '8976898789', 'asfas@gmail.com', 'fasfa', '2024-05-25 02:11:25.544566'),
(5, 'asffasfasd', '8976898789', 'asfas@gmail.com', 'asfasdfasd', '2024-05-25 02:13:29.409736'),
(6, 'sdfasd', '78688787768', 'fasdfasdf@gmail.com', 'fsdfasdjfasd', '2024-05-25 02:15:43.832671'),
(7, 'sdfasd', '78688787768', 'fasdfasdf@gmail.com', 'fsdfasdjfasd', '2024-05-25 02:15:51.093651'),
(8, 'sahil', '9867354678', 'sahil@gmail.com', 'sahil@123', '2024-05-27 13:18:05.082234'),
(9, 'sahil', '9867354678', 'sahil@gmail.com', 'sahil@123', '2024-05-27 13:18:22.327242'),
(10, 'sahil', '9867354678', 'sahil@gmail.com', 'sahil@123', '2024-05-27 13:18:50.704661'),
(11, 'hello ', '885786867', 'mahesh@gmail.com', 'mahesh', '2024-05-27 13:19:02.237744'),
(12, 'sahil', '8750974176', 'sahil@gmail.com', 'sahil@123', '2024-05-27 15:25:58.514120'),
(13, 'sanjay', '97865346789', 'sanjay@gmail.com', 'sanjay@!23', '2024-05-27 17:30:58.449751'),
(14, 'sahil', '7889789899', 'admin@gmail.com', 'admin@123', '2024-05-28 11:58:27.387375'),
(15, 'ramesh', '789978798789', 'ramesh@gmail.com', 'ramesh@123', '2024-05-28 12:29:11.701234');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
