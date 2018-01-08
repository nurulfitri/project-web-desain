-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 03:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `draf`
--

CREATE TABLE `draf` (
  `id_draf` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draf`
--

INSERT INTO `draf` (`id_draf`, `label`, `judul`, `tanggal`, `data`) VALUES
(1, 'Tutorial', 'Hmmm Blm Tau', '2018-01-08', '<p>Masih rencana</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id_tutorial` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `judul`, `label`, `tanggal`, `data`) VALUES
(1, '4 Ide Menulis Blog Saat Suntuk', 'Tips', '2018-01-05', '<p style=\"text-align:justify\">Hari ini bukan tahun baru, tapi kebanyakan dari kita justru punya banyak keinginan setelah resolusi tahun baru.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Salah satu resolusi gw yang baru di tahun 2017 lalu adalah, gw mau bikin blog dan nulis blog setiap harinya!</p>\r\n\r\n<p style=\"text-align:justify\">Sebuah keinginan yang gampang diucapin tapi setengah mati susahnya dilakuin.</p>\r\n\r\n<p style=\"text-align:justify\">Ngomongin soal nulis blog, ternyata banyak juga lho yang ngalamin hal kek gini, suntuk,</p>\r\n\r\n<p style=\"text-align:justify\">bosen, ga ada ide menulis dan ga tau mesti nulis tentang apalagi.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'Latihan Desain Web dengan HTML5 dan CSS3', 'Desain', '2018-01-07', '<p><img alt=\"\" src=\"/dw_project/tampilan/kcfinder/upload/images/webdesign-courses-1030x515%281%29.jpg\" style=\"height:215px; width:430px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Perancangan web (web design) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan, (biasanya berupa hypertext atau hypermedia) yang dikirimkan ke pengguna akhir melalui World Wide Web, dengan menggunakan sebuah browser web atau perangkat lunak berbasis web. Tujuan dari web design adalah untuk membuat website&mdash;sekumpulan konten online termasuk dokumen dan aplikasi yang berada pada server web / server. Sebuah website dapat berupa sekumpulan teks, gambar, suara dan konten lainnya, serta dapat bersifat interaktif ataupun statis.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tentang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `umur`, `email`, `password`, `negara`, `kota`, `tentang`) VALUES
('Nurul Fitria Puspitasari', 21, 'nurulfitria134@gmail.com', '1234', 'Indonesia', 'Yogyakarta', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draf`
--
ALTER TABLE `draf`
  ADD PRIMARY KEY (`id_draf`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_tutorial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draf`
--
ALTER TABLE `draf`
  MODIFY `id_draf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id_tutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
