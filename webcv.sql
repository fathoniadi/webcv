-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2016 at 11:44 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.35-1+donate.sury.org~trusty+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webcv`
--
CREATE DATABASE IF NOT EXISTS `webcv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webcv`;

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE IF NOT EXISTS `hobby` (
  `hobby_id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar_hobby` varchar(100) DEFAULT NULL,
  `caption_hobby` text,
  PRIMARY KEY (`hobby_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`hobby_id`, `gambar_hobby`, `caption_hobby`) VALUES
(2, '6Screenshot from 2016-06-08 02:30:39.png', 'NLCasdasdadasdads'),
(3, '28Screenshot from 2016-06-07 21:58:27.png', 'asdasd'),
(4, '91Screenshot from 2016-06-07 16:11:19.png', 'adasd'),
(5, '24Screenshot from 2016-06-07 21:58:57.png', 'asdasda asdasd'),
(7, '67Screenshot from 2016-06-08 02:30:42.png', 'adsadasd a');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `portofolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`portofolio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`portofolio_id`, `judul`, `deskripsi`, `gambar`) VALUES
(2, 'Database Karya', 'Sistem ini digunakan untuk mendata karya mahasiswa yang berasal dari KLATEN.<a href="http://dbkarya.kmki.org/">View</a>', '42Screenshot from 2016-06-04 03:53:17.png'),
(3, 'Profpic Schematics 2016', 'Sistem ini digunakan untuk membuat foto profil dengan menambahkan watermark border Schematics 2016', '58Screenshot from 2016-06-09 20:35:17.png');

-- --------------------------------------------------------

--
-- Table structure for table `userAccount`
--

CREATE TABLE IF NOT EXISTS `userAccount` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userAccount`
--

INSERT INTO `userAccount` (`username`, `password`, `flag`) VALUES
('coba', '1', 0),
('fathoniadi', '1', 0),
('hanifan', '1', 0),
('mdbagas', '1', 1),
('userbiasa', 'userbiasa', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
