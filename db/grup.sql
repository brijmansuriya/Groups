-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 06:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grup`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_07_19_111113_create_tbl_group_table', 2),
(17, '2021_07_28_151815_create_tbl_type_table', 3),
(19, '2021_08_01_151704_create_tbl_setting_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `slug`, `isdelete`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'name', 'name', 0, 1, '2021-07-15 21:25:38', '2021-07-15 21:25:38'),
(4, 'Test', 'Test1', 1, 1, '2021-07-10 21:13:54', '2021-07-10 21:13:54'),
(5, 'Test2', 'Test255', 1, 1, '2021-07-14 23:02:30', '2021-07-14 23:02:30'),
(6, 'Maga', 'Maga', 0, 1, '2021-07-15 21:30:01', '2021-07-15 21:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gimg` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `gctype` int(11) DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `gname`, `url`, `gimg`, `cat_id`, `type`, `gctype`, `gmail`, `created_at`, `updated_at`, `isdelete`) VALUES
(1, 'Status9mme', 'https://sites.google.com/view/whatsapp-status-9mme/home', '1626700028.jpg', 5, 1, NULL, NULL, '2021-07-19 20:07:08', '2021-07-19 20:07:08', 0),
(2, 'Status9mme', 'https://news9mme.blogspot.com/2021/02/bigg-boss-14-promo-rakhi-sawant-asked.html', '1626700590.jpg', 5, 2, NULL, 'amdin@gmail.com', '2021-07-19 20:16:30', '2021-07-19 20:16:30', 0),
(3, 'Status9mme', 'https://youtu.be/PfVTs94zJjU', '1626700639.jpg', 4, 2, NULL, 'amdin@gmail.com', '2021-07-19 20:17:19', '2021-07-19 20:17:19', 0),
(4, 'brij', 'https://youtu.be/rbzoQ9e60Co', '1626878239.jpg', 5, 1, NULL, 'admin@gmail.com', '2021-07-21 21:37:19', '2021-07-21 21:37:19', 1),
(5, 'brij', 'https://youtu.be/rbzoQ9e60Co/1111111/2222', '1626880150.jpg', 5, 1, NULL, 'admin@gmail.com', '2021-07-21 22:09:10', '2021-07-21 22:09:10', 1),
(6, 'brij', 'https://youtu.be/rbzoQ9e60Co/1111111/2222', '1626884476.jpg', 5, 1, NULL, 'admin@gmail.com', '2021-07-21 23:21:16', '2021-07-21 23:21:16', 0),
(7, 'brij', 'https://youtu.be/rbzoQ9e60Co/1111111/2222', '1626884523.jpg', 6, 1, NULL, 'admin@gmail.com', '2021-07-21 23:22:03', '2021-07-21 23:22:03', 0),
(8, 'brij', 'https://youtu.be/rbzoQ9e60Co/1111111/2222', '1626884669.jpg', 6, 1, NULL, 'admin@gmail.com', '2021-07-21 23:24:29', '2021-07-21 23:24:29', 0),
(9, 'brij', 'https://youtu.be/rbzoQ9e60Co/203', '1626885667.jpg', 5, 1, NULL, 'admin@gmail.com', '2021-07-21 23:41:07', '2021-07-21 23:41:07', 0),
(10, 'Status9mme', 'Https://sites.google.com/view/whatsapp-s-9mme/home', '1627051053.gif', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-23 21:37:33', '2021-07-23 21:37:33', 0),
(11, 'Status9mme', 'Http://jjasani.com/dev/shivcotton/lllll', '1627051151.gif', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-23 21:39:11', '2021-07-23 21:39:11', 0),
(12, 'Status9mme', 'Https://sites.goog222le.com/view/whatsapp-status-9mme/home', NULL, 4, 1, NULL, 'Amdin@gmail.com', '2021-07-26 17:01:30', '2021-07-26 17:01:30', 0),
(13, 'Status9mme', 'Https://sites.google.com4/view/whatsapp-status-9mme/home', NULL, 5, 1, NULL, 'Amdin@gmail.com', '2021-07-26 17:05:53', '2021-07-26 17:05:53', 0),
(14, 'Status9mme', 'Https://news9mme.blogspot.com/2000021/02/bigg-boss-14-promo-rakhi-sawant-asked.html', '1627294194.jpg', 5, 2, NULL, 'Amdin@gmail.com', '2021-07-26 17:09:54', '2021-07-26 17:09:54', 0),
(15, '111', 'Http://jjasani.com/d555555ev/shivcotton', '1627294239.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-26 17:10:39', '2021-07-26 17:10:39', 1),
(16, 'Status9mme', 'Https://sieetes.google.com/view/whatsapp-status-9mme/home', '1627396888.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-27 21:41:28', '2021-07-27 21:41:28', 0),
(17, 'Status9mme', 'Https://sites.goo123212542gle.com/view/whatsapp-status-9mme/home', '1627398001.jpg', 4, 1, NULL, 'Amdin@gmail.com', '2021-07-27 22:00:01', '2021-07-27 22:00:01', 0),
(18, 'Status9mme', 'Https://whats142app-status-free2020.blogspot.com/2021/02/new-top-30-valentine-day-2021-whatsapp.html', '1627398167.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-27 22:02:47', '2021-07-27 22:02:47', 0),
(19, 'Status9mme', 'Https://site1123s.google.com/view/whatsapp-status-9mme/home', '1627398203.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-27 22:03:23', '2021-07-27 22:03:23', 0),
(20, 'Status9mme', 'Https://sites.go1236ogle.com/view/whatsapp-status-9mme/home', '1627398540.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-27 22:09:00', '2021-07-27 22:09:00', 0),
(21, 'Status9mme', 'Https://yo12351utu.be/PfVTs94zJjU', '1627398567.jpg', 5, 1, NULL, 'Amdin@gmail.com', '2021-07-27 22:09:27', '2021-07-27 22:09:27', 0),
(22, 'Brij1221', 'Https://s1221ites.google.com/view/whatsapp-status-9mme/home', '1627399708.jpg', 4, 1, NULL, '1221@gmail.com', '2021-07-27 22:28:28', '2021-07-27 22:28:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `key`, `vel`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'appname', 'Demo2', 0, '2021-09-26 03:57:00', '2021-09-25 22:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disable` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `type_name`, `disable`, `isdelete`, `created_at`, `updated_at`) VALUES
(2, 'Wp', 0, 0, '2021-07-30 21:19:34', '2021-09-25 22:29:09'),
(3, 'Wps', 0, 0, '2021-07-30 21:20:17', '2021-09-25 22:29:08'),
(5, 'Ts', 0, 0, '2021-07-30 21:30:24', '2021-09-25 22:29:06'),
(6, 'W', 0, 0, '2021-08-01 21:24:31', '2021-09-25 22:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$JGlbaeqcejS5RyGsnLbxbutszy.t5gYtgWpvM4ZGPEFq5o510WUtu', NULL, '2021-07-19 19:05:33', '2021-07-19 19:05:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
