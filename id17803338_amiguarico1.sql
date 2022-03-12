-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2022 a las 02:57:04
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17803338_amiguarico1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `ci_beneficiarios` varchar(8) NOT NULL,
  `ci_titular` varchar(8) NOT NULL,
  `parentesco` varchar(15) NOT NULL,
  `nombres` varchar(25) NOT NULL,
  `apellido1` varchar(11) NOT NULL,
  `apellido2` varchar(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` text NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiarios`
--

INSERT INTO `beneficiarios` (`ci_beneficiarios`, `ci_titular`, `parentesco`, `nombres`, `apellido1`, `apellido2`, `telefono`, `direccion`, `fecha_de_nacimiento`) VALUES
('11262227', '25541413', '-------', 'Evelyn Ramona', 'Pereira', 'Camacaro', '02512734251', 'Ruezga norte Sector 2 Calle 1', '1972-10-17'),
('12081705', '25541413', 'Padre', 'Alberto Jose ', 'Moreno', 'Sanabria', '0254-572179', 'Nirgua', '1973-09-26'),
('16089412', '25541413', 'Tio', 'Juan Alberto', 'Pereira', 'Camacaro', '0416-552220', 'Cabudare', '1983-02-04'),
('31511956', '9603937', 'Hija', 'Oriana Valentina', 'Barcos', 'Pereira', '0251-273117', 'Ruezga nort', '2005-02-04'),
('888888', '25541413', 'Hermano/a', 'Yossi', 'Moreno', 'Sanchez', '02512734251', 'Nirgua', '2022-03-22'),
('89456218', '25541413', 'Abuelo', 'Maria ', 'Camacaro', '', '02512734251', 'Ruezga Norte', '1946-02-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `nro_contrato` int(11) NOT NULL,
  `ci_titular` varchar(8) NOT NULL,
  `id_PlanDeSalud` int(11) NOT NULL,
  `fecha_inicio_contrato` date NOT NULL,
  `fecha_cierre_contrato` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`nro_contrato`, `ci_titular`, `id_PlanDeSalud`, `fecha_inicio_contrato`, `fecha_cierre_contrato`) VALUES
(1, '5554889', 15, '2001-12-01', '2022-03-02'),
(2, '33333333', 2, '2012-01-01', '2022-03-15'),
(25, '11262227', 85, '2022-03-01', '2022-03-18'),
(26, '9603937', 877, '2022-04-01', '2023-04-01'),
(56, '25541413', 455, '2022-01-01', '2022-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ci_empleado` varchar(8) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `rol_usuario` varchar(30) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ci_empleado`, `nombres`, `apellido1`, `apellido2`, `telefono`, `direccion`, `fecha_de_nacimiento`, `cargo`, `rol_usuario`, `usuario`, `contrasena`) VALUES
('1939092', 'Jorge', 'Peraza', 'Jimenez', '0426254852', 'Cuji Barquisimeto LARA', '1965-02-01', 'Médico', 'Administrador', 'J-Peraza', '246810'),
('804569', 'Carlos Luis', 'Rodriguez', 'Soto', '0412-255849', 'Cabudare', '1974-02-07', 'Médico', 'Administrador', 'C-Luis', '123456'),
('859674', 'Johanna', 'Mendoza', 'Paredes', '0251-273117', 'San Jacinto', '1996-01-21', 'Otro', 'Cliente', 'J-Mendoza', '654321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `id_contrato`, `cantidad`, `descripcion`, `fecha_pago`) VALUES
(2, 26, 100, 'Pago recibido', '2022-02-15'),
(5, 488, 50, 'Abono recibido', '2022-02-17'),
(12, 4, 12, '113as', '2022-03-16'),
(15, 9888, 250, 'pago del dia ', '2022-02-28'),
(2312, 123, 124312, '12312', '2022-03-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_de_salud`
--

CREATE TABLE `plan_de_salud` (
  `id_PlanDeSalud` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` double NOT NULL,
  `nro_cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_de_salud`
--

INSERT INTO `plan_de_salud` (`id_PlanDeSalud`, `nombre`, `precio`, `nro_cuotas`) VALUES
(25, '21dd', 123123, 331),
(26, 'ASNR', 855, 24),
(445, 'Premium', 10000, 36),
(456, 'Deluxe', 5000, 24),
(877, 'Plus', 4000, 24),
(2314, '124', 121, 1512);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre`, `detalles`) VALUES
(1, '23', 'ggg3'),
(2, '2', '2'),
(12, 'Servicio de Ambulancias', 'Consta del servicio de traslado en ambulancia a pacientes afiliados'),
(55, 'Servicio para mayores de ', 'Servicio especial para afiliados de edad avanzada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titular`
--

CREATE TABLE `titular` (
  `ci_titular` varchar(8) NOT NULL,
  `nombres` varchar(11) NOT NULL,
  `apellido1` varchar(11) NOT NULL,
  `apellido2` varchar(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titular`
--

INSERT INTO `titular` (`ci_titular`, `nombres`, `apellido1`, `apellido2`, `telefono`, `direccion`, `fecha_nacimiento`) VALUES
('25541413', 'Alberto Jos', 'Moreno', 'Pereira', '0426-459023', 'Ruezga Nort', '1997-05-13'),
('9603937', 'Rafael Anto', 'Barcos', '', '0426-125248', 'Caldera', '1960-05-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`ci_beneficiarios`),
  ADD KEY `ci_titular` (`ci_titular`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`nro_contrato`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ci_empleado`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `plan_de_salud`
--
ALTER TABLE `plan_de_salud`
  ADD PRIMARY KEY (`id_PlanDeSalud`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `titular`
--
ALTER TABLE `titular`
  ADD PRIMARY KEY (`ci_titular`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD CONSTRAINT `beneficiarios_ibfk_1` FOREIGN KEY (`ci_titular`) REFERENCES `titular` (`ci_titular`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
