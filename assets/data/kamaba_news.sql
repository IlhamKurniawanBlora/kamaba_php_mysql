-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for kamaba_news
DROP DATABASE IF EXISTS `kamaba_news`;
CREATE DATABASE IF NOT EXISTS `kamaba_news` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kamaba_news`;

-- Dumping structure for table kamaba_news.activities
DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `blog_id` int NOT NULL,
  `description` text NOT NULL,
  `activity_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kamaba_news.activities: ~0 rows (approximately)
DELETE FROM `activities`;

-- Dumping structure for table kamaba_news.blogs
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kamaba_news.blogs: ~2 rows (approximately)
DELETE FROM `blogs`;
INSERT INTO `blogs` (`id`, `title`, `content`, `image_url`, `created_by`, `created_at`, `updated_at`) VALUES
	(4, 'pp', '<p>ppppp</p>', 'uploads/6783b071cdfc1.png', 4, '2025-01-12 12:07:13', '2025-01-12 20:58:48'),
	(5, 'pergerakan kamaba', '<p>pergerakan wkwk</p>', 'uploads/67841fdd724bf.jpg', 3, '2025-01-12 20:02:37', '2025-01-12 20:21:00'),
	(6, 'pp', 'ppkhh', 'uploads/6784a1ab5efcc.jpg', 4, '2025-01-13 05:16:27', '2025-01-13 05:16:27');

-- Dumping structure for table kamaba_news.events
DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `location` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `event_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_created_by` (`created_by`),
  CONSTRAINT `fk_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kamaba_news.events: ~3 rows (approximately)
DELETE FROM `events`;
INSERT INTO `events` (`id`, `title`, `description`, `location`, `image_url`, `event_date`, `created_at`, `updated_at`, `created_by`) VALUES
	(1, 'Workshop Teknologi Terbaru', 'Workshop mengenai teknologi terbaru dalam pengembangan web. yy', 'UNU Yogyakarta', NULL, '2025-01-15', '2025-01-12 12:13:16', '2025-01-12 22:08:28', 4),
	(2, 'Pentas Seni Mahasiswa', 'Acara pentas seni yang menampilkan bakat mahasiswa Blora.', 'Keraton Yogyakarta', NULL, '2025-01-20', '2025-01-12 12:13:16', '2025-01-12 22:08:45', 4),
	(4, 'pp', 'pp', 'Kontrakan kairav', NULL, '2025-01-14', '2025-01-12 20:06:08', '2025-01-12 22:08:53', 3);

-- Dumping structure for table kamaba_news.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','super_admin') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kamaba_news.users: ~2 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
	(3, 'admin', 'admin@gmail.com', '$2b$10$buaPAnsjdKOEuHmX2ftlqOfNJmoVYwyj6SGzUcnnRkIIS2GwaLsoG', 'admin', '2025-01-09 17:08:25', '2025-01-09 17:08:25'),
	(4, 'superadmin', 'superadmin@gmail.com', '$2b$10$XK7ET/4X6ZBCf3m0xgaSrOGMIq7ARFz6ogIPxrjR/JzuXQ4vQd6Ka', 'super_admin', '2025-01-09 17:11:45', '2025-01-09 17:12:09');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
