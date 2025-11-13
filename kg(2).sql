-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 12, 2025 at 10:22 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kg`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`id`, `user_id`, `group`, `created_at`) VALUES
(1, 1, 'user', '2025-11-11 14:54:20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_identities`
--

CREATE TABLE `auth_identities` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `secret` varchar(255) NOT NULL,
  `secret2` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `force_reset` tinyint(1) NOT NULL DEFAULT 0,
  `last_used_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_identities`
--

INSERT INTO `auth_identities` (`id`, `user_id`, `type`, `name`, `secret`, `secret2`, `expires`, `extra`, `force_reset`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'email_password', NULL, 'gallp1@wp.pl', '$2y$12$T08mfNTdyoOUXnyDMXnZae0cVX55ZNl50WqVz.eDmvquCRrcYQ3OK', NULL, NULL, 0, '2025-11-11 21:01:22', '2025-11-11 14:54:19', '2025-11-11 21:01:22');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `user_agent`, `id_type`, `identifier`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 14:56:31', 1),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 15:33:20', 1),
(3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', NULL, '2025-11-11 15:33:37', 0),
(4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 15:33:44', 1),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 15:44:29', 1),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 15:55:35', 1),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 15:57:13', 1),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:15:30', 1),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:18:14', 1),
(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:30:18', 1),
(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:31:12', 1),
(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:32:28', 1),
(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:37:18', 1),
(14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:38:06', 1),
(15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:40:55', 1),
(16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:42:09', 1),
(17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:46:19', 1),
(18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 16:55:12', 1),
(19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 17:12:03', 1),
(20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 17:35:23', 1),
(21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 17:35:40', 1),
(22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 17:49:54', 1),
(23, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 19:14:49', 1),
(24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 19:22:12', 1),
(25, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 20:01:39', 1),
(26, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 20:05:21', 1),
(27, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 20:05:33', 1),
(28, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 20:54:01', 1),
(29, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'email_password', 'gallp1@wp.pl', 1, '2025-11-11 21:01:22', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_permissions_users`
--

CREATE TABLE `auth_permissions_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `permission` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_remember_tokens`
--

CREATE TABLE `auth_remember_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auth_token_logins`
--

CREATE TABLE `auth_token_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`) VALUES
(2, 'BuildMaster Construction'),
(3, 'LogiTrans Solutions'),
(4, 'SafeWork Industries'),
(1, 'TechCorp Sp. z o.o.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company_person`
--

CREATE TABLE `company_person` (
  `id_company` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_person`
--

INSERT INTO `company_person` (`id_company`, `id_person`, `hire_date`) VALUES
(2, 9, '2023-01-08'),
(1, 1, '2023-01-15'),
(3, 16, '2023-01-22'),
(4, 23, '2023-01-30'),
(2, 10, '2023-02-14'),
(3, 17, '2023-02-17'),
(1, 2, '2023-02-20'),
(4, 24, '2023-02-25'),
(1, 3, '2023-03-10'),
(3, 18, '2023-03-14'),
(4, 25, '2023-03-18'),
(2, 11, '2023-03-25'),
(1, 4, '2023-04-05'),
(3, 19, '2023-04-09'),
(2, 12, '2023-04-11'),
(4, 26, '2023-04-22'),
(1, 5, '2023-05-12'),
(4, 27, '2023-05-14'),
(2, 13, '2023-05-19'),
(3, 20, '2023-05-27'),
(4, 28, '2023-06-07'),
(3, 21, '2023-06-15'),
(1, 6, '2023-06-18'),
(2, 14, '2023-06-28'),
(2, 15, '2023-07-03'),
(3, 22, '2023-07-08'),
(4, 29, '2023-07-11'),
(1, 7, '2023-07-22'),
(4, 30, '2023-08-05'),
(1, 8, '2023-08-30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Dział Informatyki'),
(2, 'Dział Sprzedaży'),
(3, 'Dział Księgowości'),
(4, 'Dział Zaopatrzenia'),
(5, 'Dział Kadr'),
(6, 'Dział BHP');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_department` int(11) NOT NULL,
  `phone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `name`, `email`, `id_department`, `phone`) VALUES
(1, 'Przemysław Galicki', 'p.galicki@pec.gliwice.pl', 1, '323350149'),
(2, 'Mariusz Migda', 'm.migda@pec.gliwice.pl', 1, '323350230'),
(3, 'Jan Kowalski', 'j.kowalski@pec.gliwice.pl', 2, '123456789'),
(4, 'Anna Nowak', 'a.nowak@pec.gliwice.pl', 3, '987654321'),
(5, 'Piotr Wiśniewski', 'p.wisniewski@pec.gliwice.pl', 2, '111222333'),
(6, 'Maria Lewandowska', 'm.lewandowska@pec.gliwice.pl', 3, '444555666'),
(7, 'Tomasz Wójcik', 't.wojcik@pec.gliwice.pl', 3, '777888999'),
(8, 'Katarzyna Kamińska', 'k.kaminska@pec.gliwice.pl', 1, '123123123'),
(9, 'Marcin Zieliński', 'm.zielinski@pec.gliwice.pl', 1, '456456456'),
(10, 'Agnieszka Szymańska', 'a.szymanska@pec.gliwice.pl', 1, '789789789'),
(11, 'Robert Woźniak', 'r.wozniak@pec.gliwice.pl', 1, '321321321'),
(12, 'Magdalena Dąbrowska', 'm.dabrowska@pec.gliwice.pl', 4, '654654654'),
(13, 'Dominik Czyżyński', 'd.czyzynski@pec.gliwice.pl', 3, '323350120'),
(14, 'Jan Kowalski', 'j.kowalski33@gmail.com', 4, '32335'),
(15, 'Jacek Kamiński', 'j.kaminski@gmail.com', 2, '323350556'),
(16, 'Jan Kowalski', 'j.kowalski@gmail.com', 5, '323350668'),
(26, 'Jan Kowalski', 'j.kowalski27@gmail.com', 4, '509553563'),
(36, 'Jacek Ryżowski', 'j.ryz@gmail.com', 4, '323350268'),
(38, 'Jan Nowak', 'j.nowak11@gmail.com', 3, '509588532'),
(39, 'Jan Nowak', 'j.nowak@gmail.com', 2, '323350558'),
(40, 'Marcin Kownacki', 'm.kownacki@op.pl', 4, '32336582');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guest_entry_logs`
--

CREATE TABLE `guest_entry_logs` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `guest_company` varchar(50) NOT NULL,
  `guest_count` int(11) NOT NULL,
  `guardian` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `zone` int(11) NOT NULL,
  `entry_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `confirmation_datetime` datetime DEFAULT NULL,
  `exit_datetime` datetime DEFAULT NULL,
  `permanent` tinyint(1) DEFAULT NULL,
  `consent` int(11) DEFAULT NULL,
  `comment` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `guest_entry_logs`
--

INSERT INTO `guest_entry_logs` (`id`, `fname`, `sname`, `guest_company`, `guest_count`, `guardian`, `purpose`, `zone`, `entry_datetime`, `confirmation_datetime`, `exit_datetime`, `permanent`, `consent`, `comment`) VALUES
(1, 'Adam', 'Kowalski', 'Firma001', 4, 1, 'Wizyta', 3, '2025-10-24 08:30:15', '2025-10-24 09:45:20', '2025-10-24 16:20:10', 1, 1, 'komentarz gość firma001'),
(2, 'Anna', 'Nowak', 'TechSolutions', 2, 1, 'Spotkanie biznesowe', 2, '2025-10-25 09:15:00', '2025-10-25 09:30:45', '2025-10-25 14:45:30', 0, 1, 'Prezentacja nowego produktu'),
(3, 'Piotr', 'Wiśniewski', 'DataSystems', 1, 2, 'Serwis urządzeń', 1, '2025-10-26 07:45:20', '2025-10-26 08:00:00', '2025-10-26 15:30:15', 0, 1, 'Konserwacja serwerów'),
(4, 'Maria', 'Lewandowska', 'LogisticsPlus', 3, 1, 'Negocjacje', 4, '2025-10-27 10:00:30', '2025-10-27 10:20:15', '2025-10-28 10:15:27', 0, 1, 'Omówienie warunków dostaw'),
(5, 'Tomasz', 'Wójcik', 'SoftInnovation', 2, 3, 'Szkolenie', 2, '2025-10-28 08:00:00', '2025-10-28 08:15:30', '2025-10-28 10:31:09', 1, 1, 'Szkolenie z nowego oprogramowania'),
(6, 'Jacek', 'Kowalski', 'Microhard', 2, 3, 'sell, sell, sell', 1, '2025-10-27 14:00:59', '2025-10-28 08:25:42', '2025-10-28 12:11:03', 0, 0, 'MMXXXVIII'),
(7, 'Mao', 'Zedong', 'PRC Ltd.', 1500000001, 2, 'rewolucja kulturalna', 1, '2025-10-28 08:33:07', '2025-10-28 08:23:36', '2025-10-28 14:05:52', 1, 0, 'kill the birds           '),
(8, 'Anna', 'Burda', 'Company Ltd', 3, 8, 'sadaasda', 3, '2025-10-28 09:51:24', '2025-10-28 08:51:32', '2025-10-28 12:45:25', 0, 1, 'gdzie kommentarz2'),
(9, 'Jan', 'Nowak', 'Nowak Company', 2, 7, 'spotkanie', 1, '2025-10-28 12:52:27', '2025-10-28 12:52:41', '2025-10-28 14:05:54', 0, 0, 'komentarz'),
(10, 'Donald', 'FKN Trump', 'USP', 2, 4, 'gimme all the money', 3, '2025-10-28 14:23:18', '2025-10-28 14:23:39', '2025-10-29 10:39:27', 0, 0, 'the best of the best of the best ! sir!   '),
(11, 'Jan', 'Himilsbach', 'Bols SA', 2, 10, 'śpiew', 3, '2025-10-28 15:03:43', '2025-10-28 15:04:01', '2025-10-29 07:15:16', 0, 0, 'Alkohol spożywany z umiarem nie szkodzi nawet w dużych ilościach'),
(12, 'sasas', 'asdasd', 'saas', 2, 1, 'asdsadas', 1, '2025-10-29 10:22:28', '2025-10-29 10:39:11', '2025-10-29 10:39:16', 0, 0, 'asdassdas'),
(13, 'sasas', 'asdasd', 'saas', 2, 1, 'asdsadas', 1, '2025-10-29 10:28:10', '2025-10-29 10:39:09', '2025-10-29 10:39:18', 0, 0, 'asdassdas'),
(14, 'sasas', 'asdasd', 'saas', 2, 1, 'asdsadas', 1, '2025-10-29 10:29:48', '2025-10-29 10:39:06', '2025-10-29 10:39:19', 0, 0, 'asdassdas'),
(15, 'Grzegorz', 'Brzęczyszczykiewicz', 'AK', 2, 1, 'Jak wywołałem', 1, '2025-10-29 10:30:53', '2025-10-29 10:39:04', '2025-10-29 10:39:21', 0, 1, 'Ważny cel'),
(16, 'sasas', 'asdasd', 'saas', 3, 1, 'asdsadas', 1, '2025-10-29 10:33:40', '2025-10-29 10:39:03', '2025-10-29 10:39:22', 0, 0, 'asdassdas'),
(17, 'sdfsdf', 'dfsfd', 'Bols SA', 2, 2, 'fsdfsf', 1, '2025-10-29 10:37:02', '2025-10-29 10:39:01', '2025-10-29 10:48:43', 1, 0, ''),
(18, 'efsdasdf', 'aasfaf', 'saadsas', 2, 13, 'sasadasda', 1, '2025-10-29 13:29:09', '2025-10-29 13:38:56', '2025-11-09 11:48:38', 0, 1, ''),
(19, 'sddas', 'asda', 'asda', 2, 1, 'sadasd', 1, '2025-11-11 16:02:19', '2025-11-11 16:03:15', NULL, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `medicalexam`
--

CREATE TABLE `medicalexam` (
  `id_exam` int(11) NOT NULL,
  `refnum` varchar(50) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `comment` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `medicalexam_person`
--

CREATE TABLE `medicalexam_person` (
  `id_exam` int(11) NOT NULL,
  `id_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2020-12-28-223112', 'CodeIgniter\\Shield\\Database\\Migrations\\CreateAuthTables', 'default', 'CodeIgniter\\Shield', 1762868763, 1),
(3, '2021-07-04-041948', 'CodeIgniter\\Settings\\Database\\Migrations\\CreateSettingsTable', 'default', 'CodeIgniter\\Settings', 1762868763, 1),
(4, '2021-11-14-143905', 'CodeIgniter\\Settings\\Database\\Migrations\\AddContextColumn', 'default', 'CodeIgniter\\Settings', 1762868763, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ohstraining`
--

CREATE TABLE `ohstraining` (
  `id_training` int(11) NOT NULL,
  `refnum` varchar(50) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `trainer` varchar(128) DEFAULT NULL,
  `comment` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ohstraining`
--

INSERT INTO `ohstraining` (`id_training`, `refnum`, `valid_from`, `valid_to`, `trainer`, `comment`) VALUES
(1, 'BHP/2024/001', '2024-01-10', '2025-01-09', 'Jan Szkoleniowiec', 'Szkolenie okresowe BHP'),
(2, 'BHP/2024/002', '2024-01-15', '2025-01-14', 'Anna Instruktor', 'Szkolenie wstępne'),
(3, 'BHP/2024/003', '2024-02-01', '2025-01-31', 'Piotr Ekspert', 'Szkolenie stanowiskowe'),
(4, 'BHP/2024/004', '2024-02-10', '2025-02-09', 'Maria Specjalista', 'Szkolenie przeciwpożarowe'),
(5, 'BHP/2024/005', '2024-03-05', '2025-03-04', 'Krzysztof Trainer', 'Szkolenie pierwsza pomoc'),
(6, 'BHP/2024/006', '2024-03-15', '2025-03-14', 'Agnieszka Konsultant', 'Szkolenie bezpieczeństwo'),
(7, 'BHP/2024/007', '2024-04-01', '2025-03-31', 'Tomasz Ekspert', 'Szkolenie okresowe'),
(8, 'BHP/2024/008', '2024-04-12', '2025-04-11', 'Ewa Instruktor', 'Szkolenie wstępne'),
(9, 'BHP/2024/009', '2024-05-03', '2025-05-02', 'Marcin Szkoleniowiec', 'Szkolenie stanowiskowe'),
(10, 'BHP/2024/010', '2024-05-20', '2025-05-19', 'Magdalena Specjalista', 'Szkolenie BHP');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ohstraining_person`
--

CREATE TABLE `ohstraining_person` (
  `id_training` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `assigned_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ohstraining_person`
--

INSERT INTO `ohstraining_person` (`id_training`, `id_person`, `assigned_date`) VALUES
(1, 1, '2024-01-08'),
(1, 2, '2024-01-08'),
(1, 3, '2024-01-08'),
(1, 4, '2024-01-09'),
(1, 5, '2024-01-09'),
(2, 6, '2024-01-12'),
(2, 7, '2024-01-12'),
(2, 8, '2024-01-13'),
(2, 9, '2024-01-13'),
(2, 10, '2024-01-14'),
(3, 11, '2024-01-28'),
(3, 12, '2024-01-28'),
(3, 13, '2024-01-29'),
(3, 14, '2024-01-29'),
(3, 15, '2024-01-30'),
(4, 16, '2024-02-05'),
(4, 17, '2024-02-05'),
(4, 18, '2024-02-06'),
(4, 19, '2024-02-06'),
(4, 20, '2024-02-07'),
(5, 21, '2024-02-28'),
(5, 22, '2024-02-28'),
(5, 23, '2024-02-29'),
(5, 24, '2024-02-29'),
(5, 25, '2024-03-01'),
(6, 26, '2024-03-10'),
(6, 27, '2024-03-10'),
(6, 28, '2024-03-11'),
(6, 29, '2024-03-11'),
(6, 30, '2024-03-12'),
(7, 1, '2024-03-25'),
(7, 6, '2024-03-25'),
(7, 11, '2024-03-26'),
(7, 16, '2024-03-26'),
(7, 21, '2024-03-27'),
(8, 2, '2024-04-08'),
(8, 7, '2024-04-08'),
(8, 12, '2024-04-09'),
(8, 17, '2024-04-09'),
(8, 22, '2024-04-10'),
(9, 3, '2024-04-26'),
(9, 8, '2024-04-26'),
(9, 13, '2024-04-27'),
(9, 18, '2024-04-27'),
(9, 23, '2024-04-28'),
(10, 4, '2024-05-15'),
(10, 9, '2024-05-15'),
(10, 14, '2024-05-16'),
(10, 19, '2024-05-16'),
(10, 24, '2024-05-17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `comment` text DEFAULT NULL,
  `photo` mediumblob DEFAULT NULL,
  `qr_code` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `comment`, `photo`, `qr_code`) VALUES
(1, 'Jan Kowalski', NULL, NULL, NULL),
(2, 'Anna Nowak', NULL, NULL, NULL),
(3, 'Piotr Wiśniewski', NULL, NULL, NULL),
(4, 'Maria Dąbrowska', NULL, NULL, NULL),
(5, 'Krzysztof Lewandowski', NULL, NULL, NULL),
(6, 'Agnieszka Wójcik', NULL, NULL, NULL),
(7, 'Tomasz Kamiński', NULL, NULL, NULL),
(8, 'Ewa Kowalczyk', NULL, NULL, NULL),
(9, 'Marcin Zieliński', NULL, NULL, NULL),
(10, 'Magdalena Szymańska', NULL, NULL, NULL),
(11, 'Robert Woźniak', NULL, NULL, NULL),
(12, 'Barbara Kozłowska', NULL, NULL, NULL),
(13, 'Michał Jankowski', NULL, NULL, NULL),
(14, 'Katarzyna Mazur', NULL, NULL, NULL),
(15, 'Andrzej Wojciechowski', NULL, NULL, NULL),
(16, 'Joanna Kwiatkowska', NULL, NULL, NULL),
(17, 'Paweł Krawczyk', NULL, NULL, NULL),
(18, 'Monika Kaczmarek', NULL, NULL, NULL),
(19, 'Grzegorz Piotrowski', NULL, NULL, NULL),
(20, 'Teresa Grabowski', NULL, NULL, NULL),
(21, 'Łukasz Nowicki', 'base comęt', NULL, NULL),
(22, 'Natalia Pawłowska', NULL, NULL, NULL),
(23, 'Adam Michalski', NULL, NULL, NULL),
(24, 'Helena Nowacka', NULL, NULL, NULL),
(25, 'Jerzy Adamski', 'super comment', NULL, NULL),
(26, 'Dorota Dudek', NULL, NULL, NULL),
(27, 'Rafał Stępień', 'seeeeepieen', NULL, NULL),
(28, 'Iwona Górski', NULL, NULL, NULL),
(29, 'Sebastian Sikora', 'komentarz Sikory po update', NULL, NULL),
(30, 'Patrycja Bąk', 'Prrrrrrrtfwls', NULL, NULL),
(31, 'Michał Krowiak', 'Muuuuu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rcpcard`
--

CREATE TABLE `rcpcard` (
  `id_card` int(11) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rcpcard`
--

INSERT INTO `rcpcard` (`id_card`, `card_number`, `active`) VALUES
(1, '1234567890', 1),
(2, '2345678901', 1),
(3, '3456789012', 1),
(4, '4567890123', 1),
(5, '5678901234', 1),
(6, '6789012345', 1),
(7, '7890123456', 1),
(8, '8901234567', 1),
(9, '9012345678', 1),
(10, '0123456789', 1),
(11, '1122334455', 1),
(12, '2233445566', 1),
(13, '3344556677', 1),
(14, '4455667788', 1),
(15, '5566778899', 1),
(16, '6677889900', 1),
(17, '7788990011', 1),
(18, '8899001122', 1),
(19, '9900112233', 1),
(20, '0011223344', 1),
(21, '1029384756', 1),
(22, '2938475601', 1),
(23, '3847560129', 1),
(24, '4756012938', 1),
(25, '5601293847', 1),
(26, '6611223344', 1),
(27, '7711223344', 1),
(28, '8811223344', 1),
(29, '9911223344', 1),
(30, '1011223344', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rcpcard_assignment`
--

CREATE TABLE `rcpcard_assignment` (
  `id_assignment` int(11) NOT NULL,
  `id_card` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `assigned_from` date NOT NULL,
  `assigned_to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rcpcard_assignment`
--

INSERT INTO `rcpcard_assignment` (`id_assignment`, `id_card`, `id_person`, `assigned_from`, `assigned_to`) VALUES
(1, 1, 1, '2023-01-15', NULL),
(2, 2, 2, '2023-02-20', NULL),
(3, 3, 3, '2023-03-10', NULL),
(4, 4, 4, '2023-04-05', NULL),
(5, 5, 5, '2023-05-12', NULL),
(6, 6, 6, '2023-06-18', NULL),
(7, 7, 7, '2023-07-22', NULL),
(8, 8, 8, '2023-08-30', NULL),
(9, 9, 9, '2023-01-08', NULL),
(10, 10, 10, '2023-02-14', NULL),
(11, 11, 11, '2023-03-25', NULL),
(12, 12, 12, '2023-04-11', NULL),
(13, 13, 13, '2023-05-19', NULL),
(14, 14, 14, '2023-06-28', NULL),
(15, 15, 15, '2023-07-03', NULL),
(16, 16, 16, '2023-01-22', NULL),
(17, 17, 17, '2023-02-17', NULL),
(18, 18, 18, '2023-03-14', NULL),
(19, 19, 19, '2023-04-09', NULL),
(20, 20, 20, '2023-05-27', NULL),
(21, 21, 21, '2023-06-15', NULL),
(22, 22, 22, '2023-07-08', NULL),
(23, 23, 23, '2023-01-30', NULL),
(24, 24, 24, '2023-02-25', NULL),
(25, 25, 25, '2023-03-18', NULL),
(26, 26, 26, '2023-04-22', NULL),
(27, 27, 27, '2023-05-14', NULL),
(28, 28, 28, '2023-06-07', NULL),
(29, 29, 29, '2023-07-11', NULL),
(30, 30, 30, '2023-08-05', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rcp_access_logs`
--

CREATE TABLE `rcp_access_logs` (
  `id` int(11) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `event_type` int(11) NOT NULL,
  `access_year` smallint(6) NOT NULL,
  `access_month` tinyint(4) NOT NULL,
  `access_day` tinyint(4) NOT NULL,
  `access_hour` tinyint(4) NOT NULL,
  `access_minute` tinyint(4) NOT NULL,
  `access_second` tinyint(4) NOT NULL,
  `full_timestamp` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rcp_access_logs`
--

INSERT INTO `rcp_access_logs` (`id`, `card_number`, `reader_id`, `event_type`, `access_year`, `access_month`, `access_day`, `access_hour`, `access_minute`, `access_second`, `full_timestamp`, `created_at`) VALUES
(1, '1234567890', 1, 1, 2024, 1, 15, 8, 30, 15, '2024-01-15 08:30:15', '2025-10-21 04:24:55'),
(2, '2345678901', 2, 2, 2024, 1, 15, 16, 45, 22, '2024-01-15 16:45:22', '2025-10-21 04:24:55'),
(3, '3456789012', 3, 1, 2024, 1, 16, 7, 55, 8, '2024-01-16 07:55:08', '2025-10-21 04:24:55'),
(4, '4567890123', 4, 3, 2024, 1, 16, 12, 15, 33, '2024-01-16 12:15:33', '2025-10-21 04:24:55'),
(5, '5678901234', 1, 4, 2024, 1, 17, 9, 10, 47, '2024-01-17 09:10:47', '2025-10-21 04:24:55'),
(6, '6789012345', 2, 2, 2024, 1, 17, 17, 30, 12, '2024-01-17 17:30:12', '2025-10-21 04:24:55'),
(7, '7890123456', 3, 1, 2024, 1, 18, 8, 5, 29, '2024-01-18 08:05:29', '2025-10-21 04:24:55'),
(8, '8901234567', 4, 5, 2024, 1, 18, 13, 40, 18, '2024-01-18 13:40:18', '2025-10-21 04:24:55'),
(9, '9012345678', 1, 6, 2024, 1, 19, 10, 25, 55, '2024-01-19 10:25:55', '2025-10-21 04:24:55'),
(10, '0123456789', 2, 1, 2024, 1, 19, 14, 20, 41, '2024-01-19 14:20:41', '2025-10-21 04:24:55');

--
-- Wyzwalacze `rcp_access_logs`
--
DELIMITER $$
CREATE TRIGGER `set_full_timestamp_before_insert` BEFORE INSERT ON `rcp_access_logs` FOR EACH ROW BEGIN
    SET NEW.full_timestamp = CONCAT(
        NEW.access_year, '-', 
        LPAD(NEW.access_month, 2, '0'), '-', 
        LPAD(NEW.access_day, 2, '0'), ' ', 
        LPAD(NEW.access_hour, 2, '0'), ':', 
        LPAD(NEW.access_minute, 2, '0'), ':', 
        LPAD(NEW.access_second, 2, '0')
    );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE `settings` (
  `id` int(9) NOT NULL,
  `class` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(31) NOT NULL DEFAULT 'string',
  `context` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `last_active` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `status`, `status_message`, `active`, `last_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', NULL, NULL, 1, '2025-11-11 21:01:57', '2025-11-11 14:54:19', '2025-11-11 14:54:20', NULL);

-- --------------------------------------------------------

--
-- Zastąpiona struktura widoku `vw_person_access_logs`
-- (See below for the actual view)
--
CREATE TABLE `vw_person_access_logs` (
`id` int(11)
,`card_number` varchar(20)
,`reader_id` int(11)
,`event_type` int(11)
,`access_year` smallint(6)
,`access_month` tinyint(4)
,`access_day` tinyint(4)
,`access_hour` tinyint(4)
,`access_minute` tinyint(4)
,`access_second` tinyint(4)
,`full_timestamp` datetime
,`created_at` timestamp
,`person_id` int(11)
,`person_name` varchar(128)
,`id_card` int(11)
,`assigned_from` date
,`assigned_to` date
,`company_name` varchar(50)
,`reader_name` varchar(100)
,`reader_location` varchar(100)
,`reader_comment` varchar(100)
,`event_description` varchar(27)
);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zone`
--

CREATE TABLE `zone` (
  `id_zone` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id_zone`, `name`, `location`, `comment`) VALUES
(1, 'Portiernia główna - wejście', 'Budynek A, parter', 'Czytnik wejściowy główny'),
(2, 'Portiernia główna - wyjście', 'Budynek A, parter', 'Czytnik wyjściowy główny'),
(3, 'Portiernia 3 - wejście', 'Budynek C, wejście północne', 'Czytnik wejściowy budynek C'),
(4, 'Portiernia 3 - wyjście', 'Budynek C, wejście północne', 'Czytnik wyjściowy budynek C');

-- --------------------------------------------------------

--
-- Struktura widoku `vw_person_access_logs`
--
DROP TABLE IF EXISTS `vw_person_access_logs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_person_access_logs`  AS SELECT `ral`.`id` AS `id`, `ral`.`card_number` AS `card_number`, `ral`.`reader_id` AS `reader_id`, `ral`.`event_type` AS `event_type`, `ral`.`access_year` AS `access_year`, `ral`.`access_month` AS `access_month`, `ral`.`access_day` AS `access_day`, `ral`.`access_hour` AS `access_hour`, `ral`.`access_minute` AS `access_minute`, `ral`.`access_second` AS `access_second`, `ral`.`full_timestamp` AS `full_timestamp`, `ral`.`created_at` AS `created_at`, `p`.`id` AS `person_id`, `p`.`name` AS `person_name`, `rc`.`id_card` AS `id_card`, `ra`.`assigned_from` AS `assigned_from`, `ra`.`assigned_to` AS `assigned_to`, `c`.`name` AS `company_name`, `z`.`name` AS `reader_name`, `z`.`location` AS `reader_location`, `z`.`comment` AS `reader_comment`, CASE `ral`.`event_type` WHEN 1 THEN 'Wejście' WHEN 2 THEN 'Wyjście' WHEN 3 THEN 'Powrót z wyjścia służbowego' WHEN 4 THEN 'Wyjście służbowe' WHEN 5 THEN 'Powrót z wyjścia prywatnego' WHEN 6 THEN 'Wyjście prywatne' END AS `event_description` FROM ((((((`rcp_access_logs` `ral` left join `rcpcard` `rc` on(`ral`.`card_number` = `rc`.`card_number`)) left join `rcpcard_assignment` `ra` on(`rc`.`id_card` = `ra`.`id_card` and `ral`.`full_timestamp` between `ra`.`assigned_from` and coalesce(`ra`.`assigned_to`,current_timestamp()))) left join `person` `p` on(`ra`.`id_person` = `p`.`id`)) left join `company_person` `cp` on(`p`.`id` = `cp`.`id_person` and `ra`.`assigned_from` between `cp`.`hire_date` and coalesce(`cp`.`hire_date`,current_timestamp()))) left join `company` `c` on(`cp`.`id_company` = `c`.`id`)) left join `zone` `z` on(`ral`.`reader_id` = `z`.`id_zone`)) ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `auth_identities`
--
ALTER TABLE `auth_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_secret` (`type`,`secret`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_identifier` (`id_type`,`identifier`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_permissions_users_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `auth_remember_tokens_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `auth_token_logins`
--
ALTER TABLE `auth_token_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_identifier` (`id_type`,`identifier`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeksy dla tabeli `company_person`
--
ALTER TABLE `company_person`
  ADD PRIMARY KEY (`id_company`,`id_person`),
  ADD KEY `fk_cp_person` (`id_person`),
  ADD KEY `idx_cp_hire_date` (`hire_date`);

--
-- Indeksy dla tabeli `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_department` (`id_department`);

--
-- Indeksy dla tabeli `guest_entry_logs`
--
ALTER TABLE `guest_entry_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone` (`zone`),
  ADD KEY `guardian` (`guardian`);

--
-- Indeksy dla tabeli `medicalexam`
--
ALTER TABLE `medicalexam`
  ADD PRIMARY KEY (`id_exam`),
  ADD KEY `idx_medical_dates` (`valid_from`,`valid_to`);

--
-- Indeksy dla tabeli `medicalexam_person`
--
ALTER TABLE `medicalexam_person`
  ADD PRIMARY KEY (`id_exam`,`id_person`),
  ADD KEY `fk_medicalexam_person` (`id_person`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ohstraining`
--
ALTER TABLE `ohstraining`
  ADD PRIMARY KEY (`id_training`),
  ADD KEY `idx_training_dates` (`valid_from`,`valid_to`);

--
-- Indeksy dla tabeli `ohstraining_person`
--
ALTER TABLE `ohstraining_person`
  ADD PRIMARY KEY (`id_training`,`id_person`),
  ADD KEY `fk_ohstraining_person` (`id_person`);

--
-- Indeksy dla tabeli `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_person_name` (`name`);

--
-- Indeksy dla tabeli `rcpcard`
--
ALTER TABLE `rcpcard`
  ADD PRIMARY KEY (`id_card`),
  ADD UNIQUE KEY `card_number` (`card_number`),
  ADD KEY `idx_rcpcard_active` (`active`);

--
-- Indeksy dla tabeli `rcpcard_assignment`
--
ALTER TABLE `rcpcard_assignment`
  ADD PRIMARY KEY (`id_assignment`),
  ADD KEY `fk_assignment_card` (`id_card`),
  ADD KEY `idx_assignment_current` (`id_person`,`assigned_to`);

--
-- Indeksy dla tabeli `rcp_access_logs`
--
ALTER TABLE `rcp_access_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_access_card_number` (`card_number`),
  ADD KEY `idx_access_reader_id` (`reader_id`),
  ADD KEY `idx_access_full_timestamp` (`full_timestamp`),
  ADD KEY `idx_access_event_type` (`event_type`);

--
-- Indeksy dla tabeli `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeksy dla tabeli `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id_zone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_identities`
--
ALTER TABLE `auth_identities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_token_logins`
--
ALTER TABLE `auth_token_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `guest_entry_logs`
--
ALTER TABLE `guest_entry_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicalexam`
--
ALTER TABLE `medicalexam`
  MODIFY `id_exam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ohstraining`
--
ALTER TABLE `ohstraining`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rcpcard`
--
ALTER TABLE `rcpcard`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rcpcard_assignment`
--
ALTER TABLE `rcpcard_assignment`
  MODIFY `id_assignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rcp_access_logs`
--
ALTER TABLE `rcp_access_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id_zone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_identities`
--
ALTER TABLE `auth_identities`
  ADD CONSTRAINT `auth_identities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_permissions_users`
--
ALTER TABLE `auth_permissions_users`
  ADD CONSTRAINT `auth_permissions_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_remember_tokens`
--
ALTER TABLE `auth_remember_tokens`
  ADD CONSTRAINT `auth_remember_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_person`
--
ALTER TABLE `company_person`
  ADD CONSTRAINT `fk_cp_company` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cp_person` FOREIGN KEY (`id_person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest_entry_logs`
--
ALTER TABLE `guest_entry_logs`
  ADD CONSTRAINT `guest_entry_logs_ibfk_1` FOREIGN KEY (`zone`) REFERENCES `zone` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guest_entry_logs_ibfk_2` FOREIGN KEY (`guardian`) REFERENCES `guardian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalexam_person`
--
ALTER TABLE `medicalexam_person`
  ADD CONSTRAINT `fk_medicalexam` FOREIGN KEY (`id_exam`) REFERENCES `medicalexam` (`id_exam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medicalexam_person` FOREIGN KEY (`id_person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ohstraining_person`
--
ALTER TABLE `ohstraining_person`
  ADD CONSTRAINT `fk_ohstraining` FOREIGN KEY (`id_training`) REFERENCES `ohstraining` (`id_training`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ohstraining_person` FOREIGN KEY (`id_person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rcpcard_assignment`
--
ALTER TABLE `rcpcard_assignment`
  ADD CONSTRAINT `fk_assignment_card` FOREIGN KEY (`id_card`) REFERENCES `rcpcard` (`id_card`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_assignment_person` FOREIGN KEY (`id_person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
