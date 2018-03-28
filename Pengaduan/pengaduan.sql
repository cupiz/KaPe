-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 04:17 PM
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
(1, 'Dinas Kependudukan dan Pencatatan Sipil', 'Jalan Letnan Jenderal S Parman No 19', 'dinassipil@purbalingga.go.id', '0281891069'),
(2, 'Dinas Pemuda, Olahraga dan Pariwisata', 'Jalan Kapten Piere Tendean No 10', 'olahragakuy@purbalingga.go.id', '0281893269');

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
  `status_pengaduan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`no_pengaduan`, `no_opd`, `no_pengguna`, `tipe_pengaduan`, `tanggal_pengaduan`, `gambar_pengaduan`, `pesan_pengaduan`, `status_pengaduan`) VALUES
(0, 1, 12345789, 'Saran', '2018-02-22', 'icon.png', 'Coba Test', 1),
(1, 1, 1, 'Pertanyaan', '2018-02-07', 'listing-item-01a.jpg', 'Berapa harikah proses pembuatan kk yang sebenarnya, saya di beritahu oleh petugas di kecamatan untuk kembali lagi setelah 20 hari kerja, benarkah seperti itu? Terima kasih', 3),
(2, 2, 1, 'Pengaduan', '2018-02-07', 'listing-item-01b.jpg', 'Infrastuktur Jalan Kenanga Tolong di Perbaiki', 2),
(3, 1, 1, 'Pertanyaan', '2018-02-13', 'icon.png', 'Coba test dulu', 2),
(930871, 1, 1, 'Saran', '2018-02-22', 'hand.png', 'Saran coba', 3);

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
(1, 'Iqbal Ahdagita E', 'Shappire Blok i-8 Purwokerto', '082323113553', '15390660_10154782892582378_5864204457489918465_n.jpg', 'spfindo@gmail.com', 'ffe553694f5096471590343432359e02', '', 'TERVERIFIKASI'),
(12345789, 'Rafi Aldiansyah', '', '12345789', '', 'spfindo12@gmail.com', '9e52c1d8f3071ae7d0378997019ced67', '5a8dda124cc70.png', 'TERVERIFIKASI');

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
(1, 'Rafi Aldiansyah', 'rafipiza@purbalingga.go.id', 'rafiii');

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
(7, 1, 930871, 'Percobaan');

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
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `no_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`no_opd`) REFERENCES `opd` (`no_opd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengaduan_ibfk_3` FOREIGN KEY (`no_pengguna`) REFERENCES `pengguna` (`no_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`no_petugas`) REFERENCES `petugas` (`no_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_ibfk_3` FOREIGN KEY (`no_pengaduan`) REFERENCES `pengaduan` (`no_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
