-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2019 at 09:38 AM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

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
  `listrik` varchar(11) DEFAULT NULL,
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
---------------------------------------------------

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
(3, 1, '0', '0', 350000000, 3, 0, 50, 20, 1, 2.5, 0, 12, '2019-03-17 05:35:31', '2019-03-17 05:35:31');

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
(1, 'Christian', 'christianbonafena7@gmail.com', 'surabaya', '13450230302040', '082212312312', '082212342323', 'Kristen', 'Pria', '1230120490324', 1, NULL, '$2y$10$/HXx6N1pLKVbGeYTUK4Z5OP27QS9I7faVVHA2OK4P4Frd.PMw00FK', '0', 'zEbWhJWxu5cp3PbgKmAHujkFsAhOT4NDq6ljcO1vMacfJeeFYb9rSPEi6CZ0', NULL, NULL),
(2, 'Arzen', 'arzen@gmail.com', 'Sidoarjo', '4124123123', '034929304990', '093059238400', 'Islam', 'Pria', '2312312343435', 2, NULL, '$2y$10$jvAIuEkzrVaFZbP8LPxcW.G0mrTiQUzRBBdnPFGv1gFXZjevrTpDu', '0', NULL, NULL, NULL),
(3, 'Sarumin', 'Sarumin@gmail.com', 'Sidoarjo', '1024091242039', '49405340034', '49203404040', 'Buddha', 'Wanita', '04923049030', 3, NULL, '$2y$10$PrmEidBw0jmuKwrN5bZhdeYFHvCrWev/ak9DNARDWG8VXRu6PZGbe', '0', 'bG5hhCdidBCfXrtCDpwFOEChcZrD1WpRdkk6RPq1MshaRs3qow5ORMjbKBcC', NULL, NULL);

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
-- Indexes for table `mnews`
--
ALTER TABLE `mnews`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `imageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mcalendars`
--
ALTER TABLE `mcalendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mdevelopers`
--
ALTER TABLE `mdevelopers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mnews`
--
ALTER TABLE `mnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_mlisting_id_foreign` FOREIGN KEY (`mlisting_id`) REFERENCES `mlistings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mleads`
--
ALTER TABLE `mleads`
  ADD CONSTRAINT `mleads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mlistings`
--
ALTER TABLE `mlistings`
  ADD CONSTRAINT `mlistings_mdeveloper_id_foreign` FOREIGN KEY (`mdeveloper_id`) REFERENCES `mdevelopers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mlistings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mroles`
--
ALTER TABLE `mroles`
  ADD CONSTRAINT `mroles_mpolicy_id_foreign` FOREIGN KEY (`mpolicy_id`) REFERENCES `mpolicies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mtransactions`
--
ALTER TABLE `mtransactions`
  ADD CONSTRAINT `mtransactions_mlisting_id_foreign` FOREIGN KEY (`mlisting_id`) REFERENCES `mlistings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_mrole_id_foreign` FOREIGN KEY (`mrole_id`) REFERENCES `mroles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
