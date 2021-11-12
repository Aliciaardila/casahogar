-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 22:59:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `edad`, `foto`, `descripcion`, `tipo`) VALUES
(5, 'Nemo', '1 año', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/pez.jpg?alt=media&token=04cf1a17-2ed6-44d9-96c0-8ec9f005530f', 'Pez payaso', 5),
(6, 'flor', '4 meses', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/ave.jpg?alt=media&token=b5111988-c017-4bf3-a732-bb337220a904', 'Búho  ', 3),
(7, 'Rocinante', '5 años', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/caballo.jpg?alt=media&token=83af6abd-120b-45b8-926b-a72a9b4b5182', 'caballo, macho', 4),
(8, 'Fiona', '1años', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/perro1.jpg?alt=media&token=c2e6e56f-234f-4099-86ca-9411bad8b956', 'Hembra, Esterilizada, vacunas al día, lista para adopción.', 1),
(9, 'Emma', '5 meses', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/gato2.jpg?alt=media&token=73bacf29-90dc-4200-b3c9-c285bf25a29c', 'Hembra ', 2),
(10, 'Julia', '10 años', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/iguanaazul.jpg?alt=media&token=2c196083-326e-482a-a9a2-7b2de693c707', 'Iguana Azul', 5),
(11, 'Blue', '5 años', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/gato1.jpg?alt=media&token=0fda4718-f840-44ad-8441-d0175b8d9393', 'Hembra, esterilizada.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `precio` int(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `foto`, `precio`, `descripcion`, `tipo`) VALUES
(5, 'cuido alimento seco', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/cuido1.jpg?alt=media&token=78ae9ad7-6516-4f0c-927f-b44b2b636fb4', 12500, 'cuido perro cachorro', 1),
(6, 'Felix alimento humedo', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/cuido3.jpg?alt=media&token=a7faa61f-9b00-4aec-9407-93f945a7b6a3', 11500, 'Cuido para gato, gama medio', 2),
(7, 'Arena popys litter', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/areana1.png?alt=media&token=041a905c-b1a0-4c58-8ec7-f9d15112dd8d', 364500, 'Arena altamente aglomerante', 2),
(10, 'Alimento Reptil', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/comidaReptil.jpg?alt=media&token=0c7f0047-82c1-4180-a198-21926cca9271', 8700, 'Alimento seco', 4),
(11, 'Alimento seco', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/comidaequino.png?alt=media&token=98d4bd46-d98e-4e5b-9e6e-72a70972e0a6', 35700, 'Alimento para equinos', 5),
(12, 'Baño Seco', 'https://firebasestorage.googleapis.com/v0/b/fotocasahogarali.appspot.com/o/ba%C3%B1o%20seco.png?alt=media&token=9e265f2c-c3ba-4d24-ad38-190f111f81f2', 9500, 'Baño seco', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
