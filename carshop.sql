-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 11:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `assembles`
--

CREATE TABLE `assembles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chasis_parts` enum('Toyota X corolla','Mitshubishi Lancer','Mazda Axela') COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_parts` enum('Diesel','Petrol','Octane') COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_filter` enum('Denkermann Air filter','BMW 13 71 52 Air filter','Denso Cool gear Air filter') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_filter` enum('Toyota 1724 Element','Mazda LF3t-13 Genuine pump and gage','Mitshubishi MB2209 Genuine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `drive_belt` enum('TOYOTA JDM Genuine','Mitshubishi 4PK','Mazda Genuine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_injector` enum('MAZDA p501 Genuine','Toyota JDM Genuine','Mitshubishi 1500') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_pump` enum('DENSO 23221 PUMP','HKT GIP-502','Mazda LF3T') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensioner_idelers` enum('Mazda PE&W-15-980','Toyota JDM','Mitshubishi Genuine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `oil_filter` enum('Denso COOL gear','HKS','JDA T1636') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv_joint` enum('NKN Genuine Outer CV','JDM','Mazda Genuine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheel_bearings_and_hubs` enum('Koyo DA','KOYO Genuine','Mazda') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tranaxle_fluid` enum('bizol protect','Caltex texamatic','Citgo transgard') COLLATE utf8mb4_unicode_ci NOT NULL,
  `brake_caliper` enum('Mitshubishi Genuine Front and rear','Toyota genuine front and rear','Mazda stock front and rear') COLLATE utf8mb4_unicode_ci NOT NULL,
  `brake_pads` enum('Advics front','Bremdo front','Hoda front') COLLATE utf8mb4_unicode_ci NOT NULL,
  `brake_shoe` enum('Toyota Rear brake shoe','Mitshubishi Genuine Rear  brake shoe','Mazda rear brake shoe') COLLATE utf8mb4_unicode_ci NOT NULL,
  `steering` enum('Toyota x corolla','Mitshubishi lancer','Mazda axella') COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_jdm_suspension_kit` enum('Stock Toyota Axela','Stock Mitshubishi Lancer','Genuine Mazda Axela') COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_full_kit_price` enum('Toyota 2006 X corolla full kit','Mitshubishi Lancer 2008 full kit','Mazda Axela Full kit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dashboard_and_electronics` enum('Toyota stock','Mazda Stock','Mitshubishi Stock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assembles`
--

INSERT INTO `assembles` (`id`, `name`, `phone`, `chasis_parts`, `engine_parts`, `air_filter`, `fuel_filter`, `drive_belt`, `fuel_injector`, `fuel_pump`, `tensioner_idelers`, `oil_filter`, `cv_joint`, `wheel_bearings_and_hubs`, `tranaxle_fluid`, `brake_caliper`, `brake_pads`, `brake_shoe`, `steering`, `full_jdm_suspension_kit`, `body_full_kit_price`, `dashboard_and_electronics`, `created_at`, `updated_at`) VALUES
(1, 'abcd', '1234567', 'Mitshubishi Lancer', 'Petrol', 'BMW 13 71 52 Air filter', 'Mazda LF3t-13 Genuine pump and gage', 'Mitshubishi 4PK', 'Toyota JDM Genuine', 'DENSO 23221 PUMP', 'Mazda PE&W-15-980', 'HKS', 'Mazda Genuine', 'KOYO Genuine', 'bizol protect', 'Toyota genuine front and rear', 'Bremdo front', 'Mitshubishi Genuine Rear  brake shoe', 'Mazda axella', 'Stock Mitshubishi Lancer', 'Toyota 2006 X corolla full kit', 'Mazda Stock', '2022-12-17 18:08:22', '2022-12-17 18:08:22'),
(2, 'abcd', '1234567', 'Mazda Axela', 'Petrol', 'Denkermann Air filter', 'Toyota 1724 Element', 'TOYOTA JDM Genuine', 'MAZDA p501 Genuine', 'DENSO 23221 PUMP', 'Mazda PE&W-15-980', 'Denso COOL gear', 'NKN Genuine Outer CV', 'Koyo DA', 'bizol protect', 'Mitshubishi Genuine Front and rear', 'Advics front', 'Toyota Rear brake shoe', 'Toyota x corolla', 'Stock Toyota Axela', 'Toyota 2006 X corolla full kit', 'Toyota stock', '2022-12-18 01:04:47', '2022-12-18 01:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Interior', '1', '2022-12-08 14:50:38', '2022-12-08 14:50:38'),
(2, NULL, 'Exterior', '1', '2022-12-08 14:51:21', '2022-12-08 14:51:21');

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
-- Table structure for table `homesers`
--

CREATE TABLE `homesers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_service` enum('Vehicle Wash','Car Repair','Both','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesers`
--

INSERT INTO `homesers` (`id`, `name`, `phone`, `location`, `select_service`, `created_at`, `updated_at`) VALUES
(7, 'abcd', '1234567', 'dhaka', 'Vehicle Wash', '2022-12-17 09:24:11', '2022-12-17 09:24:11'),
(12, 'cdef', '12345678', 'dhaka', 'Car Repair', '2022-12-17 09:58:52', '2022-12-17 09:58:52'),
(13, 'efgh', '12345678', 'dhaka', 'Vehicle Wash', '2022-12-17 09:59:46', '2022-12-17 09:59:46'),
(15, 'cdef', '123456', 'dhaka', 'Car Repair', '2022-12-17 10:05:42', '2022-12-17 10:05:42'),
(16, 'niladri', '123456', 'dhaka', 'Car Repair', '2022-12-17 10:17:41', '2022-12-17 10:17:41'),
(17, 'efgh', '12345678', 'dhaka', 'Both', '2022-12-17 10:19:51', '2022-12-17 10:19:51');

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
(5, '2022_12_08_145944_create_categories_table', 2),
(6, '2022_12_08_205947_create_products_table', 3),
(9, '2022_12_15_224425_create_profiles_table', 4),
(10, '2022_12_17_142227_create_homesers_table', 5),
(11, '2022_12_17_182421_create_carts_table', 6),
(12, '2022_12_17_200702_create_orders_table', 7),
(13, '2022_12_17_224135_create_assembles_table', 8),
(14, '2022_12_18_001434_create_offers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_offer` enum('Recycle','Resell') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `price`, `image`, `description`, `select_offer`, `status`, `created_at`, `updated_at`) VALUES
(3, 'headlight', '100', '181220221671343849.jpg', 'old but working', 'Resell', '1', '2022-12-18 00:10:49', '2022-12-18 00:10:49'),
(4, 'windshield', '150', '181220221671343920.jpg', 'old', 'Resell', '1', '2022-12-18 00:12:00', '2022-12-18 00:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `user_id`, `product_name`, `quantity`, `price`, `image`, `category_id`, `delivery_status`, `created_at`, `updated_at`) VALUES
(3, 'abcd', 'abcd@gmail.com', NULL, '4', 'Spark plug', '1', '100', '081220221670541160.jpg', '4', 'cash on delivery', '2022-12-17 14:15:30', '2022-12-17 14:15:30'),
(4, 'abcd', 'abcd@gmail.com', NULL, '4', 'Exhaust Pipe', '2', '500', '081220221670535337.jpg', '1', 'cash on delivery', '2022-12-17 14:15:31', '2022-12-17 14:15:31'),
(11, 'abcd', 'abcd@gmail.com', NULL, '4', 'Tire', '1', '300', '081220221670541784.jpg', '8', 'cash on delivery', '2022-12-17 19:26:18', '2022-12-17 19:26:18'),
(15, 'abcd', 'abcd@gmail.com', NULL, '4', 'Car body cover', '1', '1000', '081220221670541639.jpg', '7', 'cash on delivery', '2022-12-17 19:37:35', '2022-12-17 19:37:35'),
(16, 'car2', 'abcd@gmail.com', NULL, '4', 'car2', '1', '400', '181220221671326282.jpg', '2', 'cash on delivery', '2022-12-17 19:39:25', '2022-12-17 19:39:25'),
(17, 'abcd', 'abcd@gmail.com', NULL, '4', 'seat cover', '1', '1000', '111220221670738236.jpg', '10', 'cash on delivery', '2022-12-17 19:39:25', '2022-12-17 19:39:25'),
(18, 'abcd', 'abcd@gmail.com', NULL, '4', 'Air filter', '1', '300', '081220221670541064.jpg', '2', 'cash on delivery', '2022-12-18 00:58:42', '2022-12-18 00:58:42'),
(19, 'abcd', 'abcd@gmail.com', NULL, '4', 'Spark plug', '500', '100', '081220221670541160.jpg', '4', 'cash on delivery', '2022-12-18 00:59:49', '2022-12-18 00:59:49');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Exhaust Pipe', '500', '081220221670535337.jpg', '1', '2022-12-08 15:35:37', '2022-12-11 00:41:41'),
(2, 1, 'Air filter', '300', '081220221670541064.jpg', '1', '2022-12-08 17:11:04', '2022-12-08 17:11:04'),
(4, 2, 'Spark plug', '100', '081220221670541160.jpg', '1', '2022-12-08 17:12:40', '2022-12-08 17:12:40'),
(5, 2, 'Steering Wheel cover', '150', '081220221670541193.jpg', '1', '2022-12-08 17:13:13', '2022-12-08 23:28:46'),
(6, 1, 'Gear', '100', '081220221670541591.jpg', '1', '2022-12-08 17:19:51', '2022-12-08 17:19:51'),
(7, 2, 'Car body cover', '1000', '081220221670541639.jpg', '1', '2022-12-08 17:20:39', '2022-12-08 17:20:39'),
(8, 2, 'Tire', '300', '081220221670541784.jpg', '1', '2022-12-08 17:23:04', '2022-12-08 17:23:04'),
(9, 1, 'Battery', '700', '081220221670541920.jpg', '1', '2022-12-08 17:25:20', '2022-12-08 17:25:20'),
(10, 1, 'seat cover', '1000', '111220221670738236.jpg', '1', '2022-12-10 23:57:16', '2022-12-10 23:57:16'),
(12, 1, 'brake', '200', '181220221671327749.jpg', '1', '2022-12-17 19:42:29', '2022-12-17 19:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `phone`, `address`, `national_id`, `gender`, `dob`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'abcd', '123456', '64,mohakhali', '4567898754', 'Female', NULL, NULL, '2022-12-15 17:30:09', '2022-12-15 17:30:09');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$9C.PblmWaHFnajO0WdfOdemMj1fP/YyX0ZvflezRC7QtiVcaw.eyu', 'admin', NULL, NULL, NULL),
(2, 'niladri', 'niladri@gmail.com', NULL, '$2y$10$hIymnJ6VyBD2..R1oTT25emJVNvdf10ultQ/iKkYoF3hzqPs1Gvuy', 'user', NULL, '2022-12-16 09:36:49', '2022-12-16 09:36:49'),
(4, 'abcd', 'abcd@gmail.com', NULL, '$2y$10$MdaU2bpTmGMoF94pxOlMN.8gvOVM7PbYH4Kk6KO70bGyzNYT8Kvd2', 'user', NULL, '2022-12-17 10:39:30', '2022-12-17 10:39:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assembles`
--
ALTER TABLE `assembles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homesers`
--
ALTER TABLE `homesers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_national_id_unique` (`national_id`),
  ADD UNIQUE KEY `profiles_phone_unique` (`phone`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `assembles`
--
ALTER TABLE `assembles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homesers`
--
ALTER TABLE `homesers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
