
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


DROP DATABASE IF EXISTS `TSWDB`;
CREATE DATABASE `TSWDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `TSWDB`;

GRANT USAGE ON * . * TO `admin`@`localhost`;
	DROP USER `admin`@`localhost`;


CREATE USER IF NOT EXISTS `admin`@`localhost` IDENTIFIED BY 'admin';
GRANT USAGE ON *.* TO `admin`@`localhost` REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `TSWDB`.* TO `admin`@`localhost` WITH GRANT OPTION;



CREATE TABLE `USUARIO` (
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL UNIQUE,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(128) COLLATE latin1_spanish_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


  CREATE TABLE `EVENTO` (
  `uuid` varchar(30) COLLATE latin1_spanish_ci NOT NULL UNIQUE,
  `nombre` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `emailUser` varchar(50) COLLATE latin1_spanish_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;




