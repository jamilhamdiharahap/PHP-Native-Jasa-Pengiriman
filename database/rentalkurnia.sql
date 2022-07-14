-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2021 pada 18.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalkurnia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `userName` varchar(255) NOT NULL,
  `kataSandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`userName`, `kataSandi`) VALUES
('admin123@gmail.com', 'Admin321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `merek` varchar(255) DEFAULT NULL,
  `noSeri` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `foto`, `merek`, `noSeri`, `jumlah`, `kapasitas`, `tarif`) VALUES
(18, 'alphard.jpeg', 'alphard', 'E 432 B', 2, 10, 5000000),
(20, 'fortuner.jpeg', 'fortuner', 'D 341 V', 2, 8, 4000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `jenisKelamain` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `total` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `total`, `tanggal`) VALUES
(1, '15000000', '2021-10-05 09:15:09'),
(2, '400000', '2021-10-05 09:26:18'),
(3, '5000000', '2021-10-05 09:34:47'),
(4, '10000000', '2021-10-05 11:33:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userrental`
--

CREATE TABLE `userrental` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenisKelamain` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `kataSandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userrental`
--

INSERT INTO `userrental` (`id`, `nama`, `alamat`, `jenisKelamain`, `userName`, `kataSandi`) VALUES
(7, 'kurnia', 'banyumas', 'PEREMPUAN', 'kurnia@05gmail.com', '$2y$10$Su4gdPBTwjkAwFDOtzqWGeMExDPb0RI6mDAAN9QtynqDpB88YTE8m'),
(9, 'jamil hamdi', 'psp', 'LAKI-LAKI', 'jamilhamdi@gmail.com', '$2y$10$F5/VNf.DWQSQ3ruOFMDXnOntdfK6GCKebgKid66yk.e.cD6foUVOC'),
(10, 'jamil', 'padangsidimpuan', 'LAKI-LAKI', 'jamil06@gmail.com', '$2y$10$x2CyiBN9XjYVzKNfE.ikc.6KCG2QYOH8SzO4SzyuEODDXrWup4KFO'),
(11, 'imron', 'banjarnegara', 'LAKI-LAKI', 'imron@gmail.com', '$2y$10$uTD1BdDGRKpIOpX1fMlT2OQ5sFHlzf0FzJbl9gtpwSWjY9Ni2cbtK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userName`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userrental`
--
ALTER TABLE `userrental`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `userrental`
--
ALTER TABLE `userrental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
