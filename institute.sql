-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 10:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `collects`
--

CREATE TABLE `collects` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `obtained` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `collects`
--

INSERT INTO `collects` (`id`, `course_id`, `student_id`, `obtained`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 500.00, '2016-11-11 08:39:20', '2016-11-11 08:39:20'),
(6, 3, 5, 500.00, '2016-11-12 07:08:32', '2016-11-12 07:08:32'),
(7, 5, 4, 80.00, '2016-11-12 07:09:39', '2016-11-12 07:09:39'),
(8, 1, 7, 300.00, '2016-11-12 08:10:35', '2016-11-12 08:10:35'),
(9, 5, 8, 700.00, '2016-11-12 08:11:38', '2016-11-12 08:11:38'),
(10, 5, 2, 500.00, '2016-11-12 09:11:27', '2016-11-12 09:11:27'),
(12, 5, 3, 500.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseand_students`
--

CREATE TABLE `courseand_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courseand_students`
--

INSERT INTO `courseand_students` (`id`, `course_id`, `student_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2016-11-10 09:14:32', '2016-11-10 09:14:32'),
(3, 5, 3, '2016-11-11 08:32:02', '2016-11-11 08:32:02'),
(4, 5, 4, '2016-11-11 08:45:45', '2016-11-11 08:45:45'),
(5, 3, 5, '2016-11-11 08:47:53', '2016-11-11 08:47:53'),
(6, 6, 6, '2016-11-11 08:52:42', '2016-11-11 08:52:42'),
(7, 1, 7, '2016-11-11 09:03:52', '2016-11-11 09:03:52'),
(8, 5, 8, '2016-11-11 09:11:08', '2016-11-11 09:11:08'),
(9, 3, 9, '2016-11-11 09:17:00', '2016-11-11 09:17:00'),
(10, 5, 10, '2016-11-11 09:19:42', '2016-11-11 09:19:42'),
(11, 5, 11, '2016-11-11 09:21:31', '2016-11-11 09:21:31'),
(12, 2, 12, '2016-11-11 09:23:04', '2016-11-11 09:23:04'),
(13, 6, 13, '2016-11-11 09:28:41', '2016-11-11 09:28:41'),
(14, 5, 2, '2016-11-12 09:11:18', '2016-11-12 09:11:18'),
(15, 10, 13, '2016-11-12 10:17:52', '2016-11-12 10:17:52'),
(17, 2, 3, '2016-11-20 03:53:16', '2016-11-20 03:53:16'),
(19, 1, 3, '2016-11-20 08:12:39', '2016-11-20 08:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `courses_names_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `course_cost` int(11) DEFAULT NULL,
  `course_room` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` tinyint(1) NOT NULL,
  `course_status` int(11) NOT NULL,
  `course_begin` date DEFAULT NULL,
  `course_end` date DEFAULT NULL,
  `course_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses_names_id`, `teacher_id`, `course_cost`, `course_room`, `result`, `course_status`, `course_begin`, `course_end`, `course_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 500, 'room 1', 0, 1, '2016-11-10', '2016-11-20', '16-18', '2016-11-10 06:24:14', '2016-11-15 06:34:55'),
(2, 2, 1, 800, 'room 2', 0, 1, '2016-11-12', '2016-12-12', '12-14', '2016-11-10 08:43:41', '2016-11-12 06:16:09'),
(3, 3, 4, 1000, 'room 3', 0, 1, '2016-11-10', '2016-12-20', '16-18', '2016-11-10 08:46:22', '2016-11-10 08:46:22'),
(5, 5, 2, 900, 'room 4', 0, 2, '2016-11-10', '2016-12-10', '14-16', '2016-11-10 08:53:29', '2016-11-13 05:55:15'),
(6, 4, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2016-11-10 08:53:52', '2016-11-10 08:53:52'),
(7, 1, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2016-11-10 08:58:27', '2016-11-10 08:58:27'),
(8, 2, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2016-11-10 08:58:35', '2016-11-10 08:58:35'),
(9, 3, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2016-11-10 08:58:44', '2016-11-10 08:58:44'),
(10, 5, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2016-11-10 08:58:57', '2016-11-10 08:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `course_components`
--

CREATE TABLE `course_components` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `course_component` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_components`
--

INSERT INTO `course_components` (`id`, `course_id`, `course_component`, `created_at`, `updated_at`) VALUES
(1, 1, ' أساسيات محاسبه', '2016-11-10 06:24:14', '2016-11-10 06:24:14'),
(3, 3, 'مايكروسوفت وييرد', '2016-11-10 08:46:22', '2016-11-10 08:46:22'),
(4, 3, 'مايكروسوفت إكسل', '2016-11-10 08:46:22', '2016-11-10 08:46:22'),
(5, 3, 'مايكروسوفت بوربوينت', '2016-11-10 08:46:22', '2016-11-10 08:46:22'),
(6, 5, 'Lectures', '2016-11-10 08:53:29', '2016-11-10 08:53:29'),
(7, 5, 'Listening', '2016-11-10 08:53:29', '2016-11-10 08:53:29'),
(8, 5, 'Visuals', '2016-11-10 08:53:29', '2016-11-10 08:53:29'),
(9, 2, 'اساسيات التسويق', '2016-11-12 06:16:10', '2016-11-12 06:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `course_names`
--

CREATE TABLE `course_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_names`
--

INSERT INTO `course_names` (`id`, `course_name`, `course_description`, `created_at`, `updated_at`) VALUES
(1, 'أساسيات المحاسبه', 'عبارة عن كورس يقدم أبسط المفاهيم المحاسبيه للراغبين في دخول عالم المحاسبه', '2016-11-10 06:23:32', '2016-11-10 06:23:32'),
(2, 'أساسيات التسويق', 'عبارة عن كورس يقدم أبسط المفاهيم التسويقية للراغبين في دخول عالم التسويق', '2016-11-10 07:56:46', '2016-11-10 07:56:46'),
(3, 'أساسيات الحاسوب', 'عبارة عن كورس يقدم أبسط المفاهيم والمصطلحات الخاصة بالحاسوب مع التطبيق علي بعض البرامج المكتبية', '2016-11-10 07:58:20', '2016-11-10 07:58:20'),
(4, 'تدريب مدربين', 'عبارة عن كورس يهدف لتأهيل مدربين أكفاء', '2016-11-10 08:39:17', '2016-11-10 08:39:17'),
(5, 'English Language', 'During this course we will be working to improve the basic things in English Language (listening , speaking , reading , writing). ', '2016-11-10 08:42:41', '2016-11-10 08:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `course_component_id` int(10) UNSIGNED NOT NULL,
  `degree` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `course_id`, `student_id`, `course_component_id`, `degree`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 1, 78.00, '2016-11-11 09:30:27', '2016-11-14 03:08:53'),
(3, 5, 3, 6, 70.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(4, 5, 3, 7, 59.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(5, 5, 3, 8, 60.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(6, 5, 4, 6, 88.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(7, 5, 4, 7, 95.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(8, 5, 4, 8, 100.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(9, 5, 8, 6, 65.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(10, 5, 8, 7, 54.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(11, 5, 8, 8, 75.00, '2016-11-11 09:31:24', '2016-11-12 11:16:23'),
(12, 5, 10, 6, 74.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(13, 5, 10, 7, 82.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(14, 5, 10, 8, 85.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(15, 5, 11, 6, 75.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(16, 5, 11, 7, 54.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(17, 5, 11, 8, 60.00, '2016-11-11 09:31:25', '2016-11-12 11:16:23'),
(18, 5, 2, 6, 90.00, '2016-11-12 11:16:24', '2016-11-12 11:16:24'),
(19, 5, 2, 7, 89.00, '2016-11-12 11:16:24', '2016-11-12 11:16:24'),
(20, 5, 2, 8, 100.00, '2016-11-12 11:16:24', '2016-11-12 11:16:24'),
(21, 3, 5, 3, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01'),
(22, 3, 5, 4, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01'),
(23, 3, 5, 5, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01'),
(24, 3, 9, 3, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01'),
(25, 3, 9, 4, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01'),
(26, 3, 9, 5, 0.00, '2016-11-13 06:29:54', '2016-11-14 02:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expense_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expense_price` double(8,2) NOT NULL,
  `expense_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `expense_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_name`, `expense_category`, `expense_price`, `expense_description`, `expense_date`, `created_at`, `updated_at`) VALUES
(1, 'techer salary', 'Other', 1200.00, 'just teacher salary', '2016-11-11', '2016-11-11 09:29:18', '2016-11-11 09:29:18'),
(2, 'techer salary', 'Other', 1200.00, 'just teacher salary', '2016-11-01', '2016-11-11 09:29:48', '2016-11-11 09:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_03_084616_create_students_table', 1),
('2016_09_03_084619_create_teachers_table', 1),
('2016_09_03_084700_create_course_names_table', 1),
('2016_09_03_084701_create_courses_table', 1),
('2016_09_03_084703_create_courseand_students_table', 1),
('2016_09_03_084731_create_course_components_table', 1),
('2016_09_05_093656_create_collects_table', 1),
('2016_09_18_124210_create_degrees_table', 1),
('2016_09_18_124217_create_results_table', 1),
('2016_09_26_065008_add_result_to_courses', 1),
('2016_10_01_124924_create_student_temps_table', 1),
('2016_10_12_121159_create_expenses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '0e0e064a92d454e6a58912318a3c8e8b2bdba268d81043a45439ef5ea099667d', '2016-11-16 03:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `total_degree` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_specialty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_educational_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_age` int(11) NOT NULL,
  `student_identity_number` int(11) NOT NULL,
  `student_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_contact_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_address`, `student_specialty`, `student_educational_level`, `student_age`, `student_identity_number`, `student_email`, `student_contact_number`, `created_at`, `updated_at`) VALUES
(2, 'Yousre Abdallah ', 'bahri', 'IT', 'High Education', 24, 2147483647, 'yousre777@asd.com', 924589761, '2016-11-10 09:14:32', '2016-11-10 09:14:32'),
(3, 'أيمن عبد العزيز', 'بحري', 'علوم حاسوب', 'تعليم عالي', 23, 2147483647, 'ayman@asd.com', 922221475, '2016-11-11 08:32:02', '2016-11-11 08:32:02'),
(4, 'محمد أحمد', 'الخرطوم', 'تسويق', 'تعليم عالي', 25, 2147483647, 'mohammedahmed@asd.com', 122456879, '2016-11-11 08:45:45', '2016-11-11 08:45:45'),
(5, 'علي عبد الله', 'امدرمان', 'تخطيط', 'تعليم عالي', 31, 2147483647, 'alioptre@asd.com', 144789556, '2016-11-11 08:47:53', '2016-11-11 08:47:53'),
(6, 'Abuobudaa Khider', 'Omderman', 'Programmer ', 'high education', 35, 2147483647, 'abuobudaa7854@asd.com', 912356987, '2016-11-11 08:52:42', '2016-11-11 08:52:42'),
(7, 'محمد خالد', 'الخرطوم', 'تسويق', 'تعليم عالي', 25, 2147483647, 'moha4567@asd.com', 928641475, '2016-11-11 09:03:52', '2016-11-11 09:03:52'),
(8, 'Karamallah Saeed', 'Khartoum', 'IT', 'high education', 31, 2147483647, 'karamallah@asd.com', 154865472, '2016-11-11 09:11:08', '2016-11-11 09:11:08'),
(9, 'محمد كمال', 'بحري', 'تخطيط', 'تعليم عالي', 24, 2147483647, 'mohamedkmal', 925887413, '2016-11-11 09:17:00', '2016-11-11 09:17:00'),
(10, 'Khansaa Omar', 'Omderman', 'CS', 'high education', 25, 2147483647, 'khansaa8769@asd.com', 966478532, '2016-11-11 09:19:42', '2016-11-11 09:19:42'),
(11, 'Heba Ahmed', 'Khartoum', 'IT', 'high education', 24, 2147483647, 'hebaasew@asd.com', 912574821, '2016-11-11 09:21:31', '2016-11-11 09:21:31'),
(12, 'Omar Abdallah', 'Bahri', 'Programmer ', 'high education', 25, 2147483647, 'omar8796@asd.com', 904751369, '2016-11-11 09:23:04', '2016-11-11 09:23:04'),
(13, 'Yousof Ali', 'Khartoum', 'IT', 'high education', 31, 2147483647, 'yousof91@asd.com', 141785423, '2016-11-11 09:28:41', '2016-11-11 09:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `student_temps`
--

CREATE TABLE `student_temps` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_contact_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_identity_number` int(11) NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_contact_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `teacher_address`, `teacher_identity_number`, `teacher_email`, `teacher_contact_number`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Ali', 'khartoum', 2147483647, 'ahmed154@asd.com', 918765565, '2016-11-10 06:21:46', '2016-11-10 06:21:46'),
(2, 'Mohamed Hassan', 'Omderman', 2147483647, 'mohhass@asd,com', 912547964, '2016-11-10 06:34:18', '2016-11-10 06:34:18'),
(3, 'Osamn Abdullah', 'Khartoum', 2147483647, 'osoab@asd.com', 925478963, '2016-11-10 06:36:04', '2016-11-10 06:36:04'),
(4, 'Kamal Azhari', 'Bahri', 2147483647, 'kamal67@asd.com', 125478963, '2016-11-10 06:40:16', '2016-11-10 06:40:16'),
(5, 'Adam Omran', 'Khartoum', 2147483647, 'adamomran@asd.com', 912358777, '2016-11-11 08:43:33', '2016-11-11 08:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `role` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'default.jpg', 1, '$2y$10$HXipF6TfoUQW1LPFDaCx3uUok1yJECD3u6S9JX6g/9F/MHt0EgC66', 'JxxRycfXFfpFEeWGCet0tuOsulixRA6qFuKpJP1kX4MiQRWIbmJLu6o4HNRe', NULL, '2016-11-22 05:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collects`
--
ALTER TABLE `collects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collects_course_id_foreign` (`course_id`),
  ADD KEY `collects_student_id_foreign` (`student_id`);

--
-- Indexes for table `courseand_students`
--
ALTER TABLE `courseand_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseand_students_course_id_foreign` (`course_id`),
  ADD KEY `courseand_students_student_id_foreign` (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_courses_names_id_foreign` (`courses_names_id`),
  ADD KEY `courses_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `course_components`
--
ALTER TABLE `course_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_components_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_names`
--
ALTER TABLE `course_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `degrees_course_id_foreign` (`course_id`),
  ADD KEY `degrees_student_id_foreign` (`student_id`),
  ADD KEY `degrees_course_component_id_foreign` (`course_component_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_course_id_foreign` (`course_id`),
  ADD KEY `results_student_id_foreign` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_email_unique` (`student_email`);

--
-- Indexes for table `student_temps`
--
ALTER TABLE `student_temps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_temps_course_id_foreign` (`course_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_teacher_email_unique` (`teacher_email`);

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
-- AUTO_INCREMENT for table `collects`
--
ALTER TABLE `collects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `courseand_students`
--
ALTER TABLE `courseand_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `course_components`
--
ALTER TABLE `course_components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `course_names`
--
ALTER TABLE `course_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `student_temps`
--
ALTER TABLE `student_temps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collects`
--
ALTER TABLE `collects`
  ADD CONSTRAINT `collects_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `collects_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courseand_students`
--
ALTER TABLE `courseand_students`
  ADD CONSTRAINT `courseand_students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courseand_students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_courses_names_id_foreign` FOREIGN KEY (`courses_names_id`) REFERENCES `course_names` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_components`
--
ALTER TABLE `course_components`
  ADD CONSTRAINT `course_components_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_course_component_id_foreign` FOREIGN KEY (`course_component_id`) REFERENCES `course_components` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `degrees_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `degrees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_temps`
--
ALTER TABLE `student_temps`
  ADD CONSTRAINT `student_temps_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
