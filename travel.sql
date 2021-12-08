-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 01.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jamaah`
--

CREATE TABLE `tabel_jamaah` (
  `idtabel_jamaah` int(10) UNSIGNED NOT NULL,
  `idtabel_user` int(10) UNSIGNED NOT NULL,
  `nama_jamaah` varchar(100) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `jenis_kelamin` varchar(19) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(12) DEFAULT NULL,
  `jenis_pembayaran` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `jumlah_uang` varchar(100) DEFAULT NULL,
  `verifikasi` varchar(20) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `idtabel_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(10) DEFAULT NULL,
  `jumlah_mitra` int(10) UNSIGNED DEFAULT NULL,
  `jumlah_jamaah` int(10) UNSIGNED DEFAULT NULL,
  `jumlah_bus` int(10) UNSIGNED DEFAULT NULL,
  `reset_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`idtabel_user`, `email`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `nik`, `pass`, `level`, `no_rek`, `nama_bank`, `jumlah_mitra`, `jumlah_jamaah`, `jumlah_bus`, `reset_password`) VALUES
(1, 'admin@gmail.com', 'Admin', 'Desan Jalen', '08819140130', 'Laki - Laki', '24208242048', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '31313131313', 'BCA', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_jamaah`
--
ALTER TABLE `tabel_jamaah`
  ADD PRIMARY KEY (`idtabel_jamaah`),
  ADD KEY `tabel_jamaah_FKIndex1` (`idtabel_user`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`idtabel_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_jamaah`
--
ALTER TABLE `tabel_jamaah`
  MODIFY `idtabel_jamaah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `idtabel_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_jamaah`
--
ALTER TABLE `tabel_jamaah`
  ADD CONSTRAINT `tabel_jamaah_ibfk_1` FOREIGN KEY (`idtabel_user`) REFERENCES `tabel_user` (`idtabel_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
