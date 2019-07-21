-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2019 at 10:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agent`
--

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

DROP TABLE IF EXISTS `commissions`;
CREATE TABLE IF NOT EXISTS `commissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commission_types`
--

DROP TABLE IF EXISTS `commission_types`;
CREATE TABLE IF NOT EXISTS `commission_types` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_types`
--

INSERT INTO `commission_types` (`id`, `class`, `name`, `created_at`, `updated_at`) VALUES
(1, 'referral', 'stage_1', NULL, NULL),
(2, 'referral', 'stage_2', NULL, NULL),
(3, 'referral', 'annual', NULL, NULL),
(4, 'special', 'annual_bonus', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_commissions`
--

DROP TABLE IF EXISTS `company_commissions`;
CREATE TABLE IF NOT EXISTS `company_commissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `commission_type_id` smallint(5) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_commissions_commission_type_id_foreign` (`commission_type_id`),
  KEY `company_commissions_company_id_foreign` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_commissions`
--

INSERT INTO `company_commissions` (`id`, `commission_type_id`, `company_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '70.00', NULL, NULL),
(2, 2, 1, '30.00', NULL, NULL),
(3, 3, 1, '50.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pass_question` int(11) NOT NULL DEFAULT '0',
  `total_question` int(11) NOT NULL DEFAULT '0',
  `exam_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `pass_question`, `total_question`, `exam_description`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '<p style=\"text-align: center;\">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', NULL, '2019-06-19 19:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

DROP TABLE IF EXISTS `exam_records`;
CREATE TABLE IF NOT EXISTS `exam_records` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `answer_id` int(10) UNSIGNED DEFAULT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exam_records_user_id_foreign` (`user_id`),
  KEY `exam_records_question_id_foreign` (`question_id`),
  KEY `exam_records_answer_id_foreign` (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_records`
--

INSERT INTO `exam_records` (`id`, `user_id`, `question_id`, `answer_id`, `correct`, `created_at`, `updated_at`) VALUES
(131, 2, 2, 3, 1, '2019-06-19 19:36:56', '2019-06-19 20:20:21'),
(130, 1, 11, 13, 1, '2019-06-19 19:36:56', '2019-06-19 20:20:21'),
(129, 1, 8, 28, 0, '2019-06-19 19:36:56', '2019-06-19 19:37:08'),
(128, 1, 6, 8, 1, '2019-06-19 19:36:56', '2019-06-19 20:20:21'),
(127, 1, 4, 42, 0, '2019-06-19 19:36:56', '2019-06-19 19:37:03'),
(126, 1, 2, 3, 1, '2019-06-19 19:36:56', '2019-06-19 20:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2029_10_12_000000_create_users_table', 3),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_11_072459_create_user_exam_status_table', 1),
(4, '2019_06_12_042301_create_questions_table', 1),
(5, '2019_06_12_042356_create_question_options_table', 1),
(6, '2019_06_13_074027_create_user_exam_records_table', 1),
(7, '2019_06_13_082955_create_exams_table', 1),
(8, '2019_06_13_083610_create_role_table', 1),
(9, '2019_06_14_032423_create_exam_records_table', 1),
(10, '2019_06_14_040428_create_companies_table', 1),
(11, '2019_06_14_040927_create_referrals_table', 1),
(12, '2019_06_14_040957_create_commissions_table', 1),
(13, '2019_06_14_041009_create_payments_table', 1),
(14, '2019_06_14_084521_create_members_table', 1),
(15, '2019_06_17_082601_create_commission_types_table', 2),
(16, '2019_06_17_082617_create_company_commissions_table', 2),
(19, '2019_06_19_082501_alter_table_question_add_correct_wrong_column', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct` int(11) NOT NULL DEFAULT '0',
  `wrong` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`, `correct`, `wrong`) VALUES
(1, 'Apakah ciri kehidupan tersebut', '2019-06-16 19:51:26', '2019-06-19 19:09:34', 0, 0),
(2, 'Apakah fungsi zigurat dalam tamadun Mesopotamia?', '2019-06-16 19:51:44', '2019-06-19 20:20:21', 2, 0),
(3, 'Mengapakah dua orang konsul dilantik dalam sistem pemerintahan republik di Rom?', '2019-06-16 19:52:00', '2019-06-19 19:34:56', 0, 0),
(4, 'Mengapakah sukan tersebut diadakan?', '2019-06-16 19:52:03', '2019-06-19 20:20:21', 0, 2),
(5, 'Apakah X ?', '2019-06-16 19:52:07', '2019-06-19 19:34:56', 0, 0),
(6, 'Mengapakah konsep dewa-raja diamalkan dalam kerajaan awal di Asia Tenggara?', '2019-06-16 19:52:07', '2019-06-19 20:20:21', 2, 0),
(7, 'Maklumat berikut berkaitan dengan kehidupan masyarakat Arab pada Zaman Jahiliah.', '2019-06-16 19:52:12', '2019-06-19 19:34:56', 0, 0),
(8, 'Apakah ciri keperibadian yang boleh dicontohi daripada peristiwa tersebut?', '2019-06-16 19:52:15', '2019-06-19 20:20:21', 0, 2),
(9, 'Apakah faktor kemenangan tentera Islam dalam Perang Khandak pada tahun 627 Masihi?', '2019-06-16 19:52:19', '2019-06-19 19:09:34', 0, 0),
(10, 'Mengapakah orang Islam Madinah melakukan Baiah al-Ridwan pada tahun 628 M?', '2019-06-16 19:52:23', '2019-06-19 19:09:34', 0, 0),
(11, 'Mengapakah proses tersebut dilaksanakan?', '2019-06-16 19:52:28', '2019-06-19 20:20:21', 2, 0),
(12, 'Penyebaran Islam membawa kepada pertembungan kebudayaan antara tamadun dunia.\r\nApakah kesan pertembungan tersebut?', '2019-06-16 19:52:36', '2019-06-19 19:32:35', 0, 0),
(13, 'Apakah perkara yang tercatat pada batu bersurat yang ditemui di Kuala Berang Terengganu pada\r\ntahun 1899 Masihi?', '2019-06-16 19:52:41', '2019-06-16 19:52:41', 0, 0),
(14, 'Apakah persamaan tokoh tersebut?', '2019-06-16 19:52:46', '2019-06-19 19:09:34', 0, 0),
(15, 'Apakah pengajaran daripada pepatah tersebut?', '2019-06-16 19:52:56', '2019-06-19 19:32:35', 0, 0),
(16, 'Apakah faktor kemunculan bandar tersebut?', '2019-06-16 19:53:00', '2019-06-19 19:09:34', 0, 0),
(17, 'Pada zaman Revolusi Perindustrian, Akta Antipenggabungan telah diwujudkan.\r\nApakah kesan pelaksanaan akta tersebut?', '2019-06-16 19:53:01', '2019-06-16 19:53:01', 0, 0),
(18, 'Mengapakah pengeluaran tersebut meningkat', '2019-06-16 19:53:05', '2019-06-19 19:09:34', 0, 0),
(19, 'Mengapakah Lord Settlement Order diperkenalkan oleh British di Sarawak pada tahun 1933?', '2019-06-16 19:53:10', '2019-06-19 19:32:35', 0, 0),
(20, 'Antara berikut, yang manakah ciri sistem pendidikan vernakular di Tanah Melayu?', '2019-06-16 19:53:14', '2019-06-19 19:32:35', 0, 0),
(21, 'Apakah kesan pelaksanaan sistem tersebut terhadap penduduk tempatan?', '2019-06-16 19:53:18', '2019-06-19 19:34:56', 0, 0),
(22, 'Mengapakah berlaku perbalahan tersebut?', '2019-06-16 19:53:22', '2019-06-19 19:34:56', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

DROP TABLE IF EXISTS `question_options`;
CREATE TABLE IF NOT EXISTS `question_options` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_options_question_id_foreign` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `option`, `correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'Makam diraja', 1, '2019-06-16 19:51:26', '2019-06-24 02:08:29'),
(2, 1, 'Kubu pertahanan', 0, '2019-06-16 19:51:26', '2019-06-24 02:08:19'),
(3, 2, 'Mengimbangi kuasa pemerintah', 1, '2019-06-16 19:51:44', '2019-06-24 02:07:27'),
(26, 10, 'Kebenaran memasuki kota Madinah', 0, '2019-06-19 19:10:51', '2019-06-24 02:00:54'),
(5, 3, 'Mempamerkan kekuatan tentera', 1, '2019-06-16 19:52:00', '2019-06-24 02:07:00'),
(6, 4, 'Pelabuhan tentera', 1, '2019-06-16 19:52:03', '2019-06-24 02:05:42'),
(7, 5, 'Memiliki ilmu pengetahuan tinggi', 1, '2019-06-16 19:52:07', '2019-06-24 02:04:03'),
(8, 6, 'Memperkukuh kedudukan pemerintah', 1, '2019-06-16 19:52:07', '2019-06-24 02:04:49'),
(9, 7, 'Menanam bayi perempuan', 1, '2019-06-16 19:52:12', '2019-06-24 02:03:37'),
(10, 8, 'Bersemangat', 1, '2019-06-16 19:52:15', '2019-06-24 02:02:18'),
(11, 9, 'Tentera ramai', 1, '2019-06-16 19:52:19', '2019-06-24 02:01:44'),
(12, 10, 'Menawan semula kota Makkah', 1, '2019-06-16 19:52:23', '2019-06-24 02:01:01'),
(13, 11, 'Meneruskan tradisi', 1, '2019-06-16 19:52:28', '2019-06-24 02:00:25'),
(14, 12, 'Keruntuhan kelas sosial', 1, '2019-06-16 19:52:36', '2019-06-24 01:59:32'),
(15, 13, 'Undang-undang negeri', 1, '2019-06-16 19:52:41', '2019-06-24 01:58:57'),
(16, 14, 'Mengelakkan amalam hidup mewah', 1, '2019-06-16 19:52:46', '2019-06-24 01:58:07'),
(17, 15, 'Sabar dalam kehidupan', 1, '2019-06-16 19:52:56', '2019-06-24 01:57:28'),
(18, 16, 'Kekayaan sumber alam', 1, '2019-06-16 19:53:00', '2019-06-24 01:56:23'),
(19, 17, 'Wanita mendapat gaji lumayan', 1, '2019-06-16 19:53:01', '2019-06-24 01:52:42'),
(20, 18, 'Penggunaan teknologi moden', 1, '2019-06-16 19:53:05', '2019-06-24 01:51:37'),
(21, 19, 'Meningkatkan cukai pertanian', 1, '2019-06-16 19:53:10', '2019-06-24 01:50:57'),
(22, 20, 'Melantik guru dari negara asal', 1, '2019-06-16 19:53:14', '2019-06-24 01:50:06'),
(23, 21, 'Mempelbagaikan jenis tanaman', 1, '2019-06-16 19:53:18', '2019-06-24 01:49:05'),
(24, 22, 'Menguasai kawasan pertanian', 1, '2019-06-16 19:53:22', '2019-06-24 01:44:54'),
(25, 7, 'Menyembah berhala', 0, '2019-06-18 01:52:49', '2019-06-24 02:03:29'),
(27, 9, 'Senjata moden', 0, '2019-06-19 19:11:04', '2019-06-24 02:01:34'),
(28, 8, 'Kegigihan', 0, '2019-06-19 19:11:14', '2019-06-24 02:02:12'),
(29, 17, 'Gaji pekerja disekat', 0, '2019-06-19 19:11:43', '2019-06-24 01:52:36'),
(30, 16, 'Kestabilan politik', 0, '2019-06-19 19:11:53', '2019-06-24 01:53:13'),
(31, 13, 'Asal-usul negeri', 0, '2019-06-19 19:12:04', '2019-06-24 01:58:51'),
(32, 20, 'Menyatukan masyarakat pelbagai kaum', 0, '2019-06-19 19:12:14', '2019-06-24 01:49:58'),
(33, 21, 'Memajukan kawasan pendalaman', 0, '2019-06-19 19:12:22', '2019-06-24 01:49:16'),
(34, 18, 'Penglibatan pembesar tempatan', 0, '2019-06-19 19:12:32', '2019-06-24 01:51:29'),
(35, 22, 'Memonopoli kawasan perlombongan', 0, '2019-06-19 19:12:43', '2019-06-24 01:44:44'),
(36, 12, 'Kebangkitan ghazi', 0, '2019-06-19 19:13:11', '2019-06-24 01:59:24'),
(37, 14, 'Menerapkan unsur-unsur Islam', 0, '2019-06-19 19:13:24', '2019-06-24 01:57:59'),
(38, 15, 'Jangan bersikap tamak', 0, '2019-06-19 19:13:33', '2019-06-24 01:57:19'),
(39, 11, 'Menjamin taat setia', 0, '2019-06-19 19:13:48', '2019-06-24 02:00:18'),
(40, 5, 'Menjalinkan kerjasama antara kabilah', 0, '2019-06-19 19:13:59', '2019-06-24 02:03:54'),
(41, 6, 'Kepercayaan kepada alam semesta', 0, '2019-06-19 19:14:08', '2019-06-24 02:04:56'),
(42, 4, 'Pelabuhan darat', 0, '2019-06-19 19:14:20', '2019-06-24 02:05:36'),
(43, 3, 'Menghormati tuhan', 0, '2019-06-19 19:14:30', '2019-06-24 02:06:32'),
(44, 2, 'Memudahkan perluasan empayar', 0, '2019-06-19 19:14:41', '2019-06-24 02:07:21'),
(45, 19, 'Melindungi tanah peribumi', 0, '2019-06-19 19:14:52', '2019-06-24 01:50:47'),
(46, 22, 'Merebut hak memungut cukai', 0, '2019-06-24 01:48:17', '2019-06-24 01:48:17'),
(47, 22, 'Menyaingi jawatan pembesar', 0, '2019-06-24 01:48:29', '2019-06-24 01:48:29'),
(48, 21, 'Meningkatkan ekonomi dagangan', 0, '2019-06-24 01:49:31', '2019-06-24 01:49:31'),
(49, 21, 'Membangkitkan semangat nasionalisme', 0, '2019-06-24 01:49:37', '2019-06-24 01:49:37'),
(50, 20, 'Sukatan pelajaran yang sama', 0, '2019-06-24 01:50:12', '2019-06-24 01:50:12'),
(51, 20, 'Mendapat bantuan kerajaan', 0, '2019-06-24 01:50:19', '2019-06-24 01:50:19'),
(52, 19, 'Membawa masuk pelabur asing', 0, '2019-06-24 01:51:03', '2019-06-24 01:51:03'),
(53, 19, 'Memajukan kegiatan perladangan', 0, '2019-06-24 01:51:09', '2019-06-24 01:51:09'),
(54, 18, 'Pengawalan harga pasaran', 0, '2019-06-24 01:51:54', '2019-06-24 01:51:54'),
(55, 18, 'Penguatkuasaan undang-undang', 0, '2019-06-24 01:52:12', '2019-06-24 01:52:12'),
(56, 17, 'Peluang meningkatkan kemahiran', 0, '2019-06-24 01:52:50', '2019-06-24 01:52:50'),
(57, 17, 'Eksploitasi kanak-kanak dilarang', 0, '2019-06-24 01:52:58', '2019-06-24 01:52:58'),
(58, 16, 'Pusat perdagangan antarabangsa', 0, '2019-06-24 01:56:40', '2019-06-24 01:56:40'),
(59, 16, 'Perkembangan kegiatan penjelajahan', 0, '2019-06-24 01:56:51', '2019-06-24 01:56:51'),
(60, 15, 'Adil dalam tindakan', 0, '2019-06-24 01:57:36', '2019-06-24 01:57:36'),
(61, 15, 'Jauhi perkara yang dilarang', 0, '2019-06-24 01:57:42', '2019-06-24 01:57:42'),
(62, 14, 'Menggalakkan aktiviti pelayaran', 0, '2019-06-24 01:58:16', '2019-06-24 01:58:16'),
(63, 14, 'Menghapuskan pengangguran', 0, '2019-06-24 01:58:30', '2019-06-24 01:58:30'),
(64, 12, 'Kemunculan golongan Mozarab', 0, '2019-06-24 01:59:38', '2019-06-24 01:59:38'),
(65, 12, 'Kemerosotan pengaruh gereja', 0, '2019-06-24 01:59:46', '2019-06-24 01:59:46'),
(66, 11, 'Kemunculan golongan Mozarab', 0, '2019-06-24 02:00:32', '2019-06-24 02:00:32'),
(67, 11, 'Kemerosotan pengaruh gereja', 0, '2019-06-24 02:00:38', '2019-06-24 02:00:38'),
(68, 10, 'Membela kematian Uthman bin Affan', 0, '2019-06-24 02:01:08', '2019-06-24 02:01:08'),
(69, 10, 'Ancaman perang oleh orang Arab Quraisy', 0, '2019-06-24 02:01:14', '2019-06-24 02:01:14'),
(70, 9, 'Bantuan luar', 0, '2019-06-24 02:01:50', '2019-06-24 02:01:50'),
(71, 9, 'Strategi berkesan', 0, '2019-06-24 02:01:56', '2019-06-24 02:01:56'),
(72, 8, 'Bersifat pemaaf', 0, '2019-06-24 02:02:25', '2019-06-24 02:02:25'),
(73, 8, 'Kebijaksanaan', 0, '2019-06-24 02:02:35', '2019-06-24 02:02:35'),
(74, 5, 'Mengamalkan semangat asabiah', 0, '2019-06-24 02:04:23', '2019-06-24 02:04:23'),
(75, 5, 'Mempunyai susun lapis masyarakat', 0, '2019-06-24 02:04:31', '2019-06-24 02:04:31'),
(76, 6, 'Kepelbagaian amalan beragama', 0, '2019-06-24 02:05:05', '2019-06-24 02:05:05'),
(77, 6, 'Mengiktiraf golongan agama', 0, '2019-06-24 02:05:13', '2019-06-24 02:05:13'),
(78, 4, 'Pelabuhan kerajaan', 0, '2019-06-24 02:05:50', '2019-06-24 02:05:50'),
(79, 4, 'Pelabuhan perikanan', 0, '2019-06-24 02:06:00', '2019-06-24 02:06:00'),
(80, 3, 'Memilih panglima perang', 0, '2019-06-24 02:06:51', '2019-06-24 02:06:51'),
(81, 3, 'Memantapkan semangat patriotisme', 0, '2019-06-24 02:07:06', '2019-06-24 02:07:06'),
(82, 2, 'Memilih pemimpin berwibawa', 0, '2019-06-24 02:07:36', '2019-06-24 02:07:36'),
(83, 2, 'Mengelakkan penaklukan kuasa asing', 0, '2019-06-24 02:07:43', '2019-06-24 02:07:43'),
(84, 1, 'Rumah ibadat', 0, '2019-06-24 02:08:25', '2019-06-24 02:08:25'),
(85, 1, 'Rumah ibadat', 0, '2019-06-24 02:08:38', '2019-06-24 02:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
CREATE TABLE IF NOT EXISTS `referrals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `class`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'superadmin', NULL, NULL),
(2, 'admin', 'admin', NULL, NULL),
(3, 'user', 'agent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nric` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_status_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nric_unique` (`nric`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_exam_status_id_foreign` (`exam_status_id`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nric`, `email`, `name`, `password`, `exam_status_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1111111111111', 'superadmin@example.com', 'superadmin', '$2y$10$ungdXQbX7omsS9R0Z1HyQeYeLJ/1CrvUzxyWmuNd69lp6UKdjuSOe', 2, 1, NULL, NULL, '2019-06-19 19:37:13'),
(2, '222222222', 'admin@example.com', 'admin', '$2y$10$ungdXQbX7omsS9R0Z1HyQeYeLJ/1CrvUzxyWmuNd69lp6UKdjuSOe', 5, 1, NULL, NULL, '2019-06-24 00:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_exam_records`
--

DROP TABLE IF EXISTS `user_exam_records`;
CREATE TABLE IF NOT EXISTS `user_exam_records` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `total_questions` int(11) NOT NULL COMMENT 'Total number of questions answered',
  `correct_count` int(11) NOT NULL COMMENT 'Number of questions answered correctly.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_exam_records_user_id_foreign` (`user_id`),
  KEY `user_exam_records_status_id_foreign` (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_exam_status`
--

DROP TABLE IF EXISTS `user_exam_status`;
CREATE TABLE IF NOT EXISTS `user_exam_status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_exam_status_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_exam_status`
--

INSERT INTO `user_exam_status` (`id`, `class`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fail', 'fresh', NULL, NULL),
(2, 'pass', 'pass', NULL, NULL),
(3, 'pass', 'retake_pass', NULL, NULL),
(4, 'fail', 'fail', NULL, NULL),
(5, 'fail', 'reopen', NULL, NULL),
(6, 'fail', 'in_exam', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
