-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-03-2022 a las 01:51:23
-- Versión del servidor: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadosalud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `idbeneficiarios` int(11) NOT NULL,
  `Identificacionb` int(15) NOT NULL,
  `Nombresb` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidosb` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Edadb` int(5) NOT NULL,
  `Sexob` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correob` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Parentescob` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condisalud`
--

CREATE TABLE `condisalud` (
  `idcondicion` int(11) NOT NULL,
  `fechacon` date NOT NULL,
  `nombre_enfermedad` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `Idcontrol` int(11) NOT NULL,
  `fecharegistro` date NOT NULL,
  `fechacontrol` date NOT NULL,
  `especialista` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observacion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `Identramiento` int(11) NOT NULL,
  `fuerzamuscular` int(10) NOT NULL,
  `aerobicos` int(10) NOT NULL,
  `zonamedia` int(10) NOT NULL,
  `equilibrio` int(10) NOT NULL,
  `flexibilidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadoressalud`
--

CREATE TABLE `indicadoressalud` (
  `Idindicador` int(11) NOT NULL,
  `frecCardiaca` int(4) NOT NULL,
  `tensArterial` int(4) NOT NULL,
  `saturaOxigeno` int(4) NOT NULL,
  `distanciarecorridas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorioexa`
--

CREATE TABLE `laboratorioexa` (
  `Idlaboratorio` int(11) NOT NULL,
  `fechalab` date NOT NULL,
  `descripcionlab` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombrearchivo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientocontrol`
--

CREATE TABLE `seguimientocontrol` (
  `idseguimientocontrol` int(11) NOT NULL,
  `Tipos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fechas` date NOT NULL,
  `Diagnosticos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tratamientos` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Identificacion` int(11) NOT NULL,
  `Nombres` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` int(5) NOT NULL,
  `Sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `idvacuna` int(11) NOT NULL,
  `nombrevacuna` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `biologico` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dosis` int(4) NOT NULL,
  `ips` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedulavacunador` int(11) NOT NULL,
  `nombresvacunador` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`idbeneficiarios`);

--
-- Indices de la tabla `condisalud`
--
ALTER TABLE `condisalud`
  ADD PRIMARY KEY (`idcondicion`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`Idcontrol`);

--
-- Indices de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`Identramiento`);

--
-- Indices de la tabla `indicadoressalud`
--
ALTER TABLE `indicadoressalud`
  ADD PRIMARY KEY (`Idindicador`);

--
-- Indices de la tabla `laboratorioexa`
--
ALTER TABLE `laboratorioexa`
  ADD PRIMARY KEY (`Idlaboratorio`);

--
-- Indices de la tabla `seguimientocontrol`
--
ALTER TABLE `seguimientocontrol`
  ADD PRIMARY KEY (`idseguimientocontrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`idvacuna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
