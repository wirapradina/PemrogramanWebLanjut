-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 02:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'dani', 'dani');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NIK` varchar(16) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nomor_Telepon` varchar(13) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIK`, `Nama`, `Nomor_Telepon`, `Alamat`) VALUES
('3302070987654321', 'Sipa', '0876542', 'Jogja'),
('3302070987654324', 'ren', '087463', 'Bantul'),
('3302070987654329', 'dani', '097654321', 'Jogja'),
('3302071234567890', 'Jeyra', '088997765432', 'Banyumas');

-- --------------------------------------------------------

--
-- Table structure for table `data_rental`
--

CREATE TABLE `data_rental` (
  `id_rental` int(11) NOT NULL,
  `plat_motor` varchar(12) DEFAULT NULL,
  `merk_tipe_motor` varchar(50) DEFAULT NULL,
  `harga_sewa` varchar(20) DEFAULT NULL,
  `nik_penyewa` varchar(16) DEFAULT NULL,
  `nama_penyewa` varchar(100) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `lama_sewa_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rental`
--

INSERT INTO `data_rental` (`id_rental`, `plat_motor`, `merk_tipe_motor`, `harga_sewa`, `nik_penyewa`, `nama_penyewa`, `no_telp`, `lama_sewa_hari`) VALUES
(10, 'AB 1234 NM', 'Yamaha Filano', '30.000', '3302070987654329', 'dani', '097654321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `PlatMotor` varchar(12) NOT NULL,
  `Merk_Tipe` varchar(50) NOT NULL,
  `HargaSewa` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`PlatMotor`, `Merk_Tipe`, `HargaSewa`, `Status`, `Gambar`) VALUES
('AB 1234 NM', 'Yamaha Filano', '35.000', 'Disewa', 'filano2.png'),
('AB 1897 MK', 'Honda Revo', '40.000', 'Tersedia', 'revo.png'),
('AB 1897 MU', 'Yamaha Aerox', '45.000', 'Tersedia', 'aerox2.png');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `Id_sewa` int(11) NOT NULL,
  `NIK_Penyewa` varchar(16) NOT NULL,
  `Nama_Penyewa` varchar(100) NOT NULL,
  `Plat_Motor` varchar(12) NOT NULL,
  `Merk_Tipe_Motor` varchar(50) NOT NULL,
  `Lama_Sewa_Hari` int(11) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`Id_sewa`, `NIK_Penyewa`, `Nama_Penyewa`, `Plat_Motor`, `Merk_Tipe_Motor`, `Lama_Sewa_Hari`, `Harga`) VALUES
(1, '3302071234567890', 'Jeyra', 'AB 1234 NM', 'Yamaha Filano', 2, 120000),
(2, '3302070987654321', 'Sipa', 'AB 1234 NM', 'Yamaha Filano', 2, 60000),
(3, '3302070987654324', 'ren', 'AB 1897 MK', 'Honda Revo', 1, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', 'user'),
(2, 'dina', 'dina@gmail.com', 'dinadina'),
(3, 'sipa', 'sipa@gmail.com', 'sipasip'),
(4, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `data_rental`
--
ALTER TABLE `data_rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `plat_motor` (`plat_motor`),
  ADD KEY `nik_penyewa` (`nik_penyewa`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`PlatMotor`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`Id_sewa`),
  ADD KEY `NIK_Penyewa` (`NIK_Penyewa`),
  ADD KEY `PlatMotor` (`Plat_Motor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rental`
--
ALTER TABLE `data_rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `Id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rental`
--
ALTER TABLE `data_rental`
  ADD CONSTRAINT `data_rental_ibfk_1` FOREIGN KEY (`nik_penyewa`) REFERENCES `customer` (`NIK`),
  ADD CONSTRAINT `data_rental_ibfk_2` FOREIGN KEY (`plat_motor`) REFERENCES `motor` (`PlatMotor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`NIK_Penyewa`) REFERENCES `customer` (`NIK`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`Plat_Motor`) REFERENCES `motor` (`PlatMotor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
