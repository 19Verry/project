-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2024 pada 22.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek-verry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `waktu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `waktu`) VALUES
(1, 'Kabar Duka', 'inalillahi telah meninggal ', '07-January-2024'),
(2, 'sadg', 'sdgsdgdsg', '17-January-2024'),
(3, 'Kabar Duka', 'innalillahi turut berduka cita, telah meninggal saudara kita warga rt 01 blok b no 10 atas nama ibuk Hj. syafitri yang meninggal di rumah sakit awal bros panam jam 10.30 pagi hari ini. jika ada bpk/ibuk yang sedang tidak berhalangan ayo kita kerumahnya membantu keluarga menyiapkan persiapan untuk takziah nanti habis isya.', '08-January-2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasrt`
--

CREATE TABLE `kasrt` (
  `id` int(11) NOT NULL,
  `bulan` varchar(250) NOT NULL,
  `totalronda` varchar(250) NOT NULL,
  `totalsosial` varchar(250) NOT NULL,
  `totalpemasukan` varchar(250) NOT NULL,
  `totalpengeluaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasrt`
--

INSERT INTO `kasrt` (`id`, `bulan`, `totalronda`, `totalsosial`, `totalpemasukan`, `totalpengeluaran`) VALUES
(1, 'January-2024', '200000', '150000', '350000', '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `username` int(250) NOT NULL,
  `ronda` varchar(100) NOT NULL,
  `sosial` varchar(100) NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `bulan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `uploader` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `waktuunggah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `file`, `uploader`, `role`, `waktuunggah`) VALUES
(1, 'DOC_TAMA_SHAMPOO.docx', 'budi', 'ketua rt', '08-January-2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL DEFAULT 'warga'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'verry', '$2y$10$EEn/XeX5jIiAUvdkJAhlNO1j0qMKs87Oqv4VmGM9Vd5wDtoCyou4a', 'admin'),
(2, 'budi', '$2y$10$mfGFDfGmrzA1G/W0v/kmTOEVg6eBx4ei5Le3zgKo/2JQ4XOg/cgs2', 'warga'),
(3, 'verdi', '$2y$10$JXYRPPKpO7PNuHKi3Q2.B.Cs.nZiXFgZ1grpMCbLpxH5rQ7UgjsLW', 'ketua rt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nokk` int(10) NOT NULL,
  `status` enum('dikontrakkan/disewa','tetap') NOT NULL,
  `nohp` varchar(250) NOT NULL,
  `jumangkel` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bergabung` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `name`, `nokk`, `status`, `nohp`, `jumangkel`, `alamat`, `bergabung`) VALUES
(1, 'verdi', 12345, 'tetap', '089508980182', 4, 'blok b no 8', '07-January-2024'),
(2, 'budi', 123456, 'dikontrakkan/disewa', '089201820756', 5, 'blok c no 10', '07-January-2024');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasrt`
--
ALTER TABLE `kasrt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokk` (`nokk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kasrt`
--
ALTER TABLE `kasrt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
