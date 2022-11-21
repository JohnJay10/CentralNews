-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 10:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koginewsblog`
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
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Olanipekun drums support for Oyebanji administration', 'Davido remains heartbroken, inconsolable, days after his son’s death', 'bu_1668372569.jpg', '2022-11-13 19:49:31', '2022-11-13 19:49:31'),
(2, 'Ararume drags Buhari to court, demands N100bn over sack as NNPC Chairman.', 'In the suit marked FHC/ABJ/CS/691/2022, which he filed through a team of Senior Advocates of Nigeria, SANs led by Chief Chris Uche and Ogwu Onoja, Ararume, formulated four issues for the Federal High Court in Abuja to determine in his favour.', 'bu_1668374215.jpg', '2022-11-13 20:16:55', '2022-11-13 20:16:55');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_11_10_115350_create_politics_table', 1),
(5, '2022_11_10_215617_add_image_to_politics', 1),
(6, '2022_11_12_052825_create_latest_news_table', 1),
(7, '2022_11_12_092539_create_sports_table', 1);

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
-- Table structure for table `politics`
--

CREATE TABLE `politics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `politics`
--

INSERT INTO `politics` (`id`, `title`, `preview`, `body`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Ararume drags Buhari to court, demands N100bn over sack as NNPC Chairman.', 'In the suit marked FHC/ABJ/CS/691/2022, which he filed through a team of Senior Advocates of Nigeria, SANs led by Chief Chris Uche and Ogwu Onoja, Ararume, formulated four issues for the Federal High Court in Abuja to determine in his favour.', 'ABUJA– A chieftain of the All Progressive Congress, APC, in Imo State, Senator Ifeanyi Ararume, has slammed N100billion suit against President Muhammadu Buhari, alleging that he was unlawfully removed as a non Executive Chairman of the newly Incorporated Nigeria National Petroleum Company, NNPC.\r\n\r\nIn the suit marked FHC/ABJ/CS/691/2022, which he filed through a team of Senior Advocates of Nigeria, SANs led by Chief Chris Uche and Ogwu Onoja, Ararume, formulated four issues for the Federal High Court in Abuja to determine in his favour.', '2022-11-12 13:01:28', '2022-11-12 13:01:28', 'WhatsApp Image 2022-11-10 at 5.37.30 AM_1668261687.jpeg'),
(2, 'Ararume drags Buhari to court, demands N100bn over sack as NNPC Chairman.', 'In the suit marked FHC/ABJ/CS/691/2022, which he filed through a team of Senior Advocates of Nigeria, SANs led by Chief Chris Uche and Ogwu Onoja, Ararume, formulated four issues for the Federal High Court in Abuja to determine in his favour.', 'In the suit marked FHC/ABJ/CS/691/2022, which he filed through a team of Senior Advocates of Nigeria, SANs led by Chief Chris Uche and Ogwu Onoja, Ararume, formulated four issues for the Federal High Court in Abuja to determine in his favour.', '2022-11-13 20:17:48', '2022-11-13 20:17:48', 'new_1668374268.webp');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Danny Ings with brace as Villa pick up first away win', 'Danny Ings with brace as Villa pick up first away win', 'sport1_1668377229.webp', '2022-11-13 21:07:09', '2022-11-13 21:07:09'),
(2, 'Eriksson accuses Nigeria FA officials of demanding money for Super Eagles job', 'Eriksson accuses Nigeria FA officials of demanding money for Super Eagles job', 'sport4_1668377258.webp', '2022-11-13 21:07:38', '2022-11-13 21:07:38'),
(3, 'I hope World Cup won’t disrupt Arsenal’s season – Arteta', 'I hope World Cup won’t disrupt Arsenal’s season – Arteta', 'sport2_1668377285.webp', '2022-11-13 21:08:05', '2022-11-13 21:08:05'),
(4, 'Photos: Israel Adesanya loses UFC title to Brazilian, Alex Pereira', 'Photos: Israel Adesanya loses UFC title to Brazilian, Alex Pereira', 'sport3_1668377309.webp', '2022-11-13 21:08:29', '2022-11-13 21:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$nlVanzUmspEQdh1gzXpoS.Rz94Ivue6N/HwfbMeF.KJzaInhKqPMa', NULL, '2022-11-13 19:43:49', '2022-11-13 19:43:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `politics`
--
ALTER TABLE `politics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
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
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `politics`
--
ALTER TABLE `politics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
