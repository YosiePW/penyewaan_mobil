-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 10:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_sewa`
--

CREATE TABLE `detail_sewa` (
  `id_sewa` varchar(200) NOT NULL,
  `id_mobil` varchar(200) NOT NULL,
  `hari` double NOT NULL,
  `biaya_sewa_perhari` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_sewa`
--

INSERT INTO `detail_sewa` (`id_sewa`, `id_mobil`, `hari`, `biaya_sewa_perhari`) VALUES
('40302052019', '809', 1, 50000000000),
('39302052019', '003', 2, 2000000),
('39302052019', '002', 2, 500000),
('49802052019', '002', 1, 500000),
('49802052019', '003', 1, 2000000),
('18502052019', '001', 1, 700000),
('18502052019', '002', 2, 500000),
('62102052019', '002', 1, 500000),
('93202052019', '001', 1, 700000),
('5002052019', '001', 3, 700000),
('5002052019', '002', 1, 500000),
('33202052019', '002', 1, 500000),
('62602052019', '002', 1, 500000),
('41002052019', '001', 2, 700000),
('41002052019', '002', 1, 500000),
('16002052019', '003', 1, 2000000),
('25802052019', '001', 3, 700000),
('25802052019', '002', 1, 500000),
('49602052019', '001', 1, 700000),
('49602052019', '002', 4, 500000),
('66602052019', '002', 4, 500000),
('7902052019', '002', 5, 500000),
('2902052019', '002', 3, 500000),
('44202052019', '002', 2, 500000),
('81902052019', '002', 2, 500000),
('81902052019', '003', 2, 2000000),
('81902052019', '001', 1, 700000),
('27702052019', '001', 1, 700000),
('27702052019', '002', 1, 500000),
('82202052019', '001', 1, 700000),
('82202052019', '002', 2, 500000),
('82202052019', '003', 1, 2000000),
('72302052019', '002', 1, 500000),
('72302052019', '003', 1, 2000000),
('56602052019', '002', 1, 500000),
('56602052019', '003', 1, 2000000),
('56602052019', '005', 1, 300000),
('76102052019', '002', 1, 500000),
('38002052019', '002', 1, 500000),
('38002052019', '001', 1, 700000),
('38002052019', '003', 1, 2000000),
('45202052019', '004', 2, 500000),
('45202052019', '005', 1, 300000),
('4502052019', '001', 1, 700000),
('4502052019', '006', 2, 1000000),
('73202052019', '001', 1, 700000),
('47402052019', '001', 1, 700000),
('22802052019', '003', 1, 2000000),
('22802052019', '002', 1, 500000),
('29302052019', '002', 1, 500000),
('21102052019', '001', 1, 700000),
('31302052019', '002', 1, 500000),
('31302052019', '003', 1, 2000000),
('31302052019', '006', 1, 1000000),
('31302052019', '001', 1, 700000),
('35202052019', '001', 1, 700000),
('35202052019', '002', 1, 500000),
('55602052019', '002', 1, 500000),
('55602052019', '003', 1, 2000000),
('73402052019', '005', 1, 300000),
('73402052019', '003', 1, 2000000),
('12702052019', '002', 1, 500000),
('12702052019', '003', 1, 2000000),
('97602052019', '002', 1, 500000),
('78702052019', '001', 1, 700000),
('78702052019', '002', 2, 500000),
('78702052019', '003', 1, 2000000),
('79703052019', '001', 1, 700000),
('79703052019', '002', 1, 500000),
('79703052019', '003', 1, 2000000),
('13103052019', '002', 3, 500000),
('88303052019', '002', 2, 500000),
('88303052019', '003', 2, 2000000),
('19103052019', '002', 1, 500000),
('19103052019', '003', 1, 2000000),
('79903052019', '002', 2, 500000),
('79903052019', '001', 1, 700000),
('79903052019', '003', 2, 2000000),
('32903052019', '002', 1, 500000),
('64103052019', '002', 1, 500000),
('64103052019', '003', 1, 2000000),
('75303052019', '002', 1, 500000),
('75303052019', '003', 1, 2000000),
('26803052019', '002', 1, 500000),
('70903052019', '002', 1, 500000),
('52103052019', '002', 2, 500000),
('69503052019', '001', 2, 700000),
('69503052019', '002', 2, 500000),
('56303052019', '006', 1, 1000000),
('56303052019', '002', 1, 500000),
('71103052019', '002', 1, 500000),
('71103052019', '001', 1, 700000),
('15103052019', '002', 1, 500000),
('85103052019', '002', 1, 500000),
('85103052019', '003', 1, 2000000),
('64903052019', '002', 1, 500000),
('64903052019', '003', 1, 2000000),
('78803052019', '002', 1, 500000),
('78803052019', '001', 1, 700000),
('84103052019', '002', 1, 500000),
('84103052019', '003', 1, 2000000),
('73703052019', '002', 1, 500000),
('86403052019', '002', 1, 500000),
('78503052019', '003', 1, 2000000),
('91303052019', '003', 1, 2000000),
('91303052019', '002', 1, 500000),
('66203052019', '002', 1, 500000),
('20303052019', '002', 1, 500000),
('47003052019', '002', 1, 500000),
('47003052019', '003', 1, 2000000),
('77203052019', '002', 1, 500000),
('20903052019', '002', 1, 500000),
('20903052019', '003', 1, 2000000),
('39703052019', '002', 1, 500000),
('39703052019', '003', 1, 2000000),
('40003052019', '003', 2, 2000000),
('71303052019', '002', 2, 500000),
('71303052019', '003', 2, 2000000),
('58303052019', '002', 1, 500000),
('58303052019', '003', 1, 2000000),
('46403052019', '002', 1, 500000),
('83903052019', '002', 2, 500000),
('83903052019', '003', 1, 2000000),
('86903052019', '002', 1, 500000),
('86903052019', '003', 1, 2000000),
('26703052019', '001', 1, 700000),
('26703052019', '002', 1, 500000),
('63703052019', '002', 1, 500000),
('63703052019', '003', 1, 2000000),
('79603052019', '002', 4, 500000),
('1303052019', '001', 1, 700000),
('1303052019', '006', 2, 1000000),
('14403052019', '002', 2, 500000),
('14403052019', '003', 2, 2000000),
('23003052019', '002', 1, 500000),
('23003052019', '003', 1, 2000000),
('78903052019', '001', 1, 700000),
('78903052019', '002', 1, 500000),
('78903052019', '003', 1, 2000000),
('5803052019', '001', 1, 700000),
('5803052019', '002', 2, 500000),
('5803052019', '003', 2, 2000000),
('94503052019', '002', 1, 500000),
('39403052019', '003', 1, 2000000),
('39403052019', '002', 1, 500000),
('49603052019', '002', 1, 500000),
('49603052019', '003', 1, 2000000),
('83203052019', '002', 1, 500000),
('59503052019', '002', 1, 500000),
('5203052019', '002', 1, 500000),
('5203052019', '001', 1, 700000),
('13303052019', '003', 1, 2000000),
('13303052019', '002', 1, 500000),
('31703052019', '002', 1, 500000),
('31703052019', '003', 1, 2000000),
('50403052019', '003', 1, 2000000),
('50403052019', '002', 1, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(100) NOT NULL,
  `nama_karyawan` varchar(300) NOT NULL,
  `alamat_karyawan` varchar(300) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `kontak`, `username`, `password`) VALUES
('678', 'cika', 'malang', '456', 'rasya', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(100) NOT NULL,
  `nomor_mobil` varchar(100) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `tahun_pembuatan` varchar(20) NOT NULL,
  `biaya_sewa_perhari` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `stok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nomor_mobil`, `merk`, `jenis`, `warna`, `tahun_pembuatan`, `biaya_sewa_perhari`, `image`, `stok`) VALUES
('001', '123', 'Freed', 'Matic', 'Putih', '2018', 700000, '001-285.jpg', 1),
('002', '1234', 'Nissan', 'Matic', 'Merah', '2017', 500000, '002-340.jpg', 1),
('003', '12345', 'Lamborghini', 'Matic', 'Hitam', '2019', 2000000, '003-418.jpg', 1),
('004', '123456', 'Calya', 'Manual', 'Merah', '2017', 500000, '004-124.jpg', 1),
('005', '12348', 'Brio', 'Manual', 'Kuning', '2018', 300000, '005-259.jpg', 1),
('006', '90890', 'Alphard', 'Matic', 'Putih', '2018', 1000000, '006-18.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(200) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `kontak`, `username`, `password`, `image`) VALUES
('90', 'disti', 'malang', '890', 'disti', '74da4661978c24e17e305af2895d781b', '90-961.jpg'),
('90986', 'rasya', 'bumi', 'www', 'cika', '202cb962ac59075b964b07152d234b70', '90986-927.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) NOT NULL,
  `tgl_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_pelanggan`, `tgl_sewa`) VALUES
('12702052019', '1234', '2019-05-02'),
('1303052019', '12340', '2019-05-03'),
('13103052019', '1234', '2019-05-03'),
('13303052019', '90986', '2019-05-03'),
('14403052019', '12340', '2019-05-03'),
('15103052019', '1234', '2019-05-03'),
('16002052019', '1234', '2019-05-02'),
('18502052019', '', '2019-05-02'),
('19103052019', '', '2019-05-03'),
('20303052019', '', '2019-05-03'),
('20903052019', '1234', '2019-05-03'),
('21102052019', '1234', '2019-05-02'),
('22802052019', '1234', '2019-05-02'),
('23003052019', '12340', '2019-05-03'),
('25802052019', '1234', '2019-05-02'),
('26703052019', '12340', '2019-05-03'),
('26803052019', '', '2019-05-03'),
('27702052019', '1234', '2019-05-02'),
('2902052019', '', '2019-05-02'),
('29302052019', '1234', '2019-05-02'),
('31302052019', '1234', '2019-05-02'),
('31703052019', '90986', '2019-05-03'),
('32903052019', '1234', '2019-05-03'),
('33202052019', '1234', '2019-05-02'),
('35202052019', '1234', '2019-05-02'),
('38002052019', '1234', '2019-05-02'),
('39302052019', '', '2019-05-02'),
('39403052019', '90', '2019-05-03'),
('39703052019', '', '2019-05-03'),
('40003052019', '1234', '2019-05-03'),
('40302052019', '', '2019-05-02'),
('41002052019', '1234', '2019-05-02'),
('44202052019', '', '2019-05-02'),
('4502052019', '1234', '2019-05-02'),
('45202052019', '', '2019-05-02'),
('46403052019', '1234', '2019-05-03'),
('47003052019', '1234', '2019-05-03'),
('47402052019', '1234', '2019-05-02'),
('49602052019', '1234', '2019-05-02'),
('49603052019', '90986', '2019-05-03'),
('49802052019', '', '2019-05-02'),
('5002052019', '1234', '2019-05-02'),
('50403052019', '90986', '2019-05-03'),
('5203052019', '90986', '2019-05-03'),
('52103052019', '', '2019-05-03'),
('55602052019', '1234', '2019-05-02'),
('56303052019', '1234', '2019-05-03'),
('56602052019', '', '2019-05-02'),
('5803052019', '90', '2019-05-03'),
('58303052019', '1234', '2019-05-03'),
('59503052019', '90986', '2019-05-03'),
('62102052019', '', '2019-05-02'),
('62602052019', '1234', '2019-05-02'),
('63703052019', '12340', '2019-05-03'),
('64103052019', '', '2019-05-03'),
('64903052019', '1234', '2019-05-03'),
('66203052019', '', '2019-05-03'),
('66602052019', '1234', '2019-05-02'),
('69503052019', '1234', '2019-05-03'),
('70903052019', '', '2019-05-03'),
('71103052019', '', '2019-05-03'),
('71303052019', '1234', '2019-05-03'),
('72302052019', '', '2019-05-02'),
('73202052019', '1234', '2019-05-02'),
('73402052019', '1234', '2019-05-02'),
('73703052019', '1234', '2019-05-03'),
('75303052019', '', '2019-05-03'),
('76102052019', '1234', '2019-05-02'),
('77203052019', '', '2019-05-03'),
('78503052019', '1234', '2019-05-03'),
('78702052019', '1234', '2019-05-02'),
('78803052019', '1234', '2019-05-03'),
('78903052019', '90', '2019-05-03'),
('7902052019', '', '2019-05-02'),
('79603052019', '12340', '2019-05-03'),
('79703052019', '1234', '2019-05-03'),
('79903052019', '', '2019-05-03'),
('81902052019', '', '2019-05-02'),
('82202052019', '', '2019-05-02'),
('83203052019', '', '2019-05-03'),
('83903052019', '1234', '2019-05-03'),
('84103052019', '1234', '2019-05-03'),
('85103052019', '1234', '2019-05-03'),
('86403052019', '1234', '2019-05-03'),
('86903052019', '', '2019-05-03'),
('88303052019', '1234', '2019-05-03'),
('91303052019', '1234', '2019-05-03'),
('93202052019', '', '2019-05-02'),
('94503052019', '90', '2019-05-03'),
('97602052019', '1234', '2019-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;