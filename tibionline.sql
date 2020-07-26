-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 12:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tibionline`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branches_id` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `av_count` int(11) NOT NULL DEFAULT 5,
  `cr_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `branches_id`, `date`, `av_count`, `cr_count`, `created_at`, `updated_at`) VALUES
(5, 2, '2020-07-20', 23, 1, '2020-07-20 06:29:20', '2020-07-20 06:30:03'),
(6, 2, '2020-07-21', 5, 2, '2020-07-20 07:49:19', '2020-07-20 07:50:10'),
(7, 5, '2020-07-24', 5, 1, '2020-07-20 08:08:42', '2020-07-21 02:25:21'),
(8, 5, '2020-07-24', 3, 1, '2020-07-20 08:10:42', '2020-07-21 02:25:21'),
(9, 5, '2020-07-22', 1, 1, '2020-07-21 02:26:55', '2020-07-21 02:29:29'),
(10, 3, '2020-08-01', 23, 2, '2020-07-21 02:36:20', '2020-07-21 02:40:11'),
(11, 5, '2020-07-23', 5, 1, '2020-07-21 02:47:57', '2020-07-21 02:47:57'),
(12, 3, '2020-07-22', 5, 1, '2020-07-21 03:33:50', '2020-07-21 03:33:50'),
(13, 5, '2020-08-01', 5, 1, '2020-07-21 08:23:18', '2020-07-21 08:23:18'),
(14, 5, '2020-07-22', 40, 0, '2020-07-21 08:24:50', '2020-07-21 08:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branches_id` int(11) NOT NULL DEFAULT 0,
  `branches_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branches_id`, `branches_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'اربيل', NULL, NULL),
(2, 3, 'البصرة', NULL, NULL),
(3, 4, 'الرئيسي', NULL, NULL),
(4, 5, 'جمعية الهلال الاحمر العراقي', NULL, NULL),
(5, 6, 'السليمانية', NULL, NULL),
(6, 7, 'مجلس النواب', NULL, NULL),
(7, 8, 'المسبح', NULL, NULL),
(8, 9, 'كربلاء', NULL, NULL),
(9, 10, 'الناصرية', NULL, NULL),
(10, 11, 'المنطقة الدولية', NULL, NULL),
(11, 12, 'اماجدي مول -اربيل', NULL, NULL),
(12, 13, 'الرمادي', NULL, NULL),
(13, 14, 'المنطقة الدولية', NULL, NULL),
(14, 15, 'تكريت', NULL, NULL),
(15, 16, 'التحرير', NULL, NULL),
(16, 17, 'زيونة مول', NULL, NULL),
(17, 18, 'الكوت', NULL, NULL),
(18, 19, 'الحلة', NULL, NULL),
(19, 23, 'العمارة', NULL, NULL),
(20, 25, 'مطار النجف', NULL, NULL),
(21, 24, 'مطار بغداد', NULL, NULL),
(22, 30, 'ماجدي مول السليمانية', NULL, NULL),
(23, 32, 'بابلون مول', NULL, NULL),
(24, 1035, 'شركة نفط ميسان', NULL, NULL),
(25, 1037, 'وزارة النفط', NULL, NULL),
(26, 1040, 'فرع الرياض', NULL, NULL),
(27, 1045, 'هيبت خاتون', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
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
(4, '2020_06_09_112742_create_tickets_table', 1),
(5, '2020_06_09_112803_create_departments_table', 1),
(6, '2020_06_09_112902_create_services_table', 1),
(7, '2020_06_09_112946_create_applications_table', 1),
(8, '2020_06_09_113118_create_service_level_agreements_table', 1),
(9, '2020_06_11_053310_create_permission_tables', 1),
(10, '2020_06_11_060324_update_roles_table', 1),
(11, '2020_06_28_050127_update_tickets_table', 1),
(12, '2020_06_28_051603_create_ticket_types_table', 1),
(13, '2020_06_28_071417_create_ticket_details_table', 1),
(14, '2020_06_30_101702_update_ticketsxx_table', 1),
(15, '2020_07_06_084454_update_ticket_details_table', 1),
(16, '2020_07_12_061925_create_managers_table', 1),
(17, '2020_07_15_085126_create_news_table', 1),
(18, '2020_07_15_102603_update_news_table', 1),
(19, '2020_07_19_100046_create_branches_table', 1),
(21, '2020_07_19_112009_update_services_table', 2),
(22, '2020_07_19_113335_create_posts_table', 3),
(23, '2020_07_20_055821_create_appointments_table', 4),
(24, '2020_07_20_090345_update_users_table', 5),
(27, '2020_07_20_102513_update_post_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `descrption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doucment_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doucment_name',
  `doucment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doucment_name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branches_id` int(11) NOT NULL DEFAULT 0,
  `serviceType_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `av_count` int(11) NOT NULL DEFAULT 5,
  `cr_count` int(11) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `branches_id`, `serviceType_id`, `username`, `email`, `phonenumber`, `date`, `av_count`, `cr_count`, `created_at`, `updated_at`, `action`) VALUES
(11, 2, 1, 'dsfsdfdsfdsf', 'ss@ff.com', '7801321312312312321', '2020-07-20', 5, 1, '2020-07-20 06:30:03', '2020-07-20 07:37:11', 'cancle'),
(12, 2, 1, 'dsfsdfdsfdsf', 'ss@ff.com', 'dsfdsdsfdsf', '2020-07-21', 5, 1, '2020-07-20 07:50:10', '2020-07-20 07:50:10', ''),
(13, 5, 5, 'saif bassim', 'saif.bassim99@gmail.com', '+9647707757022', '2020-07-24', 5, 1, '2020-07-20 08:08:42', '2020-07-21 01:57:03', 'done'),
(14, 5, 3, 'sarmad', 'sarmad@ss.com', '780132131231', '2020-07-24', 5, 1, '2020-07-21 02:25:21', '2020-07-21 02:25:21', ''),
(15, 5, 3, 'sarmad', 'ss@ff.com', '780132131231', '2020-07-22', 5, 1, '2020-07-21 02:29:29', '2020-07-21 02:29:29', ''),
(16, 3, 5, 'sarmad', 'sarmad@ss.com', '7714330431', '2020-08-01', 5, 1, '2020-07-21 02:36:51', '2020-07-21 02:40:49', 'cancle'),
(17, 3, 5, 'sarmad', 'sarmad@ss.com', '780132131231', '2020-08-01', 5, 1, '2020-07-21 02:40:11', '2020-07-21 02:40:45', 'done'),
(18, 5, 3, 'sarmad', 'sarmad@ss.com', '780132131231', '2020-07-23', 5, 1, '2020-07-21 02:47:57', '2020-07-21 02:47:57', ''),
(19, 3, 3, 'سيف', 'sarmad@ss.com', '780132131231', '2020-07-22', 5, 1, '2020-07-21 03:33:50', '2020-07-21 03:34:33', 'done'),
(20, 5, 1, 'sarmad', 'ss@ff.com', '780132131231', '2020-08-01', 5, 1, '2020-07-21 08:23:18', '2020-07-21 08:23:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Arabic_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `Arabic_Name`) VALUES
(1, 'SystemAdministrator', 'web', '2020-07-20 04:18:30', '2020-07-20 04:18:30', 'مدير النظام'),
(2, 'Branch', 'web', '2020-07-20 04:18:30', '2020-07-20 04:18:30', 'ادره فرع');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `services_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `services_name`) VALUES
(1, NULL, NULL, 'سحب'),
(2, NULL, NULL, 'ايداع'),
(3, NULL, NULL, 'فتح حساب'),
(4, NULL, NULL, 'جمار'),
(5, NULL, NULL, 'تستاهل');

-- --------------------------------------------------------

--
-- Table structure for table `service_level_agreements`
--

CREATE TABLE `service_level_agreements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `ticket_type_id` int(11) NOT NULL,
  `issue_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `department_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `agent_image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ticket_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_types`
--

CREATE TABLE `ticket_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `branches_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `branches_id`) VALUES
(1, 'sarmad', 'sarmad.abdulrahman.n@gmail.com', NULL, '$2y$10$LHozGKildLythYrZgeEyUO1LZULIaX1VrtdEnJZ9q7T43YoSUrlnO', NULL, NULL, NULL, 0),
(2, 'سيف وليد', 'q@gmail.com', NULL, '$2y$10$LHozGKildLythYrZgeEyUO1LZULIaX1VrtdEnJZ9q7T43YoSUrlnO', NULL, '2020-07-20 05:00:43', '2020-07-20 05:00:43', 2),
(3, 'رافع', 'r@gmail.com', NULL, '$2y$10$zJCYvvR0Zn/YY/bU8R8/2eJVwM2DPVpdLsrihGxsEWgFJlD2H4Dei', NULL, '2020-07-20 08:01:42', '2020-07-20 08:01:42', 5),
(4, 'سيف وليد المشهداني', 'saif.walied@gmail.com', NULL, '$2y$10$T4Af7mbzhIPu7e96MiHRZuQFAQK0Ae/VqvElPffRylYkXBlpuVRZ2', NULL, '2020-07-21 02:34:57', '2020-07-21 02:34:57', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_level_agreements`
--
ALTER TABLE `service_level_agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_types`
--
ALTER TABLE `ticket_types`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_level_agreements`
--
ALTER TABLE `service_level_agreements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_types`
--
ALTER TABLE `ticket_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
