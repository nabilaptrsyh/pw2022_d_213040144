-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan_id` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `pekerjaan_id`, `gambar`) VALUES
(22, 'Selena Gomez', 'Woman', '1992-07-22', 1, '629de6ca74d19.png'),
(24, 'Ariana Grande', 'Woman', '1993-06-26', 1, '629df4b69d210.jpg'),
(25, 'Shakira', 'Woman', '1977-02-02', 1, '62a0cadb3f90c.jpg'),
(26, 'Taylor Swift', 'Woman', '1989-12-13', 1, '62a0cb00a2a7f.jpg'),
(27, 'Rihanna', 'Woman', '1988-02-20', 1, '62a0cb4191199.jpg'),
(28, 'Kendall Jenner', 'Woman', '1995-11-03', 2, '62a0cb6c606d9.jpg'),
(29, 'Gigi Hadid', 'Woman', '1995-04-23', 2, '62a0cb8a21045.jpg'),
(30, 'Katy Perry', 'Woman', '1984-10-25', 1, '62a0cbc8ea932.jpg'),
(31, 'Adele', 'Woman', '1988-05-05', 1, '62a0cbfa2fd53.jpg'),
(32, 'Demi Lovato', 'Woman', '1992-08-20', 1, '62a0cc177209b.jpg'),
(33, 'Tom Cruise', 'Man', '1962-07-03', 3, '62a0ce2c02890.jpg'),
(34, 'Chris Hemsworth', 'Man', '1983-08-11', 3, '62a0ce6e5eeab.jpg'),
(35, 'Morgan Freeman', 'Man', '1937-06-03', 3, '62a0cea38f040.jpg'),
(36, 'Brad Pitt', 'Man', '1963-12-18', 3, '62a0cf01c701e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Singer'),
(2, 'Model'),
(3, 'Acthor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nomor_hp`, `password`, `role`) VALUES
(8, 'nabilaptrsyh', 'lllalanabila300@gmail.com', '085782889270', '$2y$10$AOukccyR/KIQ/9OXruLvWOf/6W3N82qGK2xqkM75LH8n9IjabIilm', 'admin'),
(18, 'audi', 'audi@gmail.com', '085782889270', '$2y$10$OC0dB3Nxcinba3QU6BC9Q.emA48mXSFMCfp03tcldUuldCK6U/K/.', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PEKERJAAN_FOREIGN_KEY` (`pekerjaan_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artis`
--
ALTER TABLE `artis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artis`
--
ALTER TABLE `artis`
  ADD CONSTRAINT `PEKERJAAN_FOREIGN_KEY` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
