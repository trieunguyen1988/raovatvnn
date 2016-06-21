-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: raovat
-- ------------------------------------------------------
-- Server version	5.5.5-10.0.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `rv_admin`
--

DROP TABLE IF EXISTS `rv_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_username_unique` (`username`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_admin`
--

LOCK TABLES `rv_admin` WRITE;
/*!40000 ALTER TABLE `rv_admin` DISABLE KEYS */;
INSERT INTO `rv_admin` VALUES (1,'trieunn','$2y$10$TxL14Ym/ei5/czkAmYyAkucIHdOlEwJ5hI.kjRRazlOJI8KelsFYO','trieu.nguyennhu@gmail.com','Administrator','1','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,NULL);
/*!40000 ALTER TABLE `rv_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_admin_copy`
--

DROP TABLE IF EXISTS `rv_admin_copy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_admin_copy` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '0',
  `last_login_time` datetime DEFAULT '0000-00-00 00:00:00',
  `create_date` datetime DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime DEFAULT '0000-00-00 00:00:00',
  `block_flg` tinyint(1) DEFAULT '0',
  `delete_flg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_admin_copy`
--

LOCK TABLES `rv_admin_copy` WRITE;
/*!40000 ALTER TABLE `rv_admin_copy` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_admin_copy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_admins`
--

DROP TABLE IF EXISTS `rv_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_admins` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admins_username_unique` (`username`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_admins`
--

LOCK TABLES `rv_admins` WRITE;
/*!40000 ALTER TABLE `rv_admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_admins_role`
--

DROP TABLE IF EXISTS `rv_admins_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_admins_role` (
  `admins_role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admins_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_admins_role`
--

LOCK TABLES `rv_admins_role` WRITE;
/*!40000 ALTER TABLE `rv_admins_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_admins_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_attribute`
--

DROP TABLE IF EXISTS `rv_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_attribute` (
  `attribute_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `attribute_group_id` int(11) NOT NULL DEFAULT '0',
  `attribute_key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `attribute_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `attribute_value` text COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_attribute`
--

LOCK TABLES `rv_attribute` WRITE;
/*!40000 ALTER TABLE `rv_attribute` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_attribute_group`
--

DROP TABLE IF EXISTS `rv_attribute_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_attribute_group` (
  `attribute_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`attribute_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_attribute_group`
--

LOCK TABLES `rv_attribute_group` WRITE;
/*!40000 ALTER TABLE `rv_attribute_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_attribute_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_category`
--

DROP TABLE IF EXISTS `rv_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_category`
--

LOCK TABLES `rv_category` WRITE;
/*!40000 ALTER TABLE `rv_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_country`
--

DROP TABLE IF EXISTS `rv_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_country` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_country`
--

LOCK TABLES `rv_country` WRITE;
/*!40000 ALTER TABLE `rv_country` DISABLE KEYS */;
INSERT INTO `rv_country` VALUES (1,'Việt Nam',1,0,'2016-06-17 02:32:06','2016-06-17 02:32:06'),(2,'Mỹ',1,0,'2016-06-17 02:40:41','2016-06-17 02:40:41'),(3,'Australia',1,0,'2016-06-21 07:32:49','2016-06-21 07:32:49'),(4,'Nga',1,0,'2016-06-21 07:33:28','2016-06-21 07:33:28'),(5,'Thái Lan',1,0,'2016-06-21 07:33:33','2016-06-21 07:33:33'),(6,'Hàn Quốc',1,0,'2016-06-21 07:33:38','2016-06-21 07:33:38'),(7,'Nhật Bản',1,0,'2016-06-21 07:33:43','2016-06-21 07:33:43'),(8,'Triều Tiên',1,0,'2016-06-21 07:33:48','2016-06-21 07:33:48'),(9,'Singapore',1,0,'2016-06-21 07:34:00','2016-06-21 07:34:00'),(10,'Trung Quốc',1,0,'2016-06-21 07:34:05','2016-06-21 07:34:05'),(11,'Lào',1,0,'2016-06-21 07:34:10','2016-06-21 07:34:10'),(12,'Campuchia',1,0,'2016-06-21 07:34:16','2016-06-21 07:34:16'),(13,'Áo',1,0,'2016-06-21 07:34:28','2016-06-21 07:34:28'),(14,'Hungary',1,0,'2016-06-21 07:34:32','2016-06-21 07:34:32'),(15,'Wales',1,0,'2016-06-21 07:34:37','2016-06-21 07:34:37');
/*!40000 ALTER TABLE `rv_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_migrations`
--

DROP TABLE IF EXISTS `rv_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_migrations`
--

LOCK TABLES `rv_migrations` WRITE;
/*!40000 ALTER TABLE `rv_migrations` DISABLE KEYS */;
INSERT INTO `rv_migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_05_24_073233_create_admins_table',1),('2016_06_17_023600_create_country_table',1),('2016_06_17_023627_create_province_table',1),('2016_06_17_023719_create_admins_role_table',2),('2016_06_17_023826_create_category_table',2),('2016_06_17_023850_create_attribute_group_table',2),('2016_06_17_023856_create_attribute_table',2);
/*!40000 ALTER TABLE `rv_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_password_resets`
--

DROP TABLE IF EXISTS `rv_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_password_resets`
--

LOCK TABLES `rv_password_resets` WRITE;
/*!40000 ALTER TABLE `rv_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_province`
--

DROP TABLE IF EXISTS `rv_province`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_province` (
  `province_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL DEFAULT '0',
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `delete_flg` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_province`
--

LOCK TABLES `rv_province` WRITE;
/*!40000 ALTER TABLE `rv_province` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_province` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rv_users`
--

DROP TABLE IF EXISTS `rv_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rv_users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rv_users`
--

LOCK TABLES `rv_users` WRITE;
/*!40000 ALTER TABLE `rv_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `rv_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-21 22:28:04
