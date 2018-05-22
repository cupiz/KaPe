-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 06:40 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `no_opd` int(11) NOT NULL,
  `nama_opd` varchar(535) NOT NULL,
  `alamat_opd` text NOT NULL,
  `email_opd` varchar(535) NOT NULL,
  `notelp_opd` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`no_opd`, `nama_opd`, `alamat_opd`, `email_opd`, `notelp_opd`) VALUES
(1, 'Dinas Kependudukan dan Pencatatan Sipil', 'Jalan Letnan Jenderal S Parman No 19', 'spfindo@gmail.com', '0281891069123'),
(2, 'Dinas Pemuda, Olahraga dan Pariwisata', 'Jalan Kapten Piere Tendean No 10', 'spfindo12@gmail.com', '0281893269'),
(4, 'Dinas Kominfo', 'Deket alun-alun', 'purbalinggadevinspek@gmail.com', '6282323113553');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `no_pengaduan` int(11) NOT NULL,
  `no_opd` int(11) NOT NULL,
  `no_pengguna` int(20) NOT NULL,
  `tipe_pengaduan` varchar(20) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `gambar_pengaduan` varchar(535) NOT NULL,
  `pesan_pengaduan` text NOT NULL,
  `status_pengaduan` int(11) NOT NULL,
  `status_nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`no_pengaduan`, `no_opd`, `no_pengguna`, `tipe_pengaduan`, `tanggal_pengaduan`, `gambar_pengaduan`, `pesan_pengaduan`, `status_pengaduan`, `status_nama`) VALUES
(0, 1, 12345789, 'Saran', '2018-02-22', 'icon.png', 'Coba Test', 1, 1),
(1, 1, 1, 'Pertanyaan', '2018-02-07', 'listing-item-01a.jpg', 'Berapa harikah proses pembuatan kk yang sebenarnya, saya di beritahu oleh petugas di kecamatan untuk kembali lagi setelah 20 hari kerja, benarkah seperti itu? Terima kasih', 3, 1),
(2, 2, 1, 'Pengaduan', '2018-02-07', 'listing-item-01b.jpg', 'Infrastuktur Jalan Kenanga Tolong di Perbaiki', 2, 2),
(3, 1, 1, 'Pertanyaan', '2018-02-13', 'icon.png', 'Coba test dulu', 2, 1),
(214983, 2, 1, 'Pengaduan', '2018-05-20', 'movie2.JPG', 'Pemuda nonton apa ya', 3, 1),
(804833, 2, 1, 'Pertanyaan', '2018-05-19', '7s1.jpg', 'Toko mengganggu masyarakat sekitar', 2, 2),
(930871, 1, 1, 'Saran', '2018-02-22', 'hand.png', 'Saran coba', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `no_pengguna` int(20) NOT NULL,
  `nama_pengguna` varchar(150) NOT NULL,
  `alamat_pengguna` text NOT NULL,
  `notelp_pengguna` varchar(150) NOT NULL,
  `foto_pengguna` text NOT NULL,
  `email_pengguna` varchar(150) NOT NULL,
  `password_pengguna` varchar(150) NOT NULL,
  `foto_verif_pengguna` text NOT NULL,
  `status_pengguna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`no_pengguna`, `nama_pengguna`, `alamat_pengguna`, `notelp_pengguna`, `foto_pengguna`, `email_pengguna`, `password_pengguna`, `foto_verif_pengguna`, `status_pengguna`) VALUES
(1, 'Iqbal Ahdagita Elbadra', 'Shappire Blok i-8 Purwokerto', '082323113553', '143936195_cc78c87a-62f6-4cd4-b9bf-2ca7468e5a25_960_960.jpg', 'spfindo@gmail.com', 'ffe553694f5096471590343432359e02', '', 'TERVERIFIKASI'),
(133, '123213123', '123123', '', '', '', '', '', ''),
(12121212, 'Dimas', '', '12121212', '', 'dimas@gaul.com', '51947e3cf64ee746b6f2c73d174d525a', '', 'f2d122ed9ab449a4499d0e2d4fa12343'),
(12345789, 'Rafi Aldiansyah', '', '12345789', '', 'spfindo12@gmail.com', '9e52c1d8f3071ae7d0378997019ced67', '5a8dda124cc70.png', 'TERVERIFIKASI'),
(2147483647, 'Irfan Ahmadi', '', '082323113553', '', 'ipan.ahmadi@gmail.com', 'e73ceb75a6840f2498ced4b6ed5e62a8', '5b01a07809041.png', 'TERVERIFIKASI');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `no_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `email_petugas` varchar(150) NOT NULL,
  `password_petugas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`no_petugas`, `nama_petugas`, `email_petugas`, `password_petugas`) VALUES
(1, 'Oji', 'spfindo12@gmail.com', 'hehehe'),
(2, 'Rafi Aldiansyah', 'rafipiza@purbalingga.go.id', 'rafiii'),
(3, 'Iriwan Jaya', 'purbalinggadevinspek@gmail.com', 'kosong31');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `no_tanggapan` int(11) NOT NULL,
  `no_petugas` int(11) NOT NULL,
  `no_pengaduan` int(11) NOT NULL,
  `isi_tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`no_tanggapan`, `no_petugas`, `no_pengaduan`, `isi_tanggapan`) VALUES
(1, 1, 1, 'Untuk pembuatan Kartu Keluarga maksimal 14 hari kerja, akan tetapi seharusnya dalam waktu 1hari sudah dapat diselesaikan, terkecuali ada permasalahan jaringan ataupun perangkat di lokasi pelayanan kami. silahkan tanyakan alasan kepada petugas kami , apabila jawaban tidak memuaskan catat nama petugas tersebut dan laporkan kepada kami agar kami dapat tindaklanjuti. Terimakasih.'),
(7, 1, 930871, 'Percobaan'),
(8, 1, 214983, 'Nonton ayat-ayat cinta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`no_opd`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`no_pengaduan`),
  ADD KEY `no_pengguna` (`no_pengguna`),
  ADD KEY `no_opd` (`no_opd`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`no_pengguna`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`no_tanggapan`),
  ADD KEY `no_petugas` (`no_petugas`,`no_pengaduan`),
  ADD KEY `no_pengaduan` (`no_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `no_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `no_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=930872;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `no_pengguna` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `no_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `no_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
