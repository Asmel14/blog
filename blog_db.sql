-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2024 a las 03:24:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `author`, `content`, `created_at`) VALUES
(1, 'asmelvin', 'Su examen consiste en hacer un mini control de entradas (posts) para un blog. \r\n\r\nDeben implementar las clases y métodos necesarios para permitir a los usuarios ver todas las entradas existentes y obtener detalles para uno en específico. Además el usuario puede crear nuevas entradas. Todo eso de debe guardar en una base de datos utilizando MySQL. \r\n\r\nCada entrada tiene un ID, un autor, contenido y la fecha en la cual se ingresó. \r\n\r\nDeben entregar el enlace al repositorio.', '2024-06-19 23:20:14'),
(2, 'carlos ', 'sdfgasdgdsfvzhjxcvzxcv,jHJ<VC xn hj sd', '2024-06-19 23:20:14'),
(3, 'adfgadfg', 'adsfgadfgadf', '2024-06-20 00:05:06'),
(4, 'adfgadfg', 'dfgadfgadg', '2024-06-20 00:05:06'),
(5, 'asmelvin 2', 'sdfgadfgdfg', '2024-06-20 00:43:01'),
(6, 'sdfgsadgf', 'adsasdgfadsgdsgf', '2024-06-20 00:43:24'),
(7, '12123', '123123', '2024-06-20 00:45:32'),
(8, 'Zxvvgfadfg', 'dfgadfgadfg', '2024-06-20 00:46:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
