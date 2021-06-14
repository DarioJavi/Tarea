-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 20-12-2020 a las 01:07:30
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_estudiantes_utpl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_presencial`
--

DROP TABLE IF EXISTS `estudiante_presencial`;
CREATE TABLE IF NOT EXISTS `estudiante_presencial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `numero_creditos` int(11) NOT NULL,
  `costo_creditos` double NOT NULL,
  `costo_matricula` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante_presencial`
--

INSERT INTO `estudiante_presencial` (`id`, `nombres`, `apellidos`, `numero_creditos`, `costo_creditos`, `costo_matricula`) VALUES
(1, 'ANDRE JOSEPH', 'JARAMILLO PLACENCIA', 5, 45.15, 220.6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
