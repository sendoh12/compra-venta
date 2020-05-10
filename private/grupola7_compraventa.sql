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


-- Volcando estructura de base de datos para grupola7_compraventa
CREATE DATABASE IF NOT EXISTS `grupola7_compraventa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `grupola7_compraventa`;

-- Volcando estructura para tabla grupola7_compraventa.cv_contactos
CREATE TABLE IF NOT EXISTS `cv_contactos` (
  `ID_CONTACTO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `CONTACTO_CLAVE_PROPIEDAD` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_NOMBRE` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACTO_EMAIL` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACTO_TELEFONO` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `CONTACTO_MENSAJE` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACTO_OPERACION` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_CANTIDAD` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_CONTACTAR` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_FECHA` date DEFAULT NULL,
  `CONTACTO_HORA` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_CONTACTO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla grupola7_compraventa.cv_contactos: 0 rows
/*!40000 ALTER TABLE `cv_contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cv_contactos` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_estados
CREATE TABLE IF NOT EXISTS `cv_estados` (
  `ESTADOS_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ESTADOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ESTADOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_estados: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_estados` DISABLE KEYS */;
INSERT INTO `cv_estados` (`ESTADOS_ID`, `ESTADOS_NOMBRE`) VALUES
	(1, 'Veracruz'),
	(2, 'Puebla'),
	(3, 'Tlaxcala'),
	(4, 'Quintanarro');
/*!40000 ALTER TABLE `cv_estados` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_imagenes
CREATE TABLE IF NOT EXISTS `cv_imagenes` (
  `IMAGENES_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IMAGENES_PROPIEDAD` int(10) unsigned NOT NULL,
  `IMAGENES_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IMAGENES_ARCHIVO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IMAGENES_ORDEN` int(11) DEFAULT NULL,
  PRIMARY KEY (`IMAGENES_ID`),
  KEY `cv_imagenes_imagenes_propiedad_foreign` (`IMAGENES_PROPIEDAD`),
  CONSTRAINT `cv_imagenes_imagenes_propiedad_foreign` FOREIGN KEY (`IMAGENES_PROPIEDAD`) REFERENCES `cv_propiedades` (`PROPIEDADES_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_imagenes: ~130 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_imagenes` DISABLE KEYS */;
INSERT INTO `cv_imagenes` (`IMAGENES_ID`, `IMAGENES_PROPIEDAD`, `IMAGENES_NOMBRE`, `IMAGENES_ARCHIVO`, `IMAGENES_ORDEN`) VALUES
	(50, 4, 'propiedad 3', '15864841882.2.jpeg', 0),
	(51, 4, 'propiedad 3', '15864841882.3.jpeg', 1),
	(52, 4, 'propiedad 3', '15864841882.4.jpeg', 2),
	(53, 4, 'propiedad 3', '15864841882.5.jpeg', 3),
	(54, 4, 'propiedad 3', '15864841882.6.jpeg', 4),
	(55, 4, 'propiedad 3', '15864841882.7.jpeg', 5),
	(56, 4, 'propiedad 3', '15864841882.8.jpeg', 6),
	(57, 4, 'propiedad 3', '15864841882.9.jpeg', 7),
	(58, 4, 'propiedad 3', '15864841882.10.jpeg', 8),
	(59, 4, 'propiedad 3', '15864841882.11.jpeg', 9),
	(60, 4, 'propiedad 3', '15864841882.12.jpeg', 10),
	(61, 4, 'propiedad 3', '15864841882.13.jpeg', 11),
	(62, 4, 'propiedad 3', '15864841882.14.jpeg', 12),
	(63, 4, 'propiedad 3', '15864841882.15.jpeg', 13),
	(64, 4, 'propiedad 3', '15864841882.16.jpeg', 14),
	(65, 4, 'propiedad 3', '15864841882.17.jpeg', 15),
	(73, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.04.jpeg', 1),
	(74, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.05(1).jpeg', 2),
	(75, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.05.jpeg', 3),
	(76, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.06.jpeg', 4),
	(77, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.20.jpeg', 5),
	(78, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.21(1).jpeg', 6),
	(79, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.21.jpeg', 7),
	(80, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.22(1).jpeg', 8),
	(81, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.22.jpeg', 9),
	(82, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.25.jpeg', 0),
	(83, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.26(1).jpeg', 1),
	(84, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.26(2).jpeg', 2),
	(85, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.26.jpeg', 3),
	(86, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.27(1).jpeg', 4),
	(87, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.27(2).jpeg', 5),
	(88, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.27(3).jpeg', 6),
	(89, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.27.jpeg', 7),
	(90, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.28(1).jpeg', 8),
	(91, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.28(2).jpeg', 9),
	(92, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.28.jpeg', 10),
	(93, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.29.jpeg', 11),
	(94, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.30(1).jpeg', 12),
	(95, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.30(2).jpeg', 13),
	(96, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.30(3).jpeg', 14),
	(97, 5, 'propiedad 4', '1586540973WhatsApp Image 2020-04-07 at 21.54.30.jpeg', 15),
	(98, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.23.jpeg', 0),
	(99, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.24(1).jpeg', 1),
	(100, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.24(2).jpeg', 2),
	(101, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.24.jpeg', 3),
	(102, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.25(1).jpeg', 4),
	(103, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.25(2).jpeg', 5),
	(104, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.25(3).jpeg', 6),
	(105, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.25.jpeg', 7),
	(106, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.26(1).jpeg', 8),
	(107, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.26(2).jpeg', 9),
	(108, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.26(3).jpeg', 10),
	(109, 6, 'propiedad 5', '1586541389WhatsApp Image 2020-04-07 at 21.56.26.jpeg', 11),
	(110, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.55.jpeg', 0),
	(111, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.57(1).jpeg', 1),
	(112, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.57(2).jpeg', 2),
	(113, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.57.jpeg', 3),
	(114, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.58(1).jpeg', 4),
	(115, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.58(2).jpeg', 5),
	(116, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.58(3).jpeg', 6),
	(117, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.58.jpeg', 7),
	(118, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.59(1).jpeg', 8),
	(119, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.04.59.jpeg', 9),
	(120, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.05.00(1).jpeg', 10),
	(121, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.05.00(2).jpeg', 11),
	(122, 7, 'propiedad 6', '1586541852WhatsApp Image 2020-04-07 at 22.05.00.jpeg', 12),
	(123, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.15.jpeg', 0),
	(124, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.16(1).jpeg', 1),
	(125, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.16.jpeg', 2),
	(126, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.17.jpeg', 3),
	(127, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.18(1).jpeg', 4),
	(128, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.18(2).jpeg', 5),
	(129, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.18(3).jpeg', 6),
	(130, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.18.jpeg', 7),
	(131, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.19(1).jpeg', 8),
	(132, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.19(2).jpeg', 9),
	(133, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.19(3).jpeg', 10),
	(134, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.19(4).jpeg', 11),
	(135, 8, 'propiedad 7', '1586542261WhatsApp Image 2020-04-07 at 22.05.19.jpeg', 12),
	(136, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.06.50.jpeg', 0),
	(137, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.24.jpeg', 1),
	(138, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.27(1).jpeg', 2),
	(139, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.27.jpeg', 3),
	(140, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.28(1).jpeg', 4),
	(141, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.28.jpeg', 5),
	(142, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.29(1).jpeg', 6),
	(143, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.29(2).jpeg', 7),
	(144, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.29(3).jpeg', 8),
	(145, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.29(4).jpeg', 9),
	(146, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.29.jpeg', 10),
	(147, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.30(1).jpeg', 11),
	(148, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.30(2).jpeg', 12),
	(149, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.30(3).jpeg', 13),
	(150, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.30.jpeg', 14),
	(151, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.31(1).jpeg', 15),
	(152, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.31(2).jpeg', 16),
	(153, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.31(3).jpeg', 17),
	(154, 9, 'propiedad 8', '1586542861WhatsApp Image 2020-04-07 at 22.07.31.jpeg', 18),
	(155, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.14.jpeg', 0),
	(156, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.51(1).jpeg', 1),
	(157, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.51.jpeg', 2),
	(158, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.52(1).jpeg', 3),
	(159, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.52.jpeg', 4),
	(160, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.53(1).jpeg', 5),
	(161, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.53.jpeg', 6),
	(162, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.54(1).jpeg', 7),
	(163, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.54(2).jpeg', 8),
	(164, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.54(3).jpeg', 9),
	(165, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.54.jpeg', 10),
	(166, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.55(1).jpeg', 11),
	(167, 10, 'propiedad 9', '1586543830WhatsApp Image 2020-04-07 at 22.09.55.jpeg', 12),
	(168, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.46.jpeg', 0),
	(169, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.47.jpeg', 1),
	(170, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.48(1).jpeg', 2),
	(171, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.48(2).jpeg', 3),
	(172, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.48.jpeg', 4),
	(173, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.49(1).jpeg', 5),
	(174, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.49(2).jpeg', 6),
	(175, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.49.jpeg', 7),
	(176, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.50(1).jpeg', 8),
	(177, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.50(2).jpeg', 9),
	(178, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.50.jpeg', 10),
	(179, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.51(1).jpeg', 11),
	(180, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.51.jpeg', 12),
	(181, 3, NULL, '1586913270279e6f84-1d63-42a5-90fa-c4ff9c42080d.jpg', 0),
	(182, 1, NULL, '15869169576da12f15-63d3-4f6e-b977-d71214acc95b.jpg', 0),
	(183, 1, NULL, '15869169579835afcf-dc7f-45a0-a5bf-72ff843a9796.jpg', 1),
	(184, 1, NULL, '1586916957dc6926b2-db28-401e-ae66-0912bd08d711.jpg', 2),
	(185, 1, NULL, '1586916957e170c91a-8b7b-45f8-a2f4-d5c471086bd0.jpg', 3),
	(186, 1, NULL, '1586916957ec2dc146-1b98-420f-ab3c-ff459e97cc5a.jpg', 4);
/*!40000 ALTER TABLE `cv_imagenes` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_inicio
CREATE TABLE IF NOT EXISTS `cv_inicio` (
  `INICIO_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INICIO_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`INICIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_inicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_inicio` DISABLE KEYS */;
INSERT INTO `cv_inicio` (`INICIO_ID`, `INICIO_NOMBRE`) VALUES
	(19, '1588644222destacada3.jpg');
/*!40000 ALTER TABLE `cv_inicio` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_municipios
CREATE TABLE IF NOT EXISTS `cv_municipios` (
  `MUNICIPIOS_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MUNICIPIOS_ESTADO` int(10) unsigned NOT NULL,
  `MUNICIPIOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MUNICIPIOS_ID`),
  KEY `cv_municipios_municipios_estado_foreign` (`MUNICIPIOS_ESTADO`),
  CONSTRAINT `cv_municipios_municipios_estado_foreign` FOREIGN KEY (`MUNICIPIOS_ESTADO`) REFERENCES `cv_estados` (`ESTADOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_municipios: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_municipios` DISABLE KEYS */;
INSERT INTO `cv_municipios` (`MUNICIPIOS_ID`, `MUNICIPIOS_ESTADO`, `MUNICIPIOS_NOMBRE`) VALUES
	(15, 2, 'Puebla'),
	(16, 2, 'Cholula'),
	(17, 1, 'Boca del rio'),
	(18, 1, 'Veracruz'),
	(19, 1, 'Medellin'),
	(20, 1, 'Alvarado'),
	(21, 1, 'Cardel'),
	(22, 1, 'Xalapa'),
	(23, 1, 'Córdoba'),
	(24, 1, 'Orizaba'),
	(25, 1, 'Coatepec'),
	(26, 4, 'Benito Juarez'),
	(27, 4, 'Solidaridad'),
	(28, 4, 'Cozumel');
/*!40000 ALTER TABLE `cv_municipios` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_propiedades
CREATE TABLE IF NOT EXISTS `cv_propiedades` (
  `PROPIEDADES_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PROPIEDADES_NOMBRE` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_PAIS` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_ESTADO` int(10) unsigned NOT NULL,
  `PROPIEDADES_MUNICIPIO` int(10) unsigned NOT NULL,
  `PROPIEDADES_COLONIA` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_ZONA` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_CP` int(11) DEFAULT NULL,
  `PROPIEDADES_CALLE` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_EXTERIOR` int(11) DEFAULT NULL,
  `PROPIEDADES_INTERIOR` int(11) DEFAULT NULL,
  `PROPIEDADES_IMAGEN` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_MAPA` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_TIPO` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_SUBTIPO` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_OPERACION` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_PRECIO` float DEFAULT NULL,
  `PROPIEDADES_MONEDA` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `PROPIEDADES_HABITACIONES` int(11) DEFAULT NULL,
  `PROPIEDADES_BAÑOS` int(11) DEFAULT NULL,
  `PROPIEDADES_MEDIO_BAÑO` int(11) DEFAULT NULL,
  `PROPIEDADES_TERRENOS` float DEFAULT NULL,
  `PROPIEDADES_TERRENO_TAMAÑO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_CONSTRUCCION` float DEFAULT NULL,
  `PROPIEDADES_CONSTRUCCION_TAMAÑO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_CONDICIONES` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_AÑO` int(11) DEFAULT NULL,
  `PROPIEDADES_NIVELES` int(11) DEFAULT NULL,
  `PROPIEDADES_ESTACIONAMIENTO` int(11) DEFAULT NULL,
  `PROPIEDADES_CUOTA` float DEFAULT NULL,
  `PROPIEDADES_CUOTA_MONEDA` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_DESCRIPCION` longtext COLLATE utf8mb4_unicode_ci,
  `PROPIEDADES_CLAVE` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_VIDEO` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_LATITUD` float DEFAULT NULL,
  `PROPIEDADES_LONGITUD` float DEFAULT NULL,
  PRIMARY KEY (`PROPIEDADES_ID`),
  KEY `cv_propiedades_propiedades_estado_foreign` (`PROPIEDADES_ESTADO`),
  KEY `cv_propiedades_propiedades_municipio_foreign` (`PROPIEDADES_MUNICIPIO`),
  CONSTRAINT `cv_propiedades_propiedades_estado_foreign` FOREIGN KEY (`PROPIEDADES_ESTADO`) REFERENCES `cv_estados` (`ESTADOS_ID`),
  CONSTRAINT `cv_propiedades_propiedades_municipio_foreign` FOREIGN KEY (`PROPIEDADES_MUNICIPIO`) REFERENCES `cv_municipios` (`MUNICIPIOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_propiedades: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_propiedades` DISABLE KEYS */;
INSERT INTO `cv_propiedades` (`PROPIEDADES_ID`, `PROPIEDADES_NOMBRE`, `PROPIEDADES_PAIS`, `PROPIEDADES_ESTADO`, `PROPIEDADES_MUNICIPIO`, `PROPIEDADES_COLONIA`, `PROPIEDADES_ZONA`, `PROPIEDADES_CP`, `PROPIEDADES_CALLE`, `PROPIEDADES_EXTERIOR`, `PROPIEDADES_INTERIOR`, `PROPIEDADES_IMAGEN`, `PROPIEDADES_MAPA`, `PROPIEDADES_TIPO`, `PROPIEDADES_SUBTIPO`, `PROPIEDADES_OPERACION`, `PROPIEDADES_PRECIO`, `PROPIEDADES_MONEDA`, `PROPIEDADES_HABITACIONES`, `PROPIEDADES_BAÑOS`, `PROPIEDADES_MEDIO_BAÑO`, `PROPIEDADES_TERRENOS`, `PROPIEDADES_TERRENO_TAMAÑO`, `PROPIEDADES_CONSTRUCCION`, `PROPIEDADES_CONSTRUCCION_TAMAÑO`, `PROPIEDADES_CONDICIONES`, `PROPIEDADES_AÑO`, `PROPIEDADES_NIVELES`, `PROPIEDADES_ESTACIONAMIENTO`, `PROPIEDADES_CUOTA`, `PROPIEDADES_CUOTA_MONEDA`, `PROPIEDADES_DESCRIPCION`, `PROPIEDADES_CLAVE`, `PROPIEDADES_VIDEO`, `PROPIEDADES_LATITUD`, `PROPIEDADES_LONGITUD`) VALUES
	(1, 'VENTA DE CASA EN PLAYA LINDA, VERACRUZ, VER.', 'Mexico', 1, 17, 'Playa Linda', 'Norte', 91810, 'Playon San Fandier', 41, 0, '15869169321.jpg', NULL, 'Casa', 'Sola', 'Venta', 570000, '', 2, 1, 1, 65, NULL, 80, NULL, 'Buena', 2000, 2, 1, NULL, NULL, 'Ubicada a dos calles de av Rafael Cuervo, a 1 km de plaza los Pinos (Chedraui), a 200 m de terminal ADO zona norte\r\n\r\nPLANTA BAJA:\r\nGarage para dos autos.\r\nSala – comedor\r\nCocina\r\nMedio baño\r\nPatio de servicio\r\n\r\nPLANTA ALTA:\r\nDos recamaras\r\nUn baño común', 'AI CV 0005', NULL, 19.2174, -96.1771),
	(3, 'CASA EN VENTA EN FRACC TAMPIQUERA, BOCA DEL RIO, VER.', 'Mexico', 1, 17, 'Fracc Tampiquera', 'Boca del Rio', 94290, 'Coatzacoalcos 58, entre paseo Boca del Rio y Paseo Pescadores', 58, 0, '1586916588279e6f84-1d63-42a5-90fa-c4ff9c42080d.jpg', NULL, 'Casa', 'Sola', 'Venta', 2300000, '', 2, 2, 2, 260, NULL, 240, NULL, 'Buena', NULL, 1, 1, NULL, NULL, 'UN NIVEL\r\n•	Garage techado para 3 autos\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Medio baño de visitas\r\n•	2 recamaras con baño cada una\r\n•	Cuarto de servicio con baño', 'AI CV 0006', NULL, 19.1093, -96.1128),
	(4, 'VENTA DE CASA EN NUEVA ERA A UNA CALLE DE JUAN PABLO II, BOCA DEL RIO VER.', 'Mexico', 1, 17, 'Nueva Era', 'Estadios', 94295, 'A UNA CALLE DE JUAN PABLO II', 230, 0, '15864840242.13.jpeg', NULL, 'Casa', 'Sola', 'Venta', 2150000, 'MXN$', 3, 3, 3, 130, 'm²', 210, 'm²', 'Buena', 2020, 2, 2, NULL, 'MXN$', 'PLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Sala\r\n•	Comedor\r\n•	Cocina Integral con barra\r\n•	Jardin\r\n•	Medio Baño\r\nPLANTA ALTA:\r\n•	3 Recamaras con baño y closet\r\n•	Sala de TV\r\nCARACTERISTICAS:\r\n•	Cisterna con bomba\r\n•	Portón automático\r\n•	calentador', 'AI CV 0003', NULL, NULL, NULL),
	(5, 'VENTA DE CASA COL PRIMERO DE MAYO NORTE, BOCA DEL RIO, VER', 'Mexico', 1, 17, 'Primero de Mayo Norte', 'Boticaria', 94298, 'Lazaro Cardenas', 395, 0, '1586540798WhatsApp Image 2020-04-07 at 21.54.25.jpeg', NULL, 'Casa', 'Sola', 'Venta', 1695000, '', 3, 3, 3, 126, NULL, 125.2, NULL, 'Buena', NULL, 2, 2, NULL, NULL, 'PLANTA BAJA\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Recamara\r\n•	Baño completo\r\n•	Área de servicio cubierta\r\nPLANTA ALTA\r\n•	Dos recamaras con vestidor y baño\r\n•	Balcón\r\nCuenta con: \r\n•	protecciones planta baja\r\n•	cisterna con bomba\r\n•	cocina integral\r\n•	climatizada sala-comedor y las 3 recamaras', 'AI CV 0004', NULL, 19.1445, -96.1229),
	(6, 'VENTA DE CASA EN FRACC LAS PALMAS GREEN, MEDELLIN, VER.', 'Mexico', 1, 19, 'Fracc las Palmas', 'Boca del Rio', 94274, 'Privada 18', 12, NULL, '1586541310WhatsApp Image 2020-04-07 at 21.56.23.jpeg', NULL, 'Casa', 'Sola', 'Venta', 5950000, '', 3, 4, 1, 240, NULL, 360.06, NULL, 'Buena', 2020, 2, 2, NULL, NULL, 'Hermosa casa en Fracc Las Palmas, ubicadado a 5 min del centro de Boca de Rio, del centro comercial exclusivo  El Dorado, de zona de playas:\r\n\r\n\r\nPLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Closet de herramientas\r\n•	Jardin\r\n•	Terraza\r\n•	Vestibulo de acceso\r\n•	½ baño\r\n•	Estancia (doble altura)\r\n•	Comedor (jardín interior)\r\n•	Cocina\r\n•	Cuarto de lavado\r\n•	Patio de tendido\r\n•	Cuarto de servicio con baño\r\nPLANTA ALTA:\r\n•	Vestibulo (closet de blancos y séptico)\r\n•	Sala de TV\r\n•	Recamara principal con Vestidor, baño y balcón\r\n•	Recamara 2 con baño y closet\r\n•	Recamara 3 con vestidor, baño y balcón', 'AI 0006', NULL, 19.1073, -96.1214),
	(7, 'VENTA DE CASA EN RESIDENCIAL DEL BOSQUE, VERACRUZ, VER', 'Mexico', 1, 18, 'Bosque Veracruz', 'Norte', 91697, 'Esta camino a Tejeria', 0, NULL, '1586541742WhatsApp Image 2020-04-07 at 22.04.57.jpeg', NULL, 'Casa', 'Sola', 'Venta', 950000, '', 3, 2, NULL, 120, NULL, 118.35, NULL, 'Buena', NULL, 2, 2, NULL, NULL, 'PLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Sala\r\n•	Comedor\r\n•	Baño completo\r\n•	Cocina integral\r\n•	Patio de servicio\r\n•	Jardín\r\n\r\nPLANTA ALTA:\r\n•	3 recamaras\r\n•	Un baño completo\r\nCasa en  esquina con excedente de terreno, muros con acabados pulido espejo, antique y piedras, pisos de cerámico. (acabados de lujo)', 'AI CV 0007', NULL, NULL, NULL),
	(8, 'VENTA DE HERMOSA RESIDENCIA EN FRACC PALMAS GREEEN, MEDELLIN, VER', 'Mexico', 1, 19, 'Fracc Palmas Green', 'Boca del Rio', 94274, 'Cangrejo', 57, NULL, '1586542175WhatsApp Image 2020-04-07 at 22.05.18.jpeg', NULL, 'Casa', 'Sola', 'Venta', 14950000, '', 3, 4, 1, 500, NULL, 569.62, NULL, 'Buena', 2020, 2, 4, NULL, NULL, 'PLANTA BAJA:\r\n•	Garage 4 autos\r\n•	Closet de herramientas\r\n•	Jardín\r\n•	Alberca de 3.00 x 11.00 m\r\n•	Asador\r\n•	Terraza techada 4.40 x 9.55 mts\r\n•	Terraza abierta 3.60 x 4.30 mts con asador, tarja, barra de preparación\r\n•	Vestíbulo de acceso, con closet \r\n•	½ baño\r\n•	Cuarto de usos múltiples ( Recamara, oficina, sala de TV, etc)\r\n•	Estancia (doble altura 6.04 m.)\r\n•	Comedor (doble altura 6.04 m.)\r\n•	Cocina integral equipada, despensa\r\n•	Cuarto de lavado (calentador)\r\n•	Patio de tendido\r\n•	Cuarto de servicio con baño\r\n\r\nPLANTA ALTA:\r\n•	Vestíbulo (closet de blancos y séptico)\r\n•	Sala de TV o Estudio\r\n•	Bodega\r\n•	Recamara Principal 3.50m altura, con Vestidor, baño, balcón calle, balcón jardín, patio de tendido\r\n•	Recamara 2 altura 3.50m  con vestidor y  baño, con vista al jardín\r\n•	Recamara 3 altura 3.50 m con vestidor y baño, con vista al jardín\r\n\r\nCARACTERISTICAS\r\n•	Cisterna 5000 lts\r\n•	Bomba sumergible\r\n•	Hidroneumático\r\n•	Calentador 2\r\n•	Acceso secundario', 'AI CV 0008', NULL, 19.1073, -96.1213),
	(9, 'FRACCIONAMIENTO “JARDINES DEL SUR” PASO DEL TORO, MEDELLIN VERACRUZ', 'Mexico', 1, 17, 'Paso del Toro', 'Jardines del Sur', 94277, 'A sólo cinco minutos de Plaza el Dorado, Km. 7 Boulevard Boca del Río-Paso del Toro', 0, NULL, '1586542700WhatsApp Image 2020-04-07 at 22.06.50.jpeg', NULL, 'Casa', 'Financiamiento', 'Venta', 1350000, '', 3, 2, 2, 84, NULL, 113, NULL, 'Buena', 2020, 2, 1, NULL, NULL, 'PLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Medio baño\r\n•	Cocina \r\n•	Área de lavado\r\n•	Jardín\r\n•	Estacionamiento\r\nPLANTA ALTA:\r\n•	Dos recámaras con clóset cada una, comparten baño\r\n•	Recámara principal con baño y closet\r\nLa madera de clósets y puertas es de Cedro con Caobilla\r\nAMENIDADES\r\n•	Alberca\r\n•	Gimnasio\r\n•	Palapas\r\n•	Cancha de fútbol cinco\r\n•	Área de asadores\r\n•	Área de mascotas\r\n•	Vigilancia las 24 horas\r\n•	Vialidades de concreto\r\nInstalaciones eléctricas, de televisión y de cable subterráneas', 'AI CV 0009', NULL, 19.0414, -96.1359),
	(10, 'CASAS ESTILO CAMPESTRE CON ALBERCA, VILLAS SAN JOSE EN SAN JOSE NOVILLERO, EN BOCA DEL RIO, VER', 'Mexico', 1, 17, 'San Jose Novillero', 'Boca del Rio', 94277, 'San Jose Novillero', 0, NULL, '1586543742WhatsApp Image 2020-04-07 at 22.09.51.jpeg', NULL, 'Casa', 'Financiamiento', 'Venta', 1565000, '', 3, 3, 3, 152, NULL, 126, NULL, 'Buena', NULL, 2, 1, NULL, NULL, 'Hermosa casa estilo campestre con alberca, ubicada a 10 min del centro de Boca de Rio, del centro comercial exclusivo El Dorado, de zona de playas, Escuelas de Particulares de Prestigio en la Zona.\r\n\r\nPLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Una recámara\r\n•	Un baño completo\r\n•	Area de lavado\r\n•	Patio\r\n•	Estacionamiento\r\n•	Jardin\r\n\r\nPLANTA ALTA:\r\n•	2 recamaras con baño cada una\r\n•	Terraza\r\n\r\nAREAS COMUNES\r\n•	Jardines\r\n•	Alberca\r\n•	Asadores\r\n•	Baños en areas de alberca y asadores\r\n•	Vigilancia 24/7', 'AI CV 0010', NULL, 19.0878, -96.1341),
	(11, 'CASA EN VENTA INFONAVIT BUENA VISTA, VERACRUZ, VER.', 'Mexico', 1, 18, 'Buena Vista', 'Norte', 94277, 'Buena Vista', 0, NULL, '1586544217WhatsApp Image 2020-04-07 at 22.10.50.jpeg', NULL, 'Casa', 'Sola', 'Venta', 750000, '', 3, 1, NULL, 75, NULL, 105, NULL, 'Buena', NULL, 2, NULL, NULL, NULL, 'PLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Patio se servicio\r\n\r\nPLANTA ALTA:\r\n•	3 recamaras\r\n•	Un baño\r\n•	Área de estudio\r\n•	Balcón', 'AI CV 0011', NULL, NULL, NULL);
/*!40000 ALTER TABLE `cv_propiedades` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.cv_tipos
CREATE TABLE IF NOT EXISTS `cv_tipos` (
  `TIPOS_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TIPOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`TIPOS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.cv_tipos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `cv_tipos` DISABLE KEYS */;
INSERT INTO `cv_tipos` (`TIPOS_ID`, `TIPOS_NOMBRE`) VALUES
	(7, 'Casa'),
	(8, 'Departamento'),
	(9, 'Bodega'),
	(10, 'Oficina'),
	(11, 'Local'),
	(12, 'Terreno');
/*!40000 ALTER TABLE `cv_tipos` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.projects: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Volcando estructura para tabla grupola7_compraventa.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID_USER` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROL_USERS` int(11) DEFAULT NULL,
  `ELIMINAR_USER` int(1) unsigned DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  UNIQUE KEY `users_email_user_unique` (`EMAIL_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla grupola7_compraventa.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID_USER`, `NOMBRE_USER`, `EMAIL_USER`, `PASSWORD_USER`, `ROL_USERS`, `ELIMINAR_USER`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Isis Cervantes', 'arquitectura_inmobiliaria@grupolacer.com', '$2y$10$Do5BdXffR1D0o76sHEzZhej6HBFNophHNNC/ZryjuDjSnBBSILmai', 4, 1, NULL, NULL, NULL),
	(4, 'Eduardo Cervantes', 'cervantese8@hotmail.com', '$2y$10$1g9WHFh/sky8z2x1V6EZh.hamUuV5nHxgiZWbudCXS3GqKTu6dM5y', 4, 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
