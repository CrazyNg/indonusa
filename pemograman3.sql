-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 11:01 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemograman3`
--
CREATE DATABASE IF NOT EXISTS `pemograman3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pemograman3`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id_artikel` int(2) NOT NULL AUTO_INCREMENT,
  `artikel` text NOT NULL,
  `judul` varchar(25) NOT NULL,
  `jenis_artikel` varchar(15) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `artikel`, `judul`, `jenis_artikel`) VALUES
(1, '<p>speihgtpewohgpiq</p>\r\n', 'alhfpaehgpih', 'PHP'),
(3, '<p>ahoisgoigduiwg`</p>\r\n', 'lalajpoh', 'C++'),
(4, '<p>speihgweogep8hgp</p>\r\n', 'ksgdofagpg;pa', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_kom` int(2) NOT NULL AUTO_INCREMENT,
  `komentar` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `id_mhs` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `password`, `alamat`, `jenis_kelamin`) VALUES
(1, 'admin', '21232f29', 'solo', 'lakilaki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
