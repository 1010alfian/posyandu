-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 03:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nama_ibu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `nik_anak`, `nama_anak`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `nama_ibu`) VALUES
(2, '0215465312565656', 'Sulastri', 'Subang', '2022-01-19', 'Perempuan', 'Linda');

-- --------------------------------------------------------

--
-- Table structure for table `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(11) NOT NULL,
  `nama_bidan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidan`
--

INSERT INTO `bidan` (`id_bidan`, `nama_bidan`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `pendidikan_terakhir`, `user_id`) VALUES
(2, 'Fitri', 'Subang', '1993-01-22', '0821-4567-894', 'S1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `hpht` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nama_ibu`, `tempat_lahir`, `tgl_lahir`, `nama_suami`, `alamat`, `no_tlp`, `hpht`) VALUES
(2, 'Linda', 'Subang', '1987-09-20', 'Waluyu Santoso', 'Subang', '6767-7656-756', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `anak_id` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `ibu_id` int(11) NOT NULL,
  `tgl_skrng` date NOT NULL,
  `usia` int(11) NOT NULL,
  `imunisasi` varchar(30) NOT NULL,
  `vit_a` enum('Merah','Biru') NOT NULL,
  `ket` text NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `anak_id`, `tgl_lahir`, `jenis_kelamin`, `ibu_id`, `tgl_skrng`, `usia`, `imunisasi`, `vit_a`, `ket`, `created_by`) VALUES
(1, 1, '2012-06-06', 'Perempuan', 2, '2019-02-12', 84, 'flu', 'Merah', '', 0),
(3, 1, '2012-06-06', 'Perempuan', 2, '2021-02-12', 108, 'flu', 'Merah', '', 0),
(4, 2, '2022-01-19', 'Perempuan', 0, '2022-08-11', 6, 'sdg', 'Merah', 'hg', 1),
(5, 2, '2022-01-19', 'Perempuan', 0, '2022-08-17', 6, 'fs', 'Merah', 'we', 1),
(6, 4, '2021-10-10', 'Laki-Laki', 0, '2022-08-18', 1, 'sdg', 'Merah', 'asd', 1),
(7, 2, '2022-01-19', 'Perempuan', 0, '2022-08-17', 6, 'sdg', 'Merah', 'sdfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lansia`
--

CREATE TABLE `lansia` (
  `id_lansia` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_ibu_hamil`
--

CREATE TABLE `layanan_ibu_hamil` (
  `id_layanan_ibu` int(11) NOT NULL,
  `ibu_id` int(11) NOT NULL,
  `usia_kandungan` varchar(200) NOT NULL,
  `bb` varchar(200) NOT NULL,
  `lingkar_perut` varchar(200) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `tensi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_lansia`
--

CREATE TABLE `layanan_lansia` (
  `id_layanan_lansia` int(11) NOT NULL,
  `id_lansia` int(11) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `gol_darah` varchar(1) NOT NULL,
  `bb` varchar(200) NOT NULL,
  `tensi` varchar(200) NOT NULL,
  `bingkisan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `date_time`) VALUES
(1, '2021-01-30 10:23:29'),
(1, '2021-01-30 10:34:46'),
(1, '2021-01-30 10:43:56'),
(1, '2021-01-31 02:28:21'),
(1, '2021-01-31 03:22:35'),
(1, '2021-01-31 09:10:44'),
(1, '2021-01-31 09:26:10'),
(1, '2021-01-31 09:29:54'),
(1, '2021-01-31 09:30:32'),
(1, '2021-02-03 01:44:40'),
(1, '2021-02-05 07:31:28'),
(2, '2021-02-07 11:30:13'),
(1, '2021-02-07 12:51:05'),
(2, '2021-02-07 01:55:44'),
(1, '2021-02-07 01:56:42'),
(1, '2021-02-07 02:20:01'),
(2, '2021-02-07 02:26:00'),
(2, '2021-02-07 05:10:55'),
(1, '2021-02-07 05:12:08'),
(2, '2021-02-07 05:20:27'),
(1, '2021-02-07 05:21:00'),
(1, '2021-02-07 08:28:31'),
(1, '2021-02-07 09:37:56'),
(1, '2021-02-11 03:17:12'),
(1, '2021-02-11 03:21:59'),
(1, '2021-02-11 09:34:17'),
(1, '2021-02-11 09:50:11'),
(1, '2021-02-12 07:32:48'),
(1, '2021-02-12 10:15:28'),
(1, '2021-02-12 10:44:02'),
(1, '2022-07-22 11:35:19'),
(2, '2022-07-22 11:45:23'),
(2, '2022-07-22 11:46:44'),
(1, '2022-07-22 11:50:21'),
(1, '2022-07-23 12:00:25'),
(1, '2022-07-25 06:57:07'),
(1, '2022-07-25 07:30:57'),
(1, '2022-07-26 06:41:20'),
(1, '2022-08-10 10:53:03'),
(1, '2022-08-11 04:38:03'),
(1, '2022-08-11 03:51:44'),
(1, '2022-08-12 03:16:26'),
(1, '2022-08-12 07:19:10'),
(1, '2022-08-12 07:47:06'),
(1, '2022-08-15 07:21:32'),
(1, '2022-08-16 05:54:02'),
(1, '2022-08-16 06:44:39'),
(1, '2022-08-18 12:46:50'),
(1, '2022-08-18 03:03:20'),
(1, '2022-08-18 05:00:19'),
(1, '2022-08-18 06:41:36'),
(1, '2022-08-18 09:50:56'),
(1, '2022-08-18 09:55:55'),
(1, '2022-08-19 01:57:50'),
(1, '2022-08-19 07:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `anak_id` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tgl_skrng` date NOT NULL,
  `usia` int(11) NOT NULL,
  `bb` double NOT NULL,
  `tb` double NOT NULL,
  `lk` double NOT NULL,
  `deteksi` enum('Sesuai','Tidak Sesuai') NOT NULL,
  `ket` text NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `anak_id`, `tgl_lahir`, `jenis_kelamin`, `tgl_skrng`, `usia`, `bb`, `tb`, `lk`, `deteksi`, `ket`, `created_by`) VALUES
(6, 3, '2022-08-26', 'Laki-Laki', '2022-08-10', 3, 5, 65, 8, 'Sesuai', 'sef', 1),
(7, 2, '2022-01-19', 'Perempuan', '2022-08-10', 3, 19, 80, 11, 'Sesuai', 'sa', 1),
(8, 2, '2022-01-19', 'Perempuan', '2022-08-17', 6, 14, 70, 20, 'Sesuai', 'jshfkjh', 1),
(9, 4, '2021-10-10', 'Laki-Laki', '2022-08-17', 1, 10, 40, 15, 'Sesuai', 'asd', 1),
(10, 2, '2022-01-19', 'Perempuan', '2022-08-16', 6, 12, 40, 14, 'Sesuai', 'dgfdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jabatan` enum('Ketua','Bendahara','Sekretaris','Anggota') NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `lama_kerja` int(11) NOT NULL,
  `tugas_pokok` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `jabatan`, `pendidikan_terakhir`, `lama_kerja`, `tugas_pokok`, `user_id`) VALUES
(1, 'Fitri', 'Subang', '1999-07-09', '0831-3000-912', 'Ketua', 'S1', 5, 'Mengkoordinir semua kegiatan dan organisasi dalam posyandu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_users` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_users`, `name`, `username`, `image`, `password`, `level_id`, `is_active`, `date_created`) VALUES
(1, 'Fitri', 'Petugas', 'Fine-Day-Press-Wallpaper3A.jpg', 'petugas', 1, 1, 0),
(2, 'Fitri', 'bidan', 'icon-02.png', 'bidan', 2, 1, 111);

-- --------------------------------------------------------

--
-- Table structure for table `users_level`
--

CREATE TABLE `users_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_level`
--

INSERT INTO `users_level` (`id_level`, `level`) VALUES
(1, 'Petugas'),
(2, 'Bidan'),
(3, 'Ibu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `lansia`
--
ALTER TABLE `lansia`
  ADD PRIMARY KEY (`id_lansia`);

--
-- Indexes for table `layanan_ibu_hamil`
--
ALTER TABLE `layanan_ibu_hamil`
  ADD PRIMARY KEY (`id_layanan_ibu`),
  ADD KEY `layanan_ibu_hamil_ibfk_1` (`ibu_id`);

--
-- Indexes for table `layanan_lansia`
--
ALTER TABLE `layanan_lansia`
  ADD PRIMARY KEY (`id_layanan_lansia`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `level_id` (`level_id`);

--
-- Indexes for table `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lansia`
--
ALTER TABLE `lansia`
  MODIFY `id_lansia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `layanan_ibu_hamil`
--
ALTER TABLE `layanan_ibu_hamil`
  MODIFY `id_layanan_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `layanan_lansia`
--
ALTER TABLE `layanan_lansia`
  MODIFY `id_layanan_lansia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_level`
--
ALTER TABLE `users_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
