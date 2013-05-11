-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2013 a las 13:45:54
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea7`
--

CREATE TABLE IF NOT EXISTS `tarea7` (
  `email` varchar(252) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(252) NOT NULL,
  `apellido` varchar(252) NOT NULL,
  `Pw` varchar(252) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarea7`
--

INSERT INTO `tarea7` (`email`, `nombre`, `apellido`, `Pw`) VALUES
('cristian.garrido@ceinf.cl', 'cristian', 'garrido', 'finisterra'),
('hola@hola.cl', 'pedro', 'lopez', '1234'),
('onreifni@live.cl', 'perro', 'gato', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
