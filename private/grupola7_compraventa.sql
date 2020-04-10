-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-04-2020 a las 13:53:32
-- Versión del servidor: 5.7.29-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupola7_compraventa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_contactos`
--

CREATE TABLE `cv_contactos` (
  `ID_CONTACTO` bigint(20) UNSIGNED NOT NULL,
  `CONTACTO_NOMBRE` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_EMAIL` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_TELEFONO` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_ASUNTO` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTO_MENSAJE` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_estados`
--

CREATE TABLE `cv_estados` (
  `ESTADOS_ID` int(10) UNSIGNED NOT NULL,
  `ESTADOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_estados`
--

INSERT INTO `cv_estados` (`ESTADOS_ID`, `ESTADOS_NOMBRE`) VALUES
(1, 'Veracruz'),
(2, 'Puebla'),
(3, 'Tlaxcala'),
(4, 'Quintanarro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_imagenes`
--

CREATE TABLE `cv_imagenes` (
  `IMAGENES_ID` int(10) UNSIGNED NOT NULL,
  `IMAGENES_PROPIEDAD` int(10) UNSIGNED NOT NULL,
  `IMAGENES_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IMAGENES_ARCHIVO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IMAGENES_ORDEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_imagenes`
--

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
(66, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.10.06.jpeg', 0),
(67, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.01.jpeg', 1),
(68, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.02(1).jpeg', 2),
(69, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.02(2).jpeg', 3),
(70, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.02.jpeg', 4),
(71, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.03.jpeg', 5),
(72, 1, 'propiedad 1', '1586484516WhatsApp Image 2020-04-03 at 20.11.23.jpeg', 6),
(73, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.04.jpeg', 0),
(74, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.05(1).jpeg', 1),
(75, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.05.jpeg', 2),
(76, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.06.jpeg', 3),
(77, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.20.jpeg', 4),
(78, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.21(1).jpeg', 5),
(79, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.21.jpeg', 6),
(80, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.22(1).jpeg', 7),
(81, 3, 'propiedad 2', '1586484795WhatsApp Image 2020-04-03 at 20.12.22.jpeg', 8),
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
(180, 11, 'propiedad 9', '1586544321WhatsApp Image 2020-04-07 at 22.10.51.jpeg', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_inicio`
--

CREATE TABLE `cv_inicio` (
  `INICIO_ID` int(10) UNSIGNED NOT NULL,
  `INICIO_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_inicio`
--

INSERT INTO `cv_inicio` (`INICIO_ID`, `INICIO_NOMBRE`) VALUES
(18, '1586485098índice.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_municipios`
--

CREATE TABLE `cv_municipios` (
  `MUNICIPIOS_ID` int(10) UNSIGNED NOT NULL,
  `MUNICIPIOS_ESTADO` int(10) UNSIGNED NOT NULL,
  `MUNICIPIOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_municipios`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_propiedades`
--

CREATE TABLE `cv_propiedades` (
  `PROPIEDADES_ID` int(10) UNSIGNED NOT NULL,
  `PROPIEDADES_NOMBRE` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_PAIS` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_ESTADO` int(10) UNSIGNED NOT NULL,
  `PROPIEDADES_MUNICIPIO` int(10) UNSIGNED NOT NULL,
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
  `PROPIEDADES_PRECIO` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_HABITACIONES` int(11) DEFAULT NULL,
  `PROPIEDADES_BAÑOS` int(11) DEFAULT NULL,
  `PROPIEDADES_MEDIO_BAÑO` int(11) DEFAULT NULL,
  `PROPIEDADES_TERRENOS` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_CONSTRUCCION` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_CONDICIONES` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_AÑO` int(11) DEFAULT NULL,
  `PROPIEDADES_NIVELES` int(11) DEFAULT NULL,
  `PROPIEDADES_ESTACIONAMIENTO` int(11) DEFAULT NULL,
  `PROPIEDADES_CUOTA` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_DESCRIPCION` longtext COLLATE utf8mb4_unicode_ci,
  `PROPIEDADES_CLAVE` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_VIDEO` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PROPIEDADES_LATITUD` float DEFAULT NULL,
  `PROPIEDADES_LONGITUD` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_propiedades`
--

INSERT INTO `cv_propiedades` (`PROPIEDADES_ID`, `PROPIEDADES_NOMBRE`, `PROPIEDADES_PAIS`, `PROPIEDADES_ESTADO`, `PROPIEDADES_MUNICIPIO`, `PROPIEDADES_COLONIA`, `PROPIEDADES_ZONA`, `PROPIEDADES_CP`, `PROPIEDADES_CALLE`, `PROPIEDADES_EXTERIOR`, `PROPIEDADES_INTERIOR`, `PROPIEDADES_IMAGEN`, `PROPIEDADES_MAPA`, `PROPIEDADES_TIPO`, `PROPIEDADES_SUBTIPO`, `PROPIEDADES_OPERACION`, `PROPIEDADES_PRECIO`, `PROPIEDADES_HABITACIONES`, `PROPIEDADES_BAÑOS`, `PROPIEDADES_MEDIO_BAÑO`, `PROPIEDADES_TERRENOS`, `PROPIEDADES_CONSTRUCCION`, `PROPIEDADES_CONDICIONES`, `PROPIEDADES_AÑO`, `PROPIEDADES_NIVELES`, `PROPIEDADES_ESTACIONAMIENTO`, `PROPIEDADES_CUOTA`, `PROPIEDADES_DESCRIPCION`, `PROPIEDADES_CLAVE`, `PROPIEDADES_VIDEO`, `PROPIEDADES_LATITUD`, `PROPIEDADES_LONGITUD`) VALUES
(1, 'VENTA DE CASA EN PLAYA LINDA, VERACRUZ, VER.', 'Mexico', 1, 28, 'Playa Linda', 'Norte', 91810, 'Playa Linda Veracruz', 0, 14, '1586484306WhatsApp Image 2020-04-03 at 20.11.23.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$570,000', 2, 1, 1, '65m2', '80 m2', 'Buena', 2000, 2, 1, NULL, 'Planta Baja\r\n\r\nGarage para dos autos.\r\nSala – comedor\r\nCocina\r\nMedio baño\r\nPatio de servicio\r\n\r\nPlanta Alta\r\nDos recamaras\r\nUn baño comun', 'AI CV 0005', NULL, 19.2174, -96.1795),
(3, 'CASA EN VENTA EN FRACC TAMPIQUERA, BOCA DEL RIO, VER.', 'Mexico', 1, 28, 'Boca del Rio', 'Norte', 94290, 'Coatzacoalcos 58, entre paseo Boca del Rio y Paseo Pescadores', 58, 0, '1586484729WhatsApp Image 2020-04-03 at 20.12.04.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$2,300,000', 2, 2, 2, '260 m2', '240 m2', 'Buena', NULL, 1, 1, NULL, 'UN NIVEL\r\n•	Garage techado para 3 autos\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Medio baño de visitas\r\n•	2 recamaras con baño cada una\r\n•	Cuarto de servicio con baño', 'AI CV 0006', NULL, NULL, NULL),
(4, 'VENTA DE CASA EN NUEVA ERA A UNA CALLE DE JUAN PABLO II, BOCA DEL RIO VER.', 'Mexico', 1, 28, 'Boca del Rio', 'Nueva Era', 94290, 'A UNA CALLE DE JUAN PABLO II', 230, 0, '15864840242.13.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$2,150,000', 3, 3, 3, '130 m2', '210 m2', 'Buena', 2020, 2, 2, NULL, 'PLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Sala\r\n•	Comedor\r\n•	Cocina Integral con barra\r\n•	Jardin\r\n•	Medio Baño\r\nPLANTA ALTA:\r\n•	3 Recamaras con baño y closet\r\n•	Sala de TV\r\nCARACTERISTICAS:\r\n•	Cisterna con bomba\r\n•	Portón automático\r\n•	calentador', 'AI CV 0003', NULL, NULL, NULL),
(5, 'VENTA DE CASA COL PRIMERO DE MAYO NORTE', 'Mexico', 1, 17, 'Lazaro Cardenas', 'Boca de Rio', 94298, 'Lazaro Cardenas 395-A, Boca de Rio, Ver', 395, NULL, '1586540798WhatsApp Image 2020-04-07 at 21.54.25.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$1,695,000', 3, 2, NULL, '126 m2', '125.20 m2', 'Buena', NULL, 2, 2, NULL, 'PLANTA BAJA\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Recamara\r\n•	Baño completo\r\n•	Área de servicio cubierta\r\nPLANTA ALTA\r\n•	Dos recamaras con vestidor y baño\r\n•	Balcón\r\nCuenta con: \r\n•	protecciones planta baja\r\n•	cisterna con bomba\r\n•	cocina integral\r\n•	climatizada sala-comedor y las 3 recamaras', 'AI CV 0004', NULL, NULL, NULL),
(6, 'VENTA DE CASA EN FRACC LAS PALMAS, MEDELLIN, VER.', 'Mexico', 1, 18, 'Medellín de Bravo, Ver.', 'Norte', 94273, 'Fracc las Palmas Privada 18 lote 12, Medellín de Bravo, Ver.', 18, 12, '1586541310WhatsApp Image 2020-04-07 at 21.56.23.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$5,950,000.00', 5, 3, 1, '240 m2 (12 x 20)', '360.06 m2', 'Buena', 2020, 2, 2, NULL, 'PLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Closet de herramientas\r\n•	Jardin\r\n•	Terraza\r\n•	Vestibulo de acceso\r\n•	½ baño\r\n•	Estancia (doble altura)\r\n•	Comedor (jardín interior)\r\n•	Cocina\r\n•	Cuarto de lavado\r\n•	Patio de tendido\r\n•	Cuarto de servicio con baño\r\nPLANTA ALTA:\r\n•	Vestibulo (closet de blancos y séptico)\r\n•	Sala de TV\r\n•	Recamara principal con Vestidor, baño y balcón\r\n•	Recamara 2 con baño y closet\r\n•	Recamara 3 con vestidor, baño y balcón', 'AI 0006', NULL, NULL, NULL),
(7, 'VENTA DE CASA EN RESIDENCIAL DEL BOSQUE, VERACRUZ, VER', 'Mexico', 1, 18, 'Bosque Veracruz', 'Norte', 91697, 'Esta camino a Tejeria', 0, NULL, '1586541742WhatsApp Image 2020-04-07 at 22.04.57.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$950,000', 3, 2, NULL, '8.00 x 15.00 = 120 m2', '118.35 m2', 'Buena', NULL, 2, 2, NULL, 'PLANTA BAJA:\r\n•	Garage 2 autos\r\n•	Sala\r\n•	Comedor\r\n•	Baño completo\r\n•	Cocina integral\r\n•	Patio de servicio\r\n•	Jardín\r\n\r\nPLANTA ALTA:\r\n•	3 recamaras\r\n•	Un baño completo\r\nCasa en  esquina con excedente de terreno, muros con acabados pulido espejo, antique y piedras, pisos de cerámico. (acabados de lujo)', 'AI CV 0007', NULL, NULL, NULL),
(8, 'VENTA DE HERMOSA RESIDENCIA EN FRACC PALMAS GREEEN, MEDELLIN, VER', 'Mexico', 1, 18, 'Medellín de Bravo, Ver', 'Norte', 94274, 'Fracc Green Cangrejo 57, Medellín de Bravo, Ver.', 57, NULL, '1586542175WhatsApp Image 2020-04-07 at 22.05.18.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$14,950,000.00', 5, 4, 1, '500 m2', '569.62 m2', 'Buena', 2020, 2, 4, NULL, 'PLANTA BAJA:\r\n•	Garage 4 autos\r\n•	Closet de herramientas\r\n•	Jardín\r\n•	Alberca de 3.00 x 11.00 m\r\n•	Asador\r\n•	Terraza techada 4.40 x 9.55 mts\r\n•	Terraza abierta 3.60 x 4.30 mts con asador, tarja, barra de preparación\r\n•	Vestíbulo de acceso, con closet \r\n•	½ baño\r\n•	Cuarto de usos múltiples ( Recamara, oficina, sala de TV, etc)\r\n•	Estancia (doble altura 6.04 m.)\r\n•	Comedor (doble altura 6.04 m.)\r\n•	Cocina integral equipada, despensa\r\n•	Cuarto de lavado (calentador)\r\n•	Patio de tendido\r\n•	Cuarto de servicio con baño\r\n\r\nPLANTA ALTA:\r\n•	Vestíbulo (closet de blancos y séptico)\r\n•	Sala de TV o Estudio\r\n•	Bodega\r\n•	Recamara Principal 3.50m altura, con Vestidor, baño, balcón calle, balcón jardín, patio de tendido\r\n•	Recamara 2 altura 3.50m  con vestidor y  baño, con vista al jardín\r\n•	Recamara 3 altura 3.50 m con vestidor y baño, con vista al jardín\r\n\r\nCARACTERISTICAS\r\n•	Cisterna 5000 lts\r\n•	Bomba sumergible\r\n•	Hidroneumático\r\n•	Calentador 2\r\n•	Acceso secundario', 'AI CV 0008', NULL, NULL, NULL),
(9, 'FRACCIONAMIENTO “JARDINES DEL SUR” PASO DEL TORO, MEDELLIN VERACRUZ', 'Mexico', 1, 28, 'Boca del Río-Paso del Toro', 'Jardines del Sur', 94277, 'A sólo cinco minutos de Plaza el Dorado, Km. 7 Boulevard Boca del Río-Paso del Toro', 0, NULL, '1586542700WhatsApp Image 2020-04-07 at 22.06.50.jpeg', NULL, 'Casa', 'Sola', 'Venta', 'PREVENTA SIN COCINA: $1,290,000.00 PREVENTA CON COCINA: $1,350,000.00', 3, 2, 2, '6x14=84m2', '113 m²', 'Buena', NULL, 2, 1, NULL, 'PLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Medio baño\r\n•	Cocina \r\n•	Área de lavado\r\n•	Jardín\r\n•	Estacionamiento\r\nPLANTA ALTA:\r\n•	Dos recámaras con clóset cada una, comparten baño\r\n•	Recámara principal con baño y closet\r\nLa madera de clósets y puertas es de Cedro con Caobilla\r\nAMENIDADES\r\n•	Alberca\r\n•	Gimnasio\r\n•	Palapas\r\n•	Cancha de fútbol cinco\r\n•	Área de asadores\r\n•	Área de mascotas\r\n•	Vigilancia las 24 horas\r\n•	Vialidades de concreto\r\nInstalaciones eléctricas, de televisión y de cable subterráneas', 'AI CV 0009', NULL, NULL, NULL),
(10, 'CASAS ESTILO CAMPESTRE VILLAS SAN JOSE EN SAN JOSE NOVILLERO, EN BOCA DEL RIO, VER', 'Mexico', 1, 17, 'BOCA DEL RIO, VER', 'Norte', 94277, 'SAN JOSE NOVILLERO', 0, NULL, '1586543742WhatsApp Image 2020-04-07 at 22.09.51.jpeg', NULL, 'Casa', 'Sola', 'Venta', 'PREVENTA $1,565,000.00 CON COCINA  PREVENTA $1,510,000.00 SIN COCINA', 3, 4, NULL, '152 m2', '126 m2', 'Buena', NULL, 2, 1, NULL, 'PLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Una recámara\r\n•	Un baño completo\r\n•	Area de lavado\r\n•	Patio\r\n•	Estacionamiento\r\n•	Jardin\r\n\r\nPLANTA ALTA:\r\n•	2 recamaras con baño cada una\r\n•	Terraza\r\n\r\nAREAS COMUNES\r\n•	Jardines\r\n•	Alberca\r\n•	Asadores\r\n•	Baños en areas de alberca y asadores\r\n•	Vigilancia 24/7', 'AI CV 0010', NULL, NULL, NULL),
(11, 'CASA EN VENTA INFONAVIT BUENA VISTA, VERACRUZ, VER.', 'Mexico', 1, 18, 'Buena Vista', 'Norte', 94277, 'Buena Vista', 0, NULL, '1586544217WhatsApp Image 2020-04-07 at 22.10.50.jpeg', NULL, 'Casa', 'Sola', 'Venta', '$750,000 negociable', 3, 1, NULL, '5.00 x 15.00 m.=75 m2', '105.00 m2', 'Buena', NULL, 2, NULL, NULL, 'PLANTA BAJA:\r\n•	Sala\r\n•	Comedor\r\n•	Cocina\r\n•	Patio se servicio\r\n\r\nPLANTA ALTA:\r\n•	3 recamaras\r\n•	Un baño\r\n•	Área de estudio\r\n•	Balcón', 'AI CV 0011', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_tipos`
--

CREATE TABLE `cv_tipos` (
  `TIPOS_ID` int(10) UNSIGNED NOT NULL,
  `TIPOS_NOMBRE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cv_tipos`
--

INSERT INTO `cv_tipos` (`TIPOS_ID`, `TIPOS_NOMBRE`) VALUES
(7, 'Casa'),
(8, 'Departamento'),
(9, 'Bodega'),
(10, 'Oficina'),
(11, 'Local'),
(12, 'Terreno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID_USER` bigint(20) UNSIGNED NOT NULL,
  `NOMBRE_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD_USER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROL_USERS` int(11) DEFAULT NULL,
  `ELIMINAR_USER` int(1) UNSIGNED DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID_USER`, `NOMBRE_USER`, `EMAIL_USER`, `PASSWORD_USER`, `ROL_USERS`, `ELIMINAR_USER`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Isis Cervantes', 'arquitectura_inmobiliaria@grupolacer.com', '$2y$10$Do5BdXffR1D0o76sHEzZhej6HBFNophHNNC/ZryjuDjSnBBSILmai', 4, 1, NULL, NULL, NULL),
(4, 'Eduardo Cervantes', 'cervantese8@hotmail.com', '$2y$10$1g9WHFh/sky8z2x1V6EZh.hamUuV5nHxgiZWbudCXS3GqKTu6dM5y', 4, 1, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cv_contactos`
--
ALTER TABLE `cv_contactos`
  ADD PRIMARY KEY (`ID_CONTACTO`);

--
-- Indices de la tabla `cv_estados`
--
ALTER TABLE `cv_estados`
  ADD PRIMARY KEY (`ESTADOS_ID`);

--
-- Indices de la tabla `cv_imagenes`
--
ALTER TABLE `cv_imagenes`
  ADD PRIMARY KEY (`IMAGENES_ID`),
  ADD KEY `cv_imagenes_imagenes_propiedad_foreign` (`IMAGENES_PROPIEDAD`);

--
-- Indices de la tabla `cv_inicio`
--
ALTER TABLE `cv_inicio`
  ADD PRIMARY KEY (`INICIO_ID`);

--
-- Indices de la tabla `cv_municipios`
--
ALTER TABLE `cv_municipios`
  ADD PRIMARY KEY (`MUNICIPIOS_ID`),
  ADD KEY `cv_municipios_municipios_estado_foreign` (`MUNICIPIOS_ESTADO`);

--
-- Indices de la tabla `cv_propiedades`
--
ALTER TABLE `cv_propiedades`
  ADD PRIMARY KEY (`PROPIEDADES_ID`),
  ADD KEY `cv_propiedades_propiedades_estado_foreign` (`PROPIEDADES_ESTADO`),
  ADD KEY `cv_propiedades_propiedades_municipio_foreign` (`PROPIEDADES_MUNICIPIO`);

--
-- Indices de la tabla `cv_tipos`
--
ALTER TABLE `cv_tipos`
  ADD PRIMARY KEY (`TIPOS_ID`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `users_email_user_unique` (`EMAIL_USER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cv_contactos`
--
ALTER TABLE `cv_contactos`
  MODIFY `ID_CONTACTO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cv_estados`
--
ALTER TABLE `cv_estados`
  MODIFY `ESTADOS_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cv_imagenes`
--
ALTER TABLE `cv_imagenes`
  MODIFY `IMAGENES_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT de la tabla `cv_inicio`
--
ALTER TABLE `cv_inicio`
  MODIFY `INICIO_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cv_municipios`
--
ALTER TABLE `cv_municipios`
  MODIFY `MUNICIPIOS_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cv_propiedades`
--
ALTER TABLE `cv_propiedades`
  MODIFY `PROPIEDADES_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cv_tipos`
--
ALTER TABLE `cv_tipos`
  MODIFY `TIPOS_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cv_imagenes`
--
ALTER TABLE `cv_imagenes`
  ADD CONSTRAINT `cv_imagenes_imagenes_propiedad_foreign` FOREIGN KEY (`IMAGENES_PROPIEDAD`) REFERENCES `cv_propiedades` (`PROPIEDADES_ID`);

--
-- Filtros para la tabla `cv_municipios`
--
ALTER TABLE `cv_municipios`
  ADD CONSTRAINT `cv_municipios_municipios_estado_foreign` FOREIGN KEY (`MUNICIPIOS_ESTADO`) REFERENCES `cv_estados` (`ESTADOS_ID`);

--
-- Filtros para la tabla `cv_propiedades`
--
ALTER TABLE `cv_propiedades`
  ADD CONSTRAINT `cv_propiedades_propiedades_estado_foreign` FOREIGN KEY (`PROPIEDADES_ESTADO`) REFERENCES `cv_estados` (`ESTADOS_ID`),
  ADD CONSTRAINT `cv_propiedades_propiedades_municipio_foreign` FOREIGN KEY (`PROPIEDADES_MUNICIPIO`) REFERENCES `cv_municipios` (`MUNICIPIOS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
