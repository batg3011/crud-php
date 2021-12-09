-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 20:08:46
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_col`
--

CREATE TABLE `estudiantes_col` (
  `id_estudiante` int(11) NOT NULL,
  `Nombre_estudiante` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_estud` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_est` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_est` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acudiente` int(11) NOT NULL,
  `grupo_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes_col`
--

INSERT INTO `estudiantes_col` (`id_estudiante`, `Nombre_estudiante`, `Apellido_estud`, `direccion_est`, `telefono_est`, `acudiente`, `grupo_est`) VALUES
(12131422, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(12131426, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(12131427, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131428, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1001),
(12131429, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(12131430, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131431, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131432, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1001),
(12131433, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131434, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131435, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(12131436, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1001),
(12131437, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(12131438, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131439, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131440, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1001),
(12131441, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1000),
(12131442, 'maria bonita de los angeles', 'caido del cielo', 'calle 76 b 34 e bloque 45', '4566777887', 12131313, 1001),
(12131443, 'Juan sin Miedo', 'de la Calle lombana', 'cra 23 a 76 45 este ', '3445565656', 41414141, 1000),
(13141520, 'efrain carlos', 'garcia morales', 'carrera 34 d 12 76 de bogota city', '456546677', 12121212, 1000),
(13141528, 'efrain carlos', 'garcia morales', 'carrera 34 d 12 76 de bogota city', '456546677', 12121212, 1000),
(13141531, 'efrain carlos', 'garcia morales', 'carrera 34 d 12 76 de bogota city', '456546677', 12121212, 1000),
(19399326, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399327, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1001),
(19399328, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399329, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399330, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399332, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399333, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1001),
(19399334, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399335, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399336, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1000),
(19399346, 'Jose Miguel ', 'Gomez Hurtado', 'Cra 12 d 4 26 este bl 23 apto 801', '3454656788', 19399376, 1001),
(51456788, 'Esperanza de la Calle', 'Moreno Mejia', 'cra 10 a 14 24 piso 3', '3143478734', 19399376, 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_cole`
--

CREATE TABLE `grupos_cole` (
  `id_grupo` int(11) NOT NULL,
  `descr_grupo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos_cole`
--

INSERT INTO `grupos_cole` (`id_grupo`, `descr_grupo`, `id_jornada`) VALUES
(1000, 'Primero A de Primaria jornada de la Mañana', 0),
(1001, 'Primero B de primaria jornada de la mañana', 0),
(1002, 'Primero C de Primaria jornada de la Tarde', 0),
(1003, 'Primero D de primaria jornada de la Tarde', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas_gru`
--

CREATE TABLE `jornadas_gru` (
  `id_jornada` int(11) NOT NULL,
  `desc_Jornada` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes_col`
--
ALTER TABLE `estudiantes_col`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `grupos_cole`
--
ALTER TABLE `grupos_cole`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `jornadas_gru`
--
ALTER TABLE `jornadas_gru`
  ADD PRIMARY KEY (`id_jornada`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
