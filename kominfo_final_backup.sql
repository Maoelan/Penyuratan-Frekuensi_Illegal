-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 05:01 AM
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
-- Table structure for table `datasurat`
--

CREATE TABLE `datasurat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pemilik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bertindak_untuk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_pemeriksa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_gol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bertindak_untuk_pemeriksa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kbalai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_kbalai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_now` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datasurat`
--

INSERT INTO `datasurat` (`id`, `nama_pemilik`, `nik_pemilik`, `jenis_kelamin`, `agama`, `pekerjaan`, `jabatan`, `alamat`, `bertindak_untuk`, `nama_pemeriksa`, `nik_pemeriksa`, `nip_pemeriksa`, `jenis_kelamin_pemeriksa`, `agama_pemeriksa`, `pekerjaan_pemeriksa`, `jabatan_pemeriksa`, `pangkat_gol`, `alamat_pemeriksa`, `bertindak_untuk_pemeriksa`, `nama_kbalai`, `nip_kbalai`, `tanggal_now`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mister X', '800110101', 'Laki-Laki', 'Islam', 'Swasta', 'Ketua', 'Mataram Itu', 'Apa Mungkin', 'Abdi', '0920199021', '80818281', 'Laki-Laki', 'Islam', 'Kantor', 'Lumayan', 'Lumayan Sangat', 'Ampenan Sana', 'Balmon II', 'Kasno', '8021802', '2022-09-14', NULL, NULL, NULL);

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
(7, '2022_08_18_114645_create_tspt_table', 1),
(8, '2022_08_27_093250_create_datasurat_table', 1);

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
  `nomer_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `jenis_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_segel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang_dua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_type_dua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_segel_dua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `tmisr` (`id`, `nomer_surat`, `tanggal_pemeriksaan`, `metode_pemeriksaan`, `client_id`, `client_name`, `nama_stasiun`, `alamat_stasiun`, `koordinat`, `stasiun_lawan`, `tx`, `rx`, `bw`, `jenis_barang`, `merk_type`, `lokasi_segel`, `jenis_barang_dua`, `merk_type_dua`, `lokasi_segel_dua`, `status`, `mulai_beroperasi`, `keterangan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Balmon.52/SP.03.03/8/2022', '2022-09-07', 'Pengukuran', 'DA12301', 'PT. ABC', 'Moonveil TX', 'Mataram', '80;811', 'Lombok Tengah', 1, 1, 0.999999, 'Parabola', 'Motorola', 'Sana', 'Antena', 'Samsung', 'Sini', 'Illegal', '2022-09-21', 'Tidak Berizin', NULL, NULL, NULL),
(2, 'Balmon.52/SP.03.03/8/2022', '2022-09-14', 'Monitoring', 'DA0111', 'PT. APAANSIH', 'Lombok Barat FM', 'Lombok Tengah', '80;112121', 'Mataram', 1, 1, 1.000001, 'Transchifer', 'Pilip', 'Mungkin Disini', 'Lul', 'Samsung', 'Mungkin Disana', 'Berizin', '2022-09-21', 'Legal', NULL, NULL, NULL);

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
  `lokasi_segel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tspt`
--

CREATE TABLE `tspt` (
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
  `nomer_isr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_segel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_beroperasi` date NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Maulana Muhammad', 'maulanamuhammad2000@gmail.com', NULL, '$2y$10$PT/5QO/TPS3A1/RHllKqrutI1TFVExi5RabMxyFBzZB/Sawe2RlZq', NULL, '2022-09-02 19:35:33', '2022-09-02 19:35:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasurat`
--
ALTER TABLE `datasurat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `datasurat`
--
ALTER TABLE `datasurat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmisr`
--
ALTER TABLE `tmisr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tms`
--
ALTER TABLE `tms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tspt`
--
ALTER TABLE `tspt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
