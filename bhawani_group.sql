-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 05:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhawani_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stitle1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdescription1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stitle2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdescription2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stitle3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `description`, `stitle1`, `sdescription1`, `stitle2`, `sdescription2`, `stitle3`, `sdescription`, `created_at`, `updated_at`) VALUES
(1, '156947583012.JPG', 'This is my textarea to be replaced with CKEditor.', 'test', 'test', 'test', 'test', 'test', 'test', '2019-09-25 23:45:30', '2019-09-25 23:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seokeywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `altimage`, `title`, `description`, `seotitle`, `seokeywords`, `seodescription`, `status`, `created_at`, `updated_at`) VALUES
(1, '15694847221.JPG', 'nabn', 'test', 'xczx', 'test', 'test 123', 'asd', 'inactive', '2019-09-26 02:13:42', '2019-09-26 02:13:42'),
(2, '15694917871.JPG', 'nabn', 'No', 'dgdhgf', 'cxvcx', 'xcv', 'zcxvczx', 'active', '2019-09-26 04:11:27', '2019-09-26 04:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `image`, `altimage`, `status`, `created_at`, `updated_at`) VALUES
(1, '15694852073.JPG', '321', 'inactive', '2019-09-26 02:21:47', '2019-09-26 02:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `altimage`, `name`, `info`, `status`, `created_at`, `updated_at`) VALUES
(1, '156945648612.JPG', 'altimage', 'Koshish Aryal', 'this is information about our client', 'inactive', '2019-09-25 18:23:06', '2019-09-25 21:41:17'),
(3, '15694570023.JPG', '1', 'Koshish Aryal', 'this is information about our client', 'active', '2019-09-25 18:31:42', '2019-09-25 18:31:42'),
(4, '15694857141.JPG', 'nabn', 'test', 'this is information about our client', 'inactive', '2019-09-26 02:30:14', '2019-09-26 02:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Koshish Aryal', '+9779843696745', 'aryalkoshish@gmail.com', 'hey yo, this is test', '2019-09-25 23:21:50', '2019-09-25 23:21:50'),
(2, 'Koshish Aryal', '+9779843696745', 'aryalkoshish@gmail.com', 'hey yo, this is test', '2019-09-25 23:22:06', '2019-09-25 23:22:06'),
(3, 'Koshish Aryal', '+9779843696745', '1@gmail.com', 'tetst', '2019-09-25 23:23:16', '2019-09-25 23:23:16'),
(4, 'Koshish Aryal', '9843696745', '1@gmail.com', 'hey yo, this is test', '2019-09-27 00:16:47', '2019-09-27 00:16:47'),
(5, 'Koshish Aryal', '9843696745', '1@gmail.com', 'hey yo, this is test', '2019-09-27 00:17:33', '2019-09-27 00:17:33'),
(6, 'Koshish Aryal', '9843696745', '1@gmail.com', 'hey yo, this is test', '2019-09-27 00:20:04', '2019-09-27 00:20:04'),
(7, 'Koshish Aryal', '+9779843696745', '1@gmail.com', 'hey yo, this is test', '2019-09-27 00:23:02', '2019-09-27 00:23:02'),
(8, 'Koshish Aryal', '+9779843696745', '1@gmail.com', 'hey yo, this is test', '2019-09-27 00:24:23', '2019-09-27 00:24:23'),
(9, 'Koshish Aryal', '+9779843696745', '1@gmail.com', 'dsa', '2019-09-27 00:26:36', '2019-09-27 00:26:36'),
(10, 'Koshish Aryal', '+9779843696745', '1@gmail.com', '123456', '2019-09-27 00:50:24', '2019-09-27 00:50:24'),
(11, 'Koshish Aryal', '+9779843696745', '1@gmail.com', '123456', '2019-09-27 00:50:44', '2019-09-27 00:50:44'),
(12, 'Koshish Aryal', '+9779843696745', '1@gmail.com', '123456', '2019-09-27 01:04:12', '2019-09-27 01:04:12'),
(13, 'dfsdf', '+9779843696745', 'fdsfsd', 'fsdfs', '2019-09-27 01:45:03', '2019-09-27 01:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `image`, `altimage`, `status`, `created_at`, `updated_at`) VALUES
(1, '15694816741.JPG', '321', 'inactive', '2019-09-26 01:22:54', '2019-09-26 01:22:54'),
(2, '15694816923.JPG', '321', 'inactive', '2019-09-26 01:23:12', '2019-09-26 01:23:12'),
(3, '156948171912.JPG', '1', 'active', '2019-09-26 01:23:39', '2019-09-26 01:23:39'),
(4, '1569481758beautiful-beauty-daylight-2867819.jpg', '1', 'active', '2019-09-26 01:24:18', '2019-09-26 01:24:18'),
(5, '1569481803Capture.JPG', 'fdf', 'inactive', '2019-09-26 01:25:03', '2019-09-26 01:25:03'),
(6, '15694818281.JPG', 'koshish', 'active', '2019-09-26 01:25:28', '2019-09-26 01:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `designtitles`
--

CREATE TABLE `designtitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seokeyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designtitles`
--

INSERT INTO `designtitles` (`id`, `dtitle`, `description`, `seotitle`, `seokeyword`, `seodescription`, `created_at`, `updated_at`) VALUES
(1, '123456', 'this', 'seo', '132', 'seo descirption', '2019-09-25 09:26:06', '2019-09-25 10:23:42');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messagereplies`
--

CREATE TABLE `messagereplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_09_18_031426_create_abouts_table', 1),
(5, '2019_09_19_080322_create_teams_table', 1),
(6, '2019_09_19_111213_create_articles_table', 1),
(7, '2019_09_20_063930_create_testimonials_table', 1),
(8, '2019_09_23_152403_create_services_table', 1),
(9, '2019_09_24_000810_create_contacts_table', 1),
(10, '2019_09_24_021647_create_carousels_table', 1),
(11, '2019_09_25_064921_create_designs_table', 1),
(12, '2019_09_25_090019_create_designtitles_table', 2),
(13, '2019_09_25_233806_create_clients_table', 3),
(14, '2019_09_26_235411_create_seos_table', 4),
(16, '2019_09_27_065246_create_messagereplies_table', 5),
(17, '2019_09_27_100052_create_quickreplies_table', 5);

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
-- Table structure for table `quickreplies`
--

CREATE TABLE `quickreplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seokeyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page`, `seotitle`, `seokeyword`, `seodescription`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Seo title', 'fsdfsd', '<p>fsdfsdf</p>', '2019-09-26 18:29:58', '2019-09-26 20:23:50'),
(2, 'about', 'seo title', 'keywords', '<p>this is&nbsp; seo description</p>', '2019-09-26 20:37:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seokeyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `altimage`, `title`, `description`, `seotitle`, `seokeyword`, `seodescription`, `status`, `created_at`, `updated_at`) VALUES
(1, '156949205912.JPG', '321', 'No Question', 'test', 'test', '456', 'seo descirption', 'inactive', '2019-09-26 04:15:59', '2019-09-26 04:15:59'),
(2, '1569552116beautiful-beauty-daylight-2867819.jpg', 'knsc', 'n,nm', 'hkh', 'l', 'bmnbm', 'kljklj', 'inactive', '2019-09-26 20:56:56', '2019-09-26 20:56:56'),
(3, '15695521503.JPG', 'nabn', 'No Question', 'testing', 'test', '456', '211', 'active', '2019-09-26 20:57:30', '2019-09-26 20:57:30'),
(4, '1569552262Capture.JPG', 'nabn', 'test', 'test1', 'test', 'das', '211', 'active', '2019-09-26 20:59:22', '2019-09-26 20:59:22'),
(5, '156955231212.JPG', '321', 'No Question', '21', 'test', '456', 'test1', 'active', '2019-09-26 21:00:12', '2019-09-26 21:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `altimage`, `created_at`, `updated_at`) VALUES
(1, 'advocate_bijaya', '44600', '1569574754Capture.JPG', 'koshish', '2019-09-27 03:14:14', '2019-09-27 03:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tLJlfn1ZIdGXv/uue57s5OLo.Ak8vtl0KrH2m6Y4VwGk4FInnFjN2', NULL, '2019-09-25 22:59:51', '2019-09-25 22:59:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designtitles`
--
ALTER TABLE `designtitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagereplies`
--
ALTER TABLE `messagereplies`
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
-- Indexes for table `quickreplies`
--
ALTER TABLE `quickreplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designtitles`
--
ALTER TABLE `designtitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagereplies`
--
ALTER TABLE `messagereplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `quickreplies`
--
ALTER TABLE `quickreplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
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
