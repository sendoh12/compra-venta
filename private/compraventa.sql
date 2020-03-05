-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.37-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para compraventa
CREATE DATABASE IF NOT EXISTS `compraventa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `compraventa`;

-- Volcando estructura para tabla compraventa.cv_estados
CREATE TABLE IF NOT EXISTS `cv_estados` (
  `ESTADOS_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ESTADOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ESTADOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.cv_estados: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_estados` DISABLE KEYS */;
INSERT INTO `cv_estados` (`ESTADOS_ID`, `ESTADOS_NOMBRE`) VALUES
	(1, 'Veracruz'),
	(2, 'Puebla'),
	(3, 'Tlaxcala'),
	(4, 'Quintanarro');
/*!40000 ALTER TABLE `cv_estados` ENABLE KEYS */;

-- Volcando estructura para tabla compraventa.cv_municipios
CREATE TABLE IF NOT EXISTS `cv_municipios` (
  `MUNICIPIOS_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MUNICIPIOS_ESTADO` int(10) unsigned NOT NULL,
  `MUNICIPIOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MUNICIPIOS_ID`),
  KEY `cv_municipios_municipios_estado_foreign` (`MUNICIPIOS_ESTADO`),
  CONSTRAINT `cv_municipios_municipios_estado_foreign` FOREIGN KEY (`MUNICIPIOS_ESTADO`) REFERENCES `cv_estados` (`ESTADOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.cv_municipios: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_municipios` DISABLE KEYS */;
INSERT INTO `cv_municipios` (`MUNICIPIOS_ID`, `MUNICIPIOS_ESTADO`, `MUNICIPIOS_NOMBRE`) VALUES
	(1, 2, 'Puebla'),
	(2, 2, 'Cholula'),
	(3, 1, 'Boca del rio'),
	(4, 1, 'Veracruz'),
	(5, 1, 'Medellin'),
	(6, 1, 'Alvarado'),
	(7, 1, 'Cardel'),
	(8, 1, 'Xalapa'),
	(9, 1, 'Cordoba'),
	(10, 1, 'Orizaba'),
	(11, 1, 'Coatepec'),
	(12, 4, 'Benito Juarez'),
	(13, 4, 'Solidaridad'),
	(14, 4, 'Cozumel');
/*!40000 ALTER TABLE `cv_municipios` ENABLE KEYS */;

-- Volcando estructura para tabla compraventa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla compraventa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_000000_create_users_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2020_02_26_224601_create_projects_table', 1),
	(9, '2020_03_05_021411_create_cv_estados', 1),
	(10, '2020_03_05_021531_create_cv_municipios', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla compraventa.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.projects: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Volcando estructura para tabla compraventa.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID_USER` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROL_USERS` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  UNIQUE KEY `users_email_user_unique` (`EMAIL_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla compraventa.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID_USER`, `NOMBRE_USER`, `EMAIL_USER`, `PASSWORD_USER`, `ROL_USERS`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Eduardo Cervantes', 'cervantese8@hotmail.com', '$2y$12$j7db5BXI2yEt8coqrZfKfuYIWVLP12en9vqBHk0WFyvYdOG5QZCPe', 4, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
