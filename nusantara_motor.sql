-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2019 pada 10.15
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nusantara_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

CREATE TABLE IF NOT EXISTS `detailpenjualan` (
  `nonota` varchar(10) DEFAULT NULL,
  `kode` varchar(8) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `subtotal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`nonota`, `kode`, `harga`, `jumlah`, `subtotal`) VALUES
('1', 'brg02', 55000, 1, 55000),
('2', 'R0001', 12, 12, 144),
('3', 'R0001', 12, 12, 144),
('3', 'R0001', 12, 24, 288),
('4', 'R0001', 12, 4, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_servis`
--

CREATE TABLE IF NOT EXISTS `jenis_servis` (
  `kd_jenis_servis` varchar(20) NOT NULL,
  `nama_servis` varchar(50) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_servis`
--

INSERT INTO `jenis_servis` (`kd_jenis_servis`, `nama_servis`, `harga`) VALUES
('D0003', 'over houl', 50000),
('D0004', 'berat', 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_sparepart`
--

CREATE TABLE IF NOT EXISTS `jenis_sparepart` (
  `id_sparepart` varchar(10) NOT NULL,
  `kd_motor` varchar(50) NOT NULL,
  `kd_sparepart` varchar(50) NOT NULL,
  `tipe_sparepart` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_sparepart`
--

INSERT INTO `jenis_sparepart` (`id_sparepart`, `kd_motor`, `kd_sparepart`, `tipe_sparepart`, `harga`) VALUES
('R0002', 'R0988', 'D0001', 'bulb headlight', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `kd_motor` varchar(20) NOT NULL,
  `jenis_motor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`kd_motor`, `jenis_motor`) VALUES
('0987', 'jupiter'),
('R0988', 'mio'),
('R0989', 'beat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`kode_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`kode_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `nonota` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`nonota`, `tanggal`, `total`) VALUES
('1', '2013-01-17', 55000),
('2', '2019-12-08', 144),
('3', '2019-12-08', 432),
('4', '2019-12-08', 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `kd_service` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_servis` varchar(30) NOT NULL,
  `tanggal_servis` date NOT NULL,
  `tipe_motor` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE IF NOT EXISTS `sparepart` (
  `kd_sparepart` varchar(20) NOT NULL,
  `jenis_sparepart` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`kd_sparepart`, `jenis_sparepart`) VALUES
('D0001', 'kampas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblbarang`
--

CREATE TABLE IF NOT EXISTS `tblbarang` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hrg_beli` int(10) NOT NULL,
  `hrg_jual` int(10) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblbarang`
--

INSERT INTO `tblbarang` (`kode`, `nama`, `hrg_beli`, `hrg_jual`, `stok`) VALUES
('brg02', 'Sepatu', 55000, 60000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsementara`
--

CREATE TABLE IF NOT EXISTS `tblsementara` (
  `kode` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `subtotal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblsementara`
--

INSERT INTO `tblsementara` (`kode`, `nama`, `harga`, `jumlah`, `subtotal`) VALUES
('R0001', 'kampas', 12, 14, 168);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_servis`
--
ALTER TABLE `jenis_servis`
 ADD PRIMARY KEY (`kd_jenis_servis`);

--
-- Indexes for table `jenis_sparepart`
--
ALTER TABLE `jenis_sparepart`
 ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
 ADD PRIMARY KEY (`kd_motor`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`kode_pengguna`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`nonota`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`kd_service`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
 ADD PRIMARY KEY (`kd_sparepart`);

--
-- Indexes for table `tblbarang`
--
ALTER TABLE `tblbarang`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `kode_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
