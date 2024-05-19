-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 05:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `voter_id` bigint(20) NOT NULL,
  `vote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `voter_id`, `vote`) VALUES
(1, 9876543210, 'SP'),
(9, 7845120963015, 'BJP'),
(10, 78447450963015, 'BJP'),
(11, 784474509774515, 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `voter_list`
--

CREATE TABLE `voter_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `adhar_number` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter_list`
--

INSERT INTO `voter_list` (`id`, `name`, `fname`, `mobile`, `adhar_number`, `address`) VALUES
(1, 'Hanae Yang', 'Xenos Oliver', 7845120978, 647845120369784512, 'Voluptatibus et rati Lucknow'),
(2, 'Shaine Nelson', 'Acton Franklin', 784512369, 9223372036854775807, 'Quis dolor quae aliq Lucknow'),
(3, 'Dalton Henson', 'Orla Bridges', 9876543210, 9517, 'Enim sit est animi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `voter_list`
--
ALTER TABLE `voter_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voter_list`
--
ALTER TABLE `voter_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
