-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 09:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exari`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageid` int(10) UNSIGNED NOT NULL,
  `mlisting_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageid`, `mlisting_id`, `created_at`, `updated_at`) VALUES
(19, 19, '2019-04-10 01:29:44', '2019-04-10 01:29:44'),
(20, 20, '2019-04-10 05:16:17', '2019-04-10 05:16:17'),
(21, 21, '2019-04-10 05:57:22', '2019-04-10 05:57:22'),
(22, 22, '2019-04-10 06:07:50', '2019-04-10 06:07:50'),
(23, 23, '2019-04-10 06:12:01', '2019-04-10 06:12:01'),
(24, 24, '2019-04-10 06:20:58', '2019-04-10 06:20:58'),
(25, 25, '2019-04-10 07:19:19', '2019-04-10 07:19:19'),
(26, 26, '2019-04-10 07:51:13', '2019-04-10 07:51:13'),
(27, 27, '2019-04-10 07:57:32', '2019-04-10 07:57:32'),
(28, 27, '2019-04-10 07:58:33', '2019-04-10 07:58:33'),
(29, 28, '2019-04-10 23:16:25', '2019-04-10 23:16:25'),
(30, 29, '2019-04-10 23:27:43', '2019-04-10 23:27:43'),
(31, 30, '2019-04-10 23:31:53', '2019-04-10 23:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `mcalendars`
--

CREATE TABLE `mcalendars` (
  `id` int(11) NOT NULL,
  `schedule_start` datetime DEFAULT NULL,
  `schedule_end` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `schedule_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcalendars`
--

INSERT INTO `mcalendars` (`id`, `schedule_start`, `schedule_end`, `user_id`, `schedule_name`, `schedule_description`, `created_at`, `updated_at`) VALUES
(4, '2019-03-01 09:40:53', '2019-03-02 09:42:14', 4, 'Jadwal Marketing Surabaya', 'Jadwal Marketing Surabaya', '2019-02-28 19:42:21', '2019-02-28 19:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `mdevelopers`
--

CREATE TABLE `mdevelopers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delet` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mdevelopers`
--

INSERT INTO `mdevelopers` (`id`, `nama`, `kontak`, `email`, `delet`, `created_at`, `updated_at`) VALUES
(1, 'Ciputri', '082233857520', 'ciputri@gmail.com', 0, NULL, NULL),
(2, 'Vue', '082283949393', 'vue@gmail.com', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2019_01_19_0000001_create_mpolicies_table', 1),
(11, '2019_01_19_0000002_create_mroles_table', 1),
(12, '2019_01_19_0000007_create_mdevelopers_table', 1),
(13, '2019_01_19_0000009_create_users_table', 1),
(14, '2019_01_19_0000011_create_mlistings_table', 1),
(15, '2019_01_19_0000012_create_mtransactions_table', 1),
(16, '2019_01_19_0000013_create_images_table', 1),
(17, '2019_01_19_0000015_create_mleads_table', 1),
(18, '2019_01_19_0000017_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mleads`
--

CREATE TABLE `mleads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delet` int(11) NOT NULL DEFAULT '0',
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mleads`
--

INSERT INTO `mleads` (`id`, `name`, `contact`, `email`, `tipe`, `delet`, `deskripsi`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Farna', '08218499234', 'farclose@gmail.com', '1', 0, 'Calon buyer properti rumah wiyung, cari rumah 1 lantai', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mlistings`
--

CREATE TABLE `mlistings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `commission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_unit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_unit` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_unit` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_properti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_bangunan` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_tanah` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lantai` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kamar_mandi` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kamar_tidur` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arah_properti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spesifikasi` longtext COLLATE utf8mb4_unicode_ci,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listrik` int(11) DEFAULT NULL,
  `legalitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delet` int(11) NOT NULL DEFAULT '0',
  `sold` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `mdeveloper_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mlistings`
--

INSERT INTO `mlistings` (`id`, `nama`, `jenis_list`, `price`, `commission`, `nama_pemilik`, `no_pemilik`, `tipe_unit`, `total_unit`, `available_unit`, `jenis_properti`, `luas_bangunan`, `luas_tanah`, `tinggi`, `lantai`, `lokasi`, `kamar_mandi`, `kamar_tidur`, `arah_properti`, `spesifikasi`, `kota`, `listrik`, `legalitas`, `delet`, `sold`, `user_id`, `mdeveloper_id`, `created_at`, `updated_at`) VALUES
(19, 'Disewakan Rumah Jemursari', 'Disewakan', 160000000, '2', 'Sandra', '082288288383', NULL, NULL, NULL, 'Rumah', '700', '525', '2', NULL, 'Jl.  Jemursari I Rumah kedua dari jalan raya', '3', '5', 'Utara', 'Rumah Besar 2lt  \r\n🔹bisa untuk Kantor \r\n🔹bisa utk Homestay /Kos \r\n🔹Lokasi : Jl.  Jemursari I\r\n     Rumah kedua dari jalan raya\r\n🔹Luas tanah : 25x21= 525m2 (hook)\r\n🔹Luas bangunan : 700m2\r\n🔹 LT. 1: Kt 4+1, KM 2+1\r\n       Lt. 2: Kt 4, KM 2, gudang\r\n       Lt. 3: T. Jemur + tandon atas\r\n🔹 ada Musholla + toilet umum 6 unit\r\n🔹 Garasi 2 Mobil + Carport  2 mobil\r\n🔹 Harga sewa: Rp 160jt/th', 'surabaya', 3500, 'SHM', 0, 0, 1, NULL, '2019-04-10 01:29:10', '2019-04-10 01:29:10'),
(20, 'Tanah Dijual daerah Juanda', 'Dijual', 21154000000, '2', 'bu Wati', '082288288383', NULL, NULL, NULL, 'Tanah', NULL, '3022', NULL, NULL, 'Jalan Sedati Agung, Juanda', NULL, NULL, 'Selatan', 'Dijual\r\nTanah Jl. Sedati Agung\r\nLuas: 3022 m2\r\nLebar depan 28m\r\nLebar belakang 34m\r\nPanjang 100m\r\nSERTFIKAT HAK MILIK\r\nHarga: Rp 7jt/m2 nego', 'Sidoarjo', NULL, 'SHM', 0, 0, 1, NULL, '2019-04-10 05:15:46', '2019-04-10 05:15:46'),
(21, 'Dijual Rumah Griya Kebraon Utara', 'Dijual', 1000000000, '3', 'Yohan', '082288288383', NULL, NULL, NULL, 'Rumah', '144', '144', '1', NULL, 'Griya Kebraon Utara', '3', '3', 'Utara', 'Rumah 1lt\r\nLokasi: Griya Kebraon Utara\r\nLT.  6 x 24 = 144 m2\r\nLB. full bangunan  \r\nKt 2+1\r\nKM 2 +1\r\nhadap Utara\r\nSHM \r\nPln 2.200\r\nHarga Rp 1 M', 'surabaya', 2200, 'SHM', 0, 0, 1, NULL, '2019-04-10 05:57:12', '2019-04-10 05:57:12'),
(22, 'Dijual Rumah Pakuwon Baru Renovasi', 'Dijual', 6000000000, '2', 'Lewis', '082288288383', NULL, NULL, NULL, 'Rumah', '250', '180', '2', NULL, 'Pakuwon The Mansion', '4', '4', 'Utara', 'Rumah 2lt baru renovasi \r\nPakuwon The Mansion \r\n   🔹 Lt. 9 x 20 = 180\r\n 🔹  Lb. 250\r\n 🔹 3+1 kamar tidur \r\n 🔹 3 +1 kamar mandi \r\n🔹 Kamar utama diperluas\r\n🔹 Lantai diganti granitile \r\n🔹 Hadap Utara \r\n🔹 Ppjb\r\n🔹 Harga Rp 6 M nego', 'surabaya', 3500, 'SHM', 0, 0, 1, NULL, '2019-04-10 06:07:42', '2019-04-10 06:07:42'),
(23, 'Dijual Rumah 2 lt Babatan Pratama', 'Dijual', 1450000000, '2', 'Lily', '082288288383', NULL, NULL, NULL, 'Rumah', '140', '90', '2', NULL, 'Babatan Pratama', '2', '3', 'Utara', 'Dijual Rumah 2lt \r\n🔹 Lokasi : Babatan pratama \r\n🔹 Lt 6x15=90m2\r\n🔹 Lb 140m2 ( 2 lantai Full)\r\n🔹 KT 2 + 1 gudang\r\n🔹 KM 2\r\n🔹 Hadap Utara\r\n🔹 Listrik 2200watt\r\n🔹 Semifurnish ( AC 1, lemari setiap kamar,  kitchen set) \r\n🔹 Harga : Rp 1.45M nego.', 'surabaya', 2200, 'SHM', 0, 0, 1, NULL, '2019-04-10 06:11:51', '2019-04-10 06:11:51'),
(24, 'Dijual Ruko Rungkut Tengah', 'Dijual', 3500000000, '2', 'Aliang', '082288288383', NULL, NULL, NULL, 'Ruko', '225', '159', '3', NULL, 'Ruko Raya Rungkut Tengah', '0', '0', 'Timur', 'Ruko Raya Rungkut Tengah \r\nLt.  159m2 (4.5x35)\r\nLB.  4.5x20x 3lt =225m2\r\nSHM 2 surat\r\nPLN 2.200W/\r\n PDAM \r\nhadap Timur \r\nHARGA Rp 3.5M', 'surabaya', 2200, 'SHM', 0, 0, 1, NULL, '2019-04-10 06:20:50', '2019-04-10 06:20:50'),
(25, 'Dijual Ruko Rungkut', 'Dijual', 2500000000, '3', 'Sandra', '082288288383', NULL, NULL, NULL, 'Ruko', '200', '69', '3', NULL, 'Rungkut Kidul Industri', '0', '0', 'Selatan', 'Ruko  Rungkut Kidul industri  \r\nLT.  3.5x16 ~ 69m2\r\nLB.  200 m2\r\n3 Lantai \r\nSHM\r\nPDAM+tandon air+pompa\r\nPLN 4400W\r\nHadap Selatan \r\nHarga Rp 2.5M', 'surabaya', 4400, 'SHM', 0, 1, 1, NULL, '2019-04-10 07:18:59', '2019-04-10 23:20:29'),
(26, 'Dijual Apt Waterplace Tower E', 'Dijual', 1250000000, '2', 'Angga', '082288288383', NULL, NULL, NULL, 'Apartemen', '85', NULL, '1', '17', 'Waterplace', '1', '3', 'Utara', 'DIJUAL/SEWA\r\nApt. WATERPLACE  Tower E \r\n3Br +1\r\nLuas: 85m2, \r\nLt. 17\r\nbarat laut, \r\nView poolside+city  \r\nbrandnew semi furnished: kitchen set + wardrobe,  full AC\r\nHarga : Rp 1.25M\r\n               Rp 65jt/th', 'surabaya', 2200, 'Strata Title', 0, 0, 1, NULL, '2019-04-10 07:51:04', '2019-04-10 07:51:04'),
(27, 'tes', 'Dijual', 7000000000, '2', 'Sandra', '082288288383', NULL, NULL, NULL, 'Rumah', '700', '900', '2', NULL, 'Perumahan alam galaxy', '2', '3', 'Selatan', 'DIJUAL/SEWA\r\nApt. WATERPLACE  Tower E \r\n3Br +1\r\nLuas: 85m2, \r\nLt. 17\r\nbarat laut, \r\nView poolside+city  \r\nbrandnew semi furnished: kitchen set + wardrobe,  full AC\r\nHarga : Rp 1.25M\r\n               Rp 65jt/th', 'surabaya', 2200, 'SHM', 1, 0, 1, NULL, '2019-04-10 07:57:23', '2019-04-10 07:57:23'),
(28, 'Disewakan Apt Waterplace Tower E', 'Disewakan', 65000000, '3', 'Alfian', '082288288383', NULL, NULL, NULL, 'Apartemen', '85', NULL, '1', '17', 'Waterplace', '1', '3', 'Barat', 'DIJUAL/SEWA\r\nApt. WATERPLACE  Tower E \r\n3Br +1\r\nLuas: 85m2, \r\nLt. 17\r\nbarat laut, \r\nView poolside+city  \r\nbrandnew semi furnished: kitchen set + wardrobe,  full AC\r\nHarga : Rp 1.25M\r\n               Rp 65jt/th', 'surabaya', 2200, 'Strata Title', 0, 0, 1, NULL, '2019-04-10 23:16:08', '2019-04-10 23:16:08'),
(29, 'Dijual Rumah Lama', 'Dijual', 4300000000, '2', 'Sandra', '082288288383', NULL, NULL, NULL, 'Rumah', '540', '540', '2', NULL, 'Jl Karang Asem XVI ,  Surabaya', '4', '7', 'Selatan', '🔹Lokasi : Jl Karang Asem XVI ,  Surabaya\r\n🔹LT. 20x27 =540 m2 \r\n🔹KT 5+2, \r\n      KM 3+1\r\n🔹SHM \r\n🔹 Selatan,\r\n🔹 Telp 2line, \r\n🔹PAM\r\n🔹 PLN 2meter listrik (2200w + 4400w)\r\n🔹Cocok utk Home Industry\r\n🔹Harga : Rp 4,3 M nego', 'surabaya', 6600, 'SHM', 0, 1, 3, NULL, '2019-04-10 23:27:25', '2019-04-11 00:24:02'),
(30, 'Dijual Tanah dan Bangunan Di Malang', 'Dijual', 46110000000, '3', 'Alexa', '082288288383', NULL, NULL, NULL, 'Tanah', '1000', '1537', '1', NULL, 'Jl. Soekarno Hatta 46 , Jalan Kembar', '0', '0', 'Barat', 'Tanah+ Bangunan di  MALANG \r\nLokasi : Jl. Soekarno Hatta 46 ,\r\n jalan kembar, \r\nLT. 1537m2\r\nLB. 1000m2. \r\nHadap Barat \r\nHarga: Rp 30jt/m2 nego', 'Malang', 2200, 'SHM', 0, 0, 3, NULL, '2019-04-10 23:31:40', '2019-04-10 23:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `mnews`
--

CREATE TABLE `mnews` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `user_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnews`
--


INSERT INTO `mnews` (`id`, `judul`, `isi_artikel`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Rumah Nyaman Tidak Harus Mahal', 'Untuk mendapatkan rumah yang nyaman sekaligus sehat dan tentu saja dengan biaya hemat, maka dua unsur tadi haruslah terpenuhi secara maksimal.', 4, '2019-03-07 04:18:56', '2019-03-07 04:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `mpolicies`
--

CREATE TABLE `mpolicies` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_broke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `min_sell` int(11) NOT NULL DEFAULT '1',
  `split_fee` int(11) NOT NULL DEFAULT '50',
  `co_fee` int(11) NOT NULL DEFAULT '50',
  `reference_fee` int(11) NOT NULL DEFAULT '20',
  `ppn` double NOT NULL DEFAULT '10',
  `delete` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mpolicies`
--

INSERT INTO `mpolicies` (`id`, `nama`, `co_broke`, `reference`, `min_sell`, `split_fee`, `co_fee`, `reference_fee`, `ppn`, `delete`, `created_at`, `updated_at`) VALUES
(1, 'Admin Policy', 'yes', 'yes', 0, 0, 50, 20, 2.5, 0, NULL, NULL),
(2, 'Manager Policy', 'yes', 'yes', 0, 20, 50, 20, 2.5, 0, NULL, NULL),
(3, 'Default Agen Policy', 'yes', 'yes', 1, 50, 50, 20, 2.5, 0, NULL, NULL),
(4, 'Senior Marketing Policy', 'yes', 'yes', 1, 40, 50, 20, 2.5, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mroles`
--

CREATE TABLE `mroles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mpolicy_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mroles`
--

INSERT INTO `mroles` (`id`, `nama`, `level`, `delet`, `mpolicy_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', '0', 1, NULL, NULL),
(2, 'Manager', '1', '0', 1, NULL, NULL),
(3, 'Marketing Executive', '2', '0', 3, NULL, NULL),
(4, 'Senior Marketing Executive', '2', '0', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mtransactions`
--

CREATE TABLE `mtransactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_sold` int(11) DEFAULT NULL,
  `co_broke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_price` bigint(20) DEFAULT NULL,
  `final_commission` int(11) DEFAULT NULL,
  `split_fee` int(11) DEFAULT NULL,
  `co_fee` int(11) DEFAULT NULL,
  `reference_fee` int(11) DEFAULT NULL,
  `cobroke_id` int(11) DEFAULT NULL,
  `ppn` double DEFAULT NULL,
  `delet` int(11) NOT NULL DEFAULT '0',
  `mlisting_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mtransactions`
--

INSERT INTO `mtransactions` (`id`, `property_sold`, `co_broke`, `reference`, `close_price`, `final_commission`, `split_fee`, `co_fee`, `reference_fee`, `cobroke_id`, `ppn`, `delet`, `mlisting_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '0', 100000000, 200000, 0, 50, 20, 4, 2.5, 0, 10, '2019-03-14 00:59:58', '2019-03-14 00:59:58'),
(2, 1, '0', '0', 7000000000, 2, 0, 50, 20, 1, 2.5, 0, 11, '2019-03-17 05:34:49', '2019-03-17 05:34:49'),
(3, 1, '0', '0', 350000000, 3, 0, 50, 20, 1, 2.5, 0, 12, '2019-03-17 05:35:31', '2019-03-17 05:35:31'),
(4, 1, '0', '0', 2500000000, 3, 0, 50, 20, 1, 2.5, 0, 25, '2019-04-10 23:20:29', '2019-04-10 23:20:29'),
(5, 1, '0', '50', 4300000000, 3, 50, 50, 20, 3, 2.5, 0, 29, '2019-04-11 00:24:02', '2019-04-11 00:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrole_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `nik`, `telp1`, `telp2`, `agama`, `jeniskelamin`, `npwp`, `mrole_id`, `email_verified_at`, `password`, `delet`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Christian', 'christianbonafena7@gmail.com', 'surabaya', '13450230302040', '082212312312', '082212342323', 'Kristen', 'Pria', '1230120490324', 1, NULL, '$2y$10$/HXx6N1pLKVbGeYTUK4Z5OP27QS9I7faVVHA2OK4P4Frd.PMw00FK', '0', 'dwf4KwGdDhAREVKjgi22bMLpZDJhHKVYSlt6o0Dajx5nURfuFJlmKby2Bv31', NULL, NULL),
(2, 'Arzen', 'arzen@gmail.com', 'Sidoarjo', '4124123123', '034929304990', '093059238400', 'Islam', 'Pria', '2312312343435', 2, NULL, '$2y$10$jvAIuEkzrVaFZbP8LPxcW.G0mrTiQUzRBBdnPFGv1gFXZjevrTpDu', '0', NULL, NULL, NULL),
(3, 'Sarumin', 'Sarumin@gmail.com', 'Sidoarjo', '1024091242039', '49405340034', '49203404040', 'Buddha', 'Wanita', '04923049030', 3, NULL, '$2y$10$PrmEidBw0jmuKwrN5bZhdeYFHvCrWev/ak9DNARDWG8VXRu6PZGbe', '0', 'StVTWTe5b6sR48ZGTSU8bPQFmSQVxmopugzDt5QwOnHpsJBKVrZ1q9SHgBrE', NULL, NULL),
(4, 'Asyam', 'Vanila@gmail.com', 'Royal Park', '205150043', '083344449999', '087799998888', 'Islam', 'Wanita', '1233234538766788', 3, NULL, '$2y$10$ztpItitzYhBmmt6G3XAKzukTpUx3SQ9zlaUHHXOV.y2yed7Fw4sLO', '1', NULL, '2019-04-10 08:24:54', '2019-04-10 08:25:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`),
  ADD KEY `images_mlisting_id_foreign` (`mlisting_id`);

--
-- Indexes for table `mcalendars`
--
ALTER TABLE `mcalendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mdevelopers`
--
ALTER TABLE `mdevelopers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mleads`
--
ALTER TABLE `mleads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mleads_user_id_foreign` (`user_id`);

--
-- Indexes for table `mlistings`
--
ALTER TABLE `mlistings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mlistings_user_id_foreign` (`user_id`),
  ADD KEY `mlistings_mdeveloper_id_foreign` (`mdeveloper_id`);

--
-- Indexes for table `mpolicies`
--
ALTER TABLE `mpolicies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mroles`
--
ALTER TABLE `mroles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mroles_mpolicy_id_foreign` (`mpolicy_id`);

--
-- Indexes for table `mtransactions`
--
ALTER TABLE `mtransactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mtransactions_mlisting_id_foreign` (`mlisting_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_mrole_id_foreign` (`mrole_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mcalendars`
--
ALTER TABLE `mcalendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mdevelopers`
--
ALTER TABLE `mdevelopers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mleads`
--
ALTER TABLE `mleads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mlistings`
--
ALTER TABLE `mlistings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mpolicies`
--
ALTER TABLE `mpolicies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mroles`
--
ALTER TABLE `mroles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mtransactions`
--
ALTER TABLE `mtransactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
