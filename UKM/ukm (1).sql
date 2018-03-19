-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 07:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm`
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
(6, 6, 50000000, 100000000, 10000000),
(7, 7, 15000000, 20000000, 5000000),
(8, 8, 20000000, 10000000, 5000000),
(9, 9, 0, 0, 0),
(10, 10, 40000000, 20000000, 15000000),
(11, 11, 15000000, 20000000, 22000000),
(12, 12, 100000000, 200000000, 5000000),
(13, 13, 0, 0, 0),
(14, 14, 3000000, 50000000, 47000000),
(15, 15, 15000000, 10000000, 5000000),
(16, 16, 50000000, 200000000, 15000000),
(17, 17, 50000, 100000, 10000000),
(18, 18, 45000000, 40000000, 5000000),
(19, 19, 30000000, 45000000, 10000000),
(20, 20, 5000000, 15000000, 10000000),
(21, 21, 5000000, 50000000, 5000000),
(22, 22, 5000000, 40000000, 10000000),
(23, 23, 5000000, 20000000, 15000000),
(24, 24, 25000000, 30000000, 5000000),
(25, 25, 10000000, 25000000, 10000000),
(26, 26, 10000000, 15000000, 5000000),
(27, 27, 15000000, 35000000, 5000000),
(28, 28, 15000000, 100000000, 10000000),
(29, 29, 10000000, 50000000, 5000000),
(30, 30, 5000000, 50000000, 5000000),
(32, 32, 50000000, 70000000, 5000000),
(33, 33, 10000000, 25000000, 5000000),
(34, 34, 5000000, 50000000, 5000000),
(35, 35, 5000000, 10000000, 5000000),
(36, 36, 16192500, 52800000, 5000000),
(37, 37, 80000000, 120000000, 5000000),
(38, 38, 5000000, 20000000, 5000000),
(39, 39, 5000000, 30000000, 5000000),
(40, 40, 5000000, 10000000, 5000000),
(41, 41, 5000000, 10000000, 5000000),
(42, 42, 30000000, 20000000, 5000000),
(43, 43, 5000000, 30000000, 10000000),
(45, 45, 20000000, 25000000, 5000000),
(46, 46, 8000000, 50000000, 10000000),
(47, 47, 140000000, 150000000, 5000000),
(48, 48, 5000000, 15000000, 10000000),
(49, 49, 30000000, 5000000, 5000000),
(50, 50, 20000000, 25000000, 5000000),
(51, 51, 6000000, 2000000, 2000000),
(52, 52, 5000000, 3000000, 3000000);

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
(1, 6, 334, 120000, 3, 3, 'Online'),
(2, 7, 667, 300000, 2, 3, 'Grosir, Online'),
(3, 8, 84, 120000, 2, 2, 'Grosir'),
(4, 9, 250, 200000, 4, 3, 'Grosir, Online'),
(5, 10, 150, 200000, 1, 1, 'Ritel'),
(6, 11, 223, 90000, 3, 4, 'Grosir'),
(7, 12, 100, 200000, 1, 5, '-'),
(8, 13, 67, 300000, 3, 3, 'Grosir'),
(9, 14, 50, 200000, 3, 2, 'Online'),
(10, 15, 25, 400000, 2, 1, '-'),
(11, 16, 334, 300000, 3, 3, 'Grosir, Online'),
(12, 17, 134, 300000, 2, 4, 'Grosir'),
(13, 18, 50, 200000, 2, 4, 'Online'),
(14, 19, 50, 200000, 3, 3, 'Grosir'),
(15, 20, 100, 200000, 3, 4, '-'),
(16, 21, 34, 300000, 4, 3, 'Grosir'),
(17, 22, 200, 200000, 3, 4, 'Grosir'),
(18, 23, 100, 200000, 3, 4, 'Grosir'),
(19, 24, 100, 300000, 3, 2, 'Grosir'),
(20, 25, 50, 200000, 3, 3, 'Grosir'),
(21, 26, 34, 300000, 3, 4, 'Grosir'),
(22, 27, 34, 300000, 3, 4, 'Grosi, Online, Ritel, Pameran'),
(23, 28, 250, 200000, 2, 4, 'Grosir'),
(24, 29, 100, 400000, 5, 3, 'Pameran'),
(25, 30, 200, 200000, 4, 4, 'Grosir'),
(27, 32, 416, 120000, 3, 3, 'Grosir, Online, Ritel'),
(28, 33, 50, 200000, 4, 5, 'Grosir'),
(29, 34, 134, 300000, 4, 3, 'Grosir'),
(30, 35, 50, 200000, 4, 4, 'Grosir'),
(31, 36, 34, 300000, 3, 4, 'Grosi, Online, Ritel, Pameran'),
(32, 37, 200, 200000, 2, 3, 'Grosir'),
(33, 38, 100, 200000, 3, 5, 'Grosir'),
(34, 39, 150, 200000, 3, 3, 'Grosir'),
(35, 40, 50, 200000, 5, 5, 'Grosir'),
(36, 41, 50, 200000, 3, 3, 'Grosir'),
(37, 42, 200, 200000, 3, 1, 'Grosir'),
(38, 43, 60, 500000, 4, 3, 'Ritel'),
(40, 45, 34, 300000, 3, 3, 'Online'),
(41, 46, 100, 400000, 4, 3, 'Grosir'),
(42, 47, 67, 300000, 2, 2, 'Grosir'),
(43, 48, 100, 400000, 3, 3, 'Grosir, Online'),
(44, 49, 50, 200000, 1, 1, 'Grosir'),
(45, 50, 50, 200000, 2, 2, 'Grosir'),
(46, 51, 134, 60000, 3, 3, 'Grosir'),
(47, 52, 50, 200000, 3, 3, 'Grosir');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_05_065456_create_u_k_ms_table', 1),
(4, '2017_09_05_065510_create_marketings_table', 1),
(5, '2017_09_05_065536_create_productions_table', 1),
(6, '2017_09_05_065548_create_finances_table', 1),
(7, '2017_09_05_094641_addPhotoColumn', 1),
(8, '2017_09_07_100338_create_estimations_table', 1),
(9, '2017_09_12_151047_updateMarketing', 1),
(10, '2017_09_12_155140_updateProduction', 1),
(11, '2017_09_12_160348_create_value__proporsitions_table', 1),
(12, '2017_09_12_162359_create_partners_table', 1),
(13, '2017_11_01_051739_dropColumnUKM', 2);

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
(1, 6, 5, 5, 0, 3, 200, 0, 'Seluruh Indonesia', 3, 1),
(2, 7, 3, 3, 0, 4, 150, -1, 'Bandung, Jakarta', 3, 2),
(3, 8, 5, 3, 0, 3, 50, 0, 'Jakarta', 3, 2),
(4, 9, 3, 3, 0, 3, 200, 0, 'Bandung, Jakarta', 1, 5),
(5, 10, 5, 5, 0, 5, 150, 24999, 'Bandung', 5, 2),
(6, 11, 5, 3, 0, 3, 50, 0, 'Bandung', 1, 3),
(7, 12, 5, 3, 0, 1, 150, 70, 'Bandung', 3, 2),
(8, 13, 4, 3, 0, 3, 200, 0, '-', 2, 3),
(9, 14, 4, 2, 0, 3, 50, 65000, 'Jakarta', 3, 3),
(10, 15, 4, 4, 0, 2, 150, 0, 'Jakarta', 5, 5),
(11, 16, 4, 4, 0, 4, 200, 60000, 'Seluruh Indonesia', 2, 3),
(12, 17, 4, 3, 0, 2, 200, 60000, '-', 2, 3),
(13, 18, 4, 2, 0, 3, 50, 50000, 'Jakarta', 3, 3),
(14, 19, 5, 3, 0, 3, 50, 0, 'Jakarta', 3, 3),
(15, 20, 5, 5, 0, 3, 50, 0, 'Bandung', 3, 5),
(16, 21, 4, 3, 0, 3, 100, 0, 'Bandung', 4, 3),
(17, 22, 4, 3, 0, 3, 50, 50000, 'Jakarta', 2, 4),
(18, 23, 5, 5, 0, 3, 50, 0, 'Jakarta', 3, 5),
(19, 24, 4, 3, 0, 2, 50, 500000, 'Jakarta', 3, 3),
(20, 25, 4, 3, 0, 3, 50, 0, 'Jakarta', 3, 3),
(21, 26, 4, 2, 0, 1, 50, 0, 'Jakarta, Sulawesi', 3, 2),
(22, 27, 4, 3, 0, 3, 50, 125000, 'Solo', 1, 3),
(23, 28, 5, 4, 0, 2, 200, 50000, 'Bandung, Jakarta', 3, 3),
(24, 29, 5, 4, 0, 1, 200, 50000, 'Jakarta', 3, 3),
(25, 30, 5, 4, 0, 2, 150, 100000, 'Jakarta', 3, 3),
(27, 32, 4, 3, 0, 2, 200, 50000, 'Bandung, Jakarta', 3, 3),
(28, 33, 5, 3, 0, 3, 50, 0, 'Bandung, Jakarta', 3, 3),
(29, 34, 5, 4, 0, 2, 100, 50000, 'Bandung, Jakarta', 3, 3),
(30, 35, 5, 3, 0, 1, 100, 75000, 'Jakarta', 3, 3),
(31, 36, 4, 4, 0, 4, 50, 0, 'Jakarta, Sumatera', 2, 3),
(32, 37, 4, 3, 0, 4, 200, 0, 'Bandung, Jakarta, Malaysia', 2, 3),
(33, 38, 4, 3, 0, 2, 50, 50000, 'Jakarta', 3, 5),
(34, 39, 4, 3, 0, 1, 100, 75000, 'Bandung', 3, 4),
(35, 40, 5, 3, 0, 3, 50, 75000, 'Bandung', 5, 2),
(36, 41, 5, 1, 0, 3, 50, 75000, 'Jakarta', 5, 5),
(37, 42, 5, 3, 0, 5, 150, 50000, 'Jakarta', 5, 2),
(38, 43, 2, 2, 0, 2, 50, 150000, 'Bandung', 3, 3),
(40, 45, 4, 3, 0, 3, 50, 0, 'Seluruh Indonesia', 4, 3),
(41, 46, 3, 3, 0, 2, 200, 100000, 'Bandung', 3, 3),
(42, 47, 4, 3, 0, 3, 50, 70000, 'Jakarta', 2, 3),
(43, 48, 4, 3, 0, 3, 150, 60000, 'Bandung, Jakarta, Jawa Timur & Jawa Tengah', 3, 3),
(44, 49, 5, 5, 0, 5, 150, 0, 'Bandung', 3, 2),
(45, 50, 4, 3, 0, 3, 50, 0, 'Bandung', 3, 3),
(46, 51, 1, 4, 0, 3, 667, 0, 'Jakarta', 5, 5),
(47, 52, 4, 4, 0, 3, 50, 45000, 'Jakarta', 1, 3);

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
(1, 6, 122000, 0, '12 Guide', 10, 5),
(2, 7, 66000, 0, '7 Guide, 12 Guide', 20, 3),
(3, 8, 70000, 0, '12 Guide, Brother', 10, 4),
(4, 9, 183000, 0, '7 Guide, 12 Guide, Interesia', 22, 3),
(5, 10, 70000, 50000, '12 Guide', 10, 1),
(6, 11, 0, 30000, '12 Guide', 8, 5),
(7, 12, 112000, 110000, '12 Guide', 12, 5),
(8, 13, 0, 0, '-', 10, 5),
(9, 14, 75000, 60000, '12 Guide', 7, 5),
(10, 15, 48000, 50000, '12 Guide', 12, 5),
(11, 16, 60000, 70000, '12 Guide, Brother, Interesia', 20, 5),
(12, 17, 70000, 60000, '7 Guide, 12 Guide', 10, 5),
(13, 18, 60000, 0, '12 Guide', 8, 5),
(14, 19, 40000, 50000, '12 Guide', 5, 5),
(15, 20, 75000, 50000, '12 Guide', 7, 5),
(16, 21, 70000, 50000, '12 Guide', 11, 5),
(17, 22, 70000, 0, '12 Guide', 5, 5),
(18, 23, 70000, 50000, '12 Guide', 7, 5),
(19, 24, 70000, 50000, '12 Guide', 10, 5),
(20, 25, 70000, 45000, '12 Guide', 7, 5),
(21, 26, 0, 45000, '12 Guide', 10, 5),
(22, 27, 70000, 60000, '12 Guide', 9, 5),
(23, 28, 120000, 50000, '12 Guide', 20, 5),
(24, 29, 100000, 50000, '12 Guide', 10, 5),
(25, 30, 70000, 0, '12 Guide', 10, 5),
(27, 32, 195000, 50000, '12 Guide', 10, 5),
(28, 33, 144000, 50000, '12 Guide', 4, 5),
(29, 34, 75000, 50000, 'Brother', 10, 5),
(30, 35, 75000, 75000, '12 Guide', 3, 5),
(31, 36, 160000, 0, '12 Guide', 4, 5),
(32, 37, 0, 100000, '12 Guide, Brother', 20, 5),
(33, 38, 75000, 60000, '12 Guide', 10, 5),
(34, 39, 75000, 75000, '12 Guide', 5, 5),
(35, 40, 65000, 50000, '12 Guide', 1, 5),
(36, 41, 65000, 50000, '12 Guide', 6, 5),
(37, 42, 137000, 45000, '12 Guide', 10, 5),
(38, 43, 95000, 85000, '7 Guide', 5, 5),
(40, 45, 207000, 150000, '12 Guide', 3, 5),
(41, 46, 75000, 85000, '12 Guide', 8, 5),
(42, 47, 70000, 40000, '12 Guide', 20, 5),
(43, 48, 175000, 80000, '12 Guide', 13, 5),
(44, 49, 0, 40000, '12 Guide', 9, 5),
(45, 50, 133500, 0, '12 Guide', 18, 5),
(46, 51, 0, 15000, '12 Guide', 6, 5),
(47, 52, 70000, 45000, '12 Guide', 6, 5);

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
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establish` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `name`, `address`, `category`, `created_at`, `updated_at`, `photo`, `establish`) VALUES
(6, 'Toko Rajut Amel', 'Jl. Binong Jati no.126', 1, '2017-11-13 23:48:29', '2017-11-15 00:41:56', 'UKM/default.png', 2000),
(7, 'Andono', 'Jl. Binong Jati RT 01 Rw 04', 2, '2017-11-14 00:00:00', '2017-11-14 00:00:00', 'UKM/default.png', 2010),
(8, 'Azhar Collection', 'Babakan Jati 1v', 1, '2017-11-14 00:11:31', '2017-11-14 00:11:31', 'UKM/default.png', 2010),
(9, 'Tiara Sweater', 'Jl. Binong Jati Gg Ripah 01/04 no : 41D', 3, '2017-11-14 00:18:56', '2017-11-14 00:18:56', 'UKM/default.png', 2006),
(10, 'Industri Rajutan', 'GG Nata No. 99 RT 08/04 Binong Jati', 1, '2017-11-14 00:28:47', '2017-11-14 00:28:47', 'UKM/default.png', 1998),
(11, 'Raffa Collection', 'Jl. Binong Jati', 1, '2017-11-14 00:34:01', '2017-11-14 00:34:01', 'UKM/default.png', 2010),
(12, 'Rissa Collection', 'Jl Ibrahim Adji gg Nata no.37 RT 04 RW 05', 2, '2017-11-14 00:39:28', '2017-11-14 00:39:28', 'UKM/default.png', 1999),
(13, 'Lui Collection', 'GG Nata', 1, '2017-11-14 00:45:50', '2017-11-14 00:45:50', 'UKM/default.png', 2012),
(14, 'Rinda Collection', 'JL Ibrahim Adjie gg Mesjid', 1, '2017-11-14 02:18:20', '2017-11-14 02:18:20', 'UKM/default.png', 2007),
(15, 'Dimas Collection', 'Binong Jati rt 09/04', 2, '2017-11-14 02:27:03', '2017-11-14 02:27:03', 'UKM/default.png', 2005),
(16, 'Konta Djaya', 'Jalan Binong Jati RT 09/04', 2, '2017-11-14 02:32:01', '2017-11-14 02:32:01', 'UKM/default.png', 1990),
(17, 'Alina', 'Jaan Binong Jati No 70/128B', 1, '2017-11-14 02:40:34', '2017-11-14 02:40:34', 'UKM/default.png', 1963),
(18, 'A-Bee Collection', 'Jl Binong Jati', 1, '2017-11-14 02:42:18', '2017-11-14 02:42:18', 'UKM/default.png', 2005),
(19, 'Alimrugi Collection', 'Jl Binong Jati 105', 1, '2017-11-14 02:46:01', '2017-11-14 02:46:01', 'UKM/default.png', 2015),
(20, 'Dadang Jaya', 'Jl Binong Jati', 1, '2017-11-14 02:48:48', '2017-11-14 02:48:48', 'UKM/default.png', 2008),
(21, 'Adang Koleksen', 'Jl Binong Jati', 2, '2017-11-14 02:51:56', '2017-11-14 02:51:56', 'UKM/default.png', 2008),
(22, 'Abang Koleksen', 'Binong Jati', 1, '2017-11-14 02:55:54', '2017-11-14 02:55:54', 'UKM/default.png', 1960),
(23, 'Rajutan Binongjati', 'Jl. Ibrahim Adji gg Mesjid Kel. Binong', 1, '2017-11-14 02:59:49', '2017-11-14 02:59:49', 'UKM/default.png', 2008),
(24, 'One''da Rajut Collection', 'Jl. Binong Jati gg. Sa''ad II RT 05 Rw 04', 1, '2017-11-14 03:07:07', '2017-11-14 03:07:07', 'UKM/default.png', 2004),
(25, 'Rizqy Collection', 'Jl. Binong Jati', 1, '2017-11-14 03:10:47', '2017-11-14 03:10:47', 'UKM/default.png', 2001),
(26, 'Asphy Design', 'Jl Binong Jati RT 03/04 Kel. Binong', 1, '2017-11-14 03:14:03', '2017-11-14 03:14:03', 'UKM/default.png', 1999),
(27, 'Adilla Mecca', 'Jl. Binong Jati no. 124 B', 1, '2017-11-14 03:17:48', '2017-11-14 03:17:48', 'UKM/default.png', 2015),
(28, 'E-Jaya Collection', 'Jl. Binong Jati no.6', 2, '2017-11-14 03:32:44', '2017-11-14 03:32:44', 'UKM/default.png', 1998),
(29, 'Karinfike', 'Jl. Binong gg Masjid no.28', 1, '2017-11-14 03:36:36', '2017-11-14 03:36:36', 'UKM/default.png', 2005),
(30, 'AB. Kwit', 'Jl. Binong Jati no.25', 1, '2017-11-14 03:39:44', '2017-11-14 03:39:44', 'UKM/default.png', 1998),
(32, 'Alvina Fashion', 'Jl. Binong Jati no.124 B', 1, '2017-11-15 00:23:37', '2017-11-15 00:23:37', 'UKM/default.png', 2000),
(33, 'Puri Collection', 'Jl. Ibrahim Adjie gg Masjid no.24', 1, '2017-11-15 00:29:23', '2017-11-15 00:29:23', 'UKM/default.png', 0),
(34, 'Na Collection', 'Jl. Binong Jati', 1, '2017-11-15 00:47:05', '2017-11-15 00:47:05', 'UKM/default.png', 1999),
(35, 'Dede', 'Jl. Binong Jati', 1, '2017-11-15 00:50:22', '2017-11-15 00:50:22', 'UKM/default.png', 2003),
(36, 'Wanina Cloth', 'Jl. Binong Jati no.9 RT 06/06', 1, '2017-11-15 00:54:48', '2017-11-15 00:54:48', 'UKM/default.png', 2012),
(37, 'Ayu Collection', 'Jl Binong Jati no. 129 RT 06/05', 3, '2017-11-15 01:46:36', '2017-11-15 01:46:36', 'UKM/default.png', 1998),
(38, 'Ciamik', 'Jl Binong Jati', 1, '2017-11-15 01:56:08', '2017-11-15 01:56:08', 'UKM/default.png', 2000),
(39, 'DN Collection', 'Jalan Binong Jati Gang Mesjid', 1, '2017-11-15 02:00:22', '2017-11-15 02:00:22', 'UKM/default.png', 2003),
(40, 'Dedi Suwandana Rajut', 'Jl. Binong Jati RT 07/04', 1, '2017-11-15 02:00:58', '2017-11-15 02:00:58', 'UKM/default.png', 2016),
(41, 'Collection', 'Jl. Binong Jati RT 03/04', 1, '2017-11-15 02:04:59', '2017-11-15 02:04:59', 'UKM/default.png', 2016),
(42, 'Abe Sweater', 'Jl. Binong Jati No. 14 gg Kurnia RT 06/05', 1, '2017-11-15 02:09:29', '2017-11-15 02:09:29', 'UKM/default.png', 2004),
(43, 'Saven Gauge', 'Jalan Babakan Jati', 1, '2017-11-15 02:10:03', '2017-11-15 02:10:03', 'UKM/default.png', 2000),
(45, 'HS Collection', 'Jl. Binong Jati gg Mukti no.48', 2, '2017-11-15 02:14:07', '2017-11-15 02:14:07', 'UKM/default.png', 2001),
(46, 'Jamine Collector', 'Jalan Binong Jati', 1, '2017-11-15 02:16:37', '2017-11-15 02:16:37', 'UKM/default.png', 2002),
(47, 'Nugs Collection', 'Jl. Binong Jati no.30', 3, '2017-11-15 02:18:18', '2017-12-11 01:42:21', 'UKM/default.png', 2003),
(48, 'Anugrah Collection', 'Jl. Binong Jati no.86 RT 01/04', 2, '2017-11-15 02:21:02', '2017-11-15 02:21:02', 'UKM/default.png', 2005),
(49, 'Luis Collection', 'Jalan Binong Jati Gg Nata No 11/128B RT07/04', 1, '2017-11-15 02:21:32', '2017-11-15 02:21:32', 'UKM/default.png', 2011),
(50, 'Wavick Ms. Collection', 'Jl. Binong Jati gg Kurnia V', 2, '2017-11-15 02:24:48', '2017-11-15 02:24:48', 'UKM/default.png', 2009),
(51, 'Dans Collection', 'Jalan Binong Jati Gg Kurnia 6', 1, '2017-11-15 02:25:55', '2017-11-15 02:25:55', 'UKM/default.png', 2016),
(52, 'Arie Collection', 'Jalan Binong Jati', 1, '2017-11-15 02:32:11', '2017-11-15 02:32:11', 'UKM/default.png', 2015);

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
(1, 'Admin', 'admin@admin.com', '$2y$10$TEtES0dUi8ZZaS9GFT.MPe3h1.oGYRNZYxBSsNik5CBZSfrTpojO6', NULL, '2017-10-31 02:44:26', '2017-10-31 02:44:26');

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
(1, 6, 3, 4, 3),
(2, 7, 3, 3, 4),
(3, 8, 2, 4, 2),
(4, 9, 3, 3, 3),
(5, 10, 2, 3, 2),
(6, 11, 3, 5, 3),
(7, 12, 3, 3, 3),
(8, 13, 4, 4, 4),
(9, 14, 3, 4, 4),
(10, 15, 5, 1, 3),
(11, 16, 3, 4, 3),
(12, 17, 3, 3, 3),
(13, 18, 3, 3, 3),
(14, 19, 5, 5, 5),
(15, 20, 2, 3, 3),
(16, 21, 3, 3, 3),
(17, 22, 4, 3, 3),
(18, 23, 2, 3, 3),
(19, 24, 3, 3, 3),
(20, 25, 3, 3, 4),
(21, 26, 3, 3, 3),
(22, 27, 5, 3, 5),
(23, 28, 2, 2, 2),
(24, 29, 2, 2, 2),
(25, 30, 2, 3, 2),
(27, 32, 3, 3, 3),
(28, 33, 4, 5, 5),
(29, 34, 2, 2, 3),
(30, 35, 2, 2, 2),
(31, 36, 4, 3, 3),
(32, 37, 3, 3, 3),
(33, 38, 4, 3, 2),
(34, 39, 3, 3, 3),
(35, 40, 5, 5, 5),
(36, 41, 5, 5, 5),
(37, 42, 2, 4, 3),
(38, 43, 4, 4, 4),
(40, 45, 4, 4, 4),
(41, 46, 2, 5, 2),
(42, 47, 3, 3, 3),
(43, 48, 3, 3, 3),
(44, 49, 3, 3, 3),
(45, 50, 3, 3, 3),
(46, 51, 5, 5, 5),
(47, 52, 3, 4, 3);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `value_proporsitions`
--
ALTER TABLE `value_proporsitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
