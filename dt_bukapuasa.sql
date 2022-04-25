-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 08:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramadhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_bukapuasa`
--

CREATE TABLE `dt_bukapuasa` (
  `Tanggal` date NOT NULL,
  `Menu_Takjil` tinytext DEFAULT NULL,
  `Menu_Berbuka` tinytext DEFAULT NULL,
  `Tempat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_bukapuasa`
--

INSERT INTO `dt_bukapuasa` (`Tanggal`, `Menu_Takjil`, `Menu_Berbuka`, `Tempat`) VALUES
('2022-04-01', 'Kolak Pisang Ubi', 'Ayam Teriyaki', 'Rumah'),
('2022-04-02', 'Bubur Sumsum', 'Bola Daging Lada Hitam', 'Buka Bersama'),
('2022-04-03', 'Sup Buah', 'Semur Telur Puyuh Jamur', 'Kampus'),
('2022-04-04', 'Es Kacang Merah', 'Ikan Lele Goreng dan Sambal Tomat', 'Rumah'),
('2022-04-05', 'Pisang Goreng Madu', 'Nasi Goreng Telur', 'Rumah'),
('2022-04-06', 'Cendol', 'Sop Ayam Kampung', 'Rumah Alex'),
('2022-04-07', 'Bubur Ketan Hitam', 'Ayam Teriyaki', 'Rumah Yusril'),
('2022-04-08', 'Puding Buah', 'Bola Daging Lada Hitam', 'Warung'),
('2022-04-09', 'Kolak Pisang Ubi', 'Semur Telur Puyuh Jamur', 'Buka Bersama'),
('2022-04-10', 'Bubur Sumsum', 'Ikan Lele Goreng dan Sambal Tomat', 'Buka Bersama'),
('2022-04-11', 'Sup Buah', 'Nasi Goreng Telur', 'Kampus'),
('2022-04-12', 'Es Kacang Merah', 'Sop Ayam Kampung', 'Kampus'),
('2022-04-13', 'Pisang Goreng Madu', 'Ayam Teriyaki', 'Rumah'),
('2022-04-14', 'Cendol', 'Bola Daging Lada Hitam', 'Rumah'),
('2022-04-15', 'Bubur Ketan Hitam', 'Semur Telur Puyuh Jamur', 'Rumah'),
('2022-04-16', 'Puding Buah', 'Ikan Lele Goreng dan Sambal Tomat', 'Rumah'),
('2022-04-17', 'Kolak Pisang Ubi', 'Nasi Goreng Telur', 'Rumah Nico'),
('2022-04-18', 'Bubur Sumsum', 'Sop Ayam Kampung', 'Buka Bersama'),
('2022-04-19', 'Sup Buah', 'Ayam Teriyaki', 'Buka Bersama'),
('2022-04-20', 'Es Kacang Merah', 'Bola Daging Lada Hitam', 'Rumah'),
('2022-04-21', 'Pisang Goreng Madu', 'Semur Telur Puyuh Jamur', 'Warung'),
('2022-04-22', 'Cendol', 'Ikan Lele Goreng dan Sambal Tomat', 'Warung'),
('2022-04-23', 'Bubur Ketan Hitam', 'Nasi Goreng Telur', 'Rumah'),
('2022-04-24', 'Puding Buah', 'Sop Ayam Kampung', 'Rumah'),
('2022-04-25', 'Kolak Pisang Ubi', 'Ayam Teriyaki', 'Rumah'),
('2022-04-26', 'Bubur Sumsum', 'Bola Daging Lada Hitam', 'Rumah Budhe'),
('2022-04-27', 'Sup Buah', 'Semur Telur Puyuh Jamur', 'Rumah Adama'),
('2022-04-28', 'Es Kacang Merah', 'Ikan Lele Goreng dan Sambal Tomat', 'Buka Bersama'),
('2022-04-29', 'Pisang Goreng Madu', 'Nasi Goreng Telur', 'Buka Bersama'),
('2022-04-30', 'Cendol', 'Sop Ayam Kampung', 'Rumah'),
('2022-05-01', 'Bubur Ketan Hitam', 'Ayam Teriyaki', 'Rumah');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
