-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 06:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `username`, `email`, `password`, `usertype`, `isactive`, `createdate`) VALUES
(37, 'kamruzzaman leeon', 'leeonstd', '2018-1-60-252@std.ewubd.edu', '$2y$10$i6e1u8KXImKNAKNRaROWZe33dYqOJGYawue99xN4juTalZtQIOcl2', 'admin', 1, '2022-01-12 10:02:14'),
(38, 'shawon tech', 'shawon9', 'shawon@gmail.com', '$2y$10$IIENWCTp3GbSWbhIvVStau5YYJRjfMCrrX5S5DugOY2jK9NC8GJ12', 'client', 0, '2022-01-12 06:08:41'),
(39, 'web', 'cse480', 'cse480@gmail.com', '$2y$10$R9j7ZSU6hoG9kryJZf4YEubBqcBfPj1pCJcqJ8ajO2Q927z07W.ym', 'admin', 1, '2022-01-12 08:31:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
