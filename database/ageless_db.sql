-- Ageless Laravel Database Export (MySQL / MariaDB)
-- For phpMyAdmin or MySQL CLI import

SET FOREIGN_KEY_CHECKS=0;

-- --------------------------------------------------------
-- Table structure for table `blogs`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `excerpt` varchar(500) DEFAULT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `blogs`
INSERT INTO `blogs` (`id`, `title`, `slug`, `excerpt`, `content`, `image`, `status`, `published_at`, `created_at`, `updated_at`) VALUES ('1', 'test blog ageless', 'test-blog-ageless', 'good news we are on live', 'hey good im here', 'blogs/o7HEoXu6cAEnSKZf6NbcCwjaMmYmA1sV7rUD2oVT.jpg', 'published', '2026-06-15 00:00:00', '2026-06-15 11:42:26', '2026-06-15 11:46:20');
INSERT INTO `blogs` (`id`, `title`, `slug`, `excerpt`, `content`, `image`, `status`, `published_at`, `created_at`, `updated_at`) VALUES ('2', 'Heyy New news', 'heyy-new-news', 'helloooo', 'we are hrer testttttt', 'blogs/liUd6p4vUAgY3YXUvGRtTHUV5vgFpraancNhUSCi.jpg', 'published', '2026-06-15 00:00:00', '2026-06-15 11:53:48', '2026-06-15 11:53:48');

-- --------------------------------------------------------
-- Table structure for table `contact_enquiries`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `contact_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `contact_enquiries`
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('1', 'vijay kj', 'vijay@gmail.com', '7025183885', NULL, 'helloo', '2026-06-15 12:22:42', '2026-06-15 12:22:42');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('2', 'vijay kj', 'vijay@gmail.com', '7025183885', NULL, 'helloo', '2026-06-15 12:22:43', '2026-06-15 12:22:43');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('3', 'test test', 'test@gmail.com', '12345456677', NULL, 'helooo', '2026-06-15 12:24:42', '2026-06-15 12:24:42');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('4', 'test test', 'test@gmail.com', '12345456677', NULL, 'helooo', '2026-06-15 12:24:42', '2026-06-15 12:24:42');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('5', 'dell g5', 'dell@gmail.com', '799883883', NULL, 'ttest', '2026-06-15 12:26:56', '2026-06-15 12:26:56');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('6', 'dell g5', 'dell@gmail.com', '799883883', NULL, 'ttest', '2026-06-15 12:26:56', '2026-06-15 12:26:56');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('7', 'efds fedsf', 'sdd@gmail.com', '65757567', NULL, '4564rtffgfdgd', '2026-06-15 12:27:26', '2026-06-15 12:27:26');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('8', 'efds fedsf', 'sdd@gmail.com', '65757567', NULL, '4564rtffgfdgd', '2026-06-15 12:27:26', '2026-06-15 12:27:26');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('9', 'top up', 'tp@gmail.com', '43243432', NULL, 'dsffsdf', '2026-06-15 12:30:47', '2026-06-15 12:30:47');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('10', 'ageless entertainments', 'ageless@gmail.com', '7909877332', NULL, 'fgdsgsdfs', '2026-06-15 12:35:53', '2026-06-15 12:35:53');
INSERT INTO `contact_enquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES ('11', 'q w', 'v@gmail.com', '5434234234', NULL, 'vcxvcv', '2026-06-15 12:37:41', '2026-06-15 12:37:41');

-- --------------------------------------------------------
-- Table structure for table `faqs`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `products`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Table structure for table `projects`
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SET FOREIGN_KEY_CHECKS=1;
