-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2022 a las 19:57:15
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eestn1gb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_ALUM` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `DNI` varchar(15) DEFAULT NULL,
  `FK_SEXO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_curso`
--

CREATE TABLE `alumno_curso` (
  `ID_ALUM_CURSO` int(11) NOT NULL,
  `FK_ALUM` int(11) DEFAULT NULL,
  `FK_CURSO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campo_formacion`
--

CREATE TABLE `campo_formacion` (
  `ID_CAMP` int(2) NOT NULL,
  `NOMBRE_CAMP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campo_formacion`
--

INSERT INTO `campo_formacion` (`ID_CAMP`, `NOMBRE_CAMP`) VALUES
(1, 'FORMACIÓN GENERAL'),
(2, 'FORMACIÓN CIENTIFICO TECNOLÓGICA'),
(3, 'FORMACIÓN TÉCNICO ESPECÍFICA'),
(4, 'PRÁCTICAS PROFESIONALIZANTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `ID_CICLO` int(2) NOT NULL,
  `NOMBRE_CICLO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`ID_CICLO`, `NOMBRE_CICLO`) VALUES
(1, 'CICLO BASICO'),
(2, 'CICLO SUPERIOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision_eval`
--

CREATE TABLE `comision_eval` (
  `ID_COM_EVAL` int(11) NOT NULL,
  `FK_DOC` int(11) DEFAULT NULL,
  `FECHA_COM` date DEFAULT NULL,
  `LIBRO` varchar(4) DEFAULT NULL,
  `FOLIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID_CUR` int(11) NOT NULL,
  `ANIO` int(11) NOT NULL,
  `SECCION` int(11) NOT NULL,
  `FK_CICLO` int(11) NOT NULL,
  `FK_ESPECIALIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`ID_CUR`, `ANIO`, `SECCION`, `FK_CICLO`, `FK_ESPECIALIDAD`) VALUES
(1, 1, 1, 1, NULL),
(2, 1, 2, 1, NULL),
(3, 1, 3, 1, NULL),
(4, 1, 4, 1, NULL),
(5, 1, 5, 1, NULL),
(6, 1, 6, 1, NULL),
(7, 2, 1, 1, NULL),
(8, 2, 2, 1, NULL),
(9, 2, 3, 1, NULL),
(10, 2, 4, 1, NULL),
(11, 2, 5, 1, NULL),
(12, 3, 1, 1, NULL),
(13, 3, 2, 1, NULL),
(14, 3, 3, 1, NULL),
(15, 3, 4, 1, NULL),
(16, 3, 5, 1, NULL),
(17, 4, 1, 2, 2),
(18, 4, 2, 2, 2),
(19, 4, 2, 2, 2),
(20, 4, 3, 2, 1),
(21, 4, 4, 2, 1),
(22, 5, 1, 2, 2),
(23, 5, 2, 2, 2),
(24, 5, 3, 2, 1),
(25, 5, 4, 2, 1),
(26, 5, 5, 2, 2),
(27, 6, 1, 2, 2),
(28, 6, 2, 2, 2),
(29, 6, 3, 2, 1),
(30, 6, 4, 2, 1),
(31, 7, 1, 2, 2),
(32, 7, 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_DEP` int(2) NOT NULL,
  `NOMBRE_DEP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ID_DEP`, `NOMBRE_DEP`) VALUES
(1, 'Cs. Naturales'),
(2, 'Técnico Profesional'),
(3, 'Comunicación'),
(4, 'Cs. Sociales'),
(5, 'Exactas'),
(6, 'Educ. Física');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ID_DOC` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(50) NOT NULL,
  `DNI` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ID_DOC`, `NOMBRE`, `APELLIDO`, `DNI`) VALUES
(1, 'DANIEL ORLANDO', 'PAZ', '23639282');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `ID_ESPECIALIDAD` int(11) NOT NULL,
  `NOMBRE_ESP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`ID_ESPECIALIDAD`, `NOMBRE_ESP`) VALUES
(1, 'TECNICO EN ELECTRONICA'),
(2, 'TECNICO EN INFORMATICA PROFESIONAL Y PERSONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `ID_EVAL` int(11) NOT NULL,
  `MES` int(11) DEFAULT NULL,
  `AÑO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incrip_previos`
--

CREATE TABLE `incrip_previos` (
  `ID_INCRIP_PREVIAS` int(11) NOT NULL,
  `F_INSCR` date DEFAULT NULL,
  `FK_ALUM` int(11) DEFAULT NULL,
  `FK_EVAL` int(11) DEFAULT NULL,
  `FK_MAT_ADEU` int(11) DEFAULT NULL,
  `FK_USUARIO` int(11) DEFAULT NULL,
  `FK_COM_EVAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID_MAT` int(11) NOT NULL,
  `NOMBRE_MAT` varchar(30) NOT NULL,
  `ANIO` int(11) NOT NULL,
  `MODULOS` int(11) NOT NULL,
  `FK_CAMPO_FORMACION` int(11) NOT NULL,
  `FK_CICLO` int(11) NOT NULL,
  `FK_ESPECIALIDAD` int(11) DEFAULT NULL,
  `FK_DEPARTAMENTO` int(11) DEFAULT NULL,
  `COD_PDD` varchar(5) DEFAULT NULL,
  `COD_CONTRALOR` varchar(5) DEFAULT NULL,
  `FK_RESOL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID_MAT`, `NOMBRE_MAT`, `ANIO`, `MODULOS`, `FK_CAMPO_FORMACION`, `FK_CICLO`, `FK_ESPECIALIDAD`, `FK_DEPARTAMENTO`, `COD_PDD`, `COD_CONTRALOR`, `FK_RESOL`) VALUES
(1, 'CIENCIAS NATURALES', 1, 4, 1, 1, NULL, 1, 'CNT', 'NAT', 1),
(2, 'CIENCIAS SOCIALES', 1, 4, 1, 1, NULL, 4, 'CSC', 'SOC', 1),
(3, 'EDUCACIÓN ARTÍSTICA', 1, 2, 1, 1, NULL, 3, 'APV', 'ART', 1),
(4, 'EDUCACIÓN FÍSICA', 1, 2, 1, 1, NULL, 6, 'EFC', 'EFI', 1),
(5, 'INGLES', 1, 2, 1, 1, NULL, 3, 'IGS', 'ING', 1),
(6, 'MATEMATICA', 1, 4, 1, 1, NULL, 5, 'MTM', 'MAT', 1),
(7, 'PRÁCTICAS DEL LENGUAJE', 1, 4, 1, 1, NULL, 3, 'PLG', 'LEN', 1),
(8, 'CONSTRUCCIÓN DE LA CIUDADANA', 1, 2, 1, 1, NULL, 4, 'CCD', 'CCD', 4),
(9, 'PROCEDIMIENTOS TÉCNICOS', 1, 2, 1, 1, NULL, 2, 'PCT', 'TPT', 5),
(10, 'LENGUAJES TECNOLÓGICOS', 1, 2, 2, 1, NULL, 2, 'LTS', 'TLT', 5),
(11, 'SISTEMAS TECNOLÓGICOS', 1, 2, 2, 1, NULL, 2, 'STS', 'TST', 5),
(12, 'TALLER', 1, 6, 2, 1, NULL, 2, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias_adeu`
--

CREATE TABLE `materias_adeu` (
  `ID_MAT_ADEU` int(11) NOT NULL,
  `FK_ALUM` int(11) DEFAULT NULL,
  `FK_MAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE `resolucion` (
  `ID_RES` int(2) NOT NULL,
  `NOMBRE_RES` varchar(80) NOT NULL,
  `DESCRIPCION` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resolucion`
--

INSERT INTO `resolucion` (`ID_RES`, `NOMBRE_RES`, `DESCRIPCION`) VALUES
(1, 'RESOL 3233/06', 'DISEÑO CURRICULAR 1 AÑO'),
(2, 'RESOL 2495/07', 'DISEÑO CURRICULAR 2 AÑO'),
(3, 'RESOL 317/07', 'DISEÑO CURRICULAR 3 AÑO'),
(4, 'RESOL 2496/07', 'DISEÑO CURRICULAR CONSUTRUCCION CIUDADANA 1, 2 Y 3 AÑO'),
(5, 'RESOL 88/09', 'FUNDAMENTACION GENERAL DEL CICLO BASICO EDUCACION TECNICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `ID_SEXO` int(11) NOT NULL,
  `DESCRIPCION` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`ID_SEXO`, `DESCRIPCION`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `ID_TURNO` int(11) NOT NULL,
  `NOMBRE_TURNO` varchar(50) NOT NULL,
  `HORARIO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`ID_TURNO`, `NOMBRE_TURNO`, `HORARIO`) VALUES
(1, 'MAÑANA', NULL),
(2, 'TARDE', NULL),
(3, 'VESPERTINO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USU` int(11) NOT NULL,
  `FK_DOC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_ALUM`),
  ADD KEY `FK_SEXO` (`FK_SEXO`);

--
-- Indices de la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD PRIMARY KEY (`ID_ALUM_CURSO`),
  ADD KEY `FK_ALUM` (`FK_ALUM`),
  ADD KEY `FK_CURSO` (`FK_CURSO`);

--
-- Indices de la tabla `campo_formacion`
--
ALTER TABLE `campo_formacion`
  ADD PRIMARY KEY (`ID_CAMP`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`ID_CICLO`);

--
-- Indices de la tabla `comision_eval`
--
ALTER TABLE `comision_eval`
  ADD PRIMARY KEY (`ID_COM_EVAL`),
  ADD KEY `FK_DOC` (`FK_DOC`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID_CUR`),
  ADD KEY `FK_CICLO` (`FK_CICLO`),
  ADD KEY `FK_ESPECIALIDAD` (`FK_ESPECIALIDAD`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_DEP`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ID_DOC`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`ID_ESPECIALIDAD`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`ID_EVAL`);

--
-- Indices de la tabla `incrip_previos`
--
ALTER TABLE `incrip_previos`
  ADD PRIMARY KEY (`ID_INCRIP_PREVIAS`),
  ADD KEY `FK_ALUM` (`FK_ALUM`),
  ADD KEY `FK_EVAL` (`FK_EVAL`),
  ADD KEY `FK_MAT_ADEU` (`FK_MAT_ADEU`),
  ADD KEY `FK_USUARIO` (`FK_USUARIO`),
  ADD KEY `FK_COM_EVAL` (`FK_COM_EVAL`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID_MAT`),
  ADD KEY `FK_ESPECIALIDAD` (`FK_ESPECIALIDAD`),
  ADD KEY `FK_DEPARTAMENTO` (`FK_DEPARTAMENTO`),
  ADD KEY `FK_RESOL` (`FK_RESOL`),
  ADD KEY `FK_CICLO` (`FK_CICLO`),
  ADD KEY `FK_CAMPO_FORMACION` (`FK_CAMPO_FORMACION`);

--
-- Indices de la tabla `materias_adeu`
--
ALTER TABLE `materias_adeu`
  ADD PRIMARY KEY (`ID_MAT_ADEU`),
  ADD KEY `FK_ALUM` (`FK_ALUM`),
  ADD KEY `FK_MAT` (`FK_MAT`);

--
-- Indices de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD PRIMARY KEY (`ID_RES`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`ID_SEXO`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`ID_TURNO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USU`),
  ADD KEY `FK_DOC` (`FK_DOC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_ALUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  MODIFY `ID_ALUM_CURSO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `campo_formacion`
--
ALTER TABLE `campo_formacion`
  MODIFY `ID_CAMP` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `ID_CICLO` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comision_eval`
--
ALTER TABLE `comision_eval`
  MODIFY `ID_COM_EVAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `ID_CUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `ID_DEP` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `ID_DOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `ID_ESPECIALIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `ID_EVAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incrip_previos`
--
ALTER TABLE `incrip_previos`
  MODIFY `ID_INCRIP_PREVIAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID_MAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `materias_adeu`
--
ALTER TABLE `materias_adeu`
  MODIFY `ID_MAT_ADEU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  MODIFY `ID_RES` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `ID_SEXO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `ID_TURNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USU` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`FK_SEXO`) REFERENCES `sexo` (`ID_SEXO`);

--
-- Filtros para la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD CONSTRAINT `alumno_curso_ibfk_1` FOREIGN KEY (`FK_ALUM`) REFERENCES `alumnos` (`ID_ALUM`),
  ADD CONSTRAINT `alumno_curso_ibfk_2` FOREIGN KEY (`FK_CURSO`) REFERENCES `curso` (`ID_CUR`);

--
-- Filtros para la tabla `comision_eval`
--
ALTER TABLE `comision_eval`
  ADD CONSTRAINT `comision_eval_ibfk_1` FOREIGN KEY (`FK_DOC`) REFERENCES `docente` (`ID_DOC`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`FK_CICLO`) REFERENCES `ciclo` (`ID_CICLO`),
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`FK_ESPECIALIDAD`) REFERENCES `especialidad` (`ID_ESPECIALIDAD`);

--
-- Filtros para la tabla `incrip_previos`
--
ALTER TABLE `incrip_previos`
  ADD CONSTRAINT `incrip_previos_ibfk_1` FOREIGN KEY (`FK_ALUM`) REFERENCES `alumnos` (`ID_ALUM`),
  ADD CONSTRAINT `incrip_previos_ibfk_2` FOREIGN KEY (`FK_EVAL`) REFERENCES `evaluaciones` (`ID_EVAL`),
  ADD CONSTRAINT `incrip_previos_ibfk_3` FOREIGN KEY (`FK_MAT_ADEU`) REFERENCES `materias_adeu` (`ID_MAT_ADEU`),
  ADD CONSTRAINT `incrip_previos_ibfk_4` FOREIGN KEY (`FK_USUARIO`) REFERENCES `usuario` (`ID_USU`),
  ADD CONSTRAINT `incrip_previos_ibfk_5` FOREIGN KEY (`FK_COM_EVAL`) REFERENCES `comision_eval` (`ID_COM_EVAL`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`FK_ESPECIALIDAD`) REFERENCES `especialidad` (`ID_ESPECIALIDAD`),
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`FK_DEPARTAMENTO`) REFERENCES `departamento` (`ID_DEP`),
  ADD CONSTRAINT `materias_ibfk_3` FOREIGN KEY (`FK_RESOL`) REFERENCES `resolucion` (`ID_RES`),
  ADD CONSTRAINT `materias_ibfk_4` FOREIGN KEY (`FK_CICLO`) REFERENCES `ciclo` (`ID_CICLO`),
  ADD CONSTRAINT `materias_ibfk_5` FOREIGN KEY (`FK_CAMPO_FORMACION`) REFERENCES `campo_formacion` (`ID_CAMP`);

--
-- Filtros para la tabla `materias_adeu`
--
ALTER TABLE `materias_adeu`
  ADD CONSTRAINT `materias_adeu_ibfk_1` FOREIGN KEY (`FK_ALUM`) REFERENCES `alumnos` (`ID_ALUM`),
  ADD CONSTRAINT `materias_adeu_ibfk_2` FOREIGN KEY (`FK_MAT`) REFERENCES `materias` (`ID_MAT`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`FK_DOC`) REFERENCES `docente` (`ID_DOC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
