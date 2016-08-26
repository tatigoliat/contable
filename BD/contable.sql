-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2016 a las 01:39:17
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `contable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentacontable`
--

CREATE TABLE IF NOT EXISTS `cuentacontable` (
`idcuentac` bigint(20) unsigned NOT NULL,
  `codigocuentacontable` varchar(12) NOT NULL,
  `debe` float NOT NULL,
  `haber` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idplancuentacontable` int(11) NOT NULL,
  `numhijos` int(11) NOT NULL,
  `saldo` float NOT NULL,
  `saldoinicialdebe` float NOT NULL,
  `saldoinicialhaber` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`codigoempresa` bigint(20) unsigned NOT NULL,
  `cedulaempresa` int(11) NOT NULL,
  `nombreempresa` varchar(120) NOT NULL,
  `nombresresponsable` varchar(120) NOT NULL,
  `apellidosresponsable` varchar(120) NOT NULL,
  `rifempresa` varchar(120) NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `correoempresa` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigoempresa`, `cedulaempresa`, `nombreempresa`, `nombresresponsable`, `apellidosresponsable`, `rifempresa`, `telefono`, `correoempresa`) VALUES
(1, 19644068, 'Helados sabrositos C.A.', 'Tahiris', 'Goliat', 'J-19644068-9', '444', 'goliat2107@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientocontable`
--

CREATE TABLE IF NOT EXISTS `movimientocontable` (
`idmovimientocontable` bigint(20) unsigned NOT NULL,
  `fecha` date NOT NULL,
  `fechareverso` date NOT NULL,
  `fkcuentacontable` int(11) NOT NULL,
  `fkempresa` int(11) NOT NULL,
  `mdebe` float NOT NULL,
  `mhaber` float NOT NULL,
  `fknaturaleza` int(11) NOT NULL,
  `reversado` int(11) NOT NULL,
  `concepto` varchar(160) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naturaleza`
--

CREATE TABLE IF NOT EXISTS `naturaleza` (
`idnaturaleza` bigint(20) unsigned NOT NULL,
  `codigonaturaleza` varchar(2) NOT NULL,
  `descripcionnaturaleza` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `naturaleza`
--

INSERT INTO `naturaleza` (`idnaturaleza`, `codigonaturaleza`, `descripcionnaturaleza`) VALUES
(1, '1', 'ACTIVOS'),
(2, '2', 'PASIVOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plancuenta`
--

CREATE TABLE IF NOT EXISTS `plancuenta` (
`pkplancuenta` bigint(20) unsigned NOT NULL,
  `descripcionplancuenta` varchar(120) NOT NULL,
  `fkempresa` int(11) NOT NULL,
  `fknaturaleza` int(11) NOT NULL,
  `codigocuenta` varchar(12) NOT NULL,
  `tipopago` int(11) DEFAULT NULL,
  `tiporecurso` int(11) DEFAULT NULL,
  `espadre` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plancuenta`
--

INSERT INTO `plancuenta` (`pkplancuenta`, `descripcionplancuenta`, `fkempresa`, `fknaturaleza`, `codigocuenta`, `tipopago`, `tiporecurso`, `espadre`) VALUES
(1, 'Inversiones temporales', 1, 1, '11020101001', 1, 1, 'NO'),
(2, 'Caja Chica', 1, 1, '11020000000', 1, 1, 'SI'),
(3, 'Activo Circulante', 1, 2, '10000000000', 1, 1, 'SI'),
(5, 'Banco', 1, 1, '11020100000', NULL, NULL, 'SI'),
(6, 'Depositos Especiales', 1, 1, '11020101000', NULL, NULL, 'SI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentacontable`
--
ALTER TABLE `cuentacontable`
 ADD UNIQUE KEY `idcuentac` (`idcuentac`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD UNIQUE KEY `codigoempresa` (`codigoempresa`);

--
-- Indices de la tabla `movimientocontable`
--
ALTER TABLE `movimientocontable`
 ADD UNIQUE KEY `idmovimientocontable` (`idmovimientocontable`);

--
-- Indices de la tabla `naturaleza`
--
ALTER TABLE `naturaleza`
 ADD UNIQUE KEY `idnaturaleza` (`idnaturaleza`);

--
-- Indices de la tabla `plancuenta`
--
ALTER TABLE `plancuenta`
 ADD UNIQUE KEY `pkplancuenta` (`pkplancuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentacontable`
--
ALTER TABLE `cuentacontable`
MODIFY `idcuentac` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `codigoempresa` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `movimientocontable`
--
ALTER TABLE `movimientocontable`
MODIFY `idmovimientocontable` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `naturaleza`
--
ALTER TABLE `naturaleza`
MODIFY `idnaturaleza` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `plancuenta`
--
ALTER TABLE `plancuenta`
MODIFY `pkplancuenta` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
