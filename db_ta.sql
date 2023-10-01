-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 14.02
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dkk`
--

CREATE TABLE `dkk` (
  `kode_kk` varchar(20) NOT NULL,
  `id_kk` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `status_hubungan_dalam_keluarga` varchar(20) DEFAULT NULL,
  `kewarganegaraan` varchar(10) DEFAULT NULL,
  `ayah` varchar(100) DEFAULT NULL,
  `ibu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dkk`
--

INSERT INTO `dkk` (`kode_kk`, `id_kk`, `nama`, `status_perkawinan`, `status_hubungan_dalam_keluarga`, `kewarganegaraan`, `ayah`, `ibu`) VALUES
('DKK001', 'K001', 'Ren', 'Belum Menikah', 'Kepala Keluarga', 'WNI', 'Kuswanto', 'Jeni'),
('DKK002', 'K002', 'DAROM ABDULLAH', 'Belum Menikah', 'Kepala Keluarga', 'WNI', 'Doni', 'Warnia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dpp`
--

CREATE TABLE `dpp` (
  `kd_pernikahan` varchar(10) NOT NULL,
  `id_pernikahan` varchar(10) DEFAULT NULL,
  `nama_calon` varchar(100) DEFAULT NULL,
  `tempat_lahir_calon` varchar(20) DEFAULT NULL,
  `tanggal_lahir_calon` varchar(30) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `agama_calon` varchar(50) DEFAULT NULL,
  `jenis_kelamin_calon` varchar(20) DEFAULT NULL,
  `status_perkawinan_calon` varchar(20) DEFAULT NULL,
  `alamat_calon` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dpp`
--

INSERT INTO `dpp` (`kd_pernikahan`, `id_pernikahan`, `nama_calon`, `tempat_lahir_calon`, `tanggal_lahir_calon`, `nik`, `agama_calon`, `jenis_kelamin_calon`, `status_perkawinan_calon`, `alamat_calon`) VALUES
('DPP1', 'P1', 'Mey Asuka', 'Bandung', '8 Februari 1995', '3175095412690005', 'Kristen', 'Perempuan', 'Belum Menikah', 'Gang Gang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
--

CREATE TABLE `kk` (
  `id_kk` varchar(20) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`id_kk`, `no_kk`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pekerjaan`) VALUES
('K001', '3175091301090917', 'Ren', '317504020001', 'laki - laki', 'Jakarta', '20 November 1992', 'Islam', 'Pelajar/Mahasiswa'),
('K002', '3175986485739483', 'DAROM ABDULLAH', '3175090904020005', 'laki-laki', 'Pekalongan', '12 Mei 1996', 'Kristen', 'Pelajar/Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `kewarganegaraan` varchar(10) DEFAULT NULL,
  `berlaku_hingga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `jenis_kelamin`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `berlaku_hingga`) VALUES
('317504020001', 'Ren', 'Jakarta', '20 November 1992', 'Gang Belimbing', 'Islam', 'laki - laki', 'Belum Menikah', 'Pelajar/Mahasiswa', 'WNI', 'Seumur Hidup'),
('3175090904020005', 'DAROM ABDULLAH', 'Pekalongan', '12 Mei 1996', 'Gang Semangka', 'Kristen', 'laki-laki', 'Belum Menikah', 'Pelajar/Mahasiswa', 'WNI', 'Seumur Hidup'),
('3175095412690005', 'Mey Asuka', 'Bandung', '20 April 1994', 'Gang Delima no 4', 'Kristen', 'perempuan', 'Belum Menikah', 'Pelajar/Mahasiswa', 'WNI', 'Seumur Hidup'),
('3175095412690099', 'Sumiati', 'pekalongan', '22 April 1998', 'Gang Delima no 4', 'Islam', 'perempuan', 'Belum Menikah', 'Pelajar/Mahasiswa', 'WNI', 'Seumur Hidup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pp`
--

CREATE TABLE `pp` (
  `id_pernikahan` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pp`
--

INSERT INTO `pp` (`id_pernikahan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `nik`, `agama`, `jenis_kelamin`, `status_perkawinan`, `alamat`) VALUES
('P1', 'Ren', 'Jakarta', '20 November 1992', '317504020001', 'Islam', 'laki-laki', 'Belum Menikah', 'Gang Belombing'),
('P2', 'DAROM ABDULLAH', 'Pekalongan', '20 November 1992', '3175095412690005', 'Kristen', 'laki-laki', 'Belum Menikah', 'Gang Semangka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skd`
--

CREATE TABLE `skd` (
  `no_skd` varchar(25) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `id_kk` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `alamat_sekarang` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skd`
--

INSERT INTO `skd` (`no_skd`, `nama`, `tempat_lahir`, `tanggal_lahir`, `id_kk`, `jenis_kelamin`, `pekerjaan`, `alamat_sekarang`) VALUES
('SKD001', 'Ren', 'Jakarta', '20 November 1992', 'K001', 'laki-laki', 'Pelajar/Mahasiswa', 'Gang Manga'),
('SKD002', 'DAROM ABDULLAH', 'Pekalongan', '12 Mei 1996', 'K002', 'laki-laki', 'Pelajar/Mahasiswa', 'Gang Belimbing\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stld`
--

CREATE TABLE `stld` (
  `no_stld` varchar(25) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `laporan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stld`
--

INSERT INTO `stld` (`no_stld`, `nama`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `agama`, `pekerjaan`, `nik`, `alamat`, `laporan`) VALUES
('S001', 'Ren', 'Jakarta', '20 November 1992', 'Belum Menikah', 'Islam', 'Pelajar/Mahasiswa', '317504020001', 'Gang Belombing', 'Bermaksud Untuk Tinggal di Rumah Saudara saya di wilayah rt/rw 003/10'),
('S002', 'DAROM ABDULLAH', 'Pekalongan', '12 Mei 1996', 'Belum Menikah', 'Kristen', 'Pelajar/Mahasiswa', '3175090904020005', 'Gang Semanggis', 'Bermaksud Untuk Tinggal di Rumah Ayah saya di wilayah rt/rw 003/10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'rea', 'rea@gmail.com', 'pro1674534550.jpg', '$2y$10$fXwcKK5ZNpGWVm6W5EVBPO7rHYuFNhBFWdTfzU8LQ062OVZyHI.me', 2, 1, 1674267593),
(4, 'rensan', 'ren@gmail.com', 'pro1685369386.jpg', '$2y$10$QXdNOF9/WQkilI7X7S3FeefVkmXMOHaqcEZ9r2nOaXdhwNuWe/W4G', 1, 1, 1674267608),
(5, 'user', 'user@gmail.com', 'default.jpg', '$2y$10$a/YGGlyQ3/JfGVq4xoNKTuOQvxgk1XXgY48DfbFOCWKgFerQTDK96', 2, 1, 1676529281),
(7, 'Rensan', 'pohongw21@gmail.com', 'default.jpg', '$2y$10$WXdWOWcSwIq8mhFBxOTr1e.XjMOlDqFDSQYRot5u/Yag.0MMumoE6', 2, 1, 1676899412);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dkk`
--
ALTER TABLE `dkk`
  ADD PRIMARY KEY (`kode_kk`),
  ADD KEY `fk_id_kk1` (`id_kk`);

--
-- Indeks untuk tabel `dpp`
--
ALTER TABLE `dpp`
  ADD PRIMARY KEY (`kd_pernikahan`),
  ADD KEY `fk_id_pernikahan` (`id_pernikahan`),
  ADD KEY `fk_nik4` (`nik`);

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`),
  ADD KEY `fk_nik1` (`nik`);

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pp`
--
ALTER TABLE `pp`
  ADD PRIMARY KEY (`id_pernikahan`),
  ADD KEY `fk_nik3` (`nik`);

--
-- Indeks untuk tabel `skd`
--
ALTER TABLE `skd`
  ADD PRIMARY KEY (`no_skd`),
  ADD KEY `fk_id_kk` (`id_kk`);

--
-- Indeks untuk tabel `stld`
--
ALTER TABLE `stld`
  ADD PRIMARY KEY (`no_stld`),
  ADD KEY `fk_nik2` (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dkk`
--
ALTER TABLE `dkk`
  ADD CONSTRAINT `fk_id_kk1` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`);

--
-- Ketidakleluasaan untuk tabel `dpp`
--
ALTER TABLE `dpp`
  ADD CONSTRAINT `fk_id_pernikahan` FOREIGN KEY (`id_pernikahan`) REFERENCES `pp` (`id_pernikahan`),
  ADD CONSTRAINT `fk_nik4` FOREIGN KEY (`nik`) REFERENCES `ktp` (`nik`);

--
-- Ketidakleluasaan untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD CONSTRAINT `fk_nik1` FOREIGN KEY (`nik`) REFERENCES `ktp` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pp`
--
ALTER TABLE `pp`
  ADD CONSTRAINT `fk_nik3` FOREIGN KEY (`nik`) REFERENCES `ktp` (`nik`);

--
-- Ketidakleluasaan untuk tabel `skd`
--
ALTER TABLE `skd`
  ADD CONSTRAINT `fk_id_kk` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`);

--
-- Ketidakleluasaan untuk tabel `stld`
--
ALTER TABLE `stld`
  ADD CONSTRAINT `fk_nik2` FOREIGN KEY (`nik`) REFERENCES `ktp` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
