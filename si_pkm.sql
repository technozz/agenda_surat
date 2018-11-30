-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 05:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode_p2m`
--

CREATE TABLE `kode_p2m` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_p2m`
--

INSERT INTO `kode_p2m` (`id`, `kode`, `keterangan`) VALUES
(1, '443', 'P2M'),
(2, '443.5', 'PKL (Pemeriksaan Limbah dan Sebagainya)'),
(3, '443.21', 'Kusta'),
(4, '443.22', 'Kelamin'),
(5, '443.24', 'TB Paru/ Aids/ HIV'),
(6, '443.31', 'Diare-Colera'),
(7, '443.32', 'Imunisasi'),
(8, '443.33', 'Survailans'),
(9, '443.41', 'Malaria'),
(10, '443.43', 'Demam Berdarah (DBD)'),
(11, '456', 'Urusan Haji'),
(12, '503', 'Izin H.O');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pembinaan_kesehatan`
--

CREATE TABLE `kode_pembinaan_kesehatan` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pembinaan_kesehatan`
--

INSERT INTO `kode_pembinaan_kesehatan` (`id`, `kode`, `keterangan`) VALUES
(1, '440', 'Surat Keterangan'),
(2, '441', 'SP.2 TP'),
(3, '441.1', 'UKGS/GIGI'),
(4, '441.5', 'UKS'),
(5, '441.14', 'Pengobatan Masal'),
(6, '442', 'Obat-Obatan'),
(7, '444', 'KIA/Gizi/Lansia'),
(8, '444.2', 'Jamkesmas'),
(9, '445', 'Proyek Pengembangang'),
(10, '446', 'Peraktek Kerja'),
(11, '447', 'Alat-alat Medis'),
(12, '476', 'KB/Remaja'),
(13, '503', 'Ijin Praktek'),
(14, '441.2', 'Mata'),
(15, '441.3', 'Jiwa'),
(16, '441.4', 'Kanker'),
(17, '441.6', 'Perawatan');

-- --------------------------------------------------------

--
-- Table structure for table `kode_urusan_pegawai`
--

CREATE TABLE `kode_urusan_pegawai` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_urusan_pegawai`
--

INSERT INTO `kode_urusan_pegawai` (`id`, `kode`, `keterangan`) VALUES
(1, '800', 'Kepegawaian Panggilan RHS (Rahasia)'),
(2, '851', 'Cuti Tahunan'),
(3, '852', 'Cuti Besar'),
(4, '853', 'Cuti Sakit'),
(5, '854', 'Cuti Bersalin'),
(6, '857', 'Cuti Alasan Penting'),
(7, '848', 'Izin Kawin-Dispensasi'),
(8, '812', 'Pengujian Kesahatan'),
(9, '850', 'Cuti Diluat Tanggungan Negara'),
(10, '883', 'DP3'),
(11, '890', 'Pendidikan'),
(12, '811.3', 'Panggilan Sumpah Jabatan'),
(13, '821.2', 'Serah Terima Jabatan/Usul PNS'),
(14, '847.1', 'Tunjangan Jabatan'),
(15, '873', 'Karpeg'),
(16, '824', 'Perbantuan Penempatan'),
(17, '822', 'Kenaikan Pangkat Berkala'),
(18, '823', 'Kenaikan Pangkat'),
(19, '893.3', 'Prajabatan'),
(20, '864', 'Ujian Dinas'),
(21, '882', 'Pensiun'),
(22, '548', 'Rekomendasi'),
(23, '846', 'Kurban HKN'),
(24, '900', 'Keuangan'),
(25, '855', 'Cuti Naik Haji/Umrah');

-- --------------------------------------------------------

--
-- Table structure for table `kode_urusan_umum`
--

CREATE TABLE `kode_urusan_umum` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_urusan_umum`
--

INSERT INTO `kode_urusan_umum` (`id`, `kode`, `keterangan`) VALUES
(1, '005', 'Undangan'),
(2, '004', 'Ucapan Terimakasih'),
(3, '045', 'Sekretariat Umum'),
(4, '016', 'Telephon'),
(5, '015', 'Listrik'),
(6, '003', 'Hari Ulang Tahun'),
(7, '008', 'Pengumuman'),
(8, '050', 'Pimpro'),
(9, '024', 'Puskel'),
(10, '360', 'Bencana Alam'),
(11, '900', 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jk` enum('','L','P') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `alamat`, `email`, `no_hp`, `jk`, `foto`, `about`) VALUES
(20, 'admin', 'admin', 'admin', 'PKM PEJERUK', 'bilakiyox@air2token.com', '087865342321', 'L', 'Santoryu.jpg', '<p>nothing</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `s_keluar`
--

CREATE TABLE `s_keluar` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `n_petunjuk` varchar(35) NOT NULL,
  `gambar` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_masuk`
--

CREATE TABLE `s_masuk` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(10) NOT NULL,
  `perihal` varchar(160) NOT NULL,
  `n_petunjuk` varchar(50) NOT NULL,
  `gambar` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode_p2m`
--
ALTER TABLE `kode_p2m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pembinaan_kesehatan`
--
ALTER TABLE `kode_pembinaan_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_urusan_pegawai`
--
ALTER TABLE `kode_urusan_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_urusan_umum`
--
ALTER TABLE `kode_urusan_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_keluar`
--
ALTER TABLE `s_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_masuk`
--
ALTER TABLE `s_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode_p2m`
--
ALTER TABLE `kode_p2m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kode_pembinaan_kesehatan`
--
ALTER TABLE `kode_pembinaan_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kode_urusan_pegawai`
--
ALTER TABLE `kode_urusan_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kode_urusan_umum`
--
ALTER TABLE `kode_urusan_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `s_keluar`
--
ALTER TABLE `s_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s_masuk`
--
ALTER TABLE `s_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
