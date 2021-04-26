-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2021 a las 18:18:15
-- Versión del servidor: 10.5.9-MariaDB
-- Versión de PHP: 8.0.2
CREATE DATABASE toposicionesDB;
use toposicionesDB;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Base de datos: `toposicionesDB`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `opposition`
--
CREATE TABLE `opposition` (
  `oppositionId` int(11) NOT NULL,
  `opposition_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` int(11) DEFAULT NULL,
  `official_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateId` int(11) NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `opposition_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opposition_start_date` datetime DEFAULT NULL,
  `opposition_end_date` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `opposition`
--
INSERT INTO `opposition` (
    `oppositionId`,
    `opposition_status`,
    `seats`,
    `official_link`,
    `stateId`,
    `categoryId`,
    `opposition_description`,
    `opposition_start_date`,
    `opposition_end_date`,
    `created_at`,
    `updated_at`
  )
VALUES (
    1,
    'Abierta',
    2,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    21,
    2,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    2,
    'Cerrada',
    1,
    'https://bop.dival.es/bop/drvisapi.dll?LO=00000001a6b7c8d9000000050000004300000d57435027fc000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000&type=application/pdf',
    19,
    14,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    3,
    'Abierta',
    8,
    'https://www.dipusevilla.es/system/modules/com.saga.sagasuite.theme.diputacion.sevilla.corporativo/handlers/download-bop.pdf?id=b22b11af-9081-11eb-8dd2-0050569fe27b',
    11,
    6,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    4,
    'Abierta',
    3,
    'https://www.dipusevilla.es/system/modules/com.saga.sagasuite.theme.diputacion.sevilla.corporativo/handlers/download-bop.pdf?id=b22b11af-9081-11eb-8dd2-0050569fe27b',
    6,
    9,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    5,
    'Abierta',
    1,
    'https://bop.dival.es/bop/drvisapi.dll?LO=00000001a6b7c8d9000000050000004300000d57435027fc000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000&type=application/pdf',
    23,
    22,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    6,
    'Abierta',
    2,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    4,
    12,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    7,
    'Cerrada',
    2,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    8,
    8,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    8,
    'Abierta',
    4,
    'https://bop.dival.es/bop/drvisapi.dll?LO=00000001a6b7c8d9000000050000004300000d57435027fc000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000&type=application/pdf',
    6,
    17,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    9,
    'Cerrada',
    1,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    18,
    25,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    10,
    'Abierta',
    2,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    25,
    6,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    11,
    'Abierta',
    6,
    'https://www.dipusevilla.es/system/modules/com.saga.sagasuite.theme.diputacion.sevilla.corporativo/handlers/download-bop.pdf?id=b22b11af-9081-11eb-8dd2-0050569fe27b',
    8,
    18,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    12,
    'Abierta',
    12,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    24,
    2,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    13,
    'Cerrada',
    9,
    'https://docm.castillalamancha.es/portaldocm/detalleDocumento.do?idDisposicion=1616501710314820979',
    8,
    2,
    '',
    '2021-03-29 22:13:48',
    '2021-10-26 21:19:41',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `opposition_ambit`
--
CREATE TABLE `opposition_ambit` (
  `ambitId` int(11) NOT NULL,
  `ambit_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ambit_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `opposition_ambit`
--
INSERT INTO `opposition_ambit` (
    `ambitId`,
    `ambit_name`,
    `ambit_description`,
    `created_at`,
    `updated_at`
  )
VALUES (
    1,
    'Administración Local',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    2,
    'Administración del Estado',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    3,
    'Prisiones',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    4,
    'Hacienda',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    5,
    'Justicia',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    6,
    'Policía y Guardia Civil',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    7,
    'Bomberos',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    8,
    'Sanidad',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    9,
    'Educación Primaria',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    10,
    'Educación Secundaria',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    11,
    'Forestales',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    12,
    'Ejército',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    13,
    'Otros',
    '',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `opposition_category`
--
CREATE TABLE `opposition_category` (
  `categoryId` int(11) NOT NULL,
  `category_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommended_material` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ambitId` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `opposition_category`
--
INSERT INTO `opposition_category` (
    `categoryId`,
    `category_name`,
    `category_description`,
    `recommended_material`,
    `ambitId`,
    `created_at`,
    `updated_at`
  )
VALUES (
    1,
    'Auxiliar Administrativo',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    2,
    'Administrativo',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    3,
    'Auxiliar Administrativo Banco de España',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    4,
    'Auxiliar Biblioteca',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    5,
    'Trabajo Social',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    6,
    'Técnico educador de escuelas infantiles',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    7,
    'Personal Subalterno',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    1,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    8,
    'Gestión de la administración civil del estado',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    2,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    9,
    'Técnico auxiliar de informática de la administración del estado',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    2,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    10,
    'Ayudante instituciones penitenciarias',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    3,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    11,
    'Cuerpo superior de instituciones penitenciarias',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    3,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    12,
    'Enfermeria de instituciones penitenciarias',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    3,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    13,
    'Serveis penitenciaris de Catalunya',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    3,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    14,
    'Técnico hacienda',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    4,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    15,
    'Agente hacienda',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    4,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    16,
    'Auxilio judicial',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    4,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    17,
    'Tramitación procesal de la justicia',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    4,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    18,
    'Gestión procesal de la justicia',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    4,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    19,
    'Guardia civil',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    20,
    'Policia nacional',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    21,
    'Guardia urbana de Barcelona',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    22,
    'Ertzaintza',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    23,
    'Mossos d\'esquadra',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    24,
    'Policia local',
    '',
    'https://www.amazon.es/s?k=temario+Asesor+Jur%EF%BF%BDdico%2C+T%EF%BF%BDcnico+de+Relaciones+Laborales+y+Administrativos&camp=3638&creative=24630&linkCode=ur2&linkId=a3c4c8d5bf9ac895c9cbf9390eae6a3e&tag=temasytestc03-21&ref=as_li_qf_sp_sr_tl',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    25,
    'Policia foral Navarra',
    '',
    '',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    26,
    'Policia escala ejecutiva CNP',
    '',
    '',
    5,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    27,
    'Bombero',
    '',
    '',
    6,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    28,
    'Bomberos de Cataluña',
    '',
    '',
    6,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    29,
    'Bomberos ayuntamiento de Barcelona',
    '',
    '',
    6,
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `spain_states`
--
CREATE TABLE `spain_states` (
  `stateId` int(11) NOT NULL,
  `provincia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `spain_states`
--
INSERT INTO `spain_states` (`stateId`, `provincia`)
VALUES (1, 'Albacete'),
  (2, 'Alicante'),
  (3, 'Almería'),
  (4, 'Álava'),
  (5, 'Asturias'),
  (6, 'Ávila'),
  (7, 'Badajoz'),
  (8, 'Islas Baleares'),
  (9, 'Islas Canarias'),
  (10, 'Barcelona'),
  (11, 'Bizkaia'),
  (12, 'Burgos'),
  (13, 'Cáceres'),
  (14, 'Cádiz'),
  (15, 'Cantabria'),
  (16, 'Castellón'),
  (17, 'Ceuta'),
  (18, 'Ciudad Real'),
  (19, 'Córdoba'),
  (20, 'A Coruña'),
  (21, 'Cuenca'),
  (22, 'Gipuzkoa'),
  (23, 'Girona'),
  (24, 'Granada'),
  (25, 'Guadalajara'),
  (26, 'Huelva'),
  (27, 'Huesca'),
  (28, 'Jaén'),
  (29, 'León'),
  (30, 'Lugo'),
  (31, 'Lleida'),
  (32, 'Madrid'),
  (33, 'Málaga'),
  (34, 'Melilla'),
  (35, 'Murcia'),
  (36, 'Navarra'),
  (37, 'Ourense'),
  (38, 'Palencia'),
  (39, 'Pontevedra'),
  (40, 'La Rioja'),
  (41, 'Salamanca'),
  (43, 'Segovia'),
  (44, 'Sevilla'),
  (45, 'Soria'),
  (46, 'Tarragona'),
  (47, 'Teruel'),
  (48, 'Toledo'),
  (49, 'Valencia'),
  (50, 'Valladolid'),
  (51, 'Zamora'),
  (52, 'Zaragoza');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `theme`
--
CREATE TABLE `theme` (
  `themeId` int(11) NOT NULL,
  `theme_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_category` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `theme`
--
INSERT INTO `theme` (
    `themeId`,
    `theme_name`,
    `theme_category`,
    `content`,
    `userId`,
    `created_at`
  )
VALUES (
    1,
    '	Funcionamiento de los órganos colegiados locales. Convocatoria y orden del día. Régimen de sesiones y acuerdos. Votaciones. Actas y certificaciones de acuerdos.',
    5,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque quis ipsum ut dui faucibus suscipit.Ut fermentum lorem ut lacus consectetur mollis.Vivamus vel ex augue.Donec eget feugiat massa,in tincidunt leo.Sed lacus leo,imperdiet et eros a,aliquet iaculis mauris.Nulla pulvinar,\r\ndiam et porta vehicula,tellus lorem rhoncus velit,sed rhoncus nulla diam tempor nunc.Suspendisse potenti.Mauris ipsum libero,iaculis interdum faucibus sed,luctus at libero.aecenas dapibus eros quis gravida placerat.Pellentesque id diam nibh.Vestibulum est magna,sodales sit amet nisl placerat,egestas consequat tortor.Sed vel velit eget orci mollis mattis.Vivamus cursus augue augue,id elementum risus lobortis ut.Cras hendrerit a nunc fringilla euismod.Sed iaculis est justo,eu convallis ligula porttitor fringilla.Donec quis sodales lectus.Proin eget lacus vel mauris porttitor elementum.Sed at maximus elit.Integer vitae odio sit amet justo dictum tincidunt.Duis condimentum lobortis eros at euismod.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Nam scelerisque nunc sem,sit amet maximus risus commodo ultrices.Sed a velit eget nisl tristique ornare.Curabitur odio augue,placerat ut ultricies at,elementum quis mi.Duis faucibus tortor et eleifend maximus.Quisque semper in magna ac fringilla.Aenean bibendum purus at mattis porttitor.Quisque arcu metus,maximus vitae nisl et,imperdiet rhoncus ante.Donec eget malesuada arcu.Fusce vel metus libero.Nullam nulla enim,posuere sed eros pulvinar,\r\nfringilla tristique justo.Phasellus rutrum finibus nulla at fringilla.Duis non mi et nulla dignissim faucibus eu nec magna.Aenean tortor orci,dictum sit amet semper pellentesque,\r\ntincidunt non arcu.In blandit arcu non vulputate efficitur.Nulla ullamcorper scelerisque ipsum sed vulputate.Vivamus laoreet fermentum nibh,quis sodales libero ultrices dapibus.Nulla luctus augue velit,vel molestie velit aliquam sit amet.Aliquam convallis mauris id massa pulvinar laoreet.Mauris eu aliquet diam,sed vestibulum nunc.Fusce vehicula accumsan nunc,at viverra ex fermentum nec.Proin commodo pretium pretium.Fusce pulvinar,tellus sed faucibus tempus,magna sapien finibus quam,vitae tristique quam magna vitae sapien.Aenean a aliquam elit.Phasellus molestie augue nec odio fermentum dignissim.Ut ut turpis commodo,porttitor metus maximus,pharetra mauris.Suspendisse potenti.Integer urna lacus,viverra a lacinia sed,tincidunt sit amet lectus.Cras sagittis ultricies ex sit amet lobortis.In aliquet arcu nec consectetur tristique.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Nunc tincidunt massa eu tristique rutrum.Etiam vulputate malesuada malesuada.Cras enim mauris,tristique sit amet auctor at,rutrum sit amet justo.Etiam lacus sapien,blandit nec semper ac,elementum nec ligula.Nam non ante nisl.Aliquam tempus porttitor orci eu maximus.Praesent laoreet ante tempus posuere volutpat.In lacinia varius magna.Integer lacus nisi,mollis a condimentum at,dictum vitae elit.Pellentesque sed justo justo.Nulla facilisi.In hac habitasse platea dictumst.Ut ut neque eu dui faucibus interdum dignissim eget neque.Nulla et vestibulum turpis.Phasellus iaculis urna ac augue tincidunt,et egestas libero ornare.Suspendisse sollicitudin diam nec nisl consectetur,ut pharetra nisi pharetra.Nulla dignissim lacus nisl,in auctor odio ultrices non.Suspendisse accumsan mollis ante quis rutrum.Cras eros enim,eleifend quis lobortis interdum,faucibus nec quam.In ut laoreet lacus,ut mollis arcu.Cras eu ante ut lectus iaculis congue ut nec mi.Nulla non justo sagittis,aliquam eros ut,ultricies justo.Nullam blandit neque vel semper placerat.Aliquam vel augue luctus,molestie mi vel,porta enim.In accumsan quis erat non rutrum.Etiam accumsan ac augue non ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Fusce vestibulum orci ut dignissim convallis.Quisque et nunc porttitor,sollicitudin enim in,pellentesque nisi.Phasellus vitae nunc sed libero luctus euismod vitae ac mi.In quis pharetra metus,eget convallis tellus.Nam lobortis mauris ut enim laoreet,et rhoncus velit cursus.Morbi quam justo,interdum eu efficitur in,bibendum et sem.Pellentesque elementum arcu eu lacus blandit dignissim.Curabitur ullamcorper enim a lectus luctus dictum.Etiam id nulla ante.Aliquam congue facilisis ligula ac commodo.Morbi tristique nulla quam,quis ultricies purus pellentesque id.Maecenas aliquet nunc non dui gravida,sit amet ultricies dui aliquet.Mauris in imperdiet neque.Class aptent taciti sociosqu ad litora torquent per conubia nostra,per inceptos himenaeos.Aliquam id nulla at nisl vestibulum condimentum.Duis faucibus odio enim,\r\nac condimentum nulla fringilla a.Cras faucibus erat quam,eget maximus leo congue molestie.Etiam elementum,nulla id rhoncus elementum,erat sem consectetur risus,varius commodo leo mauris quis ex.Cras in ante nec elit rutrum interdum vitae a sapien.Quisque vehicula lectus non ex imperdiet varius.Phasellus iaculis neque diam,quis blandit eros luctus non.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Aenean quis commodo mi,at ultrices urna.Praesent hendrerit faucibus tempus.Aliquam finibus cursus felis nec viverra.Nam venenatis eleifend mauris,a hendrerit diam ultricies a.Proin a mi id enim gravida fermentum eu nec nibh.Nulla nisi erat,congue ut lacus a,\r\nblandit posuere dui.Ut maximus sapien eu nunc sollicitudin,id iaculis mi semper.In arcu tellus,venenatis quis elementum ac,faucibus ac est.Aenean nec dolor sapien.Nunc iaculis eu lorem sed finibus.Nunc purus enim,pretium at quam sit amet,eleifend sollicitudin ligula.Donec eget ultrices ligula,sed elementum quam.Pellentesque venenatis mattis est posuere sagittis.Morbi non nunc dictum,tincidunt magna in,condimentum sapien.Aliquam vel arcu est.Suspendisse sed vulputate nibh.Nullam pharetra orci faucibus tellus vestibulum,at elementum velit scelerisque.Quisque consequat,erat vel porta laoreet,erat felis tincidunt est,sed mollis diam ligula in odio.Aenean ut est sodales,iaculis risus ut,vulputate enim.Cras commodo ante ac eros venenatis,pharetra commodo augue tempus.Cras ullamcorper vitae neque ut egestas.In ac ante urna.Nunc hendrerit diam et tincidunt viverra.Curabitur elit nisi,iaculis id quam ac,convallis tristique metus.Nullam ultricies lectus nibh,id laoreet velit eleifend quis.Aliquam congue lectus pretium sapien mattis,vel tincidunt ligula iaculis.Aenean ut erat vitae felis volutpat tempus.Integer nec pulvinar nisl.Morbi consectetur nunc augue,nec blandit nisi iaculis elementum.In faucibus diam at metus tincidunt fermentum.Suspendisse at magna ac risus molestie pulvinar.Aliquam placerat tellus vitae dapibus dapibus.Etiam quis felis ipsum.Nulla non aliquet lectus.Cras quis nunc non ipsum vehicula vehicula.Aenean diam nibh,malesuada vitae nibh ac,ultricies congue lorem.Proin eu metus eget risus laoreet vehicula vel et lorem.Maecenas ultricies pulvinar massa,\r\nnec suscipit libero placerat sed.Aliquam augue felis,finibus et molestie at,tincidunt eu nulla.Vestibulum ut tincidunt sem,eu facilisis nunc.Aliquam erat ipsum,viverra quis arcu et,placerat rhoncus tortor.Nam sit amet nunc porttitor,feugiat mauris non,bibendum nisl.In ultrices,nibh sed rhoncus tempor,velit lorem tempor sem,a condimentum velit eros vitae sem.Duis iaculis,metus et elementum volutpat,lorem tellus imperdiet mauris,a pellentesque nibh nibh ac eros.Cras consequat luctus ipsum,vitae consectetur ante.Cras ut porttitor tortor.Sed dapibus dolor risus,vitae commodo nisi sodales eu.Maecenas aliquam nulla vitae nulla faucibus,eu iaculis leo fermentum.Curabitur sed neque quis massa pharetra luctus quis sed odio.Suspendisse dapibus velit a rhoncus varius.Duis auctor faucibus est,vitae volutpat leo vulputate at.Vestibulum convallis tellus ut massa malesuada elementum.Aliquam dignissim sodales arcu non interdum.Aliquam bibendum tincidunt quam,in pellentesque ipsum vulputate sed.Etiam sodales ac dolor ac sagittis.Praesent nec est fermentum,\r\nmattis ante a,rutrum massa.Cras id convallis massa,ut hendrerit tortor.Suspendisse ex est,sagittis eget urna at,facilisis aliquam augue.Nullam fringilla ante non neque efficitur,\r\nsit amet rhoncus ligula mattis.Ut vitae lorem hendrerit felis commodo vulputate ut nec leo.Quisque iaculis turpis sed diam mollis elementum.Quisque maximus diam tincidunt sem suscipit porta.Suspendisse lacinia suscipit posuere.Donec eget metus nec metus sagittis feugiat non et magna.Phasellus blandit libero eget mauris venenatis hendrerit.Proin tempus pulvinar dolor id mollis.Integer condimentum purus eget nibh semper,ut cursus augue ultricies.Phasellus nulla nulla,placerat ornare placerat at,tincidunt vel lorem.Donec commodo aliquet eleifend.Pellentesque mattis feugiat tortor sit amet laoreet.Nullam tincidunt efficitur dui id euismod.Curabitur non sem non lectus efficitur vestibulum at in urna.Nam lacinia velit ante,sed sagittis dolor viverra sed.Proin at mauris id arcu pretium blandit ut sit amet tortor.Duis ac elit ut neque efficitur auctor eget eu nisl.Duis eu scelerisque metus.Quisque convallis orci non lacinia scelerisque.',
    3,
    '2021-03-29 22:13:48'
  ),
  (
    2,
    'Términos y plazos en el procedimiento administrativo',
    5,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque quis ipsum ut dui faucibus suscipit.Ut fermentum lorem ut lacus consectetur mollis.Vivamus vel ex augue.Donec eget feugiat massa,in tincidunt leo.Sed lacus leo,imperdiet et eros a,aliquet iaculis mauris.Nulla pulvinar,\r\ndiam et porta vehicula,tellus lorem rhoncus velit,sed rhoncus nulla diam tempor nunc.Suspendisse potenti.Mauris ipsum libero,iaculis interdum faucibus sed,luctus at libero.aecenas dapibus eros quis gravida placerat.Pellentesque id diam nibh.Vestibulum est magna,sodales sit amet nisl placerat,egestas consequat tortor.Sed vel velit eget orci mollis mattis.Vivamus cursus augue augue,id elementum risus lobortis ut.Cras hendrerit a nunc fringilla euismod.Sed iaculis est justo,eu convallis ligula porttitor fringilla.Donec quis sodales lectus.Proin eget lacus vel mauris porttitor elementum.Sed at maximus elit.Integer vitae odio sit amet justo dictum tincidunt.Duis condimentum lobortis eros at euismod.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Nam scelerisque nunc sem,sit amet maximus risus commodo ultrices.Sed a velit eget nisl tristique ornare.Curabitur odio augue,placerat ut ultricies at,elementum quis mi.Duis faucibus tortor et eleifend maximus.Quisque semper in magna ac fringilla.Aenean bibendum purus at mattis porttitor.Quisque arcu metus,maximus vitae nisl et,imperdiet rhoncus ante.Donec eget malesuada arcu.Fusce vel metus libero.Nullam nulla enim,posuere sed eros pulvinar,\r\nfringilla tristique justo.Phasellus rutrum finibus nulla at fringilla.Duis non mi et nulla dignissim faucibus eu nec magna.Aenean tortor orci,dictum sit amet semper pellentesque,\r\ntincidunt non arcu.In blandit arcu non vulputate efficitur.Nulla ullamcorper scelerisque ipsum sed vulputate.Vivamus laoreet fermentum nibh,quis sodales libero ultrices dapibus.Nulla luctus augue velit,vel molestie velit aliquam sit amet.Aliquam convallis mauris id massa pulvinar laoreet.Mauris eu aliquet diam,sed vestibulum nunc.Fusce vehicula accumsan nunc,at viverra ex fermentum nec.Proin commodo pretium pretium.Fusce pulvinar,tellus sed faucibus tempus,magna sapien finibus quam,vitae tristique quam magna vitae sapien.Aenean a aliquam elit.Phasellus molestie augue nec odio fermentum dignissim.Ut ut turpis commodo,porttitor metus maximus,pharetra mauris.Suspendisse potenti.Integer urna lacus,viverra a lacinia sed,tincidunt sit amet lectus.Cras sagittis ultricies ex sit amet lobortis.In aliquet arcu nec consectetur tristique.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Nunc tincidunt massa eu tristique rutrum.Etiam vulputate malesuada malesuada.Cras enim mauris,tristique sit amet auctor at,rutrum sit amet justo.Etiam lacus sapien,blandit nec semper ac,elementum nec ligula.Nam non ante nisl.Aliquam tempus porttitor orci eu maximus.Praesent laoreet ante tempus posuere volutpat.In lacinia varius magna.Integer lacus nisi,mollis a condimentum at,dictum vitae elit.Pellentesque sed justo justo.Nulla facilisi.In hac habitasse platea dictumst.Ut ut neque eu dui faucibus interdum dignissim eget neque.Nulla et vestibulum turpis.Phasellus iaculis urna ac augue tincidunt,et egestas libero ornare.Suspendisse sollicitudin diam nec nisl consectetur,ut pharetra nisi pharetra.Nulla dignissim lacus nisl,in auctor odio ultrices non.Suspendisse accumsan mollis ante quis rutrum.Cras eros enim,eleifend quis lobortis interdum,faucibus nec quam.In ut laoreet lacus,ut mollis arcu.Cras eu ante ut lectus iaculis congue ut nec mi.Nulla non justo sagittis,aliquam eros ut,ultricies justo.Nullam blandit neque vel semper placerat.Aliquam vel augue luctus,molestie mi vel,porta enim.In accumsan quis erat non rutrum.Etiam accumsan ac augue non ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Fusce vestibulum orci ut dignissim convallis.Quisque et nunc porttitor,sollicitudin enim in,pellentesque nisi.Phasellus vitae nunc sed libero luctus euismod vitae ac mi.In quis pharetra metus,eget convallis tellus.Nam lobortis mauris ut enim laoreet,et rhoncus velit cursus.Morbi quam justo,interdum eu efficitur in,bibendum et sem.Pellentesque elementum arcu eu lacus blandit dignissim.Curabitur ullamcorper enim a lectus luctus dictum.Etiam id nulla ante.Aliquam congue facilisis ligula ac commodo.Morbi tristique nulla quam,quis ultricies purus pellentesque id.Maecenas aliquet nunc non dui gravida,sit amet ultricies dui aliquet.Mauris in imperdiet neque.Class aptent taciti sociosqu ad litora torquent per conubia nostra,per inceptos himenaeos.Aliquam id nulla at nisl vestibulum condimentum.Duis faucibus odio enim,\r\nac condimentum nulla fringilla a.Cras faucibus erat quam,eget maximus leo congue molestie.Etiam elementum,nulla id rhoncus elementum,erat sem consectetur risus,varius commodo leo mauris quis ex.Cras in ante nec elit rutrum interdum vitae a sapien.Quisque vehicula lectus non ex imperdiet varius.Phasellus iaculis neque diam,quis blandit eros luctus non.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Aenean quis commodo mi,at ultrices urna.Praesent hendrerit faucibus tempus.Aliquam finibus cursus felis nec viverra.Nam venenatis eleifend mauris,a hendrerit diam ultricies a.Proin a mi id enim gravida fermentum eu nec nibh.Nulla nisi erat,congue ut lacus a,\r\nblandit posuere dui.Ut maximus sapien eu nunc sollicitudin,id iaculis mi semper.In arcu tellus,venenatis quis elementum ac,faucibus ac est.Aenean nec dolor sapien.Nunc iaculis eu lorem sed finibus.Nunc purus enim,pretium at quam sit amet,eleifend sollicitudin ligula.Donec eget ultrices ligula,sed elementum quam.Pellentesque venenatis mattis est posuere sagittis.Morbi non nunc dictum,tincidunt magna in,condimentum sapien.Aliquam vel arcu est.Suspendisse sed vulputate nibh.Nullam pharetra orci faucibus tellus vestibulum,at elementum velit scelerisque.Quisque consequat,erat vel porta laoreet,erat felis tincidunt est,sed mollis diam ligula in odio.Aenean ut est sodales,iaculis risus ut,vulputate enim.Cras commodo ante ac eros venenatis,pharetra commodo augue tempus.Cras ullamcorper vitae neque ut egestas.In ac ante urna.Nunc hendrerit diam et tincidunt viverra.Curabitur elit nisi,iaculis id quam ac,convallis tristique metus.Nullam ultricies lectus nibh,id laoreet velit eleifend quis.Aliquam congue lectus pretium sapien mattis,vel tincidunt ligula iaculis.Aenean ut erat vitae felis volutpat tempus.Integer nec pulvinar nisl.Morbi consectetur nunc augue,nec blandit nisi iaculis elementum.In faucibus diam at metus tincidunt fermentum.Suspendisse at magna ac risus molestie pulvinar.Aliquam placerat tellus vitae dapibus dapibus.Etiam quis felis ipsum.Nulla non aliquet lectus.Cras quis nunc non ipsum vehicula vehicula.Aenean diam nibh,malesuada vitae nibh ac,ultricies congue lorem.Proin eu metus eget risus laoreet vehicula vel et lorem.Maecenas ultricies pulvinar massa,\r\nnec suscipit libero placerat sed.Aliquam augue felis,finibus et molestie at,tincidunt eu nulla.Vestibulum ut tincidunt sem,eu facilisis nunc.Aliquam erat ipsum,viverra quis arcu et,placerat rhoncus tortor.Nam sit amet nunc porttitor,feugiat mauris non,bibendum nisl.In ultrices,nibh sed rhoncus tempor,velit lorem tempor sem,a condimentum velit eros vitae sem.Duis iaculis,metus et elementum volutpat,lorem tellus imperdiet mauris,a pellentesque nibh nibh ac eros.Cras consequat luctus ipsum,vitae consectetur ante.Cras ut porttitor tortor.Sed dapibus dolor risus,vitae commodo nisi sodales eu.Maecenas aliquam nulla vitae nulla faucibus,eu iaculis leo fermentum.Curabitur sed neque quis massa pharetra luctus quis sed odio.Suspendisse dapibus velit a rhoncus varius.Duis auctor faucibus est,vitae volutpat leo vulputate at.Vestibulum convallis tellus ut massa malesuada elementum.Aliquam dignissim sodales arcu non interdum.Aliquam bibendum tincidunt quam,in pellentesque ipsum vulputate sed.Etiam sodales ac dolor ac sagittis.Praesent nec est fermentum,\r\nmattis ante a,rutrum massa.Cras id convallis massa,ut hendrerit tortor.Suspendisse ex est,sagittis eget urna at,facilisis aliquam augue.Nullam fringilla ante non neque efficitur,\r\nsit amet rhoncus ligula mattis.Ut vitae lorem hendrerit felis commodo vulputate ut nec leo.Quisque iaculis turpis sed diam mollis elementum.Quisque maximus diam tincidunt sem suscipit porta.Suspendisse lacinia suscipit posuere.Donec eget metus nec metus sagittis feugiat non et magna.Phasellus blandit libero eget mauris venenatis hendrerit.Proin tempus pulvinar dolor id mollis.Integer condimentum purus eget nibh semper,ut cursus augue ultricies.Phasellus nulla nulla,placerat ornare placerat at,tincidunt vel lorem.Donec commodo aliquet eleifend.Pellentesque mattis feugiat tortor sit amet laoreet.Nullam tincidunt efficitur dui id euismod.Curabitur non sem non lectus efficitur vestibulum at in urna.Nam lacinia velit ante,sed sagittis dolor viverra sed.Proin at mauris id arcu pretium blandit ut sit amet tortor.Duis ac elit ut neque efficitur auctor eget eu nisl.Duis eu scelerisque metus.Quisque convallis orci non lacinia scelerisque.',
    5,
    '2021-03-29 22:13:48'
  ),
  (
    3,
    'Procedimiento administrativo local. El registro de entrada y salida de documentos. Requisitos de la presentación de documentos. Comunicaciones y notificaciones',
    5,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque quis ipsum ut dui faucibus suscipit.Ut fermentum lorem ut lacus consectetur mollis.Vivamus vel ex augue.Donec eget feugiat massa,in tincidunt leo.Sed lacus leo,imperdiet et eros a,aliquet iaculis mauris.Nulla pulvinar,\r\ndiam et porta vehicula,tellus lorem rhoncus velit,sed rhoncus nulla diam tempor nunc.Suspendisse potenti.Mauris ipsum libero,iaculis interdum faucibus sed,luctus at libero.aecenas dapibus eros quis gravida placerat.Pellentesque id diam nibh.Vestibulum est magna,sodales sit amet nisl placerat,egestas consequat tortor.Sed vel velit eget orci mollis mattis.Vivamus cursus augue augue,id elementum risus lobortis ut.Cras hendrerit a nunc fringilla euismod.Sed iaculis est justo,eu convallis ligula porttitor fringilla.Donec quis sodales lectus.Proin eget lacus vel mauris porttitor elementum.Sed at maximus elit.Integer vitae odio sit amet justo dictum tincidunt.Duis condimentum lobortis eros at euismod.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Nam scelerisque nunc sem,sit amet maximus risus commodo ultrices.Sed a velit eget nisl tristique ornare.Curabitur odio augue,placerat ut ultricies at,elementum quis mi.Duis faucibus tortor et eleifend maximus.Quisque semper in magna ac fringilla.Aenean bibendum purus at mattis porttitor.Quisque arcu metus,maximus vitae nisl et,imperdiet rhoncus ante.Donec eget malesuada arcu.Fusce vel metus libero.Nullam nulla enim,posuere sed eros pulvinar,\r\nfringilla tristique justo.Phasellus rutrum finibus nulla at fringilla.Duis non mi et nulla dignissim faucibus eu nec magna.Aenean tortor orci,dictum sit amet semper pellentesque,\r\ntincidunt non arcu.In blandit arcu non vulputate efficitur.Nulla ullamcorper scelerisque ipsum sed vulputate.Vivamus laoreet fermentum nibh,quis sodales libero ultrices dapibus.Nulla luctus augue velit,vel molestie velit aliquam sit amet.Aliquam convallis mauris id massa pulvinar laoreet.Mauris eu aliquet diam,sed vestibulum nunc.Fusce vehicula accumsan nunc,at viverra ex fermentum nec.Proin commodo pretium pretium.Fusce pulvinar,tellus sed faucibus tempus,magna sapien finibus quam,vitae tristique quam magna vitae sapien.Aenean a aliquam elit.Phasellus molestie augue nec odio fermentum dignissim.Ut ut turpis commodo,porttitor metus maximus,pharetra mauris.Suspendisse potenti.Integer urna lacus,viverra a lacinia sed,tincidunt sit amet lectus.Cras sagittis ultricies ex sit amet lobortis.In aliquet arcu nec consectetur tristique.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Nunc tincidunt massa eu tristique rutrum.Etiam vulputate malesuada malesuada.Cras enim mauris,tristique sit amet auctor at,rutrum sit amet justo.Etiam lacus sapien,blandit nec semper ac,elementum nec ligula.Nam non ante nisl.Aliquam tempus porttitor orci eu maximus.Praesent laoreet ante tempus posuere volutpat.In lacinia varius magna.Integer lacus nisi,mollis a condimentum at,dictum vitae elit.Pellentesque sed justo justo.Nulla facilisi.In hac habitasse platea dictumst.Ut ut neque eu dui faucibus interdum dignissim eget neque.Nulla et vestibulum turpis.Phasellus iaculis urna ac augue tincidunt,et egestas libero ornare.Suspendisse sollicitudin diam nec nisl consectetur,ut pharetra nisi pharetra.Nulla dignissim lacus nisl,in auctor odio ultrices non.Suspendisse accumsan mollis ante quis rutrum.Cras eros enim,eleifend quis lobortis interdum,faucibus nec quam.In ut laoreet lacus,ut mollis arcu.Cras eu ante ut lectus iaculis congue ut nec mi.Nulla non justo sagittis,aliquam eros ut,ultricies justo.Nullam blandit neque vel semper placerat.Aliquam vel augue luctus,molestie mi vel,porta enim.In accumsan quis erat non rutrum.Etiam accumsan ac augue non ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Fusce vestibulum orci ut dignissim convallis.Quisque et nunc porttitor,sollicitudin enim in,pellentesque nisi.Phasellus vitae nunc sed libero luctus euismod vitae ac mi.In quis pharetra metus,eget convallis tellus.Nam lobortis mauris ut enim laoreet,et rhoncus velit cursus.Morbi quam justo,interdum eu efficitur in,bibendum et sem.Pellentesque elementum arcu eu lacus blandit dignissim.Curabitur ullamcorper enim a lectus luctus dictum.Etiam id nulla ante.Aliquam congue facilisis ligula ac commodo.Morbi tristique nulla quam,quis ultricies purus pellentesque id.Maecenas aliquet nunc non dui gravida,sit amet ultricies dui aliquet.Mauris in imperdiet neque.Class aptent taciti sociosqu ad litora torquent per conubia nostra,per inceptos himenaeos.Aliquam id nulla at nisl vestibulum condimentum.Duis faucibus odio enim,\r\nac condimentum nulla fringilla a.Cras faucibus erat quam,eget maximus leo congue molestie.Etiam elementum,nulla id rhoncus elementum,erat sem consectetur risus,varius commodo leo mauris quis ex.Cras in ante nec elit rutrum interdum vitae a sapien.Quisque vehicula lectus non ex imperdiet varius.Phasellus iaculis neque diam,quis blandit eros luctus non.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Aenean quis commodo mi,at ultrices urna.Praesent hendrerit faucibus tempus.Aliquam finibus cursus felis nec viverra.Nam venenatis eleifend mauris,a hendrerit diam ultricies a.Proin a mi id enim gravida fermentum eu nec nibh.Nulla nisi erat,congue ut lacus a,\r\nblandit posuere dui.Ut maximus sapien eu nunc sollicitudin,id iaculis mi semper.In arcu tellus,venenatis quis elementum ac,faucibus ac est.Aenean nec dolor sapien.Nunc iaculis eu lorem sed finibus.Nunc purus enim,pretium at quam sit amet,eleifend sollicitudin ligula.Donec eget ultrices ligula,sed elementum quam.Pellentesque venenatis mattis est posuere sagittis.Morbi non nunc dictum,tincidunt magna in,condimentum sapien.Aliquam vel arcu est.Suspendisse sed vulputate nibh.Nullam pharetra orci faucibus tellus vestibulum,at elementum velit scelerisque.Quisque consequat,erat vel porta laoreet,erat felis tincidunt est,sed mollis diam ligula in odio.Aenean ut est sodales,iaculis risus ut,vulputate enim.Cras commodo ante ac eros venenatis,pharetra commodo augue tempus.Cras ullamcorper vitae neque ut egestas.In ac ante urna.Nunc hendrerit diam et tincidunt viverra.Curabitur elit nisi,iaculis id quam ac,convallis tristique metus.Nullam ultricies lectus nibh,id laoreet velit eleifend quis.Aliquam congue lectus pretium sapien mattis,vel tincidunt ligula iaculis.Aenean ut erat vitae felis volutpat tempus.Integer nec pulvinar nisl.Morbi consectetur nunc augue,nec blandit nisi iaculis elementum.In faucibus diam at metus tincidunt fermentum.Suspendisse at magna ac risus molestie pulvinar.Aliquam placerat tellus vitae dapibus dapibus.Etiam quis felis ipsum.Nulla non aliquet lectus.Cras quis nunc non ipsum vehicula vehicula.Aenean diam nibh,malesuada vitae nibh ac,ultricies congue lorem.Proin eu metus eget risus laoreet vehicula vel et lorem.Maecenas ultricies pulvinar massa,\r\nnec suscipit libero placerat sed.Aliquam augue felis,finibus et molestie at,tincidunt eu nulla.Vestibulum ut tincidunt sem,eu facilisis nunc.Aliquam erat ipsum,viverra quis arcu et,placerat rhoncus tortor.Nam sit amet nunc porttitor,feugiat mauris non,bibendum nisl.In ultrices,nibh sed rhoncus tempor,velit lorem tempor sem,a condimentum velit eros vitae sem.Duis iaculis,metus et elementum volutpat,lorem tellus imperdiet mauris,a pellentesque nibh nibh ac eros.Cras consequat luctus ipsum,vitae consectetur ante.Cras ut porttitor tortor.Sed dapibus dolor risus,vitae commodo nisi sodales eu.Maecenas aliquam nulla vitae nulla faucibus,eu iaculis leo fermentum.Curabitur sed neque quis massa pharetra luctus quis sed odio.Suspendisse dapibus velit a rhoncus varius.Duis auctor faucibus est,vitae volutpat leo vulputate at.Vestibulum convallis tellus ut massa malesuada elementum.Aliquam dignissim sodales arcu non interdum.Aliquam bibendum tincidunt quam,in pellentesque ipsum vulputate sed.Etiam sodales ac dolor ac sagittis.Praesent nec est fermentum,\r\nmattis ante a,rutrum massa.Cras id convallis massa,ut hendrerit tortor.Suspendisse ex est,sagittis eget urna at,facilisis aliquam augue.Nullam fringilla ante non neque efficitur,\r\nsit amet rhoncus ligula mattis.Ut vitae lorem hendrerit felis commodo vulputate ut nec leo.Quisque iaculis turpis sed diam mollis elementum.Quisque maximus diam tincidunt sem suscipit porta.Suspendisse lacinia suscipit posuere.Donec eget metus nec metus sagittis feugiat non et magna.Phasellus blandit libero eget mauris venenatis hendrerit.Proin tempus pulvinar dolor id mollis.Integer condimentum purus eget nibh semper,ut cursus augue ultricies.Phasellus nulla nulla,placerat ornare placerat at,tincidunt vel lorem.Donec commodo aliquet eleifend.Pellentesque mattis feugiat tortor sit amet laoreet.Nullam tincidunt efficitur dui id euismod.Curabitur non sem non lectus efficitur vestibulum at in urna.Nam lacinia velit ante,sed sagittis dolor viverra sed.Proin at mauris id arcu pretium blandit ut sit amet tortor.Duis ac elit ut neque efficitur auctor eget eu nisl.Duis eu scelerisque metus.Quisque convallis orci non lacinia scelerisque.',
    1,
    '2021-03-29 22:13:48'
  ),
  (
    4,
    '	Temario Gratis Oposiciones :: Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales.',
    5,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque quis ipsum ut dui faucibus suscipit.Ut fermentum lorem ut lacus consectetur mollis.Vivamus vel ex augue.Donec eget feugiat massa,in tincidunt leo.Sed lacus leo,imperdiet et eros a,aliquet iaculis mauris.Nulla pulvinar,\r\ndiam et porta vehicula,tellus lorem rhoncus velit,sed rhoncus nulla diam tempor nunc.Suspendisse potenti.Mauris ipsum libero,iaculis interdum faucibus sed,luctus at libero.aecenas dapibus eros quis gravida placerat.Pellentesque id diam nibh.Vestibulum est magna,sodales sit amet nisl placerat,egestas consequat tortor.Sed vel velit eget orci mollis mattis.Vivamus cursus augue augue,id elementum risus lobortis ut.Cras hendrerit a nunc fringilla euismod.Sed iaculis est justo,eu convallis ligula porttitor fringilla.Donec quis sodales lectus.Proin eget lacus vel mauris porttitor elementum.Sed at maximus elit.Integer vitae odio sit amet justo dictum tincidunt.Duis condimentum lobortis eros at euismod.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Nam scelerisque nunc sem,sit amet maximus risus commodo ultrices.Sed a velit eget nisl tristique ornare.Curabitur odio augue,placerat ut ultricies at,elementum quis mi.Duis faucibus tortor et eleifend maximus.Quisque semper in magna ac fringilla.Aenean bibendum purus at mattis porttitor.Quisque arcu metus,maximus vitae nisl et,imperdiet rhoncus ante.Donec eget malesuada arcu.Fusce vel metus libero.Nullam nulla enim,posuere sed eros pulvinar,\r\nfringilla tristique justo.Phasellus rutrum finibus nulla at fringilla.Duis non mi et nulla dignissim faucibus eu nec magna.Aenean tortor orci,dictum sit amet semper pellentesque,\r\ntincidunt non arcu.In blandit arcu non vulputate efficitur.Nulla ullamcorper scelerisque ipsum sed vulputate.Vivamus laoreet fermentum nibh,quis sodales libero ultrices dapibus.Nulla luctus augue velit,vel molestie velit aliquam sit amet.Aliquam convallis mauris id massa pulvinar laoreet.Mauris eu aliquet diam,sed vestibulum nunc.Fusce vehicula accumsan nunc,at viverra ex fermentum nec.Proin commodo pretium pretium.Fusce pulvinar,tellus sed faucibus tempus,magna sapien finibus quam,vitae tristique quam magna vitae sapien.Aenean a aliquam elit.Phasellus molestie augue nec odio fermentum dignissim.Ut ut turpis commodo,porttitor metus maximus,pharetra mauris.Suspendisse potenti.Integer urna lacus,viverra a lacinia sed,tincidunt sit amet lectus.Cras sagittis ultricies ex sit amet lobortis.In aliquet arcu nec consectetur tristique.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Nunc tincidunt massa eu tristique rutrum.Etiam vulputate malesuada malesuada.Cras enim mauris,tristique sit amet auctor at,rutrum sit amet justo.Etiam lacus sapien,blandit nec semper ac,elementum nec ligula.Nam non ante nisl.Aliquam tempus porttitor orci eu maximus.Praesent laoreet ante tempus posuere volutpat.In lacinia varius magna.Integer lacus nisi,mollis a condimentum at,dictum vitae elit.Pellentesque sed justo justo.Nulla facilisi.In hac habitasse platea dictumst.Ut ut neque eu dui faucibus interdum dignissim eget neque.Nulla et vestibulum turpis.Phasellus iaculis urna ac augue tincidunt,et egestas libero ornare.Suspendisse sollicitudin diam nec nisl consectetur,ut pharetra nisi pharetra.Nulla dignissim lacus nisl,in auctor odio ultrices non.Suspendisse accumsan mollis ante quis rutrum.Cras eros enim,eleifend quis lobortis interdum,faucibus nec quam.In ut laoreet lacus,ut mollis arcu.Cras eu ante ut lectus iaculis congue ut nec mi.Nulla non justo sagittis,aliquam eros ut,ultricies justo.Nullam blandit neque vel semper placerat.Aliquam vel augue luctus,molestie mi vel,porta enim.In accumsan quis erat non rutrum.Etiam accumsan ac augue non ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Fusce vestibulum orci ut dignissim convallis.Quisque et nunc porttitor,sollicitudin enim in,pellentesque nisi.Phasellus vitae nunc sed libero luctus euismod vitae ac mi.In quis pharetra metus,eget convallis tellus.Nam lobortis mauris ut enim laoreet,et rhoncus velit cursus.Morbi quam justo,interdum eu efficitur in,bibendum et sem.Pellentesque elementum arcu eu lacus blandit dignissim.Curabitur ullamcorper enim a lectus luctus dictum.Etiam id nulla ante.Aliquam congue facilisis ligula ac commodo.Morbi tristique nulla quam,quis ultricies purus pellentesque id.Maecenas aliquet nunc non dui gravida,sit amet ultricies dui aliquet.Mauris in imperdiet neque.Class aptent taciti sociosqu ad litora torquent per conubia nostra,per inceptos himenaeos.Aliquam id nulla at nisl vestibulum condimentum.Duis faucibus odio enim,\r\nac condimentum nulla fringilla a.Cras faucibus erat quam,eget maximus leo congue molestie.Etiam elementum,nulla id rhoncus elementum,erat sem consectetur risus,varius commodo leo mauris quis ex.Cras in ante nec elit rutrum interdum vitae a sapien.Quisque vehicula lectus non ex imperdiet varius.Phasellus iaculis neque diam,quis blandit eros luctus non.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Aenean quis commodo mi,at ultrices urna.Praesent hendrerit faucibus tempus.Aliquam finibus cursus felis nec viverra.Nam venenatis eleifend mauris,a hendrerit diam ultricies a.Proin a mi id enim gravida fermentum eu nec nibh.Nulla nisi erat,congue ut lacus a,\r\nblandit posuere dui.Ut maximus sapien eu nunc sollicitudin,id iaculis mi semper.In arcu tellus,venenatis quis elementum ac,faucibus ac est.Aenean nec dolor sapien.Nunc iaculis eu lorem sed finibus.Nunc purus enim,pretium at quam sit amet,eleifend sollicitudin ligula.Donec eget ultrices ligula,sed elementum quam.Pellentesque venenatis mattis est posuere sagittis.Morbi non nunc dictum,tincidunt magna in,condimentum sapien.Aliquam vel arcu est.Suspendisse sed vulputate nibh.Nullam pharetra orci faucibus tellus vestibulum,at elementum velit scelerisque.Quisque consequat,erat vel porta laoreet,erat felis tincidunt est,sed mollis diam ligula in odio.Aenean ut est sodales,iaculis risus ut,vulputate enim.Cras commodo ante ac eros venenatis,pharetra commodo augue tempus.Cras ullamcorper vitae neque ut egestas.In ac ante urna.Nunc hendrerit diam et tincidunt viverra.Curabitur elit nisi,iaculis id quam ac,convallis tristique metus.Nullam ultricies lectus nibh,id laoreet velit eleifend quis.Aliquam congue lectus pretium sapien mattis,vel tincidunt ligula iaculis.Aenean ut erat vitae felis volutpat tempus.Integer nec pulvinar nisl.Morbi consectetur nunc augue,nec blandit nisi iaculis elementum.In faucibus diam at metus tincidunt fermentum.Suspendisse at magna ac risus molestie pulvinar.Aliquam placerat tellus vitae dapibus dapibus.Etiam quis felis ipsum.Nulla non aliquet lectus.Cras quis nunc non ipsum vehicula vehicula.Aenean diam nibh,malesuada vitae nibh ac,ultricies congue lorem.Proin eu metus eget risus laoreet vehicula vel et lorem.Maecenas ultricies pulvinar massa,\r\nnec suscipit libero placerat sed.Aliquam augue felis,finibus et molestie at,tincidunt eu nulla.Vestibulum ut tincidunt sem,eu facilisis nunc.Aliquam erat ipsum,viverra quis arcu et,placerat rhoncus tortor.Nam sit amet nunc porttitor,feugiat mauris non,bibendum nisl.In ultrices,nibh sed rhoncus tempor,velit lorem tempor sem,a condimentum velit eros vitae sem.Duis iaculis,metus et elementum volutpat,lorem tellus imperdiet mauris,a pellentesque nibh nibh ac eros.Cras consequat luctus ipsum,vitae consectetur ante.Cras ut porttitor tortor.Sed dapibus dolor risus,vitae commodo nisi sodales eu.Maecenas aliquam nulla vitae nulla faucibus,eu iaculis leo fermentum.Curabitur sed neque quis massa pharetra luctus quis sed odio.Suspendisse dapibus velit a rhoncus varius.Duis auctor faucibus est,vitae volutpat leo vulputate at.Vestibulum convallis tellus ut massa malesuada elementum.Aliquam dignissim sodales arcu non interdum.Aliquam bibendum tincidunt quam,in pellentesque ipsum vulputate sed.Etiam sodales ac dolor ac sagittis.Praesent nec est fermentum,\r\nmattis ante a,rutrum massa.Cras id convallis massa,ut hendrerit tortor.Suspendisse ex est,sagittis eget urna at,facilisis aliquam augue.Nullam fringilla ante non neque efficitur,\r\nsit amet rhoncus ligula mattis.Ut vitae lorem hendrerit felis commodo vulputate ut nec leo.Quisque iaculis turpis sed diam mollis elementum.Quisque maximus diam tincidunt sem suscipit porta.Suspendisse lacinia suscipit posuere.Donec eget metus nec metus sagittis feugiat non et magna.Phasellus blandit libero eget mauris venenatis hendrerit.Proin tempus pulvinar dolor id mollis.Integer condimentum purus eget nibh semper,ut cursus augue ultricies.Phasellus nulla nulla,placerat ornare placerat at,tincidunt vel lorem.Donec commodo aliquet eleifend.Pellentesque mattis feugiat tortor sit amet laoreet.Nullam tincidunt efficitur dui id euismod.Curabitur non sem non lectus efficitur vestibulum at in urna.Nam lacinia velit ante,sed sagittis dolor viverra sed.Proin at mauris id arcu pretium blandit ut sit amet tortor.Duis ac elit ut neque efficitur auctor eget eu nisl.Duis eu scelerisque metus.Quisque convallis orci non lacinia scelerisque.',
    3,
    '2021-03-29 22:13:48'
  ),
  (
    5,
    'Haciendas Locales. Clasificación de los ingresos. Las Ordenanzas Fiscales',
    2,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Quisque quis ipsum ut dui faucibus suscipit.Ut fermentum lorem ut lacus consectetur mollis.Vivamus vel ex augue.Donec eget feugiat massa,in tincidunt leo.Sed lacus leo,imperdiet et eros a,aliquet iaculis mauris.Nulla pulvinar,\r\ndiam et porta vehicula,tellus lorem rhoncus velit,sed rhoncus nulla diam tempor nunc.Suspendisse potenti.Mauris ipsum libero,iaculis interdum faucibus sed,luctus at libero.aecenas dapibus eros quis gravida placerat.Pellentesque id diam nibh.Vestibulum est magna,sodales sit amet nisl placerat,egestas consequat tortor.Sed vel velit eget orci mollis mattis.Vivamus cursus augue augue,id elementum risus lobortis ut.Cras hendrerit a nunc fringilla euismod.Sed iaculis est justo,eu convallis ligula porttitor fringilla.Donec quis sodales lectus.Proin eget lacus vel mauris porttitor elementum.Sed at maximus elit.Integer vitae odio sit amet justo dictum tincidunt.Duis condimentum lobortis eros at euismod.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Nam scelerisque nunc sem,sit amet maximus risus commodo ultrices.Sed a velit eget nisl tristique ornare.Curabitur odio augue,placerat ut ultricies at,elementum quis mi.Duis faucibus tortor et eleifend maximus.Quisque semper in magna ac fringilla.Aenean bibendum purus at mattis porttitor.Quisque arcu metus,maximus vitae nisl et,imperdiet rhoncus ante.Donec eget malesuada arcu.Fusce vel metus libero.Nullam nulla enim,posuere sed eros pulvinar,\r\nfringilla tristique justo.Phasellus rutrum finibus nulla at fringilla.Duis non mi et nulla dignissim faucibus eu nec magna.Aenean tortor orci,dictum sit amet semper pellentesque,\r\ntincidunt non arcu.In blandit arcu non vulputate efficitur.Nulla ullamcorper scelerisque ipsum sed vulputate.Vivamus laoreet fermentum nibh,quis sodales libero ultrices dapibus.Nulla luctus augue velit,vel molestie velit aliquam sit amet.Aliquam convallis mauris id massa pulvinar laoreet.Mauris eu aliquet diam,sed vestibulum nunc.Fusce vehicula accumsan nunc,at viverra ex fermentum nec.Proin commodo pretium pretium.Fusce pulvinar,tellus sed faucibus tempus,magna sapien finibus quam,vitae tristique quam magna vitae sapien.Aenean a aliquam elit.Phasellus molestie augue nec odio fermentum dignissim.Ut ut turpis commodo,porttitor metus maximus,pharetra mauris.Suspendisse potenti.Integer urna lacus,viverra a lacinia sed,tincidunt sit amet lectus.Cras sagittis ultricies ex sit amet lobortis.In aliquet arcu nec consectetur tristique.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Nunc tincidunt massa eu tristique rutrum.Etiam vulputate malesuada malesuada.Cras enim mauris,tristique sit amet auctor at,rutrum sit amet justo.Etiam lacus sapien,blandit nec semper ac,elementum nec ligula.Nam non ante nisl.Aliquam tempus porttitor orci eu maximus.Praesent laoreet ante tempus posuere volutpat.In lacinia varius magna.Integer lacus nisi,mollis a condimentum at,dictum vitae elit.Pellentesque sed justo justo.Nulla facilisi.In hac habitasse platea dictumst.Ut ut neque eu dui faucibus interdum dignissim eget neque.Nulla et vestibulum turpis.Phasellus iaculis urna ac augue tincidunt,et egestas libero ornare.Suspendisse sollicitudin diam nec nisl consectetur,ut pharetra nisi pharetra.Nulla dignissim lacus nisl,in auctor odio ultrices non.Suspendisse accumsan mollis ante quis rutrum.Cras eros enim,eleifend quis lobortis interdum,faucibus nec quam.In ut laoreet lacus,ut mollis arcu.Cras eu ante ut lectus iaculis congue ut nec mi.Nulla non justo sagittis,aliquam eros ut,ultricies justo.Nullam blandit neque vel semper placerat.Aliquam vel augue luctus,molestie mi vel,porta enim.In accumsan quis erat non rutrum.Etiam accumsan ac augue non ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Fusce vestibulum orci ut dignissim convallis.Quisque et nunc porttitor,sollicitudin enim in,pellentesque nisi.Phasellus vitae nunc sed libero luctus euismod vitae ac mi.In quis pharetra metus,eget convallis tellus.Nam lobortis mauris ut enim laoreet,et rhoncus velit cursus.Morbi quam justo,interdum eu efficitur in,bibendum et sem.Pellentesque elementum arcu eu lacus blandit dignissim.Curabitur ullamcorper enim a lectus luctus dictum.Etiam id nulla ante.Aliquam congue facilisis ligula ac commodo.Morbi tristique nulla quam,quis ultricies purus pellentesque id.Maecenas aliquet nunc non dui gravida,sit amet ultricies dui aliquet.Mauris in imperdiet neque.Class aptent taciti sociosqu ad litora torquent per conubia nostra,per inceptos himenaeos.Aliquam id nulla at nisl vestibulum condimentum.Duis faucibus odio enim,\r\nac condimentum nulla fringilla a.Cras faucibus erat quam,eget maximus leo congue molestie.Etiam elementum,nulla id rhoncus elementum,erat sem consectetur risus,varius commodo leo mauris quis ex.Cras in ante nec elit rutrum interdum vitae a sapien.Quisque vehicula lectus non ex imperdiet varius.Phasellus iaculis neque diam,quis blandit eros luctus non.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;Aenean quis commodo mi,at ultrices urna.Praesent hendrerit faucibus tempus.Aliquam finibus cursus felis nec viverra.Nam venenatis eleifend mauris,a hendrerit diam ultricies a.Proin a mi id enim gravida fermentum eu nec nibh.Nulla nisi erat,congue ut lacus a,\r\nblandit posuere dui.Ut maximus sapien eu nunc sollicitudin,id iaculis mi semper.In arcu tellus,venenatis quis elementum ac,faucibus ac est.Aenean nec dolor sapien.Nunc iaculis eu lorem sed finibus.Nunc purus enim,pretium at quam sit amet,eleifend sollicitudin ligula.Donec eget ultrices ligula,sed elementum quam.Pellentesque venenatis mattis est posuere sagittis.Morbi non nunc dictum,tincidunt magna in,condimentum sapien.Aliquam vel arcu est.Suspendisse sed vulputate nibh.Nullam pharetra orci faucibus tellus vestibulum,at elementum velit scelerisque.Quisque consequat,erat vel porta laoreet,erat felis tincidunt est,sed mollis diam ligula in odio.Aenean ut est sodales,iaculis risus ut,vulputate enim.Cras commodo ante ac eros venenatis,pharetra commodo augue tempus.Cras ullamcorper vitae neque ut egestas.In ac ante urna.Nunc hendrerit diam et tincidunt viverra.Curabitur elit nisi,iaculis id quam ac,convallis tristique metus.Nullam ultricies lectus nibh,id laoreet velit eleifend quis.Aliquam congue lectus pretium sapien mattis,vel tincidunt ligula iaculis.Aenean ut erat vitae felis volutpat tempus.Integer nec pulvinar nisl.Morbi consectetur nunc augue,nec blandit nisi iaculis elementum.In faucibus diam at metus tincidunt fermentum.Suspendisse at magna ac risus molestie pulvinar.Aliquam placerat tellus vitae dapibus dapibus.Etiam quis felis ipsum.Nulla non aliquet lectus.Cras quis nunc non ipsum vehicula vehicula.Aenean diam nibh,malesuada vitae nibh ac,ultricies congue lorem.Proin eu metus eget risus laoreet vehicula vel et lorem.Maecenas ultricies pulvinar massa,\r\nnec suscipit libero placerat sed.Aliquam augue felis,finibus et molestie at,tincidunt eu nulla.Vestibulum ut tincidunt sem,eu facilisis nunc.Aliquam erat ipsum,viverra quis arcu et,placerat rhoncus tortor.Nam sit amet nunc porttitor,feugiat mauris non,bibendum nisl.In ultrices,nibh sed rhoncus tempor,velit lorem tempor sem,a condimentum velit eros vitae sem.Duis iaculis,metus et elementum volutpat,lorem tellus imperdiet mauris,a pellentesque nibh nibh ac eros.Cras consequat luctus ipsum,vitae consectetur ante.Cras ut porttitor tortor.Sed dapibus dolor risus,vitae commodo nisi sodales eu.Maecenas aliquam nulla vitae nulla faucibus,eu iaculis leo fermentum.Curabitur sed neque quis massa pharetra luctus quis sed odio.Suspendisse dapibus velit a rhoncus varius.Duis auctor faucibus est,vitae volutpat leo vulputate at.Vestibulum convallis tellus ut massa malesuada elementum.Aliquam dignissim sodales arcu non interdum.Aliquam bibendum tincidunt quam,in pellentesque ipsum vulputate sed.Etiam sodales ac dolor ac sagittis.Praesent nec est fermentum,\r\nmattis ante a,rutrum massa.Cras id convallis massa,ut hendrerit tortor.Suspendisse ex est,sagittis eget urna at,facilisis aliquam augue.Nullam fringilla ante non neque efficitur,\r\nsit amet rhoncus ligula mattis.Ut vitae lorem hendrerit felis commodo vulputate ut nec leo.Quisque iaculis turpis sed diam mollis elementum.Quisque maximus diam tincidunt sem suscipit porta.Suspendisse lacinia suscipit posuere.Donec eget metus nec metus sagittis feugiat non et magna.Phasellus blandit libero eget mauris venenatis hendrerit.Proin tempus pulvinar dolor id mollis.Integer condimentum purus eget nibh semper,ut cursus augue ultricies.Phasellus nulla nulla,placerat ornare placerat at,tincidunt vel lorem.Donec commodo aliquet eleifend.Pellentesque mattis feugiat tortor sit amet laoreet.Nullam tincidunt efficitur dui id euismod.Curabitur non sem non lectus efficitur vestibulum at in urna.Nam lacinia velit ante,sed sagittis dolor viverra sed.Proin at mauris id arcu pretium blandit ut sit amet tortor.Duis ac elit ut neque efficitur auctor eget eu nisl.Duis eu scelerisque metus.Quisque convallis orci non lacinia scelerisque.',
    1,
    '2021-03-29 22:13:48'
  );
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `user`
--
CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Volcado de datos para la tabla `user`
--
INSERT INTO `user` (
    `userId`,
    `user_name`,
    `mail`,
    `user_password`,
    `created_at`,
    `updated_at`
  )
VALUES (
    1,
    'Juan',
    'juan@juan.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    2,
    'Pepe',
    'pepe@pepe.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    3,
    'Lucia',
    'lucia@lucia.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    4,
    'Pedro',
    'pedro@pedro.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    5,
    'Ana',
    'ana@ana.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    6,
    'Luis',
    'luis@luis.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  ),
  (
    7,
    'Santi',
    'santi@santi.com',
    '123abc.',
    '2021-03-29 22:13:48',
    '2021-03-29 22:13:48'
  );
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `opposition`
--
ALTER TABLE `opposition`
ADD PRIMARY KEY (`oppositionId`),
  ADD KEY `stateId` (`stateId`),
  ADD KEY `categoryId` (`categoryId`);
--
-- Indices de la tabla `opposition_ambit`
--
ALTER TABLE `opposition_ambit`
ADD PRIMARY KEY (`ambitId`);
--
-- Indices de la tabla `opposition_category`
--
ALTER TABLE `opposition_category`
ADD PRIMARY KEY (`categoryId`),
  ADD KEY `ambitId` (`ambitId`);
--
-- Indices de la tabla `spain_states`
--
ALTER TABLE `spain_states`
ADD PRIMARY KEY (`stateId`);
--
-- Indices de la tabla `theme`
--
ALTER TABLE `theme`
ADD PRIMARY KEY (`themeId`),
  ADD KEY `theme_category` (`theme_category`),
  ADD KEY `userId` (`userId`);
--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`userId`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `opposition`
--
ALTER TABLE `opposition`
MODIFY `oppositionId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
--
-- AUTO_INCREMENT de la tabla `opposition_ambit`
--
ALTER TABLE `opposition_ambit`
MODIFY `ambitId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
--
-- AUTO_INCREMENT de la tabla `opposition_category`
--
ALTER TABLE `opposition_category`
MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 30;
--
-- AUTO_INCREMENT de la tabla `spain_states`
--
ALTER TABLE `spain_states`
MODIFY `stateId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 53;
--
-- AUTO_INCREMENT de la tabla `theme`
--
ALTER TABLE `theme`
MODIFY `themeId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;
--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `opposition`
--
ALTER TABLE `opposition`
ADD CONSTRAINT `opposition_ibfk_1` FOREIGN KEY (`stateId`) REFERENCES `spain_states` (`stateId`),
  ADD CONSTRAINT `opposition_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `opposition_category` (`categoryId`);
--
-- Filtros para la tabla `opposition_category`
--
ALTER TABLE `opposition_category`
ADD CONSTRAINT `opposition_category_ibfk_1` FOREIGN KEY (`ambitId`) REFERENCES `opposition_ambit` (`ambitId`);
--
-- Filtros para la tabla `theme`
--
ALTER TABLE `theme`
ADD CONSTRAINT `theme_ibfk_1` FOREIGN KEY (`theme_category`) REFERENCES `opposition_category` (`categoryId`),
  ADD CONSTRAINT `theme_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;