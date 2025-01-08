-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 10:17 AM
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
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Sejarah Manchester United', 'Sejarah dan Perjalanan Klub Legendaris Manchester United Football Club, yang akrab disebut sebagai Manchester United atau hanya MU, adalah salah satu klub sepak bola paling terkenal dan sukses di dunia. Klub yang bermarkas di Old Trafford, Manchester, Inggris ini memiliki sejarah panjang yang penuh prestasi dan tantangan.', 'mu-6.jpg', '2024-12-11 21:44:36', 'admin'),
(2, 'Dominasi di Era Sir Alex Ferguson', 'Sir Alex Ferguson adalah sosok yang membawa Manchester United ke\r\n                puncak kejayaan modern. Di bawah kepemimpinannya, klub\r\n                memenangkan 13 gelar Liga Inggris, 2 trofi Liga Champions, dan\r\n                berbagai penghargaan lainnya. Ferguson juga dikenal karena\r\n                kemampuannya mengembangkan pemain muda seperti Ryan Giggs, Paul\r\n                Scholes, hingga generasi \"Class of \'92.\"', 'mu-6.jpg', '2024-12-18 22:25:36', 'admin'),
(3, 'Visi Masa Depan Manchester United', 'Visi Masa Depan Meski tantangan terus berdatangan, Manchester\r\n                United tetap berusaha untuk kembali ke puncak. Dengan kombinasi\r\n                pemain muda berbakat, bintang internasional, dan strategi yang\r\n                tepat, klub ini memiliki potensi untuk terus bersinar di\r\n                panggung sepak bola global.', 'mu-7.jpg', '2024-12-18 22:29:19', 'admin'),
(4, 'Perjalana Pasca era Ferguson', 'Perjalanan Pasca-Ferguson Setelah pensiunnya Ferguson pada tahun\r\n                2013, Manchester United mengalami masa transisi yang penuh\r\n                tantangan. Pergantian beberapa manajer, termasuk David Moyes,\r\n                Louis van Gaal, dan Jose Mourinho, menunjukkan betapa sulitnya\r\n                mempertahankan konsistensi. Meskipun begitu, klub tetap berhasil\r\n                meraih sejumlah trofi, seperti Liga Europa dan Piala FA.', 'mu-8.jpg', '2024-12-19 22:31:15', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
