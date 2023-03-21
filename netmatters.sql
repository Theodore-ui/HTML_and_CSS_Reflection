-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 11:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` bigint(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `company`, `email`, `telephone`, `subject`, `message`) VALUES
(1, 'theo lorenc', '', 'theolorenc@outlook.com', 7415196263, 'subject', 'message'),
(2, 'John Parker', 'Parker Ltm.', 'parker@gmail.com', 7492295948, 'You are very skilled', 'Message about your skills.'),
(3, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 7295294936, 'Spades', 'Spades are fun.'),
(4, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 7295294936, 'Spades', 'Spades are fun.'),
(5, 'John Parker', 'Parker Ltm.', 'parker@gmail.com', 7415196263, 'subject', 'message'),
(6, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 0, 'boats', 'boats are cool.'),
(7, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 719342839, 'boats', 'boats are cool.'),
(8, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 7415196263, 'Subject', 'message'),
(9, 'Tom Miller', 'Miller Ltm.', 'miller@gmail.com', 7415196263, 'Subject', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'Theo', 'miller@gmail.com'),
(2, 'Theo', 'miller@gmail.com'),
(3, 'John', 'parker@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news_items`
--

CREATE TABLE `news_items` (
  `id` int(11) NOT NULL,
  `pictureURL` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_items`
--

INSERT INTO `news_items` (`id`, `pictureURL`, `title`, `description`, `colour`, `tag`) VALUES
(1, 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/matt-hurst-oLL2.jpg', 'Netmatters End-of-year staff Awards 2022', 'As we step into a new year, we would like to take some time to look back on yet another successful y ...', 'blue', 'NEWS'),
(2, 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/netmatters-end-of-year-staff-vFeS.png', 'Netmatters End-of-year staff Awards 2022', 'As we step into a new year, we would like to                      take some time to look back on yet another successful y...', 'purple', 'NEWS'),
(3, 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/our-digital-marketing-CpeX.png', 'Netmatters End-of-year staff Awards 2022', 'As we step into a new year, we would like to \r\n                                    take some time to look back on yet another successful y...', 'green', 'NEWS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_items`
--
ALTER TABLE `news_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_items`
--
ALTER TABLE `news_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
