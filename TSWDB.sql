-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2019 a las 22:23:58
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TSWDB`
--
DROP DATABASE IF EXISTS `TSWDB`;
CREATE DATABASE `TSWDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `TSWDB`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ANOTADOS`
--

CREATE TABLE `ANOTADOS` (
  `emailUser` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `uuid` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(128) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ELECCIONES`
--

CREATE TABLE `ELECCIONES` (
  `EventoFechaId` int(30) NOT NULL,
  `emailUser` varchar(50) NOT NULL,
  `Eleccion` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EVENTO`
--

CREATE TABLE `EVENTO` (
  `uuid` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `emailUser` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EVENTO_FECHA`
--

CREATE TABLE `EVENTO_FECHA` (
  `EventoFechaId` int(30) NOT NULL,
  `uuid` char(30) NOT NULL,
  `fecha` date NOT NULL,
  `HoraInicio` time NOT NULL,
  `HoraFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(128) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`email`, `nombre`, `password`) VALUES
('admin@admin.com', 'Administrator', '21232f297a57a5a743894a0e4a801fc3'),
('user@user.com', 'User', 'c6865cf98b133f1f3de596a4a2894630');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `EVENTO`
--
ALTER TABLE `EVENTO`
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indices de la tabla `EVENTO_FECHA`
--
ALTER TABLE `EVENTO_FECHA`
  ADD PRIMARY KEY (`EventoFechaId`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `EVENTO_FECHA`
--
ALTER TABLE `EVENTO_FECHA`
  MODIFY `EventoFechaId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
