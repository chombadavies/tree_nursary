-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: tree_nursery
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Coffee Seedlings','3627.jpeg','active','2024-03-15 07:15:42','2024-03-15 07:15:42'),(2,'Tree Seedlings','57159.jpg','active','2024-03-15 07:16:18','2024-03-15 07:16:18'),(3,'Fruit Tree seedlings','5118.webp','active','2024-03-15 07:16:44','2024-03-15 07:16:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','responded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'David','chombadavies29@gmail.com','0728333742','memme','active','2024-02-27 09:36:44','2024-02-27 09:36:44'),(2,'Kanyanga','chombadavies29@gmail.com','0722234561','this is test Data','active','2024-02-27 09:39:27','2024-02-27 09:39:27'),(3,'TERESIAH WANJIKU','chombadavies29@gmail.com','0723857777','test data','active','2024-02-27 10:14:30','2024-02-27 10:14:30'),(4,'David','chombadavies29@gmail.com','0728333742','memme','active','2024-03-15 11:37:56','2024-03-15 11:37:56');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_chain_id` bigint unsigned NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,'COFFEE NUTRITION 2 final.pdf',1,'backend/manuals/COFFEE NUTRITION 2 final.pdf','active','2024-03-18 13:15:55','2024-03-18 13:15:55'),(2,'COFFEE NUTRITION 2 final.pdf',3,'backend/manuals/COFFEE NUTRITION 2 final.pdf','active','2024-03-18 13:18:12','2024-03-18 13:18:12'),(3,'COFFEE NUTRITION 2 final.pdf',19,'backend/manuals/COFFEE NUTRITION 2 final.pdf','active','2024-03-18 13:18:31','2024-03-18 13:18:31'),(4,'COFFEE NURSERY MANAGEMENT.pdf',1,'backend/manuals/COFFEE NURSERY MANAGEMENT.pdf','active','2024-03-18 13:19:05','2024-03-18 13:19:05'),(5,'COFFEE FIELD ESTABLISHMENT.pdf',1,'backend/manuals/COFFEE FIELD ESTABLISHMENT.pdf','active','2024-03-18 13:19:06','2024-03-18 13:19:06'),(6,'COFFEE NUTRITION_BOOKLET.pdf',1,'backend/manuals/COFFEE NUTRITION_BOOKLET.pdf','active','2024-03-18 13:19:06','2024-03-18 13:19:06'),(7,'Weed management in coffee 2.pdf',1,'backend/manuals/Weed management in coffee 2.pdf','active','2024-03-18 13:19:27','2024-03-18 13:19:27'),(8,'Management of Coffee Canopy.pdf',1,'backend/manuals/Management of Coffee Canopy.pdf','active','2024-03-18 13:19:57','2024-03-18 13:19:57'),(9,'Identification and Management of Coffee Berry Disease 2.pdf',1,'backend/manuals/Identification and Management of Coffee Berry Disease 2.pdf','active','2024-03-18 13:19:57','2024-03-18 13:19:57'),(10,'Identification and Management of Bacterial Blight of Coffee 2.pdf',1,'backend/manuals/Identification and Management of Bacterial Blight of Coffee 2.pdf','active','2024-03-18 13:19:58','2024-03-18 13:19:58'),(11,'IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf',1,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf','active','2024-03-18 13:20:26','2024-03-18 13:20:26'),(12,'IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf',1,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf','active','2024-03-18 13:20:27','2024-03-18 13:20:27'),(13,'IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf',1,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf','active','2024-03-18 13:20:27','2024-03-18 13:20:27'),(14,'IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf',1,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf','active','2024-03-18 13:20:27','2024-03-18 13:20:27'),(15,'IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf',1,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf','active','2024-03-18 13:20:27','2024-03-18 13:20:27'),(16,'Management of Coffee Canopy.pdf',1,'backend/manuals/Management of Coffee Canopy.pdf','active','2024-03-18 13:20:28','2024-03-18 13:20:28'),(17,'COFFEE NURSERY MANAGEMENT.pdf',3,'backend/manuals/COFFEE NURSERY MANAGEMENT.pdf','active','2024-03-18 13:29:49','2024-03-18 13:29:49'),(18,'COFFEE FIELD ESTABLISHMENT.pdf',3,'backend/manuals/COFFEE FIELD ESTABLISHMENT.pdf','active','2024-03-18 13:29:50','2024-03-18 13:29:50'),(19,'COFFEE NUTRITION_BOOKLET.pdf',3,'backend/manuals/COFFEE NUTRITION_BOOKLET.pdf','active','2024-03-18 13:29:50','2024-03-18 13:29:50'),(20,'Identification and Management of Bacterial Blight of Coffee 2.pdf',3,'backend/manuals/Identification and Management of Bacterial Blight of Coffee 2.pdf','active','2024-03-18 13:31:55','2024-03-18 13:31:55'),(21,'Weed management in coffee 2.pdf',3,'backend/manuals/Weed management in coffee 2.pdf','active','2024-03-18 13:31:56','2024-03-18 13:31:56'),(22,'IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf',3,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf','active','2024-03-18 13:32:20','2024-03-18 13:32:20'),(23,'IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf',3,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf','active','2024-03-18 13:32:20','2024-03-18 13:32:20'),(24,'Management of Coffee Canopy.pdf',3,'backend/manuals/Management of Coffee Canopy.pdf','active','2024-03-18 13:32:21','2024-03-18 13:32:21'),(25,'Identification and Management of Coffee Berry Disease 2.pdf',3,'backend/manuals/Identification and Management of Coffee Berry Disease 2.pdf','active','2024-03-18 13:32:21','2024-03-18 13:32:21'),(26,'IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf',3,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf','active','2024-03-18 13:35:16','2024-03-18 13:35:16'),(27,'IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf',3,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf','active','2024-03-18 13:35:16','2024-03-18 13:35:16'),(28,'IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf',3,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf','active','2024-03-18 13:35:16','2024-03-18 13:35:16'),(29,'COFFEE NURSERY MANAGEMENT.pdf',19,'backend/manuals/COFFEE NURSERY MANAGEMENT.pdf','active','2024-03-18 13:35:39','2024-03-18 13:35:39'),(30,'COFFEE FIELD ESTABLISHMENT.pdf',19,'backend/manuals/COFFEE FIELD ESTABLISHMENT.pdf','active','2024-03-18 13:35:39','2024-03-18 13:35:39'),(31,'COFFEE NUTRITION_BOOKLET.pdf',19,'backend/manuals/COFFEE NUTRITION_BOOKLET.pdf','active','2024-03-18 13:35:39','2024-03-18 13:35:39'),(32,'Identification and Management of Bacterial Blight of Coffee 2.pdf',19,'backend/manuals/Identification and Management of Bacterial Blight of Coffee 2.pdf','active','2024-03-18 13:36:46','2024-03-18 13:36:46'),(33,'Weed management in coffee 2.pdf',19,'backend/manuals/Weed management in coffee 2.pdf','active','2024-03-18 13:36:47','2024-03-18 13:36:47'),(34,'IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf',19,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF COFFEE BERRY DISEASE (CBD) AND COFFEE LEAF RUST (CLR)_BOOKLET.pdf','active','2024-03-18 13:37:15','2024-03-18 13:37:15'),(35,'Management of Coffee Canopy.pdf',19,'backend/manuals/Management of Coffee Canopy.pdf','active','2024-03-18 13:37:16','2024-03-18 13:37:16'),(36,'Identification and Management of Coffee Berry Disease 2.pdf',19,'backend/manuals/Identification and Management of Coffee Berry Disease 2.pdf','active','2024-03-18 13:37:16','2024-03-18 13:37:16'),(37,'IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf',19,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF FRIED EGG SCALE AND COTTONY SCALE, IN COFFEE.pdf','active','2024-03-18 13:37:33','2024-03-18 13:37:33'),(38,'IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf',19,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF ANTESTIA BUG IN COFFEE.pdf','active','2024-03-18 13:37:33','2024-03-18 13:37:33'),(39,'IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf',19,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF STAR SCALE INSECT PEST IN COFFEE.pdf','active','2024-03-18 13:37:33','2024-03-18 13:37:33'),(40,'IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf',19,'backend/manuals/IDENTIFICATION AND MANAGEMENT OF GIANT LOOPER IN COFFEE.pdf','active','2024-03-18 13:37:33','2024-03-18 13:37:33'),(41,'vocado_pestand diseases.pdf',11,'backend/manuals/vocado_pestand diseases.pdf','active','2024-03-18 13:39:06','2024-03-18 13:39:06'),(42,'mohammed-roberts-bain-2012-anthracnose-in-avocado.pdf',11,'backend/manuals/mohammed-roberts-bain-2012-anthracnose-in-avocado.pdf','active','2024-03-18 13:39:06','2024-03-18 13:39:06'),(43,'Anthracnose of Avocado.pdf',11,'backend/manuals/Anthracnose of Avocado.pdf','active','2024-03-18 13:39:07','2024-03-18 13:39:07'),(44,'avocado_production manual (1).pdf',11,'backend/manuals/avocado_production manual (1).pdf','active','2024-03-18 13:39:07','2024-03-18 13:39:07'),(45,'papaw production manual-1.pdf',11,'backend/manuals/papaw production manual-1.pdf','active','2024-03-18 13:39:07','2024-03-18 13:39:07'),(46,'Anthracnose of Avocado.pdf',12,'backend/manuals/Anthracnose of Avocado.pdf','active','2024-03-18 13:39:32','2024-03-18 13:39:32'),(47,'avocado_production manual (1).pdf',12,'backend/manuals/avocado_production manual (1).pdf','active','2024-03-18 13:39:32','2024-03-18 13:39:32'),(48,'persea-1.pdf',12,'backend/manuals/persea-1.pdf','active','2024-03-18 13:39:32','2024-03-18 13:39:32'),(49,'papaw production manual-1.pdf',12,'backend/manuals/papaw production manual-1.pdf','active','2024-03-18 13:39:32','2024-03-18 13:39:32'),(50,'pawpaw pests and diseases-1.pdf',13,'backend/manuals/pawpaw pests and diseases-1.pdf','active','2024-03-18 13:39:54','2024-03-18 13:39:54'),(51,'papaw production manual-1.pdf',13,'backend/manuals/papaw production manual-1.pdf','active','2024-03-18 13:39:54','2024-03-18 13:39:54'),(52,'Tree_tomato_naual.pdf',10,'backend/manuals/Tree_tomato_naual.pdf','active','2024-03-18 13:40:17','2024-03-18 13:40:17'),(53,'Vitex_keniensis-1.pdf',9,'backend/manuals/Vitex_keniensis-1.pdf','active','2024-03-18 13:40:38','2024-03-18 13:40:38'),(54,'Warburgia_ugandensis_ETH.pdf',20,'backend/manuals/Warburgia_ugandensis_ETH.pdf','active','2024-03-18 13:40:52','2024-03-18 13:40:52');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_02_12_095928_create_categories_table',1),(7,'2024_02_12_100053_create_materials_table',1),(8,'2024_02_12_100106_create_value_chains_table',1),(9,'2024_02_14_040557_create_value_chains_table',2),(10,'2024_02_19_192212_create_categories_table',3),(11,'2024_02_22_080803_create_materials_table',4),(12,'2024_02_27_091518_create_feed_backs_table',5),(13,'2024_02_27_122550_create_feedback_table',6),(14,'2024_03_11_071953_add_price_and_stock_to_value_chains_table',7),(15,'2024_03_16_121707_create_variations_table',8),(16,'2024_03_16_135008_add_variation_id_to_value_chains_table',9),(17,'2024_03_17_081525_create_variation_value_chain_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'David','admin@admin.com',NULL,'$2y$12$SuyjwRhPCONEE.LiVbJf.ufi8hZZCYiTPFxQXOfninw43XBFSuFvu',NULL,'2024-02-12 10:11:24','2024-02-12 10:11:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `value_chains`
--

DROP TABLE IF EXISTS `value_chains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `value_chains` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `botanical_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_count` int DEFAULT NULL,
  `variation_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `value_chains_variation_id_foreign` (`variation_id`),
  CONSTRAINT `value_chains_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `variations` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `value_chains`
--

LOCK TABLES `value_chains` WRITE;
/*!40000 ALTER TABLE `value_chains` DISABLE KEYS */;
INSERT INTO `value_chains` VALUES (1,'Ruiru 11 Coffee Variety','Ruiru 11','33842.png','18883.jpg','<p>Ruiru 11 is a compact, high-yielding variety developed in Kenya to allow for more intensive coffee production with fewer losses from diseases and pests. this is the updated version test.Ruiru 11 is a compact, high-yielding variety developed in Kenya to allow for more intensive coffee production with fewer losses from diseases and pests.</p><p> Ruiru 11 owes its existence to a coffee berry disease (CBD) epidemic in 1968 that led to the loss of 50% of Kenya’s production. The crisis sparked action. In the 1970s, the coffee research station at Ruiru, which gives Ruiru 11 its name, began an intensive breeding program for varieties that were immune to CBD.&nbsp;</p>','<p><span style=\"font-size: 1rem;\">Botany and characteristics of the Ruiru 11</span><br></p><p>The Coffee Research Foundation named it the Ruiru 11 for two reasons. One, the cultivar was developed at Coffee Research Station in Ruiru, hence the prefix Ruiru. The code “11” denotes that it is the first cultivar developed by Kenyans and that it was released from a one-way cross; in other words, it’s an F1 hybrid. The Ruiru 11 can resist CBD and CLR and is suitable for all growing altitudes in Kenya.</p><p>Instead of yielding cherries after two years, it can produce after 1½ years. Another feature that farmers love, is the compact growth. This means that Ruiru 11 plants don’t need a lot of room to produce a good yield. Instead of 1330 trees per hectare for SL28 and SL34, they can plant 2500 trees per hectare. The farmers can scale their volumes with Ruiru 11 trees.</p><p><span style=\"font-size: 1rem;\">Besides volume output, the Ruiru 11 comes with several disadvantages. The cultivar is sensitive to water stress unless grafted on traditional varieties. And the quality is slightly inferior to the SL28, SL34, and K7 varieties.</span><br></p>',1,'active','2024-02-14 01:08:36','2024-03-18 03:30:18',80.00,419,NULL),(3,'The SL28 coffee variety','The SL28 coffee variety','8631.jpg','24941.jpg','SL28 is the flagship of Kenyan coffee varieties. Buyers flock to Nyeri because of the exceptional cup quality and high yield of the SL28.Scott Agricultural Laboratories selected the SL28 from the Tanganyika Drought Resistant variety in 1931 – a cultivar you can lead back to the Bourbon variety. The SL prefix is an acronym for Scott Agricultural Laboratories, and the 28 is the serial number.<br>','<h2 style=\"text-align: left; margin-right: auto; margin-bottom: 20px; margin-left: auto; line-height: 1; font-family: Adelle-Light, Arial, sans-serif; position: relative; cursor: default; color: rgb(51, 71, 57);\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Botany and characteristics of the SL28</span></h2><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-size: 20px; line-height: 1.6; color: rgb(51, 71, 57); font-family: &quot;GT Walsheim Pro&quot;, Arial, sans-serif;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">The SL28 is water stress tolerant because it stems from the Tanganyika drought-resistant variety. It can go without water for a long time and still bear fruit. This is because the roots of the SL28 go deep. You can even leave an SL28 tree unattended for years and revive it to full production. That is a very unique quality.</span></p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-size: 20px; line-height: 1.6; color: rgb(51, 71, 57); font-family: &quot;GT Walsheim Pro&quot;, Arial, sans-serif;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">The SL28 is a tall statured variety with green, but occasionally bronze, shoot tips. The beans are large, the yield is high, and after two years the tree bears fruit. The SL28 flourishes at medium to high altitudes ranging from 1500 to 1700 m.a.s.l. or above. Agronomists recommend a plant density of 1330 trees per hectare to ensure high quality.</span></p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-size: 20px; line-height: 1.6; color: rgb(51, 71, 57); font-family: &quot;GT Walsheim Pro&quot;, Arial, sans-serif;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">But besides the high cup quality, the SL28 has some downsides as well. The SL28 variety is susceptible (sensitive) towards all major coffee diseases; Coffee Berry Disease (CBD), Coffee Leaf Rust (CLR), and Bacterial Blight of Coffee (BBC). The diseases are a constant threat to Kenya’s most beloved cultivar.</span></p>',1,'active','2024-02-27 11:07:52','2024-03-16 08:20:15',50.00,300,NULL),(4,'Muiri Tree','Prunus Africana','19400.jpg','25279.jpeg','Prunus africana, the African cherry,[1] has a wide distribution in Africa, occurring in montane regions of central and southern Africa and on the islands of Bioko, São-Tomé, Grande Comore, and Madagascar.[5] It can be found at 900–3,400 m (3,000–10,000 ft) above sea level. It is a canopy tree 30–40 m in height, and is the tallest member of Prunus. Large-diameter trees have impressive, spreading crowns. It requires a moist climate, 900–3,400 mm (35–130 in) annual rainfall, and is moderately frost-tolerant. Africana appears to be a light-demanding, secondary-forest species.','Prunus africana, the African cherry,[1] has a wide distribution in Africa, occurring in montane regions of central and southern Africa and on the islands of Bioko, São-Tomé, Grande Comore, and Madagascar.[5] It can be found at 900–3,400 m (3,000–10,000 ft) above sea level. It is a canopy tree 30–40 m in height and is the tallest member of Prunus. Large-diameter trees have impressive, spreading crowns. It requires a moist climate, 900–3,400 mm (35–130 in) annual rainfall, and is moderately frost-tolerant. Africana appears to be a light-demanding, secondary-forest species.',2,'active','2024-02-29 10:31:53','2024-03-11 05:01:36',250.00,0,NULL),(5,'Kiuu Tree','Markhamia lutea','51346.jpg','68355.jpeg','Markhamia lutea, the Nile tulip, Nile trumpet or siala tree is a tree species of the family Bignoniaceae,[2] native to eastern Africa and cultivated for its large bright yellow flowers. It is related to the African tulip tree. Native to Africa, Markhamia was named in the honour of Clements Markham (1830-1916), who worked in India.&nbsp;','An evergreen small tree that grows to 4–5 m in height outside of native zones, although it can reach more than 10 m in its zones of origin. Leaves, of 20–30 cm in length, normally arranged in groups in the ends of the branches. Flowers in terminal clusters. They are trumpet shaped, yellow in colour, with orange-reddish spots in the throat. They measure 5–6 cm in length. Fruit is a capsule, of up to 70 cm in length, with abundant winged seeds. It is propagated by seeds.',2,'active','2024-03-01 04:13:30','2024-03-11 05:01:52',200.00,0,NULL),(6,'Afrocarpus falcatus','Afrocarpus falcatus','3619.jpg','8826.jpg','This is an evergreen conifer often growing up to about 45 meters tall, but known to reach 60 m.At higher elevations and in exposed, coastal habitats it rarely exceeds 25 m tall.[1] The trunk can be 2 to 3 m wide and is gray-brown to reddish. It is smooth and ridged on young stems, but increasingly flaky on older trunks.','The leaves are arranged in spirals on the branches. They are small and narrow, up to 4.5 cm long by about 6 mm wide. They are green to yellowish, hairless, and leathery and somewhat waxy in texture. It is a dioecious species, with male and female structures on separate plants. The male cone is brown with spiraling scales and measures 5 to 15 mm long by 3 mm wide. It grows from the leaf axils. The female cone has one scale bearing one seed about 1 to 2 cm long. The gray-green seed is drupe-like with a woody coat covered in a fleshy, resinous skin.',2,'active','2024-03-01 04:33:33','2024-03-11 05:02:20',300.00,0,NULL),(7,'podocarpus milanjianus','podocarpus milanjianus','95866.jpg','64427.jpg','<div>Podocarpus is a genus of conifers, the most numerous and widely distributed of the podocarp family, the Podocarpaceae. The name comes from Greek πούς (poús, \"foot\") + καρπός (karpós, \"fruit\"). Podocarpus species are evergreen shrubs or trees, usually from 1 to 25 m (3 to 82 ft) tall, known to reach 40 m (130 ft) at times. The cones have two to five fused cone scales, which form a fleshy, berry-like, brightly colored receptacle at maturity.</div><div><br></div><div> The fleshy cones attract birds, which then eat the cones and disperse the seeds in their droppings. About 97 to 107 species are placed in the genus depending on the circumscription of the species.</div><div>Species are cultivated as ornamental plants for parks and large gardens. The cultivar \'County Park Fire\' has won the Royal Horticultural Society\'s Award of Garden Merit.</div>','<div>Podocarpus species are evergreen woody plants. They are generally trees, but may also be shrubs.[1] The trees can reach a height of 40 meters at their tallest.[3] Some shrubby species have a decumbent growth habit. The primary branches form pseudo whorls around the trunk. The bark can be scaly or fibrous and peeling with vertical strips. Terminal buds are distinctive with bud scales that are often imbricate and can be spreading.[1]</div><div><br></div><div>The leaves are simple and flattened, and may be sessile or short petiolate. The phyllotaxis or leaf arrangement is spiral and may be subopposite on some shoots.[1][9] The leaves are usually linear-lanceolate or linear-elliptic in shape, though they can be broader-lanceolate, ovate, or nearly elliptic in some species.[1][3][9] Juvenile leaves are often larger than adult leaves, though similar in shape.[9] The leaves are coriaceous and have a distinct midrib. The stomata are usually restricted to the abaxial or underside of the leaf, forming two stomatal bands around the midrib.[1]</div><div><br></div><div>Podocarpus spp. are generally dioecious, with the male pollen cones and female seed cones borne on separate individual plants, but some species may be monoecious. The cones develop from axillary buds, and may be solitary or form clusters.</div>',2,'active','2024-03-09 06:31:35','2024-03-18 14:17:32',300.00,0,NULL),(9,'Vitex keniensis (Meru oak)','Vitex keniensis (Meru oak)','1653.jpg','26364.jpeg','<div>local names:</div><div>&nbsp;English (Meru oak), Swahili (mfuu), Trade name (meru oak) Vitex keniensis is a tree 12-30 m tall, up to 1.8 (max. 3) m in diameter; bole 12-18 m; bark very thin, rough and slightly fissured; slash creamy-yellow turning dirty green; stems, petiole and leaf venation beneath with long shaggy indumentum.</div><div>Leaves 5-foliolate; leaflets obovate 5.5-1.7 x 3.2-8.5 cm, broadly rounded to obtusely acuminate at the apex, cuneate to rounded at the base, coriaceous, sparsely puberuluos above, paler beneath and completely covered with soft ochraceous tomentum and glands; petiole 13.5-17 cm long; petiolules absent. Cymes ochraceus, tomentose, somewhat lax, forming axillary panicles up to 12 cm long, 24 cm wide.</div><div><br></div><div>Flowers small, 7-8 mm long, white or purplish, with largest lobe dark mauve, in axillary dichasia 12-18 cm long.</div>','<br><div>A fairly fast-growing tree. Coppicing is practised. The crop may reach a mean thinning cycle of 3-5 years. It might be justifiable to thin the crop down to 200 stems/ha or fewer and leave it to grow to age 45.</div><div>Orthodox seed storage behaviour. Seeds tolerate desiccation to 8.5% mc. Viability can be maintained for at least 1 year in hermetic storage at 3 deg. C with 5.5-9.5% mc. There are about 2 500 seeds/kg.</div><div>Common in moist evergreen forest and on thicketed rocky hills.</div><div>Seedlings are an ideal method of propagation. Seed germination is low and sporadic, up to 40% after 9 weeks. Dry fruit, and then rub over a wire mesh to remove pulp. Dry in the shade. Pretreatment is not necessary, but soaking in cold water for 24 hours may improve germination.</div><div>&nbsp;The fruit is edible but usually eaten only in an emergency.</div><div>V. keniensis is a suitable source of firewood.</div><div>Timber: Wood is pale greyish-brown, coarse-textured with well-marked growth zones and often with a wavy grain figure; seasons well. The heartwood of trees over 60 cm in diameter is often dark and very decorative. The timber is hard and durable, very pale and similar to teak. It works easily and is used for cabinet work, panelling, veneer, furniture and coffin boards.</div>',2,'active','2024-03-09 07:23:29','2024-03-18 13:43:15',580.00,47,NULL),(10,'Tree Tomato','Tamarillo','15264.webp','74217.jpg','<div>Tamarillo, best known by the name Tree Tomato in Kenya is a fast-growing tree belonging to the Solanaceae family, which grows up to approximately 5 meters.&nbsp;<span style=\"font-size: 1rem;\">The tree usually forms a single upright trunk with lateral branches and flowers and fruits hang from the lateral branches. The leaves are large, simple, and perennial and have a strong pungent smell while the flowers are pink-white and form clusters of 10-50 flowers. They produce 1 to 6 fruits per cluster.</span></div><div><br></div><div>In Kenya, tree tomato is grown in Migori, Kisii, Kakamega, Meru, Murang’a, Embu, Nyeri, Nyandarua, and Kericho, among others.&nbsp;<span style=\"font-size: 1rem;\">Areas, where citrus is cultivated, provide good conditions for tree tomatoes.&nbsp;</span><span style=\"font-size: 1rem;\">The fruit is a many-seeded berry and egg-shaped, which looks like a medium-sized tomato, although it is not a true tomato.</span></div><div><br></div>','<p>Fruits can be eaten fresh by scooping the flesh from halved pieces.&nbsp;<span style=\"font-size: 1rem;\">For other uses, the skin must be removed which is easily done by pouring boiling water over the fruits and letting it stand for about 5 minutes before peeling.</span></p><p><span style=\"font-size: 1rem;\">The tree tomato flesh can be added to stews to make unique flavor and the fruits are tasty and decorative in salads making appetizing desserts.&nbsp;</span><span style=\"font-size: 1rem;\">Fresh tree tomato is often blended with sugar and water to make refreshing juice.&nbsp;</span><span style=\"font-size: 1rem;\">Peak production is reached after 3-6 years depending on the cultivar, and the life expectancy of the crop is about 12 years.</span><br></p>',3,'active','2024-03-10 06:54:38','2024-03-11 04:58:42',200.00,12,NULL),(11,'Hass Avocado','Hass Avocado','37088.jpg','48315.webp','<div>Are you an Avocado farmer looking for a Hass avocado farming guide to increase yields in Kenya? Is your Hass avocado farm infested with pests and diseases? If yes, this guide will help you create a profitable farming venture. The guide will also help you identify pests, diseases, and the best fertilizer to increase yields by at least 30%.</div><div><br></div><div><b>History of Avocado Farming in Kenya</b></div><div>Avocados are evergreen trees that thrive best in subtropical and tropical regions. The fruit is also one of the most cultivated species in the world and is native to Mexico and South America. The fruit was introduced to other parts of the world in the 18th -19th century. The scientific name of Avocados is Persea Americana L.</div><div><br></div><div>Avocados were introduced in the country by the Portuguese during the 18th century. By 1939, improved varieties such as the Lula, Nabal, Puebla, and Linda had already been introduced.</div>','<div>In Kenya, avocados are grown for the local market, but varieties such as the Hass are produced for export. The fruit contains minerals such as vitamins A, B1, B2, C, and D. The first commercial Avocado orchard was set up in 1923 by the Anderson family in present-day Kitale. Currently, the family grows the fruit on a 200-acre land around Mt Elgon.</div><div><br></div><div>Members of the family are also members of the Avocado Society of Kenya. The society’s work is to promote Avocado growth in the country and make it profitable for its members. Kenya has exported more than 20,000 tonnes of fruits since 2003.</div>',3,'active','2024-03-10 08:19:30','2024-03-11 05:02:08',200.00,12,NULL),(12,'Persea Americana','Persea Americana.','76262.jpg','26824.jpg','<div>Persea americana is a medium to large tree, 9-20 m in height. The avocado is classified as an evergreen, although some varieties lose their leaves for a short time before flowering. The tree canopy ranges from low, dense, and symmetrical to upright and asymmetrical.&nbsp;</div><div><br></div><div>Leaves are 7-41 cm in length and variable in shape (elliptic, oval, lanceolate). They are often pubescent and reddish when young, becoming smooth, leathery, and dark green when mature.&nbsp;<span style=\"font-size: 1rem;\">Flowers are yellowish green, and 1-1.3 cm in diameter. The many-flowered inflorescences are borne in a pseudo-terminal position. The central axis of the inflorescence terminates in a shoot.&nbsp;</span></div>','The fruit is a berry, consisting of a single large seed, surrounded by a buttery pulp. It contains 3-30% oil (Florida varieties range from 3-15%). The skin is variable in thickness and texture. Fruit colour at maturity is green, black, purple or reddish, depending on variety. Fruit shape ranges from spherical to pyriform, and weigh up to 2.3 kg.',3,'active','2024-03-10 09:22:31','2024-03-11 05:00:58',70.00,14,NULL),(13,'Pawpaw','Carica papaya','59207.jpg','10174.webp','<div>Pawpaw (Carica papaya L.) is a popular tropical American fruit. It is commonly cultivated for its small to large melon-like fruit.</div><div><br></div><div>The type of inflorescence produced by papaya trees reflects whether the tree is male, female, or hermaphrodite. Male trees have many flowers on long, pendulous panicles, whereas female trees have solitary flowers or clusters of a few yellow-green flowers.</div>','<div>The papaya fruit is a large fleshy berry with smooth green skin that turns yellow or orange when ripe. The fruit\'s flesh is thick and succulent, ranging in color from yellow to red or orange. Many black wrinkled seeds are present in the fruit.&nbsp;</div><div><br></div><div>Papaya trees can live for up to 25 years and grow to a height of 2-10 m (6.6-33 ft). To ensure maximum productivity, plantations are typically replaced every three years.&nbsp;<span style=\"font-size: 1rem;\">Papaya, also known as pawpaw, is thought to have originated in the Caribbean region of Central America.</span></div>',3,'active','2024-03-10 13:15:51','2024-03-11 05:01:14',100.00,85,NULL),(19,'Grafted Ruiru 11','Grafted Ruiru 11','86178.jpg','54452.jpg','Kenya old SL34, SL28 as well as KS7 varieties have been in the country since colonial days but CRI can now boast of new varieties Ruiru 11 and Batian that have restored confidence in Kenyan Coffee farmers after their release due to their being drought tolerant, improving production and also suitable for all growing altitudes in the Country.','<div>peaking to KNA at the CRI in Ruiru, Dr. Elijah Gichuru, the Institute Director noted specifically that the new varieties that is Batian and Ruiru 11 are also resistant to two main coffee diseases in Kenya, that is coffee berry disease and coffee leaf rust and therefore conversion of the new to the old would see farmers continue harvesting from some old stems even as they place the new ones to the point of bearing some berries.</div><div><br></div><div>“These new varieties that we have developed can be used to convert the old ones into the new varieties by grafting on top of the old stems as a process of changing of cycle,” he said.</div><div><span style=\"font-size: 1rem;\">Gichuru said that a farmer who already has the varieties in place, normally their first option would be to re-plant but this takes a lot of investment in terms of economy such as uprooting, buying the seedlings, digging new holes and also ensuring manure and much more making the plant take long to establish fully and thus making a farmer wait for almost three years for it to mature.</span><br></div><div><br></div><div>“Should a farmer have the old varieties that don’t have issues with the stems, it is still healthy, it is still ready for conversion for future and while converting to rejuvenate the plant, one will need to incorporate grafting so that the new generation of the canopies is no longer the old variety susceptible to diseases but a resistant plant which now saves you around 30 percent of the cost of production because it will not require spraying against diseases,”</div>',1,'active','2024-03-17 07:49:52','2024-03-17 07:49:52',60.00,44,NULL),(20,'Warburgia ugandensis','Warburgia ugandensis','92479.jpeg','57723.jpg','<i>Warburgia ugandensis,</i> also known as Ugandan green heart or simply \r\ngreen heart tree, is a species of evergreen tree native to East Africa. \r\nCountries in which the plant species is found include Kenya, Tanzania \r\nand Uganda. The wood is resistant to insect attack[1] and very strong. \r\nIt was commonly used for the yoke pole of ox-wagons, the Dissel boom.','Early Indian immigrants to Kenya, working on \r\nthe construction of the railway, used the leaves to flavor their curries\r\n before the chili plant was commonly introduced. The flavor is hot and \r\nsubtly different from the chilies.&nbsp;\r\n                        \r\n                      \r\n                      \r\n                        <p></p><div>Extracts of W. ugandensis have been \r\nreported to show some antimalarial, antifungal, and antibacterial \r\nproperties in vitro or in animal models.</div><div>Unsustainable overharvesting of the bark reduced the population of the <i>longifolia </i>subspecies\r\n to the Rondo Forest Reserve in Tanzania, which prompted the IUCN to \r\nlist it as vulnerable in its Red List of Threatened Species.</div>',2,'active','2024-03-18 10:43:41','2024-03-18 10:43:41',400.00,24,NULL);
/*!40000 ALTER TABLE `value_chains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variation_value_chain`
--

DROP TABLE IF EXISTS `variation_value_chain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `variation_value_chain` (
  `value_chain_id` bigint unsigned NOT NULL,
  `variation_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`value_chain_id`,`variation_id`),
  KEY `variation_value_chain_variation_id_foreign` (`variation_id`),
  CONSTRAINT `variation_value_chain_value_chain_id_foreign` FOREIGN KEY (`value_chain_id`) REFERENCES `value_chains` (`id`) ON DELETE CASCADE,
  CONSTRAINT `variation_value_chain_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `variations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variation_value_chain`
--

LOCK TABLES `variation_value_chain` WRITE;
/*!40000 ALTER TABLE `variation_value_chain` DISABLE KEYS */;
INSERT INTO `variation_value_chain` VALUES (19,1),(19,2),(10,3),(10,4);
/*!40000 ALTER TABLE `variation_value_chain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variations`
--

DROP TABLE IF EXISTS `variations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `variations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock_count` int NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variations`
--

LOCK TABLES `variations` WRITE;
/*!40000 ALTER TABLE `variations` DISABLE KEYS */;
INSERT INTO `variations` VALUES (1,'Ruiru Grafted on SL34',80.00,48,'active','2024-03-16 10:19:44','2024-03-16 10:19:44'),(2,'Ruiru Grafted on SL28',80.00,36,'active','2024-03-16 10:21:05','2024-03-16 10:21:05'),(3,'Grafted Tree-tomato',50.00,44,'active','2024-03-16 10:22:04','2024-03-16 10:22:04'),(4,'Non-Grafted Tree-tomato',50.00,42,'active','2024-03-16 10:22:29','2024-03-16 10:22:29');
/*!40000 ALTER TABLE `variations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-18 20:25:27
