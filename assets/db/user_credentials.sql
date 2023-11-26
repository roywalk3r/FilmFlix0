-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 03:36 PM
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
-- Database: `user_credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` datetime DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `signup_date`, `profile_image`) VALUES
(13, 'Godfred', 'testpjmail@gmail.com', '$2y$10$u6zbmh7spYOGLVfVT5v7Je0wauSUBB7LUWfH1soTye0QcAFRZ2xma', '2023-09-01 17:27:56', NULL),
(15, 'Rseann', 'test@gmail.com', '$2y$10$2IPh730Mrs43nG8hu8xO4uIkXiJSU1iNBtGmN38MVq4r9NLEU8BQ6', '2023-09-01 21:34:16', NULL),
(16, 'Yamashirobin', 'yamashirobincento@gmail.com', '$2y$10$h6N3wtmZWuo/o60IasbxCuRhkliMsdxnbBJACeOzE1Ys9u8YYey5m', '2023-09-02 00:06:52', NULL),
(17, 'Rsean', 'amenano@gmail.com', '$2y$10$rg9M5GJL1ljBwDd/V/C5X.57H8y.OL11hjtpJIRiVeJQ8p4K2JYxC', '2023-09-02 14:05:22', NULL),
(18, 'elDevill', 'blisterblac@outlook.com', '$2y$10$/4f56oHg2GquBTW.i0.iT.J/Cjl2qrBEAaVRjPpx42KhX8QAXWGUC', '2023-09-02 20:04:18', NULL),
(19, 'Oduro', 'vincent@gmail.com', '$2y$10$q92.6udZ0x.SlWZ7Uzua1u.hD/R4ztKnb1ivFnWQkSidGC5Mr5/SC', '2023-09-02 23:59:29', NULL),
(20, '', '', '$2y$10$uwh1BjRxXt8FoTOeRuRv6u2hMU6LUKpE1LUaWCZ8ojU5/MSHwiJ/W', '2023-09-03 07:54:34', NULL),
(21, 'Alele1', 'alelekpekus@yahoo.com', '$2y$10$PdIDTomaggBJsEFqZ1UAZORZCiQzcFkkSlOlzJtNinoQz44liNFwm', '2023-09-04 09:28:13', NULL),
(22, 'Dzidzi', 'matrevidzifa@gmail.com', '$2y$10$zpMrKJVUiQsMxfo/ROlFVO.ZZXxbYzBDw8g4fIgyYvXI/EmJLSqxG', '2023-10-03 08:18:40', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
