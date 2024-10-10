-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2024 at 01:42 AM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `session_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int NOT NULL,
  `username` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `useremail` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `username`, `useremail`, `password`, `registration_date`) VALUES
(1, 'Robin', 'robinkujur@aidcom.in', '1234', '2024-10-10 18:12:27'),
(2, 'vrobinkujur', 'vrobinkujur@gmail.com', '1234', '2024-10-10 18:13:49'),
(3, 'David Pariswamy', 'david@gmail.com', '1234', '2024-10-10 19:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `message_sharing`
--

CREATE TABLE `message_sharing` (
  `id` int NOT NULL,
  `senders_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `receivers_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `original_message` text COLLATE utf8mb4_general_ci NOT NULL,
  `encrypted_message` text COLLATE utf8mb4_general_ci NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_sharing`
--

INSERT INTO `message_sharing` (`id`, `senders_name`, `receivers_name`, `original_message`, `encrypted_message`, `message_date`) VALUES
(1, '', '1', 'Hi Rahul Here, how are you doing', 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-10 19:34:21'),
(2, '', 'vrobinkujur', 'Hi am Rohit', 'd41d8cd98f00b204e9800998ecf8427e', '2024-10-10 19:35:05'),
(3, '', 'vrobinkujur', 'Hi David Goliath Here', '854f508622f6976f474408f5f7a64c73', '2024-10-10 19:38:38'),
(4, '', 'vrobinkujur', 'Hello Everyone Write your Message Here', 'a85c34ed3079091ff4e39f0832db4881', '2024-10-10 19:38:58'),
(5, '', 'vrobinkujur', 'Hello Everyone Write your Message Here', 'a85c34ed3079091ff4e39f0832db4881', '2024-10-10 19:39:06'),
(6, '', 'David Pariswamy', 'sdfsdfsdfsd', 'bd9abe38537ecd5f65f15352263acea1', '2024-10-10 19:53:08'),
(7, '', 'David Pariswamy', 'sdfsdfsdfsd', 'bd9abe38537ecd5f65f15352263acea1', '2024-10-10 19:55:42'),
(8, '$Robin', 'David Pariswamy', 'HI ksdf', '2f1e64d5fbc09f0f915202d888f15b45', '2024-10-10 20:01:34'),
(9, 'Robin', 'vrobinkujur', 'hdfghfgh', 'ed905da50ef08b27352ca1c4c3766bdb', '2024-10-10 20:02:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_sharing`
--
ALTER TABLE `message_sharing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message_sharing`
--
ALTER TABLE `message_sharing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
