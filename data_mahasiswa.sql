-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 08.25
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `Nim` int(30) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Email` varchar (30) DEFAULT NULL,
  `Jurusan` varchar(30) DEFAULT NULL,
  `Fakultas` varchar(30) DEFAULT NULL,
  `Gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`Nim`, `Nama`, `Email`, `Jurusan`, `Fakultas`, `Gambar`) VALUES
(701210114, 'Inayah Uzma', 'inayahuzma130@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'inayah.jpeg'),
(701210251, 'Astrrid Ramadhina', 'astridrmdhn@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'acid.jpeg'),
(701210119, 'KIki Nur Asari', 'kikinura@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'kiki.jpeg'),
(701210252, 'Delianda Anggraini', 'deliandaanggraini88@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'deli.jpeg'),
(701210115, 'Jhurryah Syafa Aninditha', 'jsaninditha@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'nindi.jpeg'),
(701210035, 'Ida Kumala Sari', 'idakumalasari@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'ida.jpeg'),
(701210118, 'Khairunisa', 'khairunisanisa@gmai.com', 'Sistem Informasi', 'Sains dan Teknologi', 'nisa.jpeg'),
(701210199, 'Elok Pamela', 'Elokpam@gmail.com', 'Sistem Informasi', 'Sains dan Teknologi', 'elok.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`Nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `Nim` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
