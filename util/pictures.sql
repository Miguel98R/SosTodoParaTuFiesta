-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2020 a las 08:04:06
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pictures`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brincolin`
--

CREATE TABLE `brincolin` (
  `id` int(11) NOT NULL,
  `ruta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brincolin`
--

INSERT INTO `brincolin` (`id`, `ruta`) VALUES
(1, 'img/brincolin/brincolin1.jpg'),
(2, 'img/brincolin/brincolin2.jpg'),
(3, 'img/brincolin/brincolin3.jpg\r\n'),
(4, 'img/brincolin/brincolin4.jpg'),
(5, 'img/brincolin/brinolin5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flores`
--

CREATE TABLE `flores` (
  `id` int(11) NOT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesascentros`
--

CREATE TABLE `mesascentros` (
  `id` int(11) NOT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesascentros`
--

INSERT INTO `mesascentros` (`id`, `ruta`) VALUES
(1, 'img/mesascentros/centrosMesa1.jpg'),
(2, 'img/mesascentros/centroMesa2.jpg'),
(3, 'img/mesascentros/centrosMesa3.jpg'),
(4, 'img/mesascentros/centrosMesa4.jpg'),
(5, 'img/mesascentros/78938277_1392518184262142_3744144023825154048_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesasdulces`
--

CREATE TABLE `mesasdulces` (
  `id` int(11) NOT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porcelanicron`
--

CREATE TABLE `porcelanicron` (
  `id` int(11) NOT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `velas`
--

CREATE TABLE `velas` (
  `id` int(11) NOT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `velas`
--

INSERT INTO `velas` (`id`, `ruta`) VALUES
(1, 'img/velas/78350888_1372658606248100_3735122114307424256_n.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brincolin`
--
ALTER TABLE `brincolin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `flores`
--
ALTER TABLE `flores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesascentros`
--
ALTER TABLE `mesascentros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesasdulces`
--
ALTER TABLE `mesasdulces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `porcelanicron`
--
ALTER TABLE `porcelanicron`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `velas`
--
ALTER TABLE `velas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brincolin`
--
ALTER TABLE `brincolin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `flores`
--
ALTER TABLE `flores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mesascentros`
--
ALTER TABLE `mesascentros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mesasdulces`
--
ALTER TABLE `mesasdulces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `porcelanicron`
--
ALTER TABLE `porcelanicron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `velas`
--
ALTER TABLE `velas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
