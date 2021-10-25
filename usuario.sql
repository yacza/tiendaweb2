-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 01:27:24
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supercito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `idFormaPago` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `genero` char(1) NOT NULL,
  `domicilio` text NOT NULL COMMENT 'calle, numero, colonia, ciudad, cp, email y telefono',
  `rfc` varchar(100) DEFAULT NULL,
  `puesto` varchar(100) DEFAULT NULL,
  `salario` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `correo`, `clave`, `idTipoUsuario`, `idFormaPago`, `idDepartamento`, `nombre`, `apellidos`, `genero`, `domicilio`, `rfc`, `puesto`, `salario`) VALUES
(1, '17240145@gmail.com', '516EXa.p', 1, 5, 1, 'Calos', 'López Juárez', 'M', 'awerftgbhyj estrb', 'cfvgbhnuj24ceq', 'qecvb trvfca', 0),
(2, 'jackilango.22@gmail.com', 'sdcfvgbnhj', 3, 10, 3, ' Sanjuana', 'Lango', 'F', 'AFSVDGBTFHJU', 'null', 'null', 0),
(1082004, 'hernangarcia@gmail.com', '123', 1, 0, 3, ' Hernan', 'Garcia', 'M', 'Fedra 111', 'null', 'null', 0),
(1844335, 'mauriyacz12@gmail.com', 'yaczayacza12', 2, 0, 1, ' Mauricio', 'Quijada', 'M', 'Fedra 111', 'AZ41BSY5', 'Vendedor', 0),
(1849124, 'mauri_q1999@hotmail.com', '123', 1, 0, 3, ' Jonathan', 'Landin', 'M', 'Fedra 111', 'null', 'null', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1849125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
