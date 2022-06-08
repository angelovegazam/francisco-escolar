-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 01:00:25
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
-- Base de datos: `francisco_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso_usuarios`
--

CREATE TABLE `acceso_usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `acceso_usuarios`
--

INSERT INTO `acceso_usuarios` (`id`, `email`, `password`) VALUES
(1, 'angelovegazam@gmail.com', '$2y$10$m.Pu5DrQewgYDxpDpbgmMe06EZ4OrtTNq4YPbJprfGbkt3rpRUC.C'),
(3, 'carlosvillalobos@gmail.com', '$2y$10$CMmIgsXOl4HU0rOTkVw/.em.9Cc8HcxVqS5nvVlX9N4Xf5oiHo9p.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_estudiantes`
--

CREATE TABLE `registro_estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_identidad` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_escolar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_nacimiento` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_actual` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `punto_referencia` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nombres_repre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_repre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_id_repre` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_nac_repre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `parentesco_repre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil_repre` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `correo_electronico_repre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telefono_repre` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telefono_repre_otro` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro_estudiantes`
--

INSERT INTO `registro_estudiantes` (`id`, `nombres`, `apellidos`, `cedula_identidad`, `cedula_escolar`, `fecha_nacimiento`, `sexo`, `lugar_nacimiento`, `direccion_actual`, `punto_referencia`, `correo_electronico`, `numero_telefono`, `nombres_repre`, `apellidos_repre`, `cedula_id_repre`, `lugar_nac_repre`, `parentesco_repre`, `estado_civil_repre`, `correo_electronico_repre`, `numero_telefono_repre`, `numero_telefono_repre_otro`, `fecha_registro`) VALUES
(10, 'angelo ventura', 'vega zambrano', 'v-28746660', '123345646546456', '2002-09-02', 'Masculino', 'hospital santa barbara', 'sta barbara kilometro 5', 'urb los caobos', 'angelovegazam@gmail.com', '2147483647', 'irina del carmen', 'zambrano sierra', 'v-13010594', 'santa barbara', 'madre biologica', 'Soltero(a)', 'irinazambrano@gmail.com', '2147483647', '2147483647', '2022-06-08 20:43:43'),
(11, 'johan andres', 'vega zambrano', 'v-28746660', '345678987654345', '2000-12-19', 'Masculino', 'hospital santa barbara', 'sta barbara kilometro 5', 'urb los caobos', 'angelovegazam@gmail.com', '2147483647', 'irina del carmen', 'zambrano sierra', 'v-13010594', 'santa barbara', 'madre biologica', 'Soltero(a)', 'irinazambrano@gmail.com', '2147483647', '2147483647', '2022-06-08 20:45:51'),
(12, 'sara stefania', 'vega zambrano', 'v-28746660', '345678987654345', '2006-03-07', 'Femenino', 'hospital santa barbara', 'sta barbara kilometro 5', 'urb los caobos', 'saravega@gmail.com', '04147095646', 'irina del carmen', 'zambrano sierra', 'v-13010594', 'santa barbara', 'madre biologica', 'Soltero(a)', 'irinazambrano@gmail.com', '04247698751', '04121293464', '2022-06-08 20:47:32'),
(13, 'juan jose', 'saavedra zambrano', 'v-25916533', 'no posee', '1997-10-20', 'Masculino', 'san carlos zulia', 'kilometro 5 bello monte', 'residencia sra celia', 'juanjosesaavedra.bebe@gmail.com', 'no poseeeee', 'joaquin', 'vega lara', 'v-15205353', 'merida', 'padre biologico', 'Casado(a)', 'joaquinvegal@gmail.com', '04247777990', '', '2022-06-08 20:49:53'),
(14, 'angelo ventura', 'vega zambrano', 'v-28746660', '123345646546456', '2022-06-08', 'Masculino', 'hospital santa barbara', 'sta barbara kilometro 5', 'urb los caobos', 'angelovegazam@gmail.com', '04147095646', 'irina del carmen', 'zambrano sierra', 'v-13010594', 'santa barbara', 'madre biologica', 'Soltero(a)', 'irinazambrano@gmail.com', '04247698751', '04121293464', '2022-06-08 20:59:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso_usuarios`
--
ALTER TABLE `acceso_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_estudiantes`
--
ALTER TABLE `registro_estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso_usuarios`
--
ALTER TABLE `acceso_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro_estudiantes`
--
ALTER TABLE `registro_estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
