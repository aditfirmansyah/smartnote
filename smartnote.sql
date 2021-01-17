-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 12:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartnote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
('130120211412', 'Adit', 'firmansyah', 'Email12.'),
('15012021033831', 'Lisa', 'lisa', 'Khlisah25.'),
('15012021035441', 'Saefullah abd', 'joko', 'Email12.'),
('15012021040146', 'Putra', 'Rizki', 'Mongol12.'),
('15012021040738', 'Ridho', 'Ridha', 'Ridah123.'),
('15012021054026', 'Jamal', 'jamaludin', 'Email12.'),
('15012021054152', 'Jokosa', 'jokosa', 'Email12.'),
('15012021054747', 'jokowi', 'jokowidodo', 'Email12.');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id_content` varchar(20) NOT NULL,
  `judul_content` varchar(40) NOT NULL,
  `isi_content` text NOT NULL,
  `tanggal_buat` date NOT NULL,
  `jam_buat` varchar(18) NOT NULL,
  `id_group` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id_content`, `judul_content`, `isi_content`, `tanggal_buat`, `jam_buat`, `id_group`) VALUES
('120120211250', 'Kumpul Hari 1', 'Pengumpulan dana\r\nKonsumsi snack', '2021-01-12', '12.51', '120120211101'),
('15012021053607', 'Sistem basis data', 'tolong dibuatkan formnya.', '2021-01-15', '05 : 36 : 07 : PM', '15012021113526'),
('15012021053632', 'Sistem basis data tugas 2', 'tolong di kerjakan teman2', '2021-01-15', '05 : 36 : 32 : PM', '15012021113526'),
('15012021103623', 'Kerkom PAW', 'Membuat SKPL', '2021-01-15', '10 : 36 : 23 : AM', '13012021025541');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` varchar(20) NOT NULL,
  `judul_content` varchar(50) DEFAULT NULL,
  `isi_diskusi` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(18) NOT NULL,
  `id_group` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `judul_content`, `isi_diskusi`, `tanggal`, `jam`, `id_group`) VALUES
('15012021053709', 'Sistem Basis Data', 'tolong dibuatkan note nya dong', '2021-01-15', '05 : 37 : 28 : PM', '15012021113526'),
('15012021110340', 'Sistem Basis Data', 'buat note nya', '2021-01-15', '11 : 03 : 40 : AM', '13012021025541');

-- --------------------------------------------------------

--
-- Table structure for table `group_note`
--

CREATE TABLE `group_note` (
  `id_group` varchar(20) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `group_code` varchar(20) NOT NULL,
  `group_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_note`
--

INSERT INTO `group_note` (`id_group`, `group_name`, `group_code`, `group_password`) VALUES
('120120211101', 'Arisan Bapak AL-AMIN', 'Arisan AL-AMIN', 'Arisan Bapak AL-AMIN'),
('120120211102', 'SBD', 'KodeSBD', '12345678'),
('13012021025541', 'Praktikum Pengembangan Aplikasi Web', 'KT0122', 'Group12.'),
('15012021033117', 'SBD', 'CD093037', 'Sistem12.'),
('15012021042041', 'Sistem Basis Data', 'CD042020', 'Basdat12.'),
('15012021113526', 'KELOMPOK 2', 'CD113439', 'Email12.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `group_note`
--
ALTER TABLE `group_note`
  ADD PRIMARY KEY (`id_group`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group_note` (`id_group`);

--
-- Constraints for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD CONSTRAINT `diskusi_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group_note` (`id_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
