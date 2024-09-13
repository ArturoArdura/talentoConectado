-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2024 a las 05:11:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PRIMERA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `idPostulacion` int(11) NOT NULL,
  `emailTalento` varchar(100) NOT NULL,
  `idVacante` int(11) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `fechaPostulacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosEmpresarios`
--

CREATE TABLE `registrosEmpresarios` (
  `idRegistroEmpresario` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `razonEnsayo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosTalentos`
--

CREATE TABLE `registrosTalentos` (
  `idRegistroTalento` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `discapacidad` varchar(200) NOT NULL,
  `motivo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosTabla`
--

CREATE TABLE `usuariosTabla` (
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` varchar(10) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosTabla`
--

INSERT INTO `usuariosTabla` (`idUsuario`, `tipoUsuario`, `Nombre`, `Edad`, `Telefono`, `email`, `passwordd`) VALUES
(5, 'empresario', 'Arturo Ardura Palacios', '21', '9934343434', 'cyborg@outlook.com', 'hola'),
(6, 'talento', 'Marlon Rodriguez', '21', '993534287', 'marlon@outlook.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` int(11) NOT NULL,
  `fecha_publicacion` datetime NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `descripción` varchar(300) NOT NULL,
  `sueldo` varchar(100) NOT NULL,
  `ubicación` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`idPostulacion`);

--
-- Indices de la tabla `registrosEmpresarios`
--
ALTER TABLE `registrosEmpresarios`
  ADD PRIMARY KEY (`idRegistroEmpresario`);

--
-- Indices de la tabla `registrosTalentos`
--
ALTER TABLE `registrosTalentos`
  ADD PRIMARY KEY (`idRegistroTalento`);

--
-- Indices de la tabla `usuariosTabla`
--
ALTER TABLE `usuariosTabla`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `idPostulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registrosEmpresarios`
--
ALTER TABLE `registrosEmpresarios`
  MODIFY `idRegistroEmpresario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registrosTalentos`
--
ALTER TABLE `registrosTalentos`
  MODIFY `idRegistroTalento` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuariosTabla`
--
ALTER TABLE `usuariosTabla`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
