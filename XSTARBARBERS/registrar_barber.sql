-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2024 a las 04:13:53
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrar_barber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `email`, `password`) VALUES
(8, 'stiven', 'stiven@gmail.com', '123'),
(9, '', '', ''),
(10, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_barbero`
--

CREATE TABLE `registrar_barbero` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_pat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_mat` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registrar_barbero`
--

INSERT INTO `registrar_barbero` (`id`, `nombres`, `apellido_pat`, `apellido_mat`, `numero`, `email`, `password`) VALUES
(2, 'bilardo', 'ruiz', 'cervantes', '3004500733', 'ramosberrrr@gmail.com', '12345'),
(3, 'bilardo', 'ruiz', 'cervantes', '3004500733', 'ramosberrrr@gmail.com', '123'),
(4, 'juan', 'ramos', 'ramos', '3124525522', 'ramos@gmail.com', '159753'),
(5, 'juan', 'ramos', 'ramos', '3205557876', 'juan@gmail.com', '159753'),
(6, 'jose', 'ramos', 'rmoas', '3134568559', 'jose@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrar_barbero`
--
ALTER TABLE `registrar_barbero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registrar_barbero`
--
ALTER TABLE `registrar_barbero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
