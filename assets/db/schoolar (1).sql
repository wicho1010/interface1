-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2018 a las 14:57:07
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `schoolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `ID_ACTIVIDAD` int(4) NOT NULL AUTO_INCREMENT,
  `ACT_TITULO_ACTVI` varchar(45) DEFAULT NULL,
  `ACT_TIPO_ACTIVIDAD` varchar(45) DEFAULT NULL,
  `ACT_FECHA_INICIO` date DEFAULT NULL,
  `ACT_FECHA_TERMINO` date DEFAULT NULL,
  `ACT_LUGAR` varchar(45) DEFAULT NULL,
  `ACT_DESCRIPCION` text,
  `ACT_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ACTIVIDAD`),
  KEY `fk_ACTIVIDADES_BECARIO1_idx` (`ACT_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_extra`
--

DROP TABLE IF EXISTS `act_extra`;
CREATE TABLE IF NOT EXISTS `act_extra` (
  `ID_ACT_EXTRA` int(4) NOT NULL AUTO_INCREMENT,
  `EXT_INSTITUCION` varchar(45) DEFAULT NULL,
  `EXT_DESCRIP_ACTV` text,
  `EXT_TOTAL_HORAS` int(5) DEFAULT NULL,
  `EXT_FECHA_INT` date DEFAULT NULL,
  `EXT_FECHA_FINAL` date DEFAULT NULL,
  `EXT_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_ACT_EXTRA`),
  KEY `fk_ACT_EXTRA_ASPIRANTES1_idx` (`EXT_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE IF NOT EXISTS `asistencia` (
  `ID_ASISTENCIA` int(4) NOT NULL AUTO_INCREMENT,
  `ASI_ASISTENCIA` varchar(45) DEFAULT NULL,
  `ASI_FECHA` date DEFAULT NULL,
  `ASI_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ASISTENCIA`),
  KEY `fk_ASISTENCIA_BECARIO1_idx` (`ASI_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
CREATE TABLE IF NOT EXISTS `aspirantes` (
  `ID_ASPIRANTES` int(4) NOT NULL AUTO_INCREMENT,
  `ASP_STATUS` varchar(45) DEFAULT NULL,
  `ASP_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ASPIRANTES`),
  KEY `fk_ASPIRANTES_table1_idx` (`ASP_ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `AUTO_MODELO` varchar(45) DEFAULT NULL,
  `AUTO_AÑO` varchar(45) DEFAULT NULL,
  `DATOS_GENERALES_ID_GENERALES` int(4) NOT NULL,
  PRIMARY KEY (`DATOS_GENERALES_ID_GENERALES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becario`
--

DROP TABLE IF EXISTS `becario`;
CREATE TABLE IF NOT EXISTS `becario` (
  `ID_BECARIO` int(4) NOT NULL AUTO_INCREMENT,
  `BEC_STATUS` varchar(45) DEFAULT NULL,
  `BEC_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_BECARIO`),
  KEY `fk_BECARIO_table11_idx` (`BEC_ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `becario`
--

INSERT INTO `becario` (`ID_BECARIO`, `BEC_STATUS`, `BEC_ID_USUARIO`) VALUES
(1, '1', 3),
(2, '1', 4),
(3, '1', 5),
(4, '1', 6),
(5, '1', 7),
(6, '1', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_limpieza`
--

DROP TABLE IF EXISTS `bitacora_limpieza`;
CREATE TABLE IF NOT EXISTS `bitacora_limpieza` (
  `ID_BITACORA` int(4) NOT NULL AUTO_INCREMENT,
  `BIT_SEMANA` date DEFAULT NULL,
  `BIT_DIA` varchar(45) DEFAULT NULL,
  `BIT_ACTIVIDAD` text,
  `BIT_ASIGNACION` varchar(45) DEFAULT NULL,
  `BIT_REALIZADO` varchar(45) DEFAULT NULL,
  `BIT_ID_EQUIPOS` int(4) NOT NULL,
  PRIMARY KEY (`ID_BITACORA`),
  KEY `fk_BITACORA_LIMPIEZA_EQUIPOS1_idx` (`BIT_ID_EQUIPOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `ID_CALIFICACIONES` int(4) NOT NULL AUTO_INCREMENT,
  `CAL_NIVEL_INGLES` varchar(45) DEFAULT NULL,
  `CAL_CALIFICACION` int(2) DEFAULT NULL,
  `CAL_UNIDAD` int(2) DEFAULT NULL,
  `CAL_PROMEDIO` int(2) DEFAULT NULL,
  `CAL_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_CALIFICACIONES`),
  KEY `fk_CALIFICACIONES_BECARIO1_idx` (`CAL_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_empleados`
--

DROP TABLE IF EXISTS `control_empleados`;
CREATE TABLE IF NOT EXISTS `control_empleados` (
  `ID_CONT_EMP` int(4) NOT NULL AUTO_INCREMENT,
  `CONT_CLAVE_AREA` int(4) DEFAULT NULL,
  `CONT_FECHA` date DEFAULT NULL,
  `CONT_HORA_SALIDA` varchar(40) DEFAULT NULL,
  `CONT_HORA_ENTRADA` varchar(40) DEFAULT NULL,
  `CON_ID_EMPLEADO` int(4) NOT NULL,
  PRIMARY KEY (`ID_CONT_EMP`),
  KEY `fk_CONTROL_EMPLEADOS_EMPLEADOS1_idx` (`CON_ID_EMPLEADO`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `control_empleados`
--

INSERT INTO `control_empleados` (`ID_CONT_EMP`, `CONT_CLAVE_AREA`, `CONT_FECHA`, `CONT_HORA_SALIDA`, `CONT_HORA_ENTRADA`, `CON_ID_EMPLEADO`) VALUES
(21, 1, '2018-05-07', '1', '08:30:39', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

DROP TABLE IF EXISTS `costos`;
CREATE TABLE IF NOT EXISTS `costos` (
  `COS_SEMINARIO` float DEFAULT NULL,
  `COS_TRANSPORTE` float DEFAULT NULL,
  `COS_HOSPEDAJE` float DEFAULT NULL,
  `COS_TOTAL` float DEFAULT NULL,
  `COS_APRO_BECARIO` float DEFAULT NULL,
  `COS_APORT_GSP` float DEFAULT NULL,
  `SOLICITUD_FONDOS_ID_SOL_FONDOS` int(4) NOT NULL,
  PRIMARY KEY (`SOLICITUD_FONDOS_ID_SOL_FONDOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familiares`
--

DROP TABLE IF EXISTS `datos_familiares`;
CREATE TABLE IF NOT EXISTS `datos_familiares` (
  `ID_FAMILIARES` int(4) NOT NULL AUTO_INCREMENT,
  `FAM_PARENTESCO` varchar(45) DEFAULT NULL,
  `FAM_APELL_PATERNO` varchar(45) DEFAULT NULL,
  `FAM_APELLIDO_MATERNO` varchar(45) DEFAULT NULL,
  `FAM_NOMBRE` varchar(45) DEFAULT NULL,
  `FAM_OCUPACION` varchar(45) DEFAULT NULL,
  `FAM_LUGAR_TRABAJO` varchar(45) DEFAULT NULL,
  `FAM_ING_FORMAL` int(5) DEFAULT NULL,
  `FAM_ING_INFORMAL` int(5) DEFAULT NULL,
  `FAM_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_FAMILIARES`),
  KEY `fk_DATOS_FAMILIARES_ASPIRANTES1_idx` (`FAM_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

DROP TABLE IF EXISTS `datos_generales`;
CREATE TABLE IF NOT EXISTS `datos_generales` (
  `ID_GENERALES` int(4) NOT NULL AUTO_INCREMENT,
  `GEN_TIEMPO_RESI` varchar(45) DEFAULT NULL,
  `GEN_CASA_PROP` varchar(45) DEFAULT NULL,
  `GEN_DESCRP_CASA` text,
  `GEN_AUTO` varchar(45) DEFAULT NULL,
  `GEN_PERSONAS_FAMILIA` int(2) DEFAULT NULL,
  `GEN_PERSONAS_CASA` int(2) DEFAULT NULL,
  `GEN_BANCARIAS` varchar(45) DEFAULT NULL,
  `GEN_TRABAJO` varchar(45) DEFAULT NULL,
  `GEN_TIPO_BECA` varchar(45) DEFAULT NULL,
  `GEN_INTERNET` varchar(45) DEFAULT NULL,
  `GEN_HABLAR_ING` varchar(45) DEFAULT NULL,
  `GEN_PORCENTAJE` varchar(45) DEFAULT NULL,
  `GEN_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_GENERALES`),
  KEY `fk_DATOS_GENERALES_ASPIRANTES1_idx` (`GEN_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `ID_EMPLEADO` int(4) NOT NULL AUTO_INCREMENT,
  `EMP_STATUS` varchar(45) DEFAULT NULL,
  `EMP_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_EMPLEADO`),
  KEY `fk_EMPLEADOS_table11_idx` (`EMP_ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_EMPLEADO`, `EMP_STATUS`, `EMP_ID_USUARIO`) VALUES
(1, 'Trabajando', 1),
(2, 'Activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `ID_EQUIPOS` int(4) NOT NULL AUTO_INCREMENT,
  `EQU_NOMBRE_EQUIPO` varchar(45) DEFAULT NULL,
  `EQU_NUM_INTEGRA` varchar(45) DEFAULT NULL,
  `EQU_TIPO_EQUIPO` varchar(45) DEFAULT NULL,
  KEY `ID_EQUIPOS` (`ID_EQUIPOS`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`ID_EQUIPOS`, `EQU_NOMBRE_EQUIPO`, `EQU_NUM_INTEGRA`, `EQU_TIPO_EQUIPO`) VALUES
(1, 'Equipo 1', '5', 'Cocina'),
(2, 'Equipo 2', '4', 'Limpieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

DROP TABLE IF EXISTS `escolaridad`;
CREATE TABLE IF NOT EXISTS `escolaridad` (
  `ID_ESCOLAR` int(11) NOT NULL AUTO_INCREMENT,
  `ESC_NOMBRE_ESC` varchar(45) DEFAULT NULL,
  `ESC_DOMICILIO_ESC` varchar(45) DEFAULT NULL,
  `ESC_AÑOS_CURSADOS` varchar(45) DEFAULT NULL,
  `ESC_PROMEDIO` varchar(45) DEFAULT NULL,
  `ESC_TITULO` varchar(45) DEFAULT NULL,
  `ESC_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_ESCOLAR`),
  KEY `fk_ESCOLARIDAD_ASPIRANTES1_idx` (`ESC_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_aca`
--

DROP TABLE IF EXISTS `historial_aca`;
CREATE TABLE IF NOT EXISTS `historial_aca` (
  `ID_HIST_ACA` int(4) NOT NULL AUTO_INCREMENT,
  `HIST_UNIVERSIDAD` varchar(45) DEFAULT NULL,
  `HIST_SEM_CUATR` varchar(45) DEFAULT NULL,
  `HIST_PRMEDIO` float DEFAULT NULL,
  `HIST_NUM_CONTROL` varchar(45) DEFAULT NULL,
  `HIST_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_HIST_ACA`),
  KEY `fk_HISTORIAL_ACA_BECARIO1_idx` (`HIST_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_estudio`
--

DROP TABLE IF EXISTS `pro_estudio`;
CREATE TABLE IF NOT EXISTS `pro_estudio` (
  `ID_PROP_ESTUDIO` int(4) NOT NULL AUTO_INCREMENT,
  `PROP_CARRERA_CURSAR` varchar(45) DEFAULT NULL,
  `PROP_UNIVERSIDAD` varchar(45) DEFAULT NULL,
  `PROP_TIEMPO` varchar(45) DEFAULT NULL,
  `PROP_DESCRIPCION` text,
  `PROP_CONTAC_UNI` varchar(45) DEFAULT NULL,
  `PROP_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_PROP_ESTUDIO`),
  KEY `fk_PRO_ESTUDIO_ASPIRANTES1_idx` (`PROP_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimientos`
--

DROP TABLE IF EXISTS `reconocimientos`;
CREATE TABLE IF NOT EXISTS `reconocimientos` (
  `ID_RECONOCIMIENTOS` int(4) NOT NULL AUTO_INCREMENT,
  `REC_INSITUTCION` varchar(45) DEFAULT NULL,
  `REC_DESCRICPION` text,
  `REC_TIPO_RECONCIMIENT` varchar(45) DEFAULT NULL,
  `REC_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_RECONOCIMIENTOS`),
  KEY `fk_RECONOCIMIENTOS_ASPIRANTES1_idx` (`REC_ID_ASPIRANTES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reortes`
--

DROP TABLE IF EXISTS `reortes`;
CREATE TABLE IF NOT EXISTS `reortes` (
  `ID_REPORTE` int(4) NOT NULL AUTO_INCREMENT,
  `REP_TIPO_REPORTE` varchar(45) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_REPORTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_fondos`
--

DROP TABLE IF EXISTS `solicitud_fondos`;
CREATE TABLE IF NOT EXISTS `solicitud_fondos` (
  `ID_SOL_FONDOS` int(4) NOT NULL AUTO_INCREMENT,
  `FON_NOMBRE_EVENTO` varchar(45) DEFAULT NULL,
  `FON_REQUISITO` varchar(45) DEFAULT NULL,
  `FON_ORGANIZADOR` varchar(45) DEFAULT NULL,
  `FON_FECHA_INI` date DEFAULT NULL,
  `FON_FECHA_FIN` date DEFAULT NULL,
  `FON_UBICACION` varchar(45) DEFAULT NULL,
  `FON_OBJETIVO_EVENT` text,
  `FON_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_SOL_FONDOS`),
  KEY `fk_SOLICITUD_FONDOS_BECARIO1_idx` (`FON_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicutd_libros`
--

DROP TABLE IF EXISTS `solicutd_libros`;
CREATE TABLE IF NOT EXISTS `solicutd_libros` (
  `ID_SOL_LIBROS` int(4) NOT NULL AUTO_INCREMENT,
  `LIB_DESCRIPCION_LIBRO` text,
  `LIB_MATERIA` varchar(45) DEFAULT NULL,
  `LIB_NOM_MAESTRO` varchar(45) DEFAULT NULL,
  `LIB_CANTIDAD` int(2) DEFAULT NULL,
  `LIB_PRECIO` float DEFAULT NULL,
  `LIB_VENDEDOR` varchar(45) DEFAULT NULL,
  `LIB_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_SOL_LIBROS`),
  KEY `fk_SOLICUTD_LIBROS_BECARIO1_idx` (`LIB_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(4) NOT NULL AUTO_INCREMENT,
  `USU_USUARIO` varchar(45) DEFAULT NULL,
  `USU_CONTRASENA` varchar(45) DEFAULT NULL,
  `USU_ROLL` varchar(45) DEFAULT NULL,
  `USU_APELLIDO_PATERNO` varchar(45) DEFAULT NULL,
  `USU_APELLIDO_MATERNO` varchar(45) DEFAULT NULL,
  `USU_NOMBRE` varchar(45) DEFAULT NULL,
  `USU_DIRECCION` varchar(45) DEFAULT NULL,
  `USU_COLONIA` varchar(45) DEFAULT NULL,
  `USU_CODIGO_POSTAL` varchar(45) DEFAULT NULL,
  `USU_TELEFONO` varchar(45) DEFAULT NULL,
  `USU_CELULAR` varchar(45) DEFAULT NULL,
  `USU_LUGAR_NACIMIENTO` varchar(45) DEFAULT NULL,
  `USU_FECHA_NAC` varchar(45) DEFAULT NULL,
  `USU_SEXO` varchar(45) DEFAULT NULL,
  `EQU_ID_BECARIO` int(11) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `EQU_ID_BECARIO` (`EQU_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `USU_USUARIO`, `USU_CONTRASENA`, `USU_ROLL`, `USU_APELLIDO_PATERNO`, `USU_APELLIDO_MATERNO`, `USU_NOMBRE`, `USU_DIRECCION`, `USU_COLONIA`, `USU_CODIGO_POSTAL`, `USU_TELEFONO`, `USU_CELULAR`, `USU_LUGAR_NACIMIENTO`, `USU_FECHA_NAC`, `USU_SEXO`, `EQU_ID_BECARIO`) VALUES
(1, 'paguiar', '1234', '2', 'Aguiar', 'Aguiar', 'Paul', 'Rodrigo Aragon', 'El Zacatal', '23427', '6241259282', '6241259282', 'Cd. Constitucion', '29-06-1995', 'M', 1),
(2, 'omartinez', '1234', 'Empleado', 'Martinez', 'Martinez', 'Oswaldo', 'Rodrigo Aragon', 'El Zacatal', '23427', '6241259282', '6241259282', 'Cd. Constitucion', '29-06-1995', 'M', 1),
(3, 'Aspirante 5', '1111', 'Becario', 'Aspirante 5', 'Aspirante 5', 'Aspirante 5', 'Aspirante 5', 'Aspirante 5', '11111', '1111111111', '1111111111', 'Aspirante 5', '1-1-1990', 'M', 1),
(4, 'Aspirante 2', '1111', 'Becario', 'Aspirante 2', 'Aspirante 2', 'Aspirante 2', 'Aspirante 2', 'Aspirante 2', '11111', '1111111111', '1111111111', 'Aspirante 2', '1-1-1990', 'M', 2),
(5, 'Aspirante 3', '1111', 'Becario', 'Aspirante 3', 'Aspirante 3', 'Aspirante 3', 'Aspirante 3', 'Aspirante 3', '11111', '1111111111', '1111111111', 'Aspirante 23', '1-1-1990', 'M', 3),
(6, 'Aspirante 4', '1111', 'Becario', 'Aspirante 4', 'Aspirante 4', 'Aspirante 4', 'Aspirante 4', 'Aspirante 4', '11111', '1111111111', '1111111111', 'Aspirante 4', '1-1-1990', 'M', 3),
(7, 'Aspirante 1', '1111', 'Becario', 'Aspirante 1', 'Aspirante 1', 'Aspirante 1', 'Aspirante 1', 'Aspirante 1', '11111', '1111111111', '1111111111', 'Aspirante 1', '1-1-1990', 'M', 4),
(8, 'Aspirante 6', '1111', 'Becario', 'Aspirante 6', 'Aspirante 6', 'Aspirante 6', 'Aspirante 6', 'Aspirante 6', '11111', '1111111111', '1111111111', 'Aspirante 6', '1-1-1990', 'M', 4);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_ACTIVIDADES_BECARIO1` FOREIGN KEY (`ACT_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `act_extra`
--
ALTER TABLE `act_extra`
  ADD CONSTRAINT `fk_ACT_EXTRA_ASPIRANTES1` FOREIGN KEY (`EXT_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_ASISTENCIA_BECARIO1` FOREIGN KEY (`ASI_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD CONSTRAINT `fk_ASPIRANTES_table1` FOREIGN KEY (`ASP_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `fk_AUTOS_DATOS_GENERALES1` FOREIGN KEY (`DATOS_GENERALES_ID_GENERALES`) REFERENCES `datos_generales` (`ID_GENERALES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `becario`
--
ALTER TABLE `becario`
  ADD CONSTRAINT `fk_BECARIO_table11` FOREIGN KEY (`BEC_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bitacora_limpieza`
--
ALTER TABLE `bitacora_limpieza`
  ADD CONSTRAINT `fk_BITACORA_LIMPIEZA_EQUIPOS1` FOREIGN KEY (`BIT_ID_EQUIPOS`) REFERENCES `equipos` (`ID_EQUIPOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_CALIFICACIONES_BECARIO1` FOREIGN KEY (`CAL_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control_empleados`
--
ALTER TABLE `control_empleados`
  ADD CONSTRAINT `fk_CONTROL_EMPLEADOS_EMPLEADOS1` FOREIGN KEY (`CON_ID_EMPLEADO`) REFERENCES `empleados` (`ID_EMPLEADO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costos`
--
ALTER TABLE `costos`
  ADD CONSTRAINT `fk_COSTOS_SOLICITUD_FONDOS1` FOREIGN KEY (`SOLICITUD_FONDOS_ID_SOL_FONDOS`) REFERENCES `solicitud_fondos` (`ID_SOL_FONDOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
  ADD CONSTRAINT `fk_DATOS_FAMILIARES_ASPIRANTES1` FOREIGN KEY (`FAM_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD CONSTRAINT `fk_DATOS_GENERALES_ASPIRANTES1` FOREIGN KEY (`GEN_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_EMPLEADOS_table11` FOREIGN KEY (`EMP_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD CONSTRAINT `fk_ESCOLARIDAD_ASPIRANTES1` FOREIGN KEY (`ESC_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_aca`
--
ALTER TABLE `historial_aca`
  ADD CONSTRAINT `fk_HISTORIAL_ACA_BECARIO1` FOREIGN KEY (`HIST_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pro_estudio`
--
ALTER TABLE `pro_estudio`
  ADD CONSTRAINT `fk_PRO_ESTUDIO_ASPIRANTES1` FOREIGN KEY (`PROP_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  ADD CONSTRAINT `fk_RECONOCIMIENTOS_ASPIRANTES1` FOREIGN KEY (`REC_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_fondos`
--
ALTER TABLE `solicitud_fondos`
  ADD CONSTRAINT `fk_SOLICITUD_FONDOS_BECARIO1` FOREIGN KEY (`FON_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicutd_libros`
--
ALTER TABLE `solicutd_libros`
  ADD CONSTRAINT `fk_SOLICUTD_LIBROS_BECARIO1` FOREIGN KEY (`LIB_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
