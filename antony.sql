-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 01:33 AM
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
-- Database: `dewikurnia-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_2257301033`
--

CREATE TABLE `artikel_2257301033` (
  `id` varchar(255) NOT NULL,
  `nama_artikel_2257301033` varchar(255) NOT NULL,
  `kategori_2257301033` text NOT NULL,
  `status_artikel_2257301033` enum('aktif','tidakaktif') NOT NULL,
  `gambar_2257301033` varchar(255) NOT NULL,
  `tanggal_2257301033` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_2257301033`
--

INSERT INTO `artikel_2257301033` (`id`, `nama_artikel_2257301033`, `kategori_2257301033`, `status_artikel_2257301033`, `gambar_2257301033`, `tanggal_2257301033`) VALUES
('ada0be9b-633f-11ee-9d50-9c7bef3c069f', 'dfasf', 'adffda', 'aktif', 'jhWpZHYnsRxyOhVNkUcj3gM50BAqhLstu25cZxQL.png', '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `due_date` datetime NOT NULL,
  `description` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `photo`, `due_date`, `description`, `cost`) VALUES
('33e16eae-632f-11ee-9d50-9c7bef3c069f', 'lsZgXI8bhFi41CNXQcZIxmi96zrQzA50KOUE2WUP.png', '2023-11-11 10:28:00', '<p>dfsg</p>', 3434),
('4609e5b3-68c1-11ee-9363-9c7bef3c069f', 'oQrENIrR7U93L6assqmRKg2rFFmZbx4KdcBNqKhO.jpg', '2023-10-27 12:36:00', '<p>23434</p>', 32),
('6569a353-6893-11ee-9363-9c7bef3c069f', 'PRgQYmTGPNNduAb6bXfgJ2cA01uM0nG0yRXNDicV.png', '2023-10-12 07:07:00', '<p>weqe</p>', 344),
('a04321d8-689b-11ee-9363-9c7bef3c069f', 'NQYrUvYmjmLvaKUZRvhvY0zwpVzyeGksrg7NoQ2w.png', '2023-10-12 08:06:00', '<p>w4ezhz</p>', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_2257301033`
--
ALTER TABLE `artikel_2257301033`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
