-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Apr 2020 pada 08.50
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `validasi`
--

CREATE TABLE `validasi` (
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tmptlahir` varchar(25) NOT NULL,
  `tgllahir` date NOT NULL,
  `noregeris` varchar(32) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kwn` varchar(20) NOT NULL,
  `kebutuhan` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `dusun` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kodepos` varchar(7) NOT NULL,
  `lintang` varchar(25) DEFAULT NULL,
  `bujur` varchar(25) DEFAULT NULL,
  `tmpttinggal` varchar(50) NOT NULL,
  `transportasi` varchar(20) NOT NULL,
  `nokks` varchar(6) DEFAULT NULL,
  `anak` varchar(2) NOT NULL,
  `kps` varchar(6) NOT NULL,
  `nokps` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `validasi`
--

INSERT INTO `validasi` (`tanggal`, `nama`, `jk`, `nisn`, `nik`, `tmptlahir`, `tgllahir`, `noregeris`, `agama`, `kwn`, `kebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kodepos`, `lintang`, `bujur`, `tmpttinggal`, `transportasi`, `nokks`, `anak`, `kps`, `nokps`) VALUES
('2020-04-14', 'Hellen Agustina', 'Perempuan', '199921828', '2732930293', 'Tulungagung', '1999-08-10', '12681827', 'Islam', 'Indonesia (WNI)', 'Tidak', 'Jalan Raya Pagerwojo', '03', '01', 'Kebonsari', 'Pagerwojo', 'Pagerwojo', '66262', '', '', 'Bersama Orang Tua', 'Motor', '', '1', 'Tidak', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `validasi`
--
ALTER TABLE `validasi`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
