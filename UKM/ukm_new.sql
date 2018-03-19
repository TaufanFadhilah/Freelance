-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 12:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `estimations`
--

CREATE TABLE `estimations` (
  `id` int(10) UNSIGNED NOT NULL,
  `small` int(11) NOT NULL DEFAULT '0',
  `medium` int(11) NOT NULL DEFAULT '0',
  `high` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estimations`
--

INSERT INTO `estimations` (`id`, `small`, `medium`, `high`, `total`) VALUES
(1, 40, 30, 30, 100);

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukm_id` int(10) UNSIGNED NOT NULL,
  `cost` bigint(20) NOT NULL DEFAULT '0',
  `income` bigint(20) NOT NULL DEFAULT '0',
  `profit` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `ukm_id`, `cost`, `income`, `profit`) VALUES
(2, 2, 150000000, 180000000, 18000000),
(3, 3, 60000000, 75000000, 7500000),
(4, 4, 80000000, 100000000, 12500000),
(5, 5, 80000000, 100000000, 12500000),
(6, 6, 120000000, 150000000, 15000000),
(7, 7, 30000000, 40000000, 3500000),
(8, 8, 40000000, 55000000, 5000000),
(9, 9, 35000000, 45000000, 45000000),
(10, 10, 200000000, 25000000, 25000000),
(11, 11, 50000000, 65000000, 5000000),
(12, 12, 50000000, 70000000, 7000000),
(13, 13, 70000000, 95000000, 10000000),
(14, 14, 50000000, 65000000, 5000000),
(15, 15, 80000000, 100000000, 13000000),
(16, 16, 150000000, 180000000, 18000000),
(17, 17, 90000000, 125000000, 12000000),
(18, 18, 60000000, 80000000, 8000000),
(19, 19, 40000000, 50000000, 5000000),
(20, 20, 10000000, 15000000, 1500000),
(21, 21, 50000000, 60000000, 5000000),
(22, 23, 30000000, 40000000, 4000000),
(23, 24, 60000000, 80000000, 8000000),
(24, 25, 250000000, 300000000, 30000000),
(25, 26, 150000000, 180000000, 18000000),
(26, 27, 155000000, 180000000, 15000000),
(27, 28, 80000000, 100000000, 12000000),
(29, 22, 100000000, 125000000, 12000000),
(30, 29, 220000000, 240000000, 22000000),
(31, 30, 70000000, 100000000, 10000000),
(32, 31, 30000000, 40000000, 3000000),
(33, 32, 85000000, 100000000, 11000000),
(34, 33, 120000000, 150000000, 15000000),
(35, 34, 70000000, 100000000, 10000000),
(36, 35, 60000000, 70000000, 7000000),
(37, 36, 70000000, 80000000, 6000000),
(38, 37, 300000000, 400000000, 40000000),
(39, 38, 100000000, 150000000, 15000000),
(40, 39, 100000000, 130000000, 13000000),
(41, 40, 400000000, 60000000, 6000000),
(42, 41, 110000000, 130000000, 10000000),
(43, 42, 80000000, 100000000, 7500000),
(44, 43, 50000000, 60000000, 6000000),
(45, 44, 70000000, 85000000, 8000000),
(46, 45, 110000000, 125000000, 12000000),
(47, 46, 50000000, 60000000, 7000000),
(48, 47, 75000000, 90000000, 8000000),
(49, 48, 60000000, 75000000, 7000000),
(50, 49, 100000000, 120000000, 12000000),
(51, 50, 80000000, 100000000, 75000000),
(52, 51, 60000000, 80000000, 8000000);

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukm_id` int(10) UNSIGNED NOT NULL,
  `selling` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `promotion` int(11) NOT NULL DEFAULT '1',
  `hardnest` int(11) NOT NULL DEFAULT '1',
  `marketing_system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketings`
--

INSERT INTO `marketings` (`id`, `ukm_id`, `selling`, `price`, `promotion`, `hardnest`, `marketing_system`) VALUES
(3, 2, 10000000, 200000, 3, 3, 'Online'),
(4, 3, 30000000, 120000, 3, 4, 'Grosir, Ritel, Online, Pameran'),
(5, 4, 50000000, 300000, 3, 3, 'Online'),
(6, 5, 40000000, 400000, 5, 3, 'Pameran'),
(7, 6, 40000000, 200000, 4, 4, 'Grosir'),
(8, 7, 40000000, 300000, 4, 3, 'Grosir'),
(9, 8, 40000000, 200000, 4, 3, 'Grosir'),
(10, 9, 10000000, 300000, 3, 3, 'Grosir, Ritel, Online, Pameran'),
(11, 10, 40000000, 200000, 2, 3, 'Grosir'),
(12, 11, 20000000, 200000, 3, 5, 'Grosir'),
(13, 12, 30000000, 200000, 3, 3, 'Grosir'),
(14, 13, 30000000, 500000, 4, 3, 'Ritel'),
(15, 14, 50000000, 400000, 5, 3, 'Grosir'),
(16, 15, 40000000, 400000, 4, 3, 'Grosir'),
(17, 16, 10000000, 200000, 2, 2, 'Grosir'),
(18, 17, 30000000, 200000, 3, 3, 'Grosir'),
(19, 18, 50000000, 500000, 3, 3, 'Grosir'),
(20, 19, 10000000, 200000, 3, 3, 'Grosir'),
(21, 20, 50000000, 200000, 5, 5, 'Grosir'),
(22, 21, 10000000, 200000, 3, 3, 'Grosir'),
(23, 22, 40000000, 200000, 3, 1, 'Grosir'),
(24, 23, 50000000, 120000, 1, 1, 'Grosir'),
(25, 24, 10000000, 500000, 3, 3, 'Online'),
(26, 25, 20000000, 300000, 2, 2, 'Grosir'),
(27, 26, 40000000, 400000, 3, 3, 'Grosir, Online'),
(28, 27, 20000000, 200000, 2, 3, 'Grosir, Online'),
(29, 28, 10000000, 200000, 2, 2, 'Grosir, Online'),
(30, 29, 50000000, 200000, 4, 3, 'Grosir, Online'),
(31, 30, 30000000, 200000, 1, 1, 'Ritel'),
(32, 31, 50000000, 300000, 1, 4, 'Grosir, Online'),
(33, 32, 20000000, 500000, 3, 4, 'Grosir, Online'),
(34, 33, 20000000, 200000, 1, 5, 'Lain-lain'),
(35, 34, 20000000, 300000, 3, 3, 'Grosir'),
(36, 35, 10000000, 200000, 3, 2, 'Online'),
(37, 36, 10000000, 400000, 3, 3, 'Lain-lain'),
(38, 37, 50000000, 300000, 3, 3, 'Grosir, Ritel'),
(39, 38, 20000000, 300000, 2, 4, 'Grosir'),
(40, 39, 50000000, 120000, 3, 3, 'Grosir, Ritel'),
(41, 40, 10000000, 200000, 4, 5, 'Grosir'),
(42, 41, 30000000, 300000, 1, 1, 'Grosir, Online'),
(43, 42, 20000000, 200000, 2, 4, 'Online'),
(44, 43, 10000000, 200000, 3, 3, 'Grosir'),
(45, 44, 20000000, 200000, 3, 4, '-'),
(46, 45, 10000000, 300000, 5, 3, 'Grosir'),
(47, 46, 40000000, 200000, 3, 4, 'Grosir'),
(48, 47, 20000000, 200000, 3, 4, 'Grosir'),
(49, 48, 20000000, 300000, 3, 4, 'Ritel'),
(50, 49, 30000000, 300000, 3, 2, 'Grosir'),
(51, 50, 10000000, 200000, 3, 3, 'Grosir'),
(52, 51, 10000000, 300000, 3, 4, 'Grosir');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukm_id` int(10) UNSIGNED NOT NULL,
  `suplayer_increment` int(11) NOT NULL DEFAULT '1',
  `suplayer_availability` int(11) NOT NULL DEFAULT '1',
  `suplayer_min_order` int(11) NOT NULL DEFAULT '0',
  `suplayer_access` int(11) NOT NULL DEFAULT '1',
  `distributor_frequency` int(11) NOT NULL DEFAULT '0',
  `distributor_send_cost` int(11) NOT NULL DEFAULT '0',
  `distributor_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `distributor_complaint` int(11) NOT NULL DEFAULT '1',
  `distributor_accuracy` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `ukm_id`, `suplayer_increment`, `suplayer_availability`, `suplayer_min_order`, `suplayer_access`, `distributor_frequency`, `distributor_send_cost`, `distributor_area`, `distributor_complaint`, `distributor_accuracy`) VALUES
(1, 2, 5, 5, 0, 3, 199, 0, 'Seluruh Indonesia', 3, 1),
(2, 3, 4, 3, 0, 3, 200, 0, 'Seluruh Indonesia', 1, 3),
(3, 4, 5, 4, 0, 2, 150, 0, 'Seluruh Indonesia', 3, 3),
(4, 5, 5, 4, 0, 1, 200, 0, 'Jakarta', 3, 3),
(5, 6, 5, 4, 0, 2, 150, 120000000, 'Jakarta', 3, 3),
(6, 7, 5, 4, 0, 2, 100, 0, 'Jakarta', 3, 3),
(7, 8, 5, 3, 0, 1, 100, 0, 'Jakarta', 3, 3),
(8, 9, 4, 4, 0, 4, 50, 0, 'Jakarta, Sumatera', 2, 3),
(9, 10, 4, 3, 0, 4, 200, 0, 'Bandung, Jakarta', 2, 3),
(10, 11, 4, 3, 0, 2, 50, 0, 'Jakarta', 3, 5),
(11, 12, 4, 3, 0, 3, 100, 0, 'Bandung', 3, 4),
(12, 13, 2, 2, 0, 2, 50, 0, 'Bandung', 3, 3),
(13, 14, 4, 4, 0, 2, 150, 0, 'Seluruh Indonesia', 3, 3),
(14, 15, 3, 3, 0, 2, 200, 0, 'Bandung', 3, 3),
(15, 16, 3, 3, 0, 3, 50, 0, 'Bandung', 3, 3),
(16, 17, 5, 3, 0, 5, 150, 0, 'Bandung', 5, 5),
(17, 18, 1, 4, 0, 4, 250, 0, 'Jakarta', 5, 5),
(18, 19, 4, 4, 0, 4, 50, 0, 'Jakarta', 1, 3),
(19, 20, 5, 3, 0, 3, 250, 0, 'Bandung', 5, 2),
(20, 21, 5, 1, 0, 1, 50, 0, 'Jakarta', 5, 5),
(21, 22, 5, 3, 0, 3, 150, 0, 'Jakarta', 5, 2),
(22, 23, 1, 1, 0, 4, 50, 0, 'Jakarta', 1, 1),
(23, 24, 4, 3, 0, 3, 50, 0, 'Seluruh Indonesia', 4, 3),
(24, 25, 4, 3, 0, 3, 50, 0, 'Jakarta', 2, 3),
(25, 26, 4, 3, 0, 3, 150, 0, 'Bandung, Jakarta, Jawa Timur', 3, 3),
(26, 27, 3, 3, 0, 4, 150, 0, 'Bandung, Jakarta', 3, 2),
(27, 28, 5, 3, 0, 3, 50, 0, 'Jakarta', 3, 2),
(28, 29, 3, 3, 0, 3, 200, 0, 'Bandung, Jakarta', 1, 5),
(29, 30, 5, 5, 0, 5, 150, 0, 'Bandung, Jakarta', 5, 2),
(30, 31, 1, 1, 0, 5, 250, 0, 'Bandung', 1, 1),
(31, 32, 5, 3, 0, 3, 50, 0, 'Bandung', 1, 3),
(32, 33, 5, 3, 0, 1, 150, 0, 'Bandung', 3, 2),
(33, 34, 4, 3, 0, 3, 200, 0, 'Seluruh Indonesia', 2, 3),
(34, 35, 4, 2, 0, 3, 50, 0, 'Jakarta', 3, 3),
(35, 36, 4, 4, 0, 3, 150, 0, 'Jakarta', 5, 5),
(36, 37, 4, 4, 0, 4, 200, 0, 'Seluruh Indonesia', 2, 3),
(37, 38, 4, 3, 0, 2, 200, 0, 'Seluruh Indonesia', 2, 3),
(38, 39, 4, 3, 0, 2, 200, 0, 'Bandung, Jakarta', 2, 3),
(39, 40, 5, 3, 0, 3, 50, 0, 'Bandung, Jakarta', 3, 3),
(40, 41, 1, 1, 0, 1, 50, 0, 'Seluruh Indonesia', 1, 1),
(41, 42, 4, 2, 0, 3, 50, 0, 'Jakarta', 3, 3),
(42, 43, 5, 3, 0, 3, 50, 0, 'Jakarta', 3, 3),
(43, 44, 5, 5, 0, 3, 50, 0, 'Bandung', 3, 5),
(44, 45, 4, 3, 0, 3, 100, 0, 'Bandung', 4, 3),
(45, 46, 4, 3, 0, 3, 50, 0, 'Jakarta', 2, 4),
(46, 47, 5, 5, 0, 3, 50, 0, 'Jakarta', 5, 3),
(47, 48, 3, 2, 0, 2, 100, 0, 'Jakarta', 3, 3),
(48, 49, 4, 3, 0, 2, 50, 0, 'Jakarta', 3, 3),
(49, 50, 4, 3, 0, 3, 50, 0, 'Jakarta', 3, 3),
(50, 51, 4, 2, 0, 1, 50, 0, 'Seluruh Indonesia', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE `productions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukm_id` int(10) UNSIGNED NOT NULL,
  `cost` int(11) NOT NULL DEFAULT '0',
  `labor_cost` int(11) NOT NULL DEFAULT '0',
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `total_machine` int(11) DEFAULT '0',
  `competence` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productions`
--

INSERT INTO `productions` (`id`, `ukm_id`, `cost`, `labor_cost`, `method`, `total_machine`, `competence`) VALUES
(1, 2, 46000, 0, '12 Guide', 15, 2),
(2, 3, 70000, 60000, '12 Guide', 6, 3),
(3, 4, 75000, 50000, '12 Guide', 8, 3),
(4, 5, 100000, 50000, '12 Guide', 6, 3),
(5, 6, 70000, 50000, '12 Guide', 12, 5),
(6, 7, 75000, 50000, '12 Guide', 3, 4),
(7, 8, 75000, 75000, '12 Guide', 3, 3),
(8, 9, 70000, 0, '12 Guide', 3, 3),
(9, 10, 0, 100000, '12 Guide', 20, 3),
(10, 11, 75000, 60000, '12 Guide', 5, 4),
(11, 12, 75000, 75000, '12 Guide', 5, 3),
(12, 13, 95000, 85000, '12 Guide', 7, 4),
(13, 14, 0, 75000, '12 Guide', 5, 5),
(14, 15, 75000, 85000, '12 Guide', 8, 3),
(15, 16, 0, 0, '12 Guide', 15, 3),
(16, 17, 0, 40000, '12 Guide', 0, 1),
(17, 18, 70000, 45000, '12 Guide', 4, 4),
(18, 19, 65000, 50000, '12 Guide', 1, 5),
(19, 20, 65000, 50000, '12 Guide', 5, 5),
(20, 21, 70000, 45000, '12 Guide', 10, 2),
(21, 22, 0, 0, '12 Guide', 3, 1),
(22, 23, 70000, 150000, '12 Guide', 6, 3),
(23, 24, 70000, 40000, '12 Guide', 25, 3),
(24, 25, 72000, 80000, '12 Guide', 15, 3),
(25, 26, 66000, 0, '7 Guide, 12 Guide, Brother', 15, 4),
(26, 27, 66000, 0, '7 Guide, 12 Guide, Brother', 15, 4),
(27, 28, 70000, 0, '12 Guide, Brother', 8, 4),
(28, 29, 70000, 0, '7 Guide, 12 Guide, Brother', 17, 3),
(29, 30, 70000, 50000, '12 Guide', 7, 2),
(30, 31, 0, 0, '12 Guide', 3, 1),
(31, 32, 0, 30000, '12 Guide', 8, 3),
(32, 33, 70000, 110000, '12 Guide', 12, 4),
(33, 34, 0, 0, '12 Guide', 7, 3),
(34, 35, 75000, 60000, '12 Guide', 6, 5),
(35, 36, 48000, 50000, '12 Guide', 6, 2),
(36, 37, 60000, 70000, '12 Guide, Brother, Interesia', 30, 3),
(37, 38, 70000, 60000, '7 Guide, 12 Guide', 10, 3),
(38, 39, 70000, 50000, '12 Guide', 10, 3),
(39, 40, 70000, 50000, '12 Guide', 4, 4),
(40, 41, 44000, 40000, '7 Guide, 12 Guide, Brother', 10, 1),
(41, 42, 60000, 0, '12 Guide', 8, 3),
(42, 43, 48000, 50000, '12 Guide', 5, 5),
(43, 44, 75000, 50000, '12 Guide', 7, 4),
(44, 45, 70000, 50000, '12 Guide', 11, 3),
(45, 46, 70000, 0, '12 Guide', 5, 3),
(46, 47, 70000, 50000, '12 Guide', 7, 4),
(47, 48, 70000, 50000, '12 Guide', 6, 4),
(48, 49, 70000, 50000, '12 Guide', 10, 3),
(49, 50, 70000, 45000, '12 Guide', 7, 4),
(50, 51, 0, 45000, '12 Guide', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UKM/default.png',
  `establish` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `name`, `address`, `category`, `created_at`, `updated_at`, `photo`, `establish`) VALUES
(2, 'TOKO RAJUT AMEL', 'JL. Binang Jati no. 126', 1, NULL, '2018-03-19 06:55:49', 'UKM/default.png', 2000),
(3, 'ADILLA MECCA', 'JL. Binang Jati no. 124 B', 1, NULL, '2018-03-19 06:56:17', 'UKM/default.png', 2015),
(4, 'E-JAYA COLLECTION', 'JL. Binang Jatri no. 6', 2, NULL, '2018-03-19 07:01:48', 'UKM/default.png', 1998),
(5, 'KARIMAKE', 'JL. Sentra Rajut Biru Gg menit no. 28', 1, NULL, '2018-03-19 07:06:19', 'UKM/default.png', 2005),
(6, 'A.B KUIT', 'Jl. Binang Jati no. 25', 1, NULL, '2018-03-19 07:09:50', 'UKM/default.png', 1998),
(7, 'NA COLLECTION', 'JL. Binang Jati', 1, NULL, '2018-03-19 07:13:42', 'UKM/default.png', 1999),
(8, 'DEDE', 'JL. Binang Jati', 1, NULL, '2018-03-19 07:27:41', 'UKM/default.png', 2003),
(9, 'WANINA.CLOTH', 'Jl. Binang Jati no. 9 RT 06/05', 1, NULL, '2018-03-19 07:34:37', 'UKM/default.png', 2012),
(10, 'AYU COLLECTION', 'JL. Binang Jati no. 129 RT 06/RW 05', 3, NULL, '2018-03-19 07:40:43', 'UKM/default.png', 1998),
(11, 'CIAMIU', 'JL. Binang Jati', 1, NULL, '2018-03-19 07:44:07', 'UKM/default.png', 2000),
(12, 'DN COLLECTION', 'Jl. Binang Jati Gg mesti 2', 1, NULL, '2018-03-19 07:46:42', 'UKM/default.png', 2003),
(13, 'SAVEN GAUGE', 'Jl. Babakan Jati', 1, NULL, '2018-03-19 07:49:22', 'UKM/default.png', 2000),
(14, 'Go-Bank Colletion', 'Jl. Babakan Jati', 1, NULL, '2018-03-19 07:51:32', 'UKM/default.png', 2000),
(15, 'JASMINE COLLECTION', 'Jl. Binang Jati', 1, NULL, '2018-03-19 07:55:36', 'UKM/default.png', 2002),
(16, 'WAVICK, MS. COLLECTION', 'Jl . Binang Jati Gg Kurnia 5', 2, NULL, '2018-03-19 08:03:10', 'UKM/default.png', 2009),
(17, 'LUIS COLLECTION', 'Jl. Binang Jati Gg nafa no. 11/128B RT 07/04', 1, NULL, NULL, 'UKM/default.png', 2011),
(18, 'DANS COLLECTION', 'JL. Binang Jati Gg kurnia 6', 1, NULL, NULL, 'UKM/default.png', 2016),
(19, 'ARIE COLLECTION', 'Jl Binang Jati', 1, NULL, NULL, 'UKM/default.png', 2015),
(20, 'DEDI SUWAN DANA RASUT', 'JL. Binang Jati RT 07/04', 1, NULL, NULL, 'UKM/default.png', 2016),
(21, 'COLLECTION', 'Binong Jati RT 03/04', 1, NULL, NULL, 'UKM/default.png', 2016),
(22, 'ABE SWEATER', 'JL. Binong Jati no. 14 Gg Kurnia 5 RT 06/05 Bandung', 1, NULL, NULL, 'UKM/default.png', 2004),
(23, 'ERNA', 'Binong Jati Gg 5', 1, NULL, NULL, 'UKM/default.png', 2016),
(24, 'HS COLLECTION', 'JL. Binong Jati Gg mukti no. 48, Bandung RT 01/04', 2, NULL, NULL, 'UKM/default.png', 2001),
(25, 'NUG\'S COLLECTION', 'JL. Binong Jati no. 30', 3, NULL, NULL, 'UKM/default.png', 2003),
(26, 'ANUGRAH COLLECTION', 'JL. Binong Jati no. 86 RT 01/04', 2, NULL, NULL, 'UKM/default.png', 2005),
(27, 'ANDONO', 'JL. Binong Jati RT 01/04', 2, NULL, NULL, 'UKM/default.png', 2010),
(28, 'AZHAR COLLECTION', 'Babakan Jati 4', 1, NULL, NULL, 'UKM/default.png', 2010),
(29, 'TIARA SWEATER', 'JL. Binong Jati Gg Ripah 01/04 no. 410', 3, NULL, NULL, 'UKM/default.png', 2006),
(30, 'INDUSTRI RAJUTAN', 'Gg Nata no. 99 RT 08/04, Binong Jati', 1, NULL, NULL, 'UKM/default.png', 1998),
(31, 'Yona Collection', 'Jl. Binang Jati no. 5 RT 06/05', 1, NULL, NULL, 'UKM/default.png', 2000),
(32, 'RAFFA COLECTION', 'JL. Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2011),
(33, 'RISSA COLECTION', 'Jl. Ibrahim adji Gg nata no. 37 RT 04/05', 2, NULL, NULL, 'UKM/default.png', 1999),
(34, 'LUI COLLECTION', 'Gg nata', 1, NULL, NULL, 'UKM/default.png', 2012),
(35, 'RINDA/RI COLLECTION', 'Jl. Ibrahim Adji Gg Masjid', 1, NULL, NULL, 'UKM/default.png', 2007),
(36, 'DIMAS COLLECTION', 'Binong Jati RT 09/04', 1, NULL, NULL, 'UKM/default.png', 2005),
(37, 'KONTA DJAYA', 'Jl Binong Jati RT 09/04', 2, NULL, NULL, 'UKM/default.png', 1990),
(38, 'ALINA', 'Jl. Binong Jati No 70/128b', 1, NULL, NULL, 'UKM/default.png', 1970),
(39, 'ALVINA FASHION', 'Jl. Binong Jati No 124 b', 1, NULL, NULL, 'UKM/default.png', 2000),
(40, 'PURI COLLECTION', 'Jl. Ibrahim Adjie Gg Masjid No 24', 1, NULL, NULL, 'UKM/default.png', 2000),
(41, 'SK 379 RAJUTAN', 'Jl. Binong Jati RT 04/06 no 10', 1, NULL, NULL, 'UKM/default.png', 2005),
(42, 'A-BEE COLLECTION', 'Jl. Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2005),
(43, 'ALIM RUGI COLECION', 'Jl Binong Jati no 105', 1, NULL, NULL, 'UKM/default.png', 2015),
(44, 'DADANG JAYA', 'Jl. Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2008),
(45, 'ADANG KOLEKSEN', 'Jl. Binong Jati', 2, NULL, NULL, 'UKM/default.png', 2008),
(46, 'ABANG COLLECTION', 'Jl. Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2000),
(47, 'RAJUTAN BINONG JATI', 'Jl. Ibrahim Adji Gg Masjid', 1, NULL, NULL, 'UKM/default.png', 2008),
(48, 'Jeihan Collection', 'Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2016),
(49, 'ONEDA RAJUT COLLECTION', 'Jl. Binong Jati Gg Saad II RT 05.04', 1, NULL, NULL, 'UKM/default.png', 2004),
(50, 'Rizqy Collection', 'Jl. Binong Jati', 1, NULL, NULL, 'UKM/default.png', 2001),
(51, 'ASPHY DESIGN', 'Jl. Binong Jati RT 03/04', 1, NULL, NULL, 'UKM/default.png', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@ukm.id', '$2y$10$XfbBzOG8D9jiz37aYFc6PetZ5tmlswumX5.FI5Y1u7Ur.FxPuGZkW', NULL, '2018-03-19 06:31:14', '2018-03-19 06:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `value_proporsitions`
--

CREATE TABLE `value_proporsitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukm_id` int(10) UNSIGNED NOT NULL,
  `creativity` int(11) NOT NULL DEFAULT '1',
  `quality` int(11) NOT NULL DEFAULT '1',
  `design` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `value_proporsitions`
--

INSERT INTO `value_proporsitions` (`id`, `ukm_id`, `creativity`, `quality`, `design`) VALUES
(1, 2, 3, 4, 3),
(2, 3, 5, 3, 5),
(3, 4, 2, 2, 2),
(4, 5, 2, 2, 2),
(5, 6, 2, 3, 2),
(6, 7, 2, 2, 3),
(7, 8, 2, 2, 2),
(8, 9, 4, 3, 3),
(9, 10, 3, 3, 3),
(10, 11, 4, 3, 2),
(11, 12, 3, 3, 3),
(12, 13, 4, 4, 4),
(13, 14, 4, 3, 4),
(14, 15, 2, 5, 2),
(15, 16, 3, 3, 3),
(16, 17, 3, 3, 5),
(17, 18, 5, 5, 5),
(18, 19, 3, 4, 3),
(19, 20, 5, 5, 5),
(20, 21, 5, 5, 5),
(21, 22, 2, 4, 3),
(22, 23, 1, 1, 1),
(23, 24, 4, 4, 4),
(24, 25, 3, 3, 3),
(25, 26, 3, 3, 3),
(26, 27, 3, 3, 4),
(27, 28, 2, 4, 2),
(28, 29, 3, 3, 3),
(29, 30, 2, 3, 2),
(30, 31, 1, 1, 1),
(31, 32, 3, 5, 3),
(32, 33, 3, 3, 3),
(33, 34, 4, 4, 4),
(34, 35, 3, 4, 4),
(35, 36, 5, 1, 3),
(36, 37, 3, 4, 3),
(37, 38, 3, 3, 3),
(38, 39, 3, 3, 3),
(39, 40, 4, 5, 5),
(40, 41, 1, 1, 1),
(41, 42, 3, 3, 3),
(42, 43, 5, 5, 5),
(43, 44, 2, 3, 3),
(44, 45, 3, 3, 3),
(45, 46, 4, 3, 3),
(46, 47, 2, 3, 3),
(47, 48, 3, 4, 4),
(48, 49, 3, 3, 3),
(49, 50, 3, 3, 4),
(50, 51, 3, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estimations`
--
ALTER TABLE `estimations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finances_ukm_id_foreign` (`ukm_id`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marketings_ukm_id_foreign` (`ukm_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partners_ukm_id_foreign` (`ukm_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productions_ukm_id_foreign` (`ukm_id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `value_proporsitions`
--
ALTER TABLE `value_proporsitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value_proporsitions_ukm_id_foreign` (`ukm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estimations`
--
ALTER TABLE `estimations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `value_proporsitions`
--
ALTER TABLE `value_proporsitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finances`
--
ALTER TABLE `finances`
  ADD CONSTRAINT `finances_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marketings`
--
ALTER TABLE `marketings`
  ADD CONSTRAINT `marketings_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `productions_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `value_proporsitions`
--
ALTER TABLE `value_proporsitions`
  ADD CONSTRAINT `value_proporsitions_ukm_id_foreign` FOREIGN KEY (`ukm_id`) REFERENCES `ukm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
