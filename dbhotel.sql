-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Nov 2018 pada 13.21
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakamar`
--

CREATE TABLE `datakamar` (
  `kamar` varchar(10) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakamar`
--

INSERT INTO `datakamar` (`kamar`, `nama_kamar`, `stok`, `harga`) VALUES
('dlx', 'Deluxe Room', 10, 700000),
('spr1', 'Superior Room (1 Bed)', 20, 400000),
('spr2', 'Superior Room (2 Bed)', 20, 500000),
('std1', 'Standard Room (1 Bed)', 26, 350000),
('std2', 'Standard Room (2 Bed)', 28, 450000),
('ste', 'Suite Room', 5, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `masuk` date NOT NULL,
  `keluar` date NOT NULL,
  `kamar` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `totalbayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `ktp`, `masuk`, `keluar`, `kamar`, `jumlah`, `totalbayar`) VALUES
('1UUY', 'lalalalala', '6247262', '2018-11-28', '2018-11-29', 'std1', 1, 350000),
('2EDS', 'kaka', '4214004', '2018-11-05', '2018-11-06', 'std2', 2, 900000),
('3ADE', 'lalalalala', '6247262', '2018-11-03', '2018-11-04', 'std1', 1, 350000),
('5YJS', 'aldo', '121313131', '2018-11-16', '2018-11-17', 'ste', 1, 1000000),
('6UJN', 'kaka', '51071075', '2018-11-29', '2018-11-30', 'std1', 1, 350000),
('7VMN', 'aldo', '37103104', '2018-11-07', '2018-11-08', 'std1', 1, 350000),
('9KHJ', 'aldoi', '90341', '2018-11-07', '2018-11-11', 'std1', 2, 2800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakamar`
--
ALTER TABLE `datakamar`
  ADD PRIMARY KEY (`kamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kamar` (`kamar`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_kamar` FOREIGN KEY (`kamar`) REFERENCES `datakamar` (`kamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
