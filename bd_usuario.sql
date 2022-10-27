-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 00:34:28
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumnos` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alumnos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumnos`, `apellido`, `nombre`) VALUES
(1, 'Vallejos', 'Carlos'),
(2, 'Rosales', 'Juan'),
(3, 'Toro', 'Lautaro'),
(4, 'Morales', 'Joaquin'),
(5, 'Gonzalez', 'Gabriel'),
(6, 'Rosario', 'Federico'),
(7, 'Pelliza', 'Camila'),
(8, 'Delgado', 'Nicanor'),
(9, 'Rueda', 'Tiago'),
(10, 'Romario', 'Facundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logineventos`
--

CREATE TABLE IF NOT EXISTS `logineventos` (
  `Id_Log_Ev` int(2) NOT NULL AUTO_INCREMENT,
  `Fecha_Acceso` datetime DEFAULT NULL,
  `Sistema_Accedido` int(2) DEFAULT NULL,
  `DNI_Accedido` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Log_Ev`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `logineventos`
--

INSERT INTO `logineventos` (`Id_Log_Ev`, `Fecha_Acceso`, `Sistema_Accedido`, `DNI_Accedido`) VALUES
(1, '2020-11-25 00:00:00', 2, '43.784.215'),
(2, '2021-09-23 00:00:00', 1, '39.845.849'),
(3, '2020-11-25 00:00:00', 4, '43.784.246'),
(4, '2021-09-23 00:00:00', 4, '41.133.525');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `id_permiso` int(2) NOT NULL AUTO_INCREMENT,
  `Descripcion_Permiso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `Descripcion_Permiso`) VALUES
(1, 'Super Usuario'),
(2, 'Invitado'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `no` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `address1` varchar(30) DEFAULT NULL,
  `email1` varchar(30) DEFAULT NULL,
  `phone1` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentismo`
--

CREATE TABLE IF NOT EXISTS `presentismo` (
  `id_presentismo` int(11) NOT NULL AUTO_INCREMENT,
  `presente` varchar(20) NOT NULL,
  `id_alumno_presente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_presentismo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `presentismo`
--

INSERT INTO `presentismo` (`id_presentismo`, `presente`, `id_alumno_presente`) VALUES
(1, 'P', 1),
(2, 'P', 2),
(3, 'P', 3),
(4, '', 4),
(5, 'P', 5),
(6, 'P', 6),
(7, 'P', 7),
(8, 'P', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemasaccesos`
--

CREATE TABLE IF NOT EXISTS `sistemasaccesos` (
  `id_Sis_Acc` int(2) NOT NULL AUTO_INCREMENT,
  `Descripcion_Sis_Acc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_Sis_Acc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `sistemasaccesos`
--

INSERT INTO `sistemasaccesos` (`id_Sis_Acc`, `Descripcion_Sis_Acc`) VALUES
(1, 'SIGEFLEX'),
(2, 'SICONAC'),
(3, 'SICONAC'),
(4, 'SIBLIOTEC'),
(5, 'SINAP'),
(6, 'SIUPAMPA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(12) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `edad` int(2) NOT NULL,
  `fechaNac` date NOT NULL,
  `permiso` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `dni`, `nombre`, `apellido`, `cargo`, `dir`, `localidad`, `tel`, `cel`, `usuario`, `pass`, `imagen`, `edad`, `fechaNac`, `permiso`) VALUES
(1, '\r\n43.784.215', 'Pedro', 'Monson', 'Invitado', 'Cura Brochero 1146', 'Grand Bourg', '483920', '11-2901-6352', 'Pedri', '413', '[value-11]', 21, '2001-05-27', 1),
(2, '45.858.999', 'Axel', 'Garita', 'Super Usuario', 'Franscisco Segui 1922', 'Tierras Altas', '491233', '11-3244-3568', 'Axel', '1110', 'fcarpi.jpg', 40, '1980-04-11', 1),
(3, '	\r\n\r\n44.222.', 'Mirco', 'Marlinson', 'Administrador', '9 de julio 1789', 'Tortuguitas', '483948', '11-3234-4653', 'Mircs', '9034', '', 24, '1998-01-17', 2),
(4, '36.575.444', 'Fabiannn', 'Carpitella', 'Invitado', '9 de Julio 1222', 'Villa de Mayo', '487666', '11 4322-4443', 'fabi', '1121', '', 0, '2020-12-01', 0),
(5, '37.555.788', 'Fabiannn', 'Carpitella', 'Invitado', '9 de Julio 1222', 'Grand Bourg', '487666', '11 4322-4443', 'fabi', '1121', '', 0, '2017-05-05', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVenta` date DEFAULT NULL,
  `montoVenta` int(11) NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fechaVenta`, `montoVenta`) VALUES
(1, '2017-05-05', 10000),
(2, '2017-07-09', 12000),
(3, '2017-09-20', 20000),
(4, '2018-01-01', 50000),
(5, '2018-01-25', 8000),
(6, '2018-02-14', 10000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
