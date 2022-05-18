-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 04:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ts-immo`
--

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
(17, '2022_05_04_084440_create_type_proprietes_table', 1),
(29, '2014_10_12_000000_create_users_table', 2),
(30, '2014_10_12_100000_create_password_resets_table', 2),
(31, '2019_08_19_000000_create_failed_jobs_table', 2),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(33, '2022_05_04_083519_create_proprietaires_table', 2),
(34, '2022_05_04_084430_create_regions_table', 2),
(35, '2022_05_04_084435_create_quartiers_table', 2),
(36, '2022_05_04_084442_create_types_table', 2),
(37, '2022_05_04_084444_create_proprietes_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom_proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom_proprietaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_naissance` date NOT NULL,
  `Lieu_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_piece_identite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Numero_piece_identite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proprietaires`
--

INSERT INTO `proprietaires` (`id`, `Nom_proprietaire`, `Prenom_proprietaire`, `Date_naissance`, `Lieu_naissance`, `code_piece_identite`, `Numero_piece_identite`, `Adresse`, `Email`, `genre`, `civilite`, `created_at`, `updated_at`) VALUES
(1, 'SOW', 'Cheikh', '2000-04-05', 'Dakar', '1 587 2019 01664', '25455', 'VDN Sacree Coeur', 'sow@gmail.com', 'Homme', 'Celibataire', '2022-05-12 15:23:52', '2022-05-12 15:23:52'),
(3, 'KAMA', 'Dior', '1997-05-20', 'Mbour', '2 758 1996 01664', '21055', 'Mbour 3', 'diorkama@gmail.com', 'Femme', 'Celibataire', '2022-05-18 13:56:43', '2022-05-18 13:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `proprietes`
--

CREATE TABLE `proprietes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Adresse_propriete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Superficie` int(11) NOT NULL,
  `Nbre_etage` int(11) NOT NULL,
  `proprietaire_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `quartier_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proprietes`
--

INSERT INTO `proprietes` (`id`, `Adresse_propriete`, `Superficie`, `Nbre_etage`, `proprietaire_id`, `type_id`, `quartier_id`, `created_at`, `updated_at`) VALUES
(1, 'Sacree Coeur', 5000, 15, 1, 1, 3, '2022-05-12 15:25:17', '2022-05-12 15:28:13'),
(3, 'Santhiaba Angle 12', 250, 0, 1, 3, 7, '2022-05-12 15:34:46', '2022-05-12 15:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `quartiers`
--

CREATE TABLE `quartiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Libelle_quartier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_region` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quartiers`
--

INSERT INTO `quartiers` (`id`, `Libelle_quartier`, `id_region`, `created_at`, `updated_at`) VALUES
(1, 'Almadies', 1, NULL, NULL),
(2, 'Point E', 1, NULL, NULL),
(3, 'Liberte 6 Extension', 1, NULL, NULL),
(4, 'Fann', 1, NULL, NULL),
(7, 'Hersent', 2, NULL, NULL),
(8, 'Mbour 3', 2, NULL, NULL),
(9, 'Grand Standing', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Libelle_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `Libelle_region`, `created_at`, `updated_at`) VALUES
(1, 'Dakar ', NULL, NULL),
(2, 'Thies', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `Libelle`, `created_at`, `updated_at`) VALUES
(1, 'Immeuble', NULL, NULL),
(2, 'Appartement', NULL, NULL),
(3, 'Villa', NULL, NULL),
(4, 'Duplex', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yeshua', 'yeshua@gmail.com', NULL, '$2y$10$rV0fPV/A45nf0tCOpZtH8.JtJFq6XHSybmdy7hnAKkMWytFY5ca0C', NULL, '2022-05-12 15:22:39', '2022-05-12 15:22:39'),
(2, 'Yasral', 'yasral@gmail.com', NULL, '$2y$10$IXr0Ijv/7Zmk4yunxizriO9wHL5LmZjcUMXfjtPVwbiBrH.wClYLS', NULL, '2022-05-18 14:13:07', '2022-05-18 14:13:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proprietaires_email_unique` (`Email`);

--
-- Indexes for table `proprietes`
--
ALTER TABLE `proprietes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proprietes_proprietaire_id_foreign` (`proprietaire_id`),
  ADD KEY `proprietes_type_id_foreign` (`type_id`),
  ADD KEY `proprietes_quartier_id_foreign` (`quartier_id`);

--
-- Indexes for table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quartiers_id_region_foreign` (`id_region`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proprietaires`
--
ALTER TABLE `proprietaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proprietes`
--
ALTER TABLE `proprietes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proprietes`
--
ALTER TABLE `proprietes`
  ADD CONSTRAINT `proprietes_proprietaire_id_foreign` FOREIGN KEY (`proprietaire_id`) REFERENCES `proprietaires` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proprietes_quartier_id_foreign` FOREIGN KEY (`quartier_id`) REFERENCES `quartiers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proprietes_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quartiers`
--
ALTER TABLE `quartiers`
  ADD CONSTRAINT `quartiers_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
