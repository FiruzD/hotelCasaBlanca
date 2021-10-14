-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 07:50:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcasablanca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nCliCodigo` int(11) NOT NULL,
  `cCliEmail` varchar(50) NOT NULL,
  `cCliTelefono` varchar(20) NOT NULL,
  `cCliDireccion` varchar(100) NOT NULL,
  `dCliFechaNac` date NOT NULL,
  `cCliCiudad` varchar(20) NOT NULL,
  `cCliPais` varchar(20) NOT NULL,
  `cCliCodigoPostal` varchar(10) NOT NULL,
  `nPerCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `nConCodigo` int(11) NOT NULL,
  `cConTelefono` varchar(20) NOT NULL,
  `cConEmail` varchar(50) NOT NULL,
  `cConDescripcion` varchar(300) NOT NULL,
  `nPerCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`nConCodigo`, `cConTelefono`, `cConEmail`, `cConDescripcion`, `nPerCodigo`) VALUES
(0, '952240084', 'dcasusol@gmail.com', 'tienen servicio de wifi?', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `nEmpCodigo` int(11) NOT NULL,
  `dEmpFechaNac` date NOT NULL,
  `cEmpCargo` varchar(20) NOT NULL,
  `cEmpTelefono` varchar(20) NOT NULL,
  `fEmpSueldo` float NOT NULL,
  `nPerCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nPerCodigo` int(11) NOT NULL,
  `cPerNombre` varchar(50) NOT NULL,
  `cPerApePat` varchar(50) NOT NULL,
  `cPerApeMat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nPerCodigo`, `cPerNombre`, `cPerApePat`, `cPerApeMat`) VALUES
(26, 'Firuz Daniel', 'Aguilar', 'Casusol'),
(29, 'Dagner', 'Chuman', 'Lluen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `nResCodigo` int(11) NOT NULL,
  `dResFechaLlegada` date NOT NULL,
  `dResFechaSalida` date NOT NULL,
  `nResCantPersonas` int(100) NOT NULL,
  `nResHabitaciones` varchar(20) NOT NULL,
  `cResTipoHabitacion` varchar(50) NOT NULL,
  `cResComentarios` varchar(300) NOT NULL,
  `dResFechaRegistro` varchar(20) NOT NULL,
  `nPerCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopersona`
--

CREATE TABLE `tipopersona` (
  `nTipCodigo` int(11) NOT NULL,
  `cTipDocumento` varchar(20) NOT NULL,
  `cTipNumDocumento` varchar(50) NOT NULL,
  `nPerCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`nCliCodigo`),
  ADD KEY `nPerCodigo` (`nPerCodigo`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`nConCodigo`),
  ADD KEY `nPerCodigo` (`nPerCodigo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`nEmpCodigo`),
  ADD KEY `nPerCodigo` (`nPerCodigo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`nPerCodigo`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`nResCodigo`),
  ADD KEY `pknPerCodigo` (`nPerCodigo`);

--
-- Indices de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  ADD PRIMARY KEY (`nTipCodigo`),
  ADD KEY `pknPerCodigo` (`nPerCodigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `nPerCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `nResCodigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  MODIFY `nTipCodigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`nPerCodigo`) REFERENCES `persona` (`nPerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`nPerCodigo`) REFERENCES `persona` (`nPerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`nPerCodigo`) REFERENCES `persona` (`nPerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD CONSTRAINT `reservacion_ibfk_1` FOREIGN KEY (`nPerCodigo`) REFERENCES `persona` (`nPerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  ADD CONSTRAINT `tipopersona_ibfk_1` FOREIGN KEY (`nPerCodigo`) REFERENCES `persona` (`nPerCodigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
