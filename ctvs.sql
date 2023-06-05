-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 05:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `appointment_type` tinyint(1) NOT NULL,
  `appointment_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `vaccine_name`, `patient_id`, `hospital_id`, `appointment_date`, `appointment_time`, `appointment_type`, `appointment_status`, `created_at`, `updated_at`) VALUES
(1, 'Sinovac', 1, 4, '2023-01-01', '22:01:00', 1, 1, '2023-02-01 06:37:35', '2023-02-01 06:39:21'),
(2, NULL, 2, 3, '2023-02-03', '12:30:00', 0, 1, '2023-02-03 00:50:47', '2023-02-03 00:53:04'),
(3, 'Symptoms', 5, 3, '2023-02-07', '20:00:00', 1, 1, '2023-02-03 07:58:03', '2023-02-03 07:59:13'),
(4, 'CanSino-Bio', 5, 4, '2023-02-15', '18:05:00', 1, 1, '2023-02-03 08:04:07', '2023-02-03 08:05:24'),
(5, NULL, 6, 5, '2023-02-13', '02:30:00', 0, 1, '2023-02-04 01:46:01', '2023-02-04 01:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `covid_tests`
--

CREATE TABLE `covid_tests` (
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `test_date` date NOT NULL,
  `test_result` tinyint(1) NOT NULL DEFAULT 0,
  `Recommendation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covid_tests`
--

INSERT INTO `covid_tests` (`test_id`, `appointment_id`, `test_date`, `test_result`, `Recommendation`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-02-04', 1, 'Clear', '2023-02-03 00:58:46', '2023-02-03 01:44:36'),
(2, 5, '2023-02-08', 1, 'Get Vaccination', '2023-02-04 01:56:33', '2023-02-04 01:58:09');

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `hospital_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_approval_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hospital_name`, `hospital_email`, `hospital_password`, `hospital_pic`, `hospital_address`, `hospital_city`, `hospital_approval_status`, `created_at`, `updated_at`) VALUES
(3, 'Al Khidmat', 'alkhidmat@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'maxresdefault.jpg', 'Y-6347 Sec_jdsd', 'karachi', 1, '2023-02-01 06:22:45', '2023-02-01 06:22:45'),
(4, 'Indus', 'indus@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Indus_Hospital_Korangi.jpg', 'R-6347 Sec_Gdsh', 'Lahore', 1, '2023-02-01 06:27:16', '2023-02-01 06:28:17'),
(5, 'Jinnah', 'jinnah@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'images.jpeg', 'F-643 Sec_24C', 'Karachi', 1, '2023-02-03 01:21:11', '2023-02-03 01:31:47');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_01_12_110921_create_patients_table', 1),
(20, '2023_01_12_112334_create_hospitals_table', 1),
(21, '2023_01_12_114306_create_patient_medical_histories_table', 1),
(22, '2023_01_12_120349_create_vaccination_availabilities_table', 1),
(23, '2023_01_12_124221_create_appointments_table', 1),
(24, '2023_01_17_091937_create_covid_tests_table', 1),
(25, '2023_01_21_061152_create_vaccine_statuses_table', 1),
(26, '2023_01_28_045616_add_cols_to_appointments_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_phone_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_name`, `patient_email`, `patient_password`, `patient_age`, `patient_gender`, `patient_address`, `patient_city`, `patient_phone_no`, `created_at`, `updated_at`) VALUES
(1, 'Patient1', 'patient1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 20, 'male', 'A-6347 Sec_jdsd', 'karachi', '0293736436363', '2023-02-01 06:33:58', '2023-02-01 06:33:58'),
(2, 'Ali', 'hassankhanwaseem2233@gmail.com', '25d55ad283aa400af464c76d713c07ad', 21, 'male', 'H-643 Sec_34B', 'Karachi', '03303687758', '2023-02-03 00:45:33', '2023-02-03 00:45:33'),
(3, 'Hassan khan', 'hassan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 11, 'male', 'Abc', 'Abc', '123456789', '2023-02-03 01:35:57', '2023-02-04 02:01:47'),
(4, 'Shoaib', 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12, 'male', 'Karachi', 'karachi', '0293736436363', '2023-02-03 07:42:55', '2023-02-03 07:42:55'),
(5, 'wafia', 'hammad1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12, 'female', 'Y-6347 Sec_jdsd', 'karachi', '0293736436363', '2023-02-03 07:46:03', '2023-02-03 08:01:34'),
(6, 'hassan', 'hassan1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 17, 'male', 'L-632 Sec_34-1', 'Karachi', '03157932548', '2023-02-04 01:39:15', '2023-02-04 01:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical_histories`
--

CREATE TABLE `patient_medical_histories` (
  `history_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `diseas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_of_diseas` tinyint(1) NOT NULL,
  `diseas_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'Alparslan_2_Bolum0_instagram.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_availabilities`
--

CREATE TABLE `vaccination_availabilities` (
  `vac_av_id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_available_date` date NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `vaccination_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccination_availabilities`
--

INSERT INTO `vaccination_availabilities` (`vac_av_id`, `hospital_id`, `vaccine_name`, `next_available_date`, `stock`, `vaccination_price`, `created_at`, `updated_at`) VALUES
(1, 3, 'Symptoms', '2023-02-16', 1, 100.00, '2023-02-01 06:24:17', '2023-02-01 06:24:17'),
(2, 3, 'Sinopharm', '2023-02-22', 0, 0.00, '2023-02-01 06:25:11', '2023-02-01 06:25:11'),
(3, 4, 'Sinovac', '2023-02-21', 0, 100.00, '2023-02-01 06:29:17', '2023-02-01 06:29:17'),
(4, 4, 'CanSino-Bio', '2023-02-22', 0, 0.00, '2023-02-01 06:29:47', '2023-02-01 06:29:47'),
(5, 5, 'Pfizer', '2023-02-05', 0, 0.00, '2023-02-03 01:27:19', '2023-02-03 01:27:19'),
(6, 5, 'Sinopharm', '2023-02-24', 1, 200.00, '2023-02-03 01:28:15', '2023-02-03 01:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_statuses`
--

CREATE TABLE `vaccine_statuses` (
  `v_status_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccine_statuses`
--

INSERT INTO `vaccine_statuses` (`v_status_id`, `appointment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2023-02-01 06:40:20', '2023-02-01 06:58:59'),
(2, 3, 1, '2023-02-03 07:59:55', '2023-02-03 07:59:55'),
(3, 4, 1, '2023-02-03 08:06:45', '2023-02-03 08:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_hospital_id_foreign` (`hospital_id`);

--
-- Indexes for table `covid_tests`
--
ALTER TABLE `covid_tests`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `covid_tests_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `hospitals_hospital_email_unique` (`hospital_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `patients_patient_email_unique` (`patient_email`);

--
-- Indexes for table `patient_medical_histories`
--
ALTER TABLE `patient_medical_histories`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `patient_medical_histories_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccination_availabilities`
--
ALTER TABLE `vaccination_availabilities`
  ADD PRIMARY KEY (`vac_av_id`),
  ADD KEY `vaccination_availabilities_hospital_id_foreign` (`hospital_id`);

--
-- Indexes for table `vaccine_statuses`
--
ALTER TABLE `vaccine_statuses`
  ADD PRIMARY KEY (`v_status_id`),
  ADD KEY `vaccine_statuses_appointment_id_foreign` (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `covid_tests`
--
ALTER TABLE `covid_tests`
  MODIFY `test_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospital_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_medical_histories`
--
ALTER TABLE `patient_medical_histories`
  MODIFY `history_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccination_availabilities`
--
ALTER TABLE `vaccination_availabilities`
  MODIFY `vac_av_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine_statuses`
--
ALTER TABLE `vaccine_statuses`
  MODIFY `v_status_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`hospital_id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);

--
-- Constraints for table `covid_tests`
--
ALTER TABLE `covid_tests`
  ADD CONSTRAINT `covid_tests_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`);

--
-- Constraints for table `patient_medical_histories`
--
ALTER TABLE `patient_medical_histories`
  ADD CONSTRAINT `patient_medical_histories_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);

--
-- Constraints for table `vaccination_availabilities`
--
ALTER TABLE `vaccination_availabilities`
  ADD CONSTRAINT `vaccination_availabilities_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`hospital_id`);

--
-- Constraints for table `vaccine_statuses`
--
ALTER TABLE `vaccine_statuses`
  ADD CONSTRAINT `vaccine_statuses_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`appointment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
