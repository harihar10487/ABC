-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `charges`;
CREATE TABLE `charges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(44) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `service_tax` double(8,2) NOT NULL,
  `vat` double(8,2) NOT NULL,
  `ABC_company` double(8,2) NOT NULL,
  `resource_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `charges` (`id`, `name`, `amount`, `service_tax`, `vat`, `ABC_company`, `resource_amount`, `created_at`, `updated_at`) VALUES
(1,	NULL,	1000.00,	100.00,	12.00,	112.00,	888.00,	'2017-11-23 03:01:01',	'2017-11-23 03:01:01'),
(2,	NULL,	12000.00,	1200.00,	144.00,	1344.00,	10656.00,	'2017-11-23 03:01:19',	'2017-11-23 03:01:19'),
(3,	NULL,	879213.00,	87921.30,	10550.56,	98471.86,	780741.14,	'2017-11-23 03:01:37',	'2017-11-23 03:01:37'),
(4,	NULL,	100000.00,	10000.00,	1200.00,	11200.00,	88800.00,	'2017-11-23 03:06:12',	'2017-11-23 03:06:12'),
(5,	NULL,	987324.00,	98732.40,	11847.89,	110580.29,	876743.71,	'2017-11-23 03:06:33',	'2017-11-23 03:06:33'),
(6,	NULL,	534532.00,	53453.20,	6414.38,	59867.58,	474664.42,	'2017-11-23 03:06:37',	'2017-11-23 03:06:37'),
(7,	NULL,	877676.00,	87767.60,	10532.11,	98299.71,	779376.29,	'2017-11-23 03:06:42',	'2017-11-23 03:06:42'),
(8,	NULL,	786665.00,	78666.50,	9439.98,	88106.48,	698558.52,	'2017-11-23 03:06:46',	'2017-11-23 03:06:46'),
(9,	NULL,	34655.00,	3465.50,	415.86,	3881.36,	30773.64,	'2017-11-23 03:06:52',	'2017-11-23 03:06:52'),
(10,	NULL,	55555.00,	5555.50,	666.66,	6222.16,	49332.84,	'2017-11-23 03:06:59',	'2017-11-23 03:06:59'),
(11,	NULL,	650000.00,	65000.00,	7800.00,	72800.00,	577200.00,	'2017-11-23 03:07:05',	'2017-11-23 03:07:05');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2017_10_12_000000_create_charges_table',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2017-11-23 11:30:41
