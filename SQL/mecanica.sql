-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2022 a las 06:04:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mecanica`
--
CREATE DATABASE IF NOT EXISTS `mecanica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mecanica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `direccion_cliente` varchar(60) NOT NULL,
  `telefono_cliente` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `direccion_cliente`, `telefono_cliente`) VALUES
(1, 'Jhordan Ricardo', 'Huaycan n15 jr los chorizos 5', 943696852),
(2, 'Juan Alejandro Muñoz Malpartida', 'Mz E lt 45 los jasmines. Sta Eulalia - Chosica', 591753456),
(3, 'Edinson Jhon Quispe Carrasco', 'Av. Prol. Javier Prado Este 8680, Ate 15494', 989530163),
(4, 'Jhordan Leonardo Farro Vásquez', 'Carabayllo n15 jr los mañucos 2', 939689657);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_hoja_parte` int(11) NOT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `descripcion_factura` varchar(60) NOT NULL,
  `totalBruto_dolares` decimal(7,2) NOT NULL,
  `totalBruto_soles` decimal(7,2) NOT NULL,
  `igv_factura` double NOT NULL,
  `total_neto` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_de_parte`
--

CREATE TABLE `hoja_de_parte` (
  `id_hoja` int(11) NOT NULL,
  `codigo_hoja` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_repuesto` int(11) NOT NULL,
  `nombre_mecanico` varchar(30) NOT NULL,
  `concepto_hoja` varchar(60) NOT NULL,
  `cantidad_repuesto` int(11) NOT NULL,
  `precio_mano_obra` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `id_mecanico` int(11) NOT NULL,
  `nombre_mecanico` varchar(30) NOT NULL,
  `direccion_mecanico` varchar(60) NOT NULL,
  `telefono_mecanico` int(9) NOT NULL,
  `costo_hora_mecanico` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mecanico`
--

INSERT INTO `mecanico` (`id_mecanico`, `nombre_mecanico`, `direccion_mecanico`, `telefono_mecanico`, `costo_hora_mecanico`) VALUES
(1, 'Adrián Meza Muñoz', 'Chaclacayo av. carretera central - jr las musas 159', 943696875, '15.00'),
(2, 'Fidel Alejandro', 'Asoc. el Manantial de Ate Calle Virgen de Guadalupe Mz E lt ', 945287938, '15.00'),
(3, 'Edinson Gustavo	', 'Chaclacayo jr las delicias n666', 943396577, '14.00'),
(6, 'Fidel Ascencio Meza Alamar', 'Matucana, Plaza de armas Jr Lima 15', 951756957, '15.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id_orden` int(11) NOT NULL,
  `codigo_orden` varchar(10) NOT NULL,
  `id_mecanico` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `matricula_vehiculo` varchar(10) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `estado_orden` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id_orden`, `codigo_orden`, `id_mecanico`, `id_cliente`, `id_vehiculo`, `matricula_vehiculo`, `fecha_entrada`, `estado_orden`) VALUES
(2, 'GT15975', 3, 4, 1, 'AEF-717', '2022-06-18', 1),
(4, 'GT14110', 1, 2, 2, 'AEF-720', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id_repuesto` int(11) NOT NULL,
  `descripcion_repuesto` varchar(20) NOT NULL,
  `precio_uni_repuesto` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `modelo_vehiculo` varchar(60) NOT NULL,
  `color_vehiculo` varchar(10) NOT NULL,
  `marca_vehiculo` varchar(10) NOT NULL,
  `anio_vehiculo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `modelo_vehiculo`, `color_vehiculo`, `marca_vehiculo`, `anio_vehiculo`) VALUES
(1, 'Mustang Mach 1', 'Plateado', 'Ford', 2021),
(2, 'Audi Q7 3.0 Tfsi 333cv Tiptronic Quattro', 'Negro', 'Audi', 2014),
(3, 'Audi S3 2.0 Tfsi Stronic Quattro 300cv', 'Azul plate', 'Audi', 2018),
(4, 'Audi A4 2.0 Fsi 190cv', 'Blanco', 'Audi', 2021);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `factura_hoja_parte` (`id_hoja_parte`);

--
-- Indices de la tabla `hoja_de_parte`
--
ALTER TABLE `hoja_de_parte`
  ADD PRIMARY KEY (`id_hoja`),
  ADD KEY `hoja_parte_orden` (`id_orden`),
  ADD KEY `hoja_parte_repuesto` (`id_repuesto`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`id_mecanico`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `orden_cliente` (`id_cliente`),
  ADD KEY `orden_mecanico` (`id_mecanico`),
  ADD KEY `orden_vehiculo` (`id_vehiculo`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`id_repuesto`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hoja_de_parte`
--
ALTER TABLE `hoja_de_parte`
  MODIFY `id_hoja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  MODIFY `id_mecanico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_hoja_parte` FOREIGN KEY (`id_hoja_parte`) REFERENCES `hoja_de_parte` (`id_hoja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hoja_de_parte`
--
ALTER TABLE `hoja_de_parte`
  ADD CONSTRAINT `hoja_parte_orden` FOREIGN KEY (`id_orden`) REFERENCES `orden` (`id_orden`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoja_parte_repuesto` FOREIGN KEY (`id_repuesto`) REFERENCES `repuesto` (`id_repuesto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orden_mecanico` FOREIGN KEY (`id_mecanico`) REFERENCES `mecanico` (`id_mecanico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orden_vehiculo` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
