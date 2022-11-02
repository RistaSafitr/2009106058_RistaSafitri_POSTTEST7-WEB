-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `print_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `datagambar`
--

CREATE TABLE `datagambar` (
  `id` int(64) NOT NULL,
  `id_users` int(64) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datagambar`
--

INSERT INTO `datagambar` (`id`, `id_users`, `nama_file`, `file`, `waktu`) VALUES
(4, 20, 'profil', 'profil.jpg', '2022-10-28 20:45:29'),
(5, 21, 'profil', 'profil.png', '2022-10-28 20:47:24'),
(6, 22, 'saya', 'saya.png', '2022-10-28 20:57:26'),
(9, 26, 'screenshot', 'screenshot.png', '2022-11-02 21:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `regisUsername` varchar(255) NOT NULL,
  `regisPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `telp`, `regisUsername`, `regisPassword`) VALUES
(20, 'Winda', 'win@gmail.com', '0800-0000-0000', 'win', 'win'),
(21, 'Culi', 'cul@gmail.com', '0900-0000-9909', 'cul', 'cul'),
(22, 'aku', 'a@gmail.com', '0800-0000-0000', 'a', 'aa'),
(23, 'aku', 'email@gmail.com', '0800-0000-0000', 'aku', 'aku'),
(24, 'aku', 'email@gmail.com', '0800-0000-0000', 'aku', 'aku'),
(26, 'who', 'siapa@gmail.com', '0900-0000-9909', 'who', 'who');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datagambar`
--
ALTER TABLE `datagambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datagambar`
--
ALTER TABLE `datagambar`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datagambar`
--
ALTER TABLE `datagambar`
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
