-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2019 a las 18:37:40
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `product_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id_marca`, `descripcion`) VALUES
(1, 'NIKE'),
(2, 'ADIDAS'),
(3, 'PUMA'),
(4, 'FILA'),
(5, 'TOPPER'),
(6, 'CAÑON'),
(7, 'TODO TERRENO'),
(8, 'ACME'),
(9, 'Otra Marcas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id_color` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id_color`, `descripcion`) VALUES
(1, 'Negro'),
(2, 'blanca'),
(3, 'gris'),
(4, 'rojo'),
(5, 'rosa'),
(6, 'pink'),
(7, 'black'),
(8, 'red'),
(9, 'orange');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sneakers`
--

CREATE TABLE `sneakers` (
  `id_sneakers` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `precio` decimal(7,2) DEFAULT NULL,
  `id_marca` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `initial_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagen` varchar(255) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sneakers`
--

INSERT INTO `sneakers` (`id_sneakers`, `modelo`, `precio`, `id_marca`, `id_color`, `initial_date`, `imagen`, `observacion`) VALUES
(4, 'asa', '121.00', 8, 7, '2019-10-22 21:42:59', '../images/index.jpg', 'zax'),
(6, 'nike', '2345.00', 1, 5, '2019-10-22 22:46:45', '../images/nike.jpg', 'jh'),
(7, 'pruevateest', '0.00', 6, 2, '2019-10-24 23:06:32', '../images/yamaha.jpg', 'pruvatest'),
(8, 'verde', '10000.00', 2, 2, '2019-10-24 23:25:18', '../images/cfr250.jpg', ''),
(9, 'asda', '13243.00', 7, 4, '2019-10-29 22:37:18', '../images/auto.jpg', 'asd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`id_sneakers`),
  ADD KEY `sneakers_marcas` (`id_color`),
  ADD KEY `brands_marcas` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id_sneakers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sneakers`
--
ALTER TABLE `sneakers`
  ADD CONSTRAINT `brands_marcas` FOREIGN KEY (`id_marca`) REFERENCES `brands` (`id_marca`),
  ADD CONSTRAINT `sneakers_marcas` FOREIGN KEY (`id_color`) REFERENCES `colors` (`id_color`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
