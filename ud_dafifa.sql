-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 04:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ud_dafifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun1`
--

CREATE TABLE `tb_akun1` (
  `id_akun1` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nama_akun1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akun1`
--

INSERT INTO `tb_akun1` (`id_akun1`, `keterangan`, `nama_akun1`) VALUES
(2001060041, 'Kas', 'Kas'),
(2001060042, 'Piutang Usaha', 'Piutang'),
(2001060043, 'Perlengkapan Perusahaan', 'Perlengkapan'),
(2001060044, 'Peralatan Perusahaan', 'Peralatan'),
(2001060045, 'Akumulasi Peralatan', 'Akumulasi Peralatan'),
(2001060046, 'Utang Usaha', 'Utang Usaha'),
(2001060047, 'Modal', 'Modal'),
(2001060048, 'Prive', 'Prive'),
(2001060049, 'Pendapatan', 'Pendapatan'),
(2001060050, 'Beban Perlengkapan', 'Beban Perlangkapan'),
(2001060053, 'Pendapatan Bunga', 'Pendapatan Bunga'),
(2001060054, 'Pendapatan Jasa', 'Pendapatan Jasa'),
(2001060055, 'Pendapatan Dagang', 'Pendapatan Dagang'),
(2001060056, 'Biaya Operasional', 'Biaya Operasional'),
(2001060057, 'Beban renovasi', 'Beban renovasi'),
(2001060058, 'Utang Bank', 'Utang Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `cicilan` int(11) NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `piutang` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `alamat` text NOT NULL,
  `angsuran` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp`, `cicilan`, `pinjaman`, `piutang`, `jatuh_tempo`, `alamat`, `angsuran`, `jumlah`, `gambar`, `keterangan`) VALUES
(17, 'Default', '-', 1, 0, 0, '2023-07-11', '-', 0, 0, '64ac454cb9984.jpg', ''),
(22, 'I Made Sudiartha', '-', 12, 2200000, 2868000, '2022-08-22', 'Jl. Narmada 12 KR KECICANG', 239000, 0, '64d11dae6eca1.jpeg', ''),
(23, 'Petrus Loli Deke', '-', 5, 2550000, 2750000, '2022-03-02', 'Jl. Energi 66. Panorama Tangsi', 550000, 0, '64d12563c13b4.jpeg', ''),
(24, 'Wunragil', '-', 6, 1200000, 1380000, '2022-01-02', 'Link. Karang Panas', 230000, 0, '64d12a37239ec.jpeg', ''),
(29, 'Ejan', '021', 4, 2000000, 2200000, '2023-10-08', 'loteng', 550000, 3, '64d1dfe67ee29.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tjurnal`
--

CREATE TABLE `tb_tjurnal` (
  `id_tjurnal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `id_akun1` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_saldo` varchar(255) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tjurnal`
--

INSERT INTO `tb_tjurnal` (`id_tjurnal`, `tanggal`, `nama_pelanggan`, `id_akun1`, `keterangan`, `jenis_saldo`, `saldo`) VALUES
(85, '2023-05-26', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(86, '2023-05-26', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(88, '2023-05-26', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(89, '2023-05-26', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(91, '2023-05-26', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(92, '2023-05-26', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(93, '2023-05-26', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(94, '2023-05-26', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(95, '2023-05-26', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 50000),
(96, '2023-05-26', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 50000),
(97, '2023-05-27', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(98, '2023-05-27', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(99, '2023-05-27', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(100, '2023-05-27', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(101, '2023-05-27', 'Default', 2001060056, 'Membeli barang untuk terapi pijat', 'debit', 100000),
(102, '2023-05-27', 'Default', 2001060041, 'Membeli barang untuk terapi pijat', 'kredit', 100000),
(103, '2023-05-28', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(104, '2023-05-28', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(105, '2023-05-29', 'Default', 2001060056, '-', 'debit', 50000),
(106, '2023-05-29', 'Default', 2001060041, '-', 'kredit', 50000),
(107, '2023-05-29', 'Default', 2001060041, 'Terapi facial treatment wajah', 'debit', 150000),
(108, '2023-05-29', 'Default', 2001060054, 'Terapi facial treatment wajah', 'kredit', 150000),
(109, '2022-04-13', 'Default', 2001060057, 'Biaya renovasi rumah', 'debit', 370000000),
(110, '2022-04-13', 'Default', 2001060041, 'Biaya renovasi rumah', 'kredit', 370000000),
(111, '2022-04-09', 'Default', 2001060041, 'Meminjam uang di bank', 'debit', 400000000),
(112, '2022-04-09', 'Default', 2001060058, 'Meminjam uang di bank', 'kredit', 400000000),
(113, '2022-05-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(114, '2022-05-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(115, '2022-06-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(116, '2022-06-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(117, '2022-07-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(118, '2022-07-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(119, '2022-08-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(120, '2022-08-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(121, '2022-09-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(122, '2022-09-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(123, '2022-10-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(124, '2022-10-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(125, '2022-11-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(126, '2022-11-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(127, '2022-12-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(128, '2022-12-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(131, '2023-01-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(132, '2023-01-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(133, '2023-02-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(134, '2023-02-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(135, '2023-03-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(136, '2023-03-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(137, '2023-04-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(138, '2023-04-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(139, '2023-05-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(140, '2023-05-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(141, '2023-06-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(142, '2023-06-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(143, '2023-07-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(144, '2023-07-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(145, '2023-08-01', 'Default', 2001060058, 'Membayar utang di bank', 'debit', 7000000),
(146, '2023-08-01', 'Default', 2001060041, 'Membayar utang di bank', 'kredit', 7000000),
(149, '2022-12-31', 'Default', 2001060041, 'Total pendapatan tahun 2022', 'debit', 118700000),
(150, '2022-12-31', 'Default', 2001060054, 'Total pendapatan tahun 2022', 'kredit', 118700000),
(153, '2022-12-31', 'Default', 2001060056, 'Biaya operasional tahun2022', 'debit', 63200000),
(154, '2022-12-31', 'Default', 2001060041, 'Biaya operasional tahun2022', 'kredit', 63200000),
(155, '2023-07-04', 'Default', 2001060041, 'Total pendapatan jasa terakhir', 'debit', 31600000),
(156, '2023-07-19', 'Default', 2001060054, 'Total pendapatan jasa terakhir', 'kredit', 31600000),
(157, '2023-07-20', 'Default', 2001060056, 'Biaya operasional terakhir', 'debit', 8600000),
(158, '2023-07-20', 'Default', 2001060041, 'Biaya operasional terakhir', 'kredit', 8600000),
(159, '2023-05-30', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 200000),
(160, '2023-05-30', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 200000),
(161, '2023-05-30', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 100000),
(162, '2023-05-30', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 100000),
(163, '2023-05-30', 'Default', 2001060056, 'Membeli barang untuk terapi pijat', 'debit', 100000),
(164, '2023-05-30', 'Default', 2001060041, 'Membeli barang untuk terapi pijat', 'kredit', 100000),
(165, '2023-08-30', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(166, '2023-08-30', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(167, '2023-05-31', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 300000),
(168, '2023-05-31', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 300000),
(169, '2023-05-31', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 300000),
(170, '2023-05-31', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 300000),
(183, '2023-07-31', 'Default', 2001060041, 'Pendapatan jasa juni dan juli', 'debit', 17200000),
(184, '2023-07-31', 'Default', 2001060054, 'Pendapatan jasa juni dan juli', 'kredit', 17200000),
(185, '2023-07-31', 'Default', 2001060056, 'Biaya operasional juni dan juli', 'debit', 12450000),
(186, '2023-07-31', 'Default', 2001060041, 'Biaya operasional juni dan juli', 'kredit', 12450000),
(187, '2023-08-01', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 100000),
(188, '2023-08-01', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 100000),
(189, '2023-08-01', 'Default', 2001060041, 'Terapi facial treatment wajah', 'debit', 300000),
(190, '2023-08-01', 'Default', 2001060054, 'Terapi facial treatment wajah', 'kredit', 300000),
(191, '2023-08-02', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 200000),
(192, '2023-08-02', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 200000),
(193, '2023-08-03', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 300000),
(194, '2023-08-03', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 300000),
(195, '2023-08-03', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 50000),
(196, '2023-08-03', 'Default', 2001060056, 'Terapi pijat anak-anak', 'kredit', 50000),
(197, '2023-08-04', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 200000),
(198, '2023-08-04', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 200000),
(199, '2023-08-05', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 50000),
(200, '2023-08-05', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 50000),
(201, '2023-08-06', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 300000),
(202, '2023-08-06', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 300000),
(203, '2023-08-06', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 50000),
(204, '2023-08-06', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 50000),
(205, '2023-08-06', 'Default', 2001060041, 'Terapi facial treatment wajah', 'debit', 200000),
(206, '2023-08-06', 'Default', 2001060054, 'Terapi facial treatment wajah', 'kredit', 200000),
(207, '2023-08-07', 'Default', 2001060041, 'Terapi pijat dewasa', 'debit', 200000),
(208, '2023-08-07', 'Default', 2001060054, 'Terapi pijat dewasa', 'kredit', 200000),
(209, '2023-08-07', 'Default', 2001060041, 'Terapi pijat anak-anak', 'debit', 150000),
(210, '2023-08-07', 'Default', 2001060054, 'Terapi pijat anak-anak', 'kredit', 150000),
(211, '2023-08-07', 'Default', 2001060041, 'Terapi facial treatment wajah', 'debit', 170000),
(212, '2023-08-07', 'Default', 2001060054, 'Terapi facial treatment wajah', 'kredit', 170000),
(215, '2023-07-31', 'Default', 2001060041, 'Total pendapatan dagang yang diingat', 'debit', 9700000),
(216, '2023-07-31', 'Default', 2001060055, 'Total pendapatan dagang yang diingat', 'kredit', 9700000),
(217, '2021-08-22', 'I Made Sudiartha', 2001060042, 'Membeli hp samsung galaxy', 'debit', 2868000),
(218, '2021-08-22', 'I Made Sudiartha', 2001060053, 'Membeli hp samsung galaxy', 'kredit', 668000),
(219, '2021-08-22', 'I Made Sudiartha', 2001060041, 'Membeli hp samsung galaxy', 'kredit', 2200000),
(220, '2021-09-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(221, '2021-09-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(222, '2021-10-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(223, '2021-10-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(224, '2021-11-22', 'I Made Sudiartha', 2001060041, 'Membayar cicilan', 'debit', 239000),
(225, '2021-11-22', 'I Made Sudiartha', 2001060042, 'Membayar cicilan', 'kredit', 239000),
(226, '2021-12-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(227, '2021-12-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(228, '2022-01-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(229, '2022-01-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(230, '2022-02-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(231, '2022-02-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(232, '2022-03-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(233, '2022-03-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(234, '2022-04-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(235, '2022-04-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(236, '2022-05-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(237, '2022-05-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(238, '2022-06-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(239, '2022-06-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(240, '2022-07-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(241, '2022-07-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(244, '2021-10-02', 'Petrus Loli Deke', 2001060042, 'Membeli HP', 'debit', 2250000),
(245, '2021-10-02', 'Petrus Loli Deke', 2001060053, 'Membeli Hp', 'kredit', 250000),
(246, '2021-10-02', 'Petrus Loli Deke', 2001060041, 'Membeli HP', 'kredit', 2000000),
(247, '2021-11-10', 'Petrus Loli Deke', 2001060041, 'Membayar angsuran', 'debit', 450000),
(248, '2021-11-10', 'Petrus Loli Deke', 2001060042, 'Membayar angsuran', 'kredit', 450000),
(249, '2021-12-10', 'Petrus Loli Deke', 2001060041, 'Membayar angsuran', 'debit', 450000),
(250, '2021-12-10', 'Petrus Loli Deke', 2001060042, 'Membayar angsuran', 'kredit', 450000),
(251, '2022-08-22', 'I Made Sudiartha', 2001060041, 'Membayar angsuran', 'debit', 239000),
(252, '2022-08-22', 'I Made Sudiartha', 2001060042, 'Membayar angsuran', 'kredit', 239000),
(253, '2022-01-10', 'Petrus Loli Deke', 2001060041, 'Membayar angsuran', 'debit', 450000),
(254, '2022-01-10', 'Petrus Loli Deke', 2001060042, 'Membayar angsuran', 'kredit', 450000),
(255, '2022-02-10', 'Petrus Loli Deke', 2001060041, 'Membayar angsuran', 'debit', 450000),
(256, '2022-02-10', 'Petrus Loli Deke', 2001060042, 'Membayar angsuran', 'kredit', 450000),
(257, '2022-03-10', 'Petrus Loli Deke', 2001060041, 'Membayar angsuran', 'debit', 450000),
(258, '2022-03-10', 'Petrus Loli Deke', 2001060042, 'Membayar angsuran', 'kredit', 450000),
(259, '2021-08-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(260, '2021-08-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(261, '2021-09-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(262, '2021-09-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(263, '2021-10-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(264, '2021-10-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(265, '2021-11-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(266, '2021-11-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(267, '2021-12-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(268, '2021-12-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(269, '2021-07-02', 'Wunragil', 2001060042, 'Membeli mesin cuci', 'debit', 1380000),
(270, '2021-07-02', 'Wunragil', 2001060053, 'Membeli mesin cuci', 'kredit', 180000),
(271, '2021-07-02', 'Wunragil', 2001060041, 'Membeli mesin cuci', 'kredit', 1200000),
(272, '2022-01-02', 'Wunragil', 2001060041, 'Membayar angsuran', 'debit', 230000),
(273, '2022-01-02', 'Wunragil', 2001060042, 'Membayar angsuran', 'kredit', 230000),
(274, '2023-08-08', 'Ejan', 2001060042, 'Membeli barang', 'debit', 2200000),
(275, '2023-08-08', 'Ejan', 2001060053, 'Membeli barang', 'kredit', 200000),
(276, '2023-08-08', 'Ejan', 2001060041, 'Membeli barang', 'kredit', 2000000),
(277, '2023-09-08', 'Ejan', 2001060041, 'Membayar angsuran', 'debit', 550000),
(278, '2023-09-08', 'Ejan', 2001060042, 'Membayar angsuran', 'kredit', 550000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'daffa', '123'),
(2, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun1`
--
ALTER TABLE `tb_akun1`
  ADD PRIMARY KEY (`id_akun1`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_tjurnal`
--
ALTER TABLE `tb_tjurnal`
  ADD PRIMARY KEY (`id_tjurnal`),
  ADD KEY `id_akun1` (`id_akun1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun1`
--
ALTER TABLE `tb_akun1`
  MODIFY `id_akun1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001060059;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_tjurnal`
--
ALTER TABLE `tb_tjurnal`
  MODIFY `id_tjurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
