-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 06:57 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raovat`
--

-- --------------------------------------------------------

--
-- Table structure for table `rv_admin`
--

DROP TABLE IF EXISTS `rv_admin`;
CREATE TABLE `rv_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `last_login_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rv_admin`
--

INSERT INTO `rv_admin` (`admin_id`, `username`, `password`, `email`, `fullname`, `role_id`, `last_login_time`, `create_date`, `update_date`, `status`, `delete_flg`, `remember_token`) VALUES
(1, 'trieunn', '$2y$10$TxL14Ym/ei5/czkAmYyAkucIHdOlEwJ5hI.kjRRazlOJI8KelsFYO', 'trieu.nguyennhu@gmail.com', 'Administrator', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rv_admins`
--

DROP TABLE IF EXISTS `rv_admins`;
CREATE TABLE `rv_admins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `last_login_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_admins_role`
--

DROP TABLE IF EXISTS `rv_admins_role`;
CREATE TABLE `rv_admins_role` (
  `admins_role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_admin_copy`
--

DROP TABLE IF EXISTS `rv_admin_copy`;
CREATE TABLE `rv_admin_copy` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '0',
  `last_login_time` datetime DEFAULT '0000-00-00 00:00:00',
  `create_date` datetime DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime DEFAULT '0000-00-00 00:00:00',
  `block_flg` tinyint(1) DEFAULT '0',
  `delete_flg` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rv_attribute`
--

DROP TABLE IF EXISTS `rv_attribute`;
CREATE TABLE `rv_attribute` (
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `attribute_group_id` int(11) NOT NULL DEFAULT '0',
  `attribute_key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `attribute_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `attribute_value` text COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_attribute_group`
--

DROP TABLE IF EXISTS `rv_attribute_group`;
CREATE TABLE `rv_attribute_group` (
  `attribute_group_id` int(10) UNSIGNED NOT NULL,
  `attribute_group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_category`
--

DROP TABLE IF EXISTS `rv_category`;
CREATE TABLE `rv_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_country`
--

DROP TABLE IF EXISTS `rv_country`;
CREATE TABLE `rv_country` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rv_country`
--

INSERT INTO `rv_country` (`country_id`, `country_name`, `published`, `delete_flg`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', 1, 0, '2016-06-17 02:32:06', '2016-06-17 02:32:06'),
(2, 'Mỹ', 1, 0, '2016-06-17 02:40:41', '2016-06-17 02:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `rv_migrations`
--

DROP TABLE IF EXISTS `rv_migrations`;
CREATE TABLE `rv_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rv_migrations`
--

INSERT INTO `rv_migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_24_073233_create_admins_table', 1),
('2016_06_17_023600_create_country_table', 1),
('2016_06_17_023627_create_province_table', 1),
('2016_06_17_023719_create_admins_role_table', 2),
('2016_06_17_023826_create_category_table', 2),
('2016_06_17_023850_create_attribute_group_table', 2),
('2016_06_17_023856_create_attribute_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rv_password_resets`
--

DROP TABLE IF EXISTS `rv_password_resets`;
CREATE TABLE `rv_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_province`
--

DROP TABLE IF EXISTS `rv_province`;
CREATE TABLE `rv_province` (
  `province_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '0',
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rv_users`
--

DROP TABLE IF EXISTS `rv_users`;
CREATE TABLE `rv_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rv_admin`
--
ALTER TABLE `rv_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `rv_admins`
--
ALTER TABLE `rv_admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `rv_admins_role`
--
ALTER TABLE `rv_admins_role`
  ADD PRIMARY KEY (`admins_role_id`);

--
-- Indexes for table `rv_admin_copy`
--
ALTER TABLE `rv_admin_copy`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `rv_attribute`
--
ALTER TABLE `rv_attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `rv_attribute_group`
--
ALTER TABLE `rv_attribute_group`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indexes for table `rv_category`
--
ALTER TABLE `rv_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `rv_country`
--
ALTER TABLE `rv_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `rv_password_resets`
--
ALTER TABLE `rv_password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rv_province`
--
ALTER TABLE `rv_province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `rv_users`
--
ALTER TABLE `rv_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rv_admin`
--
ALTER TABLE `rv_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rv_admins`
--
ALTER TABLE `rv_admins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_admins_role`
--
ALTER TABLE `rv_admins_role`
  MODIFY `admins_role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_admin_copy`
--
ALTER TABLE `rv_admin_copy`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_attribute`
--
ALTER TABLE `rv_attribute`
  MODIFY `attribute_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_attribute_group`
--
ALTER TABLE `rv_attribute_group`
  MODIFY `attribute_group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_category`
--
ALTER TABLE `rv_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_country`
--
ALTER TABLE `rv_country`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rv_province`
--
ALTER TABLE `rv_province`
  MODIFY `province_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rv_users`
--
ALTER TABLE `rv_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
