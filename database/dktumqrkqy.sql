-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `crew_information`;
CREATE TABLE `crew_information` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apt_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_Street1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_Street2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_apt_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `License_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_relations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Issueing_Authority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expiration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_Issueing_Authority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_Expiration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marital_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number_of_Dependents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Other_Dependents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Other_Income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deductions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Additional_amount_to_withold` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exemption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Business_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DBA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Federal_Tax_Classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exemption_payee_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Exemption_from_Fatcha_reporting_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State_Tax_Marital_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State_Tax_Number_of_dependents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State_Tax_Additional_Allowances` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State_Tax_Additional_Withholding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State_Tax_Total_Allowances` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `military` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Protected` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Disabled` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Conflict_of_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Union_Member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hire_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Employee_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Union` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OCC_Code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Studio/Distant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daily/Week` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shirt_Size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Guaranteed_Hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2021_07_14_030236_create_post_images_table',	1),
(5,	'2021_07_21_145325_create_crew_information_table',	1),
(6,	'2021_08_04_051334_create_contacts_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('demo1@0123456789',	'$2y$10$y6BV858mOjwMH.0uMMZsO.dZHND.7027lRHkxt0vjACqlSCR.Cnia',	'2021-09-02 08:44:05');

DROP TABLE IF EXISTS `post_images`;
CREATE TABLE `post_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkg_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_date` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` mediumtext COLLATE utf8mb4_unicode_ci,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Preffered_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Second_Phone_Number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Social_Security_Number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`Phone_Number`),
  UNIQUE KEY `users_second_phone_number_unique` (`Second_Phone_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `pkg_num`, `pkg_date`, `avatar`, `signature`, `provider_id`, `email`, `password`, `role`, `Preffered_Name`, `Phone_Number`, `Second_Phone_Number`, `DOB`, `Social_Security_Number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Amit',	'kumar',	'jais',	'1',	'2021-08-31 05:26:11',	NULL,	NULL,	NULL,	'demo@123',	'$2y$10$x9K0ZqgyCE081IyU5UevHe9.excGynK56dDike5JatmBYmmKgDIh2',	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-08-31 05:26:11',	'2021-08-31 05:26:11'),
(2,	'Amit',	NULL,	NULL,	'1',	'2021-08-31 05:42:29',	NULL,	NULL,	NULL,	'mmzbvi8216@kngusa.com',	'$2y$10$bucyQ2jFL4yDJR2rsIL52O3qHMAgLViovZFBuiUo3zAki3mhCCWom',	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-08-31 05:42:29',	'2021-08-31 05:42:29'),
(3,	'Amit',	NULL,	NULL,	'4',	'2021-08-31 06:03:50',	NULL,	NULL,	NULL,	'demo@1234',	'$2y$10$2quwDs5CXjV73yRU0PRt9OsZqVFlM9pSi0MXj/pXNKTPelmPhleeS',	'production',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-08-31 06:03:51',	'2021-08-31 06:03:51'),
(4,	'Amit',	NULL,	NULL,	'4',	'2021-08-31 06:12:24',	NULL,	NULL,	NULL,	'demo@12345',	'$2y$10$xtPIywjuLwTkpmOFq9.nUOmfG1P77QxpNlQwHqF52jHFQ0N7IsuX.',	'Producer',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-08-31 06:12:24',	'2021-08-31 06:12:24'),
(5,	'Amit',	NULL,	NULL,	'4',	'2021-08-31 06:19:16',	NULL,	NULL,	NULL,	'demo@12345678',	'$2y$10$c5M4cseYM147Z7uDqDTche0CzQosKpWz1BKuPLwrPKZ6CbqL0Hw/a',	'producer',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-08-31 06:19:16',	'2021-08-31 06:19:16'),
(6,	'demo',	NULL,	NULL,	'1',	'2021-09-02 07:14:29',	NULL,	NULL,	NULL,	'demo@123456',	'$2y$10$ynqsxOvqrqepgcliKZ2.Zev5vVtzB2ZJ1esGVa2sYjbUCTooT9vHO',	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-09-02 07:14:29',	'2021-09-02 07:14:29'),
(7,	'demo',	NULL,	NULL,	'1',	'2021-09-02 08:31:53',	NULL,	NULL,	NULL,	'demo@123456789',	'$2y$10$Day8UTyOoUUvaTMo5IhCjetc6Q.GzBx70cTa6LESiu7sRdbRPIXlm',	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-09-02 08:31:53',	'2021-09-02 08:31:53'),
(8,	'demo',	NULL,	NULL,	'1',	'2021-09-02 08:36:40',	NULL,	NULL,	NULL,	'demo@0123456789',	'$2y$10$YMHV6MF9C9Ik6I3iErw6P.M4B3CqQI2rmK6TqZYmXkkoY90tet0J.',	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-09-02 08:36:40',	'2021-09-02 08:36:40'),
(9,	'Demo',	NULL,	'Kumar',	'1',	'2021-09-02 08:41:42',	'https://graph.facebook.com/v3.3/106648495049415/picture?type=normal',	NULL,	'106648495049415',	'amitdemo253@gmail.com',	NULL,	'crew',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-09-02 08:41:42',	'2021-09-02 08:41:42'),
(10,	'demo1',	NULL,	NULL,	'4',	'2021-09-02 08:43:15',	NULL,	NULL,	NULL,	'demo1@0123456789',	'$2y$10$m0KKzScUivz7AJNc5jF8Wu/XUPSUC5oesODlYCcEBOlmpS4KEFmI6',	'producer',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2021-09-02 08:43:15',	'2021-09-02 08:43:15');

-- 2021-09-07 06:38:16
