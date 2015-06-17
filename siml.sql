-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2015 pada 03.25
-- Versi Server: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi-didink`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `absen_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `absen_tgl` varchar(25) DEFAULT NULL,
  `absen_ket` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`absen_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`absen_id`, `id`, `absen_tgl`, `absen_ket`) VALUES
(13, 22, '20-05-2015', 'Hadir'),
(14, 26, '20-05-2015', 'Alfa'),
(15, 22, '26-05-2015', 'Sakit'),
(16, 22, '27-05-2015', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE IF NOT EXISTS `alat` (
  `alat_id` int(11) NOT NULL AUTO_INCREMENT,
  `alat_nama` varchar(50) DEFAULT NULL,
  `alat_jenis` varchar(50) DEFAULT NULL,
  `alat_jumlah` int(11) DEFAULT NULL,
  `alat_rusak` int(11) DEFAULT NULL,
  `alat_satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`alat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`alat_id`, `alat_nama`, `alat_jenis`, `alat_jumlah`, `alat_rusak`, `alat_satuan`) VALUES
(1, 'no2', 'Cair', 34, 35, 'dtrh'),
(3, 'no2', 'Cair', 34, 35, 'dtrh'),
(4, 'adasd', 'Cair', 56, 4, 'asda'),
(7, 'ad', 'Mudah Pecah', 34, 4, 'dsf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
  `bahan_id` int(11) NOT NULL AUTO_INCREMENT,
  `bahan_nama` varchar(100) DEFAULT NULL,
  `bahan_jenis` varchar(50) DEFAULT NULL,
  `bahan_jumlah` int(11) DEFAULT NULL,
  `bahan_rusak` int(11) DEFAULT NULL,
  `bahan_satuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bahan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`bahan_id`, `bahan_nama`, `bahan_jenis`, `bahan_jumlah`, `bahan_rusak`, `bahan_satuan`) VALUES
(3, 'weq', 'Cair', 34, 2, 'dfss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(17, '2015-05-28', 'hg', 'pdf', '1545102', '../gallery/hg.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_nama` varchar(100) NOT NULL,
  `galeri_keterangan` text NOT NULL,
  `galeri_link` text NOT NULL,
  `galeri_tgl` datetime NOT NULL,
  PRIMARY KEY (`galeri_id`),
  UNIQUE KEY `galeri_nama` (`galeri_nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `jam_id` int(11) DEFAULT NULL,
  `jadwal_tanggal` varchar(25) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`jadwal_id`),
  KEY `jam_id` (`jam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `jam_id`, `jadwal_tanggal`, `id`, `kelas_id`) VALUES
(21, 5, '27-05-2015', 24, 1),
(22, 6, '27-05-2015', 24, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `jam_id` int(11) NOT NULL AUTO_INCREMENT,
  `jam_nama` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`jam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`jam_id`, `jam_nama`) VALUES
(5, '07:30 - 09:00'),
(6, '09:00 - 10:45'),
(7, '10:45 - 12:30'),
(8, '12:30 - 13:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisnilai`
--

CREATE TABLE IF NOT EXISTS `jenisnilai` (
  `jenis_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jenisnilai`
--

INSERT INTO `jenisnilai` (`jenis_id`, `jenis_nama`) VALUES
(1, 'Afektif'),
(2, 'Psikomotor'),
(3, 'Kognitif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisperangkat`
--

CREATE TABLE IF NOT EXISTS `jenisperangkat` (
  `jenisperangkat_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenisperangkat_nama` varchar(25) DEFAULT NULL,
  `jenisperangkat_type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`jenisperangkat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jenisperangkat`
--

INSERT INTO `jenisperangkat` (`jenisperangkat_id`, `jenisperangkat_nama`, `jenisperangkat_type`) VALUES
(2, 'Mudah Pecah', 'Alat'),
(3, 'Padad', 'Alat'),
(4, 'Cair', 'Bahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'X-1'),
(2, 'X-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nilai_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `tahun_id` int(11) DEFAULT NULL,
  `nilai_poin` int(11) DEFAULT NULL,
  PRIMARY KEY (`nilai_id`),
  KEY `siswa_id` (`id`),
  KEY `jenis_id` (`jenis_id`,`semester_id`,`tahun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `id`, `jenis_id`, `semester_id`, `tahun_id`, `nilai_poin`) VALUES
(21, 22, 1, 1, 1, 67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semester_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_nama`) VALUES
(1, '1 (Satu)'),
(2, '2 (Dua)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
  `tahun_id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`tahun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`tahun_id`, `tahun_nama`) VALUES
(1, '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `alamat` text,
  `status` varchar(25) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_id` (`kelas_id`),
  KEY `kelas_id_2` (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `gender`, `foto`, `kelas_id`, `access`) VALUES
(22, '456', 'gg', 'aaa', 'aaa', '34563', 'gggg', 'Aktif', 'Laki-laki', 'foto/Untitled.jpg', 1, 'siswa'),
(24, '45345', 'Ary Munandar', 'guru', 'test', '323', 'asdasd', 'PNS', 'Laki-laki', 'foto/10432461_10202319622671266_2462827913693846606_n.jpg', NULL, 'guru'),
(25, NULL, 'administrator', 'admin', 'admin', '12790', 'jalan jalan', 'PNS', 'Laki-laki', 'foto/10432461_10202319622671266_2462827913693846606_n.jpg', NULL, 'admin'),
(26, '2987601999', 'chairani munaf', 'guru', 'guru', '08765234', 'jalan sudirman', 'PNS', 'Perempuan', 'foto/Untitled.jpg', NULL, 'guru'),
(27, '567', 'fth', 'fgh', 'fgh', 'fgh', 'fgh', 'PNS', 'Laki-laki', 'foto/IMG_2918.jpg', NULL, 'guru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
