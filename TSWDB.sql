-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2019 a las 04:18:04
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ANOTADOS`
--

CREATE TABLE `ANOTADOS` (
  `EVENTO_FECHA_ID` int(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ELECCION` char(1) NOT NULL
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

--
-- Volcado de datos para la tabla `EVENTO`
--

INSERT INTO `EVENTO` (`uuid`, `nombre`, `emailUser`) VALUES
('15bd56afedfad2', 'evento 1', 'admin@admin.com'),
('15d17e8e9b0872', '', 'admin@admin.com'),
('15d17e9cd3ceb7', '', 'admin@admin.com'),
('15d17ea207a062', '', 'admin@admin.com'),
('15d17ea265a827', '', 'admin@admin.com'),
('15d17ea2c6bee5', '', 'admin@admin.com'),
('15d17fb1642a15', '', 'admin@admin.com'),
('15d1801a58a4c9', '', 'admin@admin.com'),
('15d180261bcc13', '', 'admin@admin.com'),
('15d18028ddfce2', '', 'admin@admin.com'),
('15d1802903b7ad', '', 'admin@admin.com'),
('15d18034c80425', '', 'admin@admin.com'),
('15d1803a33a4bf', '', 'admin@admin.com'),
('15d1804214630a', '', 'admin@admin.com'),
('15d1804642fb6f', '', 'admin@admin.com'),
('15d1804b656663', '', 'admin@admin.com'),
('15d1804dc319c1', '', 'admin@admin.com'),
('15d18053562500', '', 'admin@admin.com'),
('15d18054933be6', '', 'admin@admin.com'),
('15d180571352e4', '', 'admin@admin.com'),
('15d1806450b81f', '', 'admin@admin.com'),
('15d1809f5e1e72', '', 'admin@admin.com'),
('15d181038cab33', '', 'admin@admin.com'),
('15d1812b2c56ae', '', 'admin@admin.com'),
('15d1813713d50e', '', 'admin@admin.com'),
('15d1814a34d9f8', '', 'admin@admin.com');

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

--
-- Volcado de datos para la tabla `EVENTO_FECHA`
--

INSERT INTO `EVENTO_FECHA` (`EventoFechaId`, `uuid`, `fecha`, `HoraInicio`, `HoraFin`) VALUES
(1, '15d1814a34d9f8', '2019-07-02', '06:59:00', '09:00:00'),
(2, '15d1814a34d9f8', '2019-07-05', '09:59:00', '13:00:00'),
(3, '15d1814a34d9f8', '2019-07-11', '10:59:00', '20:00:00');

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
  MODIFY `EventoFechaId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
