-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 07:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `subText` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `titel`, `subText`, `prijs`, `image`) VALUES
(1, 'Nigiri', 'very delicious Fisch ', '12,49', '../images/nigiri.jpg'),
(3, 'Makizushi', 'random text testing', '€ 2,99', '../images/makizushi reform.png'),
(7, 'Inari-zushi', 'weer random text ', '€ 1,99', '../images/inari-zushi.jpg'),
(11, 'Temaki', 'very delicious', '€ 3,99', '../images/temaki.jpg'),
(15, 'Tako (octopus) nigiri', 'very delicious Fisch ', '17,23', '../images/octopus.jpg'),
(16, 'Uni (sea urchin) nigiri', 'very delicious Fisch ', '11,76', '../images/sea2.jpg'),
(18, 'Dragon Roll', 'very delicious Fisch ', '1,60', '../images/dragoncut.jpg'),
(19, 'Placeholder', 'Lorem ipsa ito', '00,--', '../images/placeholder.png'),
(20, 'Placeholder', 'Lorem ipsa ito', '00,--', '../images/placeholder.png'),
(21, 'henk', 'test', '11,76', '../images/sea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserveringen`
--

CREATE TABLE `reserveringen` (
  `ID` int(50) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `mobiel` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserveringen`
--

INSERT INTO `reserveringen` (`ID`, `naam`, `mobiel`, `email`, `date`) VALUES
(1, '', '', '', ''),
(2, 'liam kilsdonk', '0612345678', 'liamkilsdonk@', ''),
(3, 'niek brock', '06090602478267525', 'niek@pieneneenpokkel.nl', ''),
(19, 'robin', '1234567890', 'qwerty', '2022-04-28T20:39'),
(20, 'amber', 'e34453535', '45grge', '2022-04-17T11:32'),
(21, 'john doe', '0612345678', 'johnDoe@bing.com', '2022-04-24T16:45'),
(23, 'liam kilsdonk', '0612345678', 'liamkilsdonk@', '2022-04-29T17:56'),
(24, 'time traveller ', '024-345-123', 'testing123', '2110-01-19T22:15'),
(25, 'liam kilsdonk', '0612345678', 'liamkilsdonk@', '2022-04-20T01:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'liam', '$2y$10$1gANhZngp5ox7jN4ANy3Mu7wle8igPWrNWVOOCn.BSYelddmzMxHC', '2022-03-28 16:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
