-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 17. Januari 2013 jam 06:43
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenjualan`
--

DROP TABLE IF EXISTS `detailpenjualan`;
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
('1', 'brg02', 55000, 1, 55000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE IF NOT EXISTS `penjualan` (
  `nonota` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(8) NOT NULL,
  PRIMARY KEY (`nonota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`nonota`, `tanggal`, `total`) VALUES
('1', '2013-01-17', 55000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblbarang`
--

DROP TABLE IF EXISTS `tblbarang`;
CREATE TABLE IF NOT EXISTS `tblbarang` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hrg_beli` int(10) NOT NULL,
  `hrg_jual` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  PRIMARY KEY (`kode`)
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

DROP TABLE IF EXISTS `tblsementara`;
CREATE TABLE IF NOT EXISTS `tblsementara` (
  `kode` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `jumlah` int(8) DEFAULT NULL,
  `subtotal` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
