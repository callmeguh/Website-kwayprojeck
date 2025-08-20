-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2025 at 03:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `nomor`, `created_at`, `updated_at`) VALUES
(2, 'Puja Ayu Purwaningsih', '+6281319331947', '2024-07-14 09:22:48', '2024-07-14 09:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Cluster Agung Indah,Panongan', '2024-07-14 04:43:53', '2024-07-14 09:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_06_015046_data_teknisi', 1),
(6, '2024_04_12_150715_service', 1),
(7, '2024_04_25_150824_partvespa', 1),
(8, '2024_04_26_162156_location', 1),
(9, '2024_04_26_175556_contact', 1),
(10, '2024_04_27_075453_partchevy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partchevy`
--

CREATE TABLE `partchevy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaparts` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partchevy`
--

INSERT INTO `partchevy` (`id`, `namaparts`, `foto`, `link`, `created_at`, `updated_at`) VALUES
(1, 'lamaran', 'WhatsApp Image 2024-05-23 at 01.52.25 (1).jpeg', 'https://www.instagram.com/reel/C2Kvqy7v7-V/?igsh=ZHB0MnNkbWZrOWJx', '2024-07-03 09:09:55', '2024-07-03 09:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `partvespa`
--

CREATE TABLE `partvespa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaparts` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partvespa`
--

INSERT INTO `partvespa` (`id`, `namaparts`, `foto`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Kak Septi & Kak Fajri', 'WhatsApp Image 2024-05-23 at 01.52.25 (2).jpeg', 'https://www.instagram.com/reel/CziJho6P4uU/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-03 09:32:13', '2024-07-21 08:12:29'),
(2, 'Kak Widya dan Kak Dimas', 'about.jpg', 'https://www.instagram.com/p/C9ZKsjsp0rq/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-14 05:40:54', '2024-07-21 08:13:39'),
(3, 'Kak Hesti & Kak Najmu', 'WhatsApp Image 2024-07-14 at 19.36.33 (1).jpeg', 'https://www.instagram.com/p/C8oJhGlt7t7/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-14 05:43:26', '2024-07-21 08:16:08'),
(4, '7 Bulanan Kak Sari', 'IMG_20240720_195451.jpg', 'https://www.instagram.com/reel/C2uhlW9ph1g/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-14 05:45:40', '2024-07-21 08:15:01'),
(5, 'Kak Lely & Kak Ali', 'WhatsApp Image 2024-07-14 at 19.36.33.jpeg', 'https://www.instagram.com/reel/C6v_rrdJp_m/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-14 05:49:46', '2024-07-21 08:16:37'),
(6, 'Kak Dewi dan Kak Deni', 'IMG_20240720_194902.jpg', 'https://www.instagram.com/reel/CzP85HaPfaw/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-20 06:19:43', '2024-07-21 08:18:36'),
(7, 'Kak Salma dan Kak Rochim', 'IMG_20240720_194928.jpg', 'https://www.instagram.com/reel/CuW-6euPxY7/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:21:28', '2024-07-21 08:21:28'),
(8, 'Kak Sella dan Kak Ikhsan', 'WhatsApp Image 2024-05-23 at 01.52.25 (1).jpeg', 'https://www.instagram.com/reel/C4W_1aIJW6z/?utm_source=ig_web_copy_link', '2024-07-21 08:23:36', '2024-07-21 08:23:36'),
(9, 'Kak Rani dan Kak Deny', 'IMG_20240720_195615.jpg', 'https://www.instagram.com/reel/C3HeFYwJ0Y8/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:25:53', '2024-07-21 08:25:53'),
(10, 'Kak Dhea dan Kak Fafa', 'IMG_20240720_195547.jpg', 'https://www.instagram.com/reel/C2uhlW9ph1g/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:29:57', '2024-07-21 08:29:57'),
(11, 'Kak Delia dan Kak Dzyhas', 'IMG_20240720_195334.jpg', 'https://www.instagram.com/reel/C165852v0Jb/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:33:12', '2024-07-21 08:33:12'),
(12, 'Kak Tiara dan Kak Ridwan', 'IMG_20240720_195136.jpg', 'https://www.instagram.com/p/C1D_WY4SVke/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:34:44', '2024-07-21 08:34:44'),
(13, 'Kak Resa dan Kak Indra', 'WhatsApp Image 2024-07-14 at 19.36.33.jpeg', 'https://www.instagram.com/reel/C65Yj69JeIN/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:37:39', '2024-07-21 08:37:39'),
(14, 'Temu Kangen FK Ukrida 15', 'IMG_20240720_195419.jpg', 'https://www.instagram.com/reel/C2M6g6GP2A0/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2024-07-21 08:39:18', '2024-07-21 08:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `nama`, `foto`, `title`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Set A', 'WhatsApp Image 2024-05-23 at 01.52.25.jpeg', 'Engagement', '- Backdrop Semi Papan\r\n- Artificial Flower\r\n- Diameter Lingkaran 2 Meter\r\n- Tirai Putih belakang backdrop (Up to 3*3 Meter)\r\n- Inisial Nama\r\n- Karpet Putih\r\n- Lighting (Lampu tembak bawah)\r\n- Custom Tema Warna\r\n\r\nBackdrop Only Rp.650.000\r\n+Kursi & Welcome Sign Rp 750.000\r\nBackdrop Lengkap + MUA Rp 1.000.000', '2024-07-03 09:11:02', '2024-07-07 08:37:20'),
(2, 'Set B', 'WhatsApp Image 2024-05-23 at 01.52.24.jpeg', 'Engagement', '- Backdrop Papan 2*2,5 Meter\r\n- Premium Artificial Flower\r\n- Tirai Putih belakang backdrop (Up to 3*3 Meter)\r\n- 2 Standing Flower\r\n- Inisial Nama\r\n- Karpet Putih\r\n- Lighting Bawah\r\n- Lighting Atas\r\n- Custome Tema Warna\r\n\r\nBackdrop Only Rp.850.000\r\n+ Kursi & Welcome Sign Rp950.000\r\nBackdrop Lengkap + MUA Rp 1.250.000', '2024-07-07 08:18:43', '2024-07-07 08:34:38'),
(3, 'Set C', 'WhatsApp Image 2024-05-23 at 01.52.25 (1).jpeg', 'Engagement', '- Backdrop Papan 3*2,5 Meter\r\n- Premium Artificial Flower\r\n- Inisial Nama\r\n- Karpet\r\n- Lighting Bawah\r\n- Lighting Atas\r\n- Custome Warna\r\n\r\nBackdrop Lengkap Rp1.150.000\r\nBackdrop Lengkap + MUA Rp 1.450.000', '2024-07-07 08:41:53', '2024-07-07 08:41:53'),
(4, 'Set D', 'WhatsApp Image 2024-05-23 at 01.52.25 (2).jpeg', 'Tasyakuran Aqiqah', '- Backdrop 3*2,5 Meter\r\n- Premium Artificial Flower\r\n- Balon & Spray Brightening Balon\r\n- Inisial Nama\r\n- Karpet\r\n- Lighting Bawah\r\n- Lighting Atas\r\n- Lighting seputar backdrop\r\n- Kotak Baby\r\n- Custome Warna\r\n- (Bouncer Exclude)\r\n\r\nRp.1.300.000', '2024-07-07 08:43:53', '2024-07-07 08:43:53'),
(5, 'Money Bouquet', 'WhatsApp Image 2024-05-23 at 01.52.25.jpeg', 'Rp.120.000', '- Diskon 10% untuk customer backdrop\r\n- Maks 20 lembar uang\r\n- Custome tema warna\r\n- artificial Flowers', '2024-07-07 08:46:31', '2024-07-07 08:46:31'),
(6, 'Flower Bouquet', 'WhatsApp Image 2024-05-23 at 01.52.24.jpeg', 'Rp.120.000', '- Diskon 10% untuk customer backdrop\r\n- Custome tema warna\r\n- artificial Flowers', '2024-07-07 08:47:54', '2024-07-07 08:47:54'),
(8, 'Cluster Agung Indah,Panongan', 'logokway.png', 'ppp', 'ggggg\r\nggggg\r\nftgf', '2024-07-20 11:21:23', '2024-07-20 11:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id`, `nama`, `role`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Indra', 'Kak Puja, MashaAlloh aku ga nyangka banget dekornya bnrbnr sangat sesuai sm ekspektasi kita bahkan lebih kita berdua seneng banget udah di bantu support untuk dekorasinya, kerennn kak terharu bgt hehe.', 'aaaaa.jpg', '2024-07-03 09:05:38', '2024-07-21 07:16:29'),
(2, 'sella', 'kaka terimakasih banyaaak yaaa kata temen aku backdrop nyaaaa bagus bangeeet mana hargaaa nya murceee ya Allaaah', 'Screenshot_2024-07-21-19-29-29-662_com.instagram.android.jpg', '2024-07-21 07:25:10', '2024-07-21 07:25:10'),
(3, 'Dewi', 'Big thx utk mba puja & suamik Masyallah blm dpt tgl kita udh booking dari bulan juni🥹😅🫶🏻,Simple elegant worth it bgt harganya masyallah makasih', 'Screenshot_2024-07-21-19-33-30-851_com.instagram.android.jpg', '2024-07-21 07:29:12', '2024-07-21 07:29:12'),
(4, 'Salma', 'Special thanks to Decoration by @kwasproject Flower bouquet by dotbosiquet Engagement ring by @anisajewelrycilegon Nail art by @kukua.nailbar Photographer by Welsagst', 'Screenshot_2024-07-21-19-34-22-342_com.instagram.android.jpg', '2024-07-21 07:32:38', '2024-07-21 07:32:38'),
(5, 'Farhan', 'Kak thank you yaaa diluar ekspektasi aku bgt untuk ukuran backdropnya dengan harga yg murah trs tone warnanya jg sesuai dgn apa yg aku mauuuu. Sukses trs ya untuk usaha dekorasinya semoga makin banyak yg pake dekornya kway.project aamiin', 'Screenshot_2024-07-21-19-37-50-903_com.instagram.android.jpg', '2024-07-21 07:37:12', '2024-07-21 07:37:12'),
(6, 'Della', 'Banyak yg bilang sodara\" temen dekor dimana bagus soalnyaa cantikkk elegann simpel tapi wahh gituu sampe dikira acara akad pdhl baru lamaran ixixixi makasih yaa kaa sekali lagi', 'Screenshot_2024-07-21-19-38-27-954_com.instagram.android.jpg', '2024-07-21 08:02:40', '2024-07-21 08:02:40'),
(7, 'Putri', 'Makasii juga ya kakk backdrop sama bouquetnya bagus banget, tone warna sama bunganya aku suka bangett sesuai sama requestnya akuu', 'Screenshot_2024-07-21-19-38-34-765_com.instagram.android.jpg', '2024-07-21 08:05:39', '2024-07-21 08:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dwi', 'dwilangitwibawa@gmail.com', NULL, '$2y$12$e2G..bQ4gtCizE10c5OCTeRhAiLAwhDmV9YmTxDdo8jnGL1e1ku92', NULL, '2024-07-02 06:22:55', '2024-07-02 06:22:55'),
(2, 'Teguhehehe', 'teguhmuhamadridhuwan@gmail.com', NULL, '$2y$12$e2G..bQ4gtCizE10c5OCTeRhAiLAwhDmV9YmTxDdo8jnGL1e1ku92', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partchevy`
--
ALTER TABLE `partchevy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partvespa`
--
ALTER TABLE `partvespa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partchevy`
--
ALTER TABLE `partchevy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partvespa`
--
ALTER TABLE `partvespa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
