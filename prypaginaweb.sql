-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 03:01:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prypaginaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(10) NOT NULL,
  `Materia` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido Materno` varchar(50) NOT NULL,
  `Apellido Paterno` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `Materia`, `Nombre`, `Apellido Materno`, `Apellido Paterno`, `Telefono`, `Direccion`, `estatus`) VALUES
(1, 1, 'Eduardo', 'Campos', 'Hernandez', '8661234', 'asd', b'1'),
(2, 1, 'Norberto', 'Hernandez', 'Perez', '12345', 'asda', b'1'),
(3, 1, 'Norberto', 'Perez', 'Hernande', '12345', 'asda', b'1'),
(4, 1, 'Norberto', 'Perez', 'Hernandez', '12345678', 'asdfg', b'1'),
(17, 1, 'jkh', 'hjk', 'hjk', 'hjk', 'hjk', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `idAsignatura` int(10) NOT NULL,
  `idMaestro` int(10) NOT NULL,
  `idAlumno` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`idAsignatura`, `idMaestro`, `idAlumno`, `Nombre`, `estatus`) VALUES
(1, 1, 1, 'programa', b'1'),
(3, 1, 1, 'programa', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `idMaestro` int(10) NOT NULL,
  `Materia` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido Materno` varchar(50) NOT NULL,
  `Apellido Paterno` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`idMaestro`, `Materia`, `Nombre`, `Apellido Materno`, `Apellido Paterno`, `Telefono`, `Direccion`, `estatus`) VALUES
(1, 0, 'RUBEN', 'RIOJAS', 'RIOJAS', '123', 'ASD', b'1'),
(2, 0, '', '', '', '0', '', b'1'),
(3, 0, '', '', '', '0', '', b'1'),
(4, 1, 'Norberto', 'Perez', 'RIOJAS', '123', 'kj', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `Materia` (`Materia`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`idAsignatura`),
  ADD KEY `idMaestro` (`idMaestro`),
  ADD KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`idMaestro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `idAsignatura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `idMaestro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Materia`) REFERENCES `asignatura` (`idAsignatura`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`Materia`) REFERENCES `asignatura` (`idAsignatura`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`idMaestro`) REFERENCES `maestro` (`idMaestro`),
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
