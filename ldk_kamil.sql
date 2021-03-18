-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldk_kamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_05_130305_create_permission_tables', 1),
(5, '2021_01_27_103332_create_surats_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 6);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'genrate_surat.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(2, 'genrate_surat.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(3, 'genrate_surat.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(4, 'genrate_surat.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(5, 'surat_keluar.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(6, 'surat_keluar.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(7, 'surat_keluar.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(8, 'surat_keluar.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(9, 'surat_masuk.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(10, 'surat_masuk.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(11, 'surat_masuk.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(12, 'surat_masuk.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(13, 'murobi.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(14, 'murobi.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(15, 'murobi.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(16, 'murobi.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(17, 'kader.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(18, 'kader.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(19, 'kader.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(20, 'kader.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(21, 'posts.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(22, 'posts.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(23, 'posts.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(24, 'posts.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(25, 'categories.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(26, 'categories.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(27, 'categories.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(28, 'categories.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(29, 'events.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(30, 'events.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(31, 'events.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(32, 'events.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(33, 'galeri.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(34, 'galeri.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(35, 'galeri.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(36, 'videos.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(37, 'videos.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(38, 'videos.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(39, 'videos.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(40, 'users.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(41, 'users.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(42, 'users.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(43, 'users.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(44, 'roles.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(45, 'roles.create', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(46, 'roles.edit', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(47, 'roles.delete', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(48, 'permissions.index', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-01-05 05:25:11', '2021-01-05 05:25:11'),
(3, 'user', 'web', '2021-01-10 04:12:37', '2021-01-10 04:12:37'),
(4, 'example', 'web', '2021-02-04 03:38:20', '2021-02-04 03:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(40, 3),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(47, 4),
(48, 1),
(48, 3),
(48, 4);

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` int(10) NOT NULL,
  `nomor_surat` int(255) NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `nomor_surat`, `perihal`, `deskripsi`, `tujuan`, `thumbnail`, `created_at`, `updated_at`) VALUES
(7, 9, 'Undangan', 'Musyawarah Kerjaaaa', 'Pembina', 'Capture.JPG-1613998348.jpg', '2021-02-06 02:04:23', '2021-02-22 04:52:28'),
(8, 10, 'Undangan', 'Gema Ramadhan', 'Dosen', 'Capture.JPG-1613998189.jpg', '2021-02-06 21:54:48', '2021-02-22 04:49:49'),
(10, 6, 'Undangan', 'Musyawarah Umum', 'FSLDK NUSRA', 'Capture.JPG-1613998126.jpg', '2021-02-20 10:39:06', '2021-02-22 04:48:46'),
(11, 7, 'Undangan', 'Musyawarah Umum', 'DPO', 'Capture.JPG-1613998666.jpg', '2021-02-22 04:56:14', '2021-02-22 04:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `surat_generates`
--

CREATE TABLE `surat_generates` (
  `id` int(255) NOT NULL,
  `nomor_surat` int(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_generates`
--

INSERT INTO `surat_generates` (`id`, `nomor_surat`, `perihal`, `deskripsi`, `tujuan`, `tgl`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Izin Kegiatan', 'Muswarah Umum', 'WR III', '2021-02-01', 'Capture.JPG-1613985315.jpg', '', '2021-02-22 09:15:15'),
(8, 4, 'Peminjaman Ruangan', 'Musyawarah Kerja', 'WR II', '2021-02-21', 'Capture.JPG-1613919331.jpg', '2021-02-21 14:55:31', '2021-02-21 14:55:31'),
(10, 8, 'Peminjaman Alat', 'Musyawarah Kerja', 'BAAK', '2021-02-17', 'Capture.JPG-1613984307.jpg', '2021-02-22 08:58:27', '2021-02-22 08:58:27'),
(11, 6, 'Izin Kegiatan', 'Bersih-Bersih Musholla', 'WR III', '2021-02-22', 'Capture.JPG-1613989973.jpg', '2021-02-22 10:32:53', '2021-02-22 10:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuks`
--

CREATE TABLE `surat_masuks` (
  `id` int(10) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `nomor_surat` int(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_masuks`
--

INSERT INTO `surat_masuks` (`id`, `asal`, `nomor_surat`, `tgl_masuk`, `deskripsi`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'BEM', 3, '2021-01-02', 'Musyawarah Kerjaaa', 'Capture.JPG-1613990200.jpg', '2021-02-14 05:34:13', '2021-02-22 10:36:40'),
(5, 'DPM', 6, '2021-02-22', 'Pergantian Pengurus', 'Capture.JPG-1613997194.jpg', '2021-02-22 12:33:14', '2021-02-22 12:33:14');

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
(1, 'MUHAMMAD ZIAD ALFIAN', 'admin@gmail.com', NULL, '$2y$10$maZejtGTV2PPvyO3DtJRmeoJVMl3uhSjM6gGrzc3fIbDzLEXqgXAC', NULL, '2021-01-05 05:25:11', '2021-01-10 04:11:58'),
(2, 'MUHAMAMD KUSWARI', 'muhammadkuswari@gmail.com', NULL, '$2y$10$YJaNq5D6dXat1nrc4g2XKOHDXstBXsFu9itj3yuOtLVLSTkZUx6ja', NULL, '2021-01-10 03:59:02', '2021-01-10 03:59:02'),
(6, 'HANA RAMDHANI', 'hanawesave@gmail.com', NULL, '$2y$10$dBfSI5kybTE5J3VyuFMmNuHf859TskcTq9qc3qCOEvLFgKDm50gk6', NULL, '2021-02-20 19:29:10', '2021-02-20 19:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_generates`
--
ALTER TABLE `surat_generates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat_generates`
--
ALTER TABLE `surat_generates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
