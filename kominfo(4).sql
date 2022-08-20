-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 08:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_18_113125_create_tmisr_table', 1),
(6, '2022_08_18_114111_create_tms_table', 1),
(7, '2022_08_18_114645_create_tspt_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tmisr`
--

CREATE TABLE `tmisr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `metode_pemeriksaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_stasiun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_stasiun` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stasiun_lawan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tx` double NOT NULL,
  `rx` double NOT NULL,
  `bw` double NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_beroperasi` date NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tmisr`
--

INSERT INTO `tmisr` (`id`, `tanggal_pemeriksaan`, `metode_pemeriksaan`, `client_id`, `client_name`, `nama_stasiun`, `alamat_stasiun`, `koordinat`, `stasiun_lawan`, `tx`, `rx`, `bw`, `status`, `mulai_beroperasi`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2022-08-01', 'Pengukuran', 'ID2012', 'Ajik', 'Bonjeruk FM', 'Bonjeruk Sintung', '0.1234.12312', 'Pringgarata', 1.0232, 1.232, 1.232, 'mantep', '2022-08-23', 'apaan sih', NULL, NULL, '2022-08-18 07:59:08'),
(2, '2022-08-17', 'Monitoring', 'DA12301', 'Gunawan', 'Esot EX', 'Esot Sintung Timur', '0.123143.1', 'Sintung Barat', 0.12312, -12.312, -0.1231, 'apaan sih', '2022-08-31', 'kamu lmao bet', NULL, NULL, '2022-08-18 08:01:09'),
(3, '2022-08-09', 'Pengukuran', 'Yudik', 'Battelabah Mantep', 'Battelabah gajelas', 'Battelabah Sintung Barat', '0.12312.112', 'Selaqan', 1.2321, 0.123, 0, 'Banjir Bandang', '2022-08-24', 'Sakit Kamu', NULL, NULL, '2022-08-18 08:02:44'),
(4, '2022-08-01', 'Inspeksi On Site', 'ID-301', 'Maulana Muhammad', 'Moonveil TX', 'Sintung Timur', '0.1331.23.41', 'Sintung Barat', 0.341, 0, 0, 'Berkelanjutan', '2022-08-16', 'Mantap Banget', '2022-08-18 08:18:23', NULL, '2022-08-18 08:18:23'),
(5, '2022-08-10', 'Monitoring', '3DGYK4MU', 'Tukang Palak', 'Boss Kafe Punya', 'Udayana', '1.000.1111', 'Lombok Tengah', -0.000005, 10, 9, 'asd', '2022-08-16', 'Gajelas bet kamu', '2022-08-18 08:18:27', NULL, '2022-08-18 08:18:27'),
(6, '2022-08-16', 'Pengukuran', 'S41F0L', 'Saiful Anwar', 'Dirumah', 'Sintung Timur Mekar', '-1.123124.12312', 'Kebon Nyiur', -1.23124, 0, 0, 'Turu', '2022-08-24', 'Ngantuk Bet', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tms`
--

CREATE TABLE `tms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `metode_pemeriksaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_pengguna` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_perangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_perangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_seri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_perangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tms`
--

INSERT INTO `tms` (`id`, `tanggal_pemeriksaan`, `metode_pemeriksaan`, `client_name`, `kategori_pengguna`, `merk_perangkat`, `tipe_perangkat`, `no_seri`, `no_sertifikat`, `jenis_perangkat`, `status`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2022-08-02', 'Inspeksi On Site', 'Maulana Muhammad', 'Distributor', 'Testing', 'Elektronik', '12323321231', '124123123123', 'Eletrik', 'Aktif', 'Ckp Tw', NULL, NULL, '2022-08-18 09:52:55'),
(2, '2022-08-16', 'Monitoring', 'asdasd', 'Vendor', 'asdasd', 'asdasd', 'asdasd', 'sadasd', 'asdasd', 'asdasdas', 'dsadasd', '2022-08-18 09:54:05', NULL, '2022-08-18 09:54:05'),
(3, '2022-08-03', 'Inpeksi Open Shleter', 'dsadasd', 'Distributor', 'ads', 'das', 'das', 'das', 'das', 'das', 'das', '2022-08-18 09:58:11', NULL, '2022-08-18 09:58:11'),
(4, '2022-08-09', 'Monitoring', 'Faskal', 'Toko', 'Biasa Aja', 'Kayu', '1234412312', '123442131221', 'Pohon', 'Keras', 'Mantap', NULL, NULL, NULL),
(5, '2022-08-23', 'Monitoring', 'Saiful Anwar', 'Distributor', 'Cereal', 'Makanan', '12312451235', '1251235123', 'Makanan Koceng', 'Hanya Kucing Yang Tau', 'Mantep Keknya', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tspt`
--

CREATE TABLE `tspt` (
  `tanggal_pemeriksaan` date NOT NULL,
  `metode_pemeriksaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_stasiun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_stasiun` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stasiun_lawan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tx` double NOT NULL,
  `rx` double NOT NULL,
  `bw` double NOT NULL,
  `nomer_isr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_beroperasi` date NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tspt`
--

INSERT INTO `tspt` (`tanggal_pemeriksaan`, `metode_pemeriksaan`, `client_id`, `client_name`, `nama_stasiun`, `alamat_stasiun`, `koordinat`, `stasiun_lawan`, `tx`, `rx`, `bw`, `nomer_isr`, `mulai_beroperasi`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
('2022-08-09', 'Inspeksi On Site', 'M4NT43', 'Agus Salim', 'ESEMPE', 'Sintung Timur Mekar', '-123.123124.1231', 'Dasan Tereng', 0.12321, 0, 0, '14', '2022-08-24', 'LMAO BETTTTTTTT', NULL, NULL, NULL);

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
(1, 'Maulana Muhammad', 'maulanamuhammad2000@gmail.com', NULL, '$2y$10$VAGmCvQ8PSpJC1OBRf4u6.1Oi4OKKC09ydX5XAmdMwIPxhUSln662', NULL, '2022-08-18 04:51:21', '2022-08-18 04:51:21');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tmisr`
--
ALTER TABLE `tmisr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tms`
--
ALTER TABLE `tms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tspt`
--
ALTER TABLE `tspt`
  ADD PRIMARY KEY (`client_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmisr`
--
ALTER TABLE `tmisr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tms`
--
ALTER TABLE `tms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
