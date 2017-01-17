-- --------------------------------------------------------
-- Host:                         mysql-362889.vipserv.org
-- Wersja serwera:               10.0.27-MariaDB - MariaDB Server
-- Serwer OS:                    Linux
-- HeidiSQL Wersja:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury tabela mario48_davebo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Zrzucanie danych dla tabeli mario48_davebo.migrations: ~3 rows (około)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(4, '2014_10_12_000000_create_users_table', 1),
	(5, '2014_10_12_100000_create_password_resets_table', 1),
	(6, '2016_12_02_204206_video', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Zrzut struktury tabela mario48_davebo.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Zrzucanie danych dla tabeli mario48_davebo.password_resets: ~0 rows (około)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Zrzut struktury tabela mario48_davebo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Zrzucanie danych dla tabeli mario48_davebo.users: ~0 rows (około)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Zrzut struktury tabela mario48_davebo.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `row` tinyint(3) unsigned NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Zrzucanie danych dla tabeli mario48_davebo.videos: ~9 rows (około)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `name`, `url`, `image`, `description`, `row`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Calvin Harris - My Way', 'https://www.youtube.com/embed/wx73qm0XDqE', 'https://i.ytimg.com/vi/wx73qm0XDqE/maxresdefault.jpg', 'https://i.ytimg.com/vi/wx73qm0XDqE/maxresdefault.jpg', 1, NULL, NULL, NULL),
	(2, 'Galantis - No Money', 'https://www.youtube.com/embed/99DRO_HuaDM', 'https://i.ytimg.com/vi/99DRO_HuaDM/maxresdefault.jpg', 'https://i.ytimg.com/vi/99DRO_HuaDM/maxresdefault.jpg', 1, NULL, NULL, NULL),
	(3, 'Dave Bo Project - Stand By Me ', 'https://www.youtube.com/embed/OQJs_qRE4mA', 'https://i.ytimg.com/vi/OQJs_qRE4mA/maxresdefault.jpg', 'https://i.ytimg.com/vi/OQJs_qRE4mA/maxresdefault.jpg', 1, NULL, NULL, NULL),
	(4, 'Pesho & Dave Bo - Perfect Day', 'https://www.youtube.com/embed/uIHxCvooD48', 'https://i.ytimg.com/vi/uIHxCvooD48/maxresdefault.jpg', 'https://i.ytimg.com/vi/uIHxCvooD48/maxresdefault.jpg', 2, NULL, NULL, NULL),
	(5, 'David Guetta - Dangerous', 'https://www.youtube.com/embed/VWkP5EdjBsQ', 'https://i.ytimg.com/vi/VWkP5EdjBsQ/maxresdefault.jpg', 'https://i.ytimg.com/vi/VWkP5EdjBsQ/maxresdefault.jpg', 2, NULL, NULL, NULL),
	(6, 'Route 94 - My Love', 'https://www.youtube.com/embed/uw9D-38xSHA', 'https://i.ytimg.com/vi/uw9D-38xSHA/maxresdefault.jpg', 'https://i.ytimg.com/vi/uw9D-38xSHA/maxresdefault.jpg', 2, NULL, NULL, NULL),
	(7, 'Calvin Harris - This is what you came for', 'https://www.youtube.com/embed/Xa4UVpYYCQ8', './graph/maxresdefault.jpg', 'https://i.ytimg.com/vi/Xa4UVpYYCQ8/maxresdefault.jpg', 3, NULL, NULL, NULL),
	(8, 'Clean Bandit - Stronger', 'https://www.youtube.com/embed/JfeP_Q8otQ4', 'https://i.ytimg.com/vi/JfeP_Q8otQ4/maxresdefault.jpg', 'https://i.ytimg.com/vi/JfeP_Q8otQ4/maxresdefault.jpg', 3, NULL, NULL, NULL),
	(9, 'Sam Smith - I\'m Not The Only One', 'https://www.youtube.com/embed/3A1K7E0nMt8', 'https://i.ytimg.com/vi/3A1K7E0nMt8/maxresdefault.jpg', 'https://i.ytimg.com/vi/3A1K7E0nMt8/maxresdefault.jpg', 3, NULL, NULL, NULL);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
