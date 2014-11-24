-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2012 a las 18:58:23
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `invipasto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `passwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociaciones`
--

CREATE TABLE IF NOT EXISTS `asociaciones` (
  `id` int(11) NOT NULL,
  `num` varchar(5) NOT NULL,
  `asociacion` varchar(60) NOT NULL,
  `representante` varchar(60) NOT NULL,
  `direccion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asociaciones`
--

INSERT INTO `asociaciones` (`id`, `num`, `asociacion`, `representante`, `direccion`) VALUES
(1, '1.10', 'ANA ROSA', 'ANA MARIA PABON', 'MNZ C CASA 15 VILLA NUEVA\r'),
(2, '1.2', 'ASONACOL', 'MARCOS HUMBERTO BASTIDAS', 'MNZ C CASA 10  RINCON DE PASTO /7216479-3168589034\r'),
(3, '2.2', 'BRISAS DE LOS ANDES', 'JULIA ESTELA RUANO', 'MNZ G CASA 48 ALTOS DE CHAPALITO\r'),
(4, '2.1', 'BRISAS DEL MAR', 'LAUREANO ARCOS', 'CALLE 20 A No 1 E 10 LAS MERCEDES/3168925497-3172215567\r'),
(5, '2.30', 'BUENOS AIRES', 'LIDIA ELVIA CUASPUD', 'MNZ 20 CASA 5 SAN ALBANO/\r'),
(6, '3.3', 'CIUDAD 2000', 'MARCIAL ANDRADE', 'CRA 7 ESTE CALLE 2 SUR LOS CRISTALES\r'),
(7, '3.5', 'COOPFUTURO LTDA', 'PAULINA ARCOS', 'CALLE 22 E No 4 SUR 03 MIJITAYO II-7335353/3147424951/ mnz 2 casa 6 b agualongo \r'),
(8, '3.6', 'CORDOBA', 'CARLOS JAVIER BOTINA', 'CRA 39 A No 16 B 09 SANTA ANA 7206688\r'),
(9, '3.10', 'CARLOS PIZARRO-LAS ORQUIDEAS', 'MERCEDES MONTILLA ', 'MNZ D CASA 2 B. EL PROVENIR 7322757\r'),
(10, '3.20', 'CHAPINERO', 'FELIX REVELO', 'CRA 4E NO 21C-21 MERCEDARIO\r'),
(11, '4.20', 'DOCE DE OCTUBRE', 'BERTHA ROSERO', 'CRA 1B No 16 62/3154209766\r'),
(12, '', 'DIVINA PASTORA', 'JORGE CUARAN', 'CRA 7E DIAG 16 No 16-27MIRAFLORES 7303057\r'),
(13, '5.2', 'EL COMUN', 'MARIA FIGUEROA', 'CALLE 23 No 24-24 B LOS DOS PUENTES  3176240122/7210817\r'),
(14, '5.4', 'EL POBLADO', 'JUAN C ZAMBRANO', 'CRA 2A No 19 51 BETANIA/3153737951-3108274096\r'),
(15, '5.6', 'EL ROSARIO', 'AMANDA JOSA', 'CALLE 17 No 9-57 B. FATIMA  7204423/3155400625\r'),
(16, '5.5', 'EL ROBLE', 'MAGALY MORALES', 'CRA 36 No 4 62 ANGANOY\r'),
(17, '', 'EL FUTURO', 'JAIME MARTINEZ/OLGA L GUERRERO', 'CALLE 27 No 23- 85/7208146\r'),
(18, '5.10', 'EDIFICIO LAS BANDERAS', 'FAVIO RODRIGUEZ ROSERO', 'CALLE 23 No 20-80 SIMANA 7210656\r'),
(19, '13.5', 'FUNDACION PROGRESAR-', 'JAVIER DE LA ROSA GUZMAN', 'CALLE 20 No 28-61 2 PISO 7223775/78\r'),
(20, '6.1', 'FE Y ESPERANZA', 'ROSALBA TABLA', 'CRA 36 No 4 73ANGANOY\r'),
(21, '7.4', 'GIRASOLES', 'MACARIO RECALDE HERNANDEZ', 'MNZ 4 CASA 46 QUILLASINGA/7331050-7296266-3137008007\r'),
(22, '7.2', 'GUADALUPE', 'LUIS ALFREDO LOPEZ', 'MNL CASA 30 GRANADA 4\r'),
(23, '7.3', 'GONBRANTH', 'MARIA ALEJANDRA GONZALES ', 'CRA 21 No 12 47 LAS AMERICAS\r'),
(24, '8.1', 'HABITAR', 'JUAN CARLOS ESCALON', 'CALLE 17 BIS  23 31 7290053-7330372\r'),
(25, '9.3', 'JESUS DE NAZARETH', 'JAVIER BUCHELY', 'CRA 17 NO 5 31 CAICEDO ALTO\r'),
(26, '9.1', 'JARDINES DEL SOL', 'JOSE BUCHELY', 'MNZ 15 CASA 6 LA ESMERALDA 7309572\r'),
(27, '9.2', 'JAZMINES DEL NORTE', 'ALBERTO GUZMAN', 'CALLE 21 F No 11 ESTE 10 BARRIO  CAICEDONIA/3128568248-3137093244\r'),
(28, '', 'JUAN PABLO II ', 'CLARA INES PORTILLA', 'CRA 19 No 1 ESTE SANTA BARBARA \r'),
(29, '', 'LAS CABAÑAS', 'JOSE MISAEL CORDOBA', 'Calle 15 No 4-60. Catarana. T 7324054\r'),
(30, '10.30', 'LA MERCED PASTO', 'JOSE IGNACIO CITELLI L', 'CRA 22 No 17-37-7238830\r'),
(31, '10.90', 'LOS PINOS', 'JAIRO ENRIQUE ZUÑIGA', 'CRA 22 No 17-27 ED ORIENT OF 513/7227182-7225115\r'),
(32, '10.60', 'LOS GUADUALES', 'CARMEN A GARCES MAYA', 'CRA 10 No 5-53 B. GRANADA II E/7216479-3122210249\r'),
(33, '10.5', 'LOS CRISTALES ', 'ROSA ELVIRA MUÑOZ', 'CALLE 16 23 34/7213090-3016768766-3173768667\r'),
(34, '', 'LUZ DE ORIENTE', 'OSWALDO JOJOA', 'Cra 5E No 21D-04 B. Mercedario. T 7305135\r'),
(35, '10.8', 'LOS LIRIOS', 'JOSE INSUASTY', 'MNZ 52 CS 24 TAMASAGRA\r'),
(36, '10.2', 'LA GAITANA', 'ALVARO F CAICEDO', 'MNZ 7 CASA 5 B ARNULFO GUERRERO \r'),
(37, '10.1', 'LA FORTALEZA DE LOS VULNERABLES', 'MANUEL HERNANDO TORRES LOPEZ', 'MNZ 1 CASA 1 B STA MONICA \r'),
(38, '10.4', 'LINA MARIA', 'ALICIA BURGOS DE BUCHELY', 'MNZ 17 CASA 11 CZ DE JESUS \r'),
(39, '11.2', 'MANUELA BELTRAN', 'YOLANDA  HUERTAS', 'CALLE 18 No 36 A 24\r'),
(40, '', 'MARSELLA', 'HECTOR BURBANO', 'CRA 7 No 14-80 SAN MARTIN/CRA 9 No 15 A 10          3006511685\r'),
(41, '11.1', 'MADRES SIN FRONTERAS', 'RAUL ALEJANDRO MATABAJOY', 'DIAGONAL 16 A 47 31 B FIGUEROA\r'),
(42, '11.3', 'MARIA AURORA', 'JOSE FERNANDO CUASPA', 'CRA 6 B No 18 B 33 SENDOYA \r'),
(43, '11.40', 'MUNICIPIO DE PASTO', 'ANA RUTH GONZALES V', 'CARRERA 32 No 14-38 \r'),
(44, '12.1', 'NATALIA ROMERO', 'ADRIANA RINCON', 'CRA 23 No  20 75 3186066428\r'),
(45, '12.2', 'NIÑO JESUS DEL 20 DE JULIO', 'VICENTE CASANOVA', 'CARRERA 8  No 15 A 10 EL PROGRESO 3122404918\r'),
(46, '12.3', 'NUESTRA SEÑORA DE GUADALUPE DE SAN JUAN DE PASTO', 'MIGUEL I MUÑOZ C', 'CRA 43 No 18 A 75 PANDIACO\r'),
(47, '12.4', 'NUESTROS SUEÑOS', 'MARIA PASTORA LASSO', 'PASAJE CIAL LA MERCED L 106  3117345274-3207009282\r'),
(48, '12.5', 'NUEVO REVIVIR', 'ANTONY GOMER ROSERO', 'MANZANA C CASA 3 B VILLA VICTORIA\r'),
(49, '12.60', 'NUEVO AMANECER', 'ROSA E SANTACRUZ', 'CRA 43 No 18A-75-7312810\r'),
(50, '13.1', 'PAN PA TODOS', 'DIEGO ANDRES MENESES', 'MNZ H CASA 15 B EXEQUIEL MORENO 3136698202\r'),
(51, '13.2', 'PATIO BONITO', 'MARY LILIANA ZARAMA', 'CALLE 19 A No 2E 26 BETANIA\r'),
(52, '13.3', 'PLAN DE VIDA', 'JOSE MIGUEL PINCHAO', 'CALLE 22 B No 29 95 LIBERTAD\r'),
(53, '13.4', 'PRADERAS DEL NORTE', 'CARMEN E OSEJO', 'MZ 5  CASA 2 VILLAFLOR II 7327085\r'),
(54, '14.1', 'RENACER/ ANTES VILLA DEL LAGO ', 'BETULIA ERMINDA BENAVIDES', 'MNZ A CASA 21 BARRIO VILLA ALEJANDRIA\r'),
(55, '', 'RINCON CAMPESTRE ', 'GEOVANY LOPEZ ', 'MNZ 4 CASA 9 B JERUSALEN/3166138969\r'),
(56, '14.20', 'RINCON DE PASTO II', 'MARIA ANGELINA MENESES', 'CARRERA 18 No 16 27 B AIRE LIBRE 3128329830\r'),
(57, '15.1', 'SALOMIA', 'EDGAR A BENAVIDES ', 'DIAGONAL 16 D CASA 2 VILLA OLIMPICA/7365996/3153150968\r'),
(58, '15.4', 'SAN LUIS ', 'FABIO ALBEIRO VALLEJO', 'CALLE 27 No 38 35 LA FLORESTA  7203030\r'),
(59, '15.8', 'SANTA MARTA', 'PEDRO ANTONIO INSUASTY', 'CS 72 A SAN MIGUEL DE JONGOVITO\r'),
(60, '15.9', 'SANTA MARTICA', 'RAMIRO LOPEZ', 'CRA 22 C No 4  48  MIJITAYO BAJO  3174040810\r'),
(61, '15.50', 'SAN MATEO II ', 'BERTHA CUASPA', 'MANZ G CASA 35 STA MONICA  7302282-\r'),
(62, '15.70', 'SANTA ANITA', 'GERMAN VITERY', 'MNZ  S CASA 2 SANTA ANITA 3186291143-3152891113\r'),
(63, '15.10', 'SAUCES LA CAROLINA', 'JAIRO ENRIQUE ZUÑIGA', 'CRA 22 N o 17 -  27 EDIFICIO ORIENT 7227182\r'),
(64, '15.11', 'SEMILLAS DE ESPERANZA', 'OMAR LIBARDO DIAZ', 'MNZ 19 CASA 7 SAN ALBANO 7204052-3168925457\r'),
(65, '15.16', 'SUEÑOS PARA UN FUTURO', 'MARIELA CALVACHE ', 'MNZ 1 CASA 32 PANORAMICO 1 3164418905-7293888\r'),
(66, '15.2', 'SAN FRANCISCO', 'LUZ MARINA GUERRERO', 'CRA 6 E No 21 D 15 MERCEDARIO\r'),
(67, '15.12', 'SEÑOR DEL GRAN PODER IV ETAPA', 'FELIX MARIA LOPEZ/PIEDAD ARGOTE', 'MNZ D CS 21 QUITO LOPEZ 2 ETAPA 3155258375\r'),
(68, '15.13', 'SIETE DE AGOSTO', 'ANTONIO ROSERO', 'MNZ L CASA 4 SIETE DE AGSOTO3158382325\r'),
(69, '15.14', 'SIMANA', 'MARIA ELENA MARTINEZ TONGUINO', 'MNZ O CASA 1 B BELEN /7303305\r'),
(70, '15.15', 'SIMON BOLIVAR', 'JESUS ANIBAL PAREDES ROMO', 'MNZ N CASA 8 SIMON BOLIVAR\r'),
(71, '16.5', 'TRECE DE MAYO', 'EDUARDO VILLARREAL', 'CARRERA 12 No 20 C 20 BARRIO EL RECUERDO 3178315433\r'),
(72, '16.3', 'TIERRA NUEVA', 'ROSA ELVIA PINCHAO', 'CRA 14 B No 5-12 CAICEDO /3218405391\r'),
(73, '16.20', 'TERRAZAS DEL NORTE', 'ANGEL LEONEL GARCIA PAREDES', 'CRA 22 E  No  7-03\r'),
(74, '16.40', 'TORRELADERA', 'PEDRO ANTONIO ORDOÑEZ', 'CRA 3 NO 21 B 43 SANTA BARBARA\r'),
(75, '16.10', 'TEQUENDAMA', 'BLANCA FLOR ESCOBAR', 'CALLE 6 A No 12-10 B GRANADA I ETAPA  7219979\r'),
(76, '17.3', 'VILLA LOS ANGELES', 'HAROLD RAFAEL BENAVIDES', 'MNZ H CASA 4 VILLA LAS LAJAS/3103936500-3154127789\r'),
(77, '17.5', 'VILLA PAZ', 'MARISOL DEL PILAR VILLOTA', 'MNZ M CASA 14 PANORAMICO II\r'),
(78, '17.8', 'VILLA TAXI', 'JOSE ARTURO ZAMBRANO', 'CRA 22E No 8-73\r'),
(79, '17.12', 'VILLA DEL LAGO', 'JORGE H ESPAÑA', 'CALLE 12 B No 3-24 B El Pilar T. 7201094 7/MNZ D CASA 12 NIZA 1 \r'),
(80, '17.1', 'VILLA DEL LOTERO', 'AMANDA LUCIA SEPULVEDA', 'MNZ F CS 14 RINCON DE PASTO\r'),
(81, '', 'VILLA DE ATRIZ', 'LILIANA CHECA', 'CARRERA 1 B No 23-47 LA CAROLINA 7320298-7305413\r'),
(82, '17.11', 'VIVIENDA DIGNA', 'FLORENTINO BASTIDAS', 'CALLE 19A No 1C -20 B. EL TEJAR\r'),
(83, '17.9', 'VILLAS DE VERACRUZ', 'KAREN BASTIDAS JIMENES', 'CRA 33 A No 7 23 SAN VICENTE\r'),
(84, '17.20', 'VILLA ESPERANZA', 'AURA NELCY PEREZ ', 'MNZ A CASA 15 VILLA DEL SOL II ETAPA/7206732-3152829846\r'),
(85, '17.40', 'VILLA LOS SAUCES', 'NELBA RUTH JOJOA JURADO', 'MNZ 6 CASA 7 LAS BRISAS\r'),
(86, '17.60', 'VILLA ROCIO', 'CARMEN ALICIA TELLO', 'CALLE 17 No 5 E -24 LORENZO\r'),
(87, '', 'MANOS A LA OBRA CATAMBUCO', 'HECTOR PABLO DELGADO', 'CALLE 6 No 3 64 SAN MARTIN CATAMBUCO/3117922238-3128772956\r'),
(88, '', 'VENDEDORES AMBULANTES NUEVO FUTURO', 'CLAUDIO HERNAN BERMUDEZ', 'CRA 11 No 19-25-3167167383\r'),
(89, '', 'URBANISTICA NTRA SEÑORA DEL PILAR', 'LUIS EDUARDO CABRERA', 'MNZ 8 CASA 9 ALTOS DE CHAPALITO\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constructoras`
--

CREATE TABLE IF NOT EXISTS `constructoras` (
  `id` int(11) NOT NULL,
  `num` varchar(4) NOT NULL,
  `constructora` varchar(60) NOT NULL,
  `representante` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `constructoras`
--

INSERT INTO `constructoras` (`id`, `num`, `constructora`, `representante`) VALUES
(0, '', 'ZUMA CONSTRUCTORA SAS', 'FANNY PATRICIA ZAMBRANO ORTEGA\r'),
(2, '1.1', 'AMERICANA DE CONSTRUCCIONES EU', 'ORLANDO G BENAVIDES \r'),
(3, '1.2', 'ANDRESOLGAR SAS', 'CARLOS AURELIO SOLARTE CHAMORRO\r'),
(4, '1.3', 'ANDRES  SANTACRUZ DE LA ROSA ', 'ANDRES  SANTACRUZ DE LA ROSA \r'),
(5, '', 'ANGEL SALAS Y SIGIFREDO BEDOYA ', 'ANGEL SALAS\r'),
(6, '1.4', 'APROINCO LTDA', 'MARCO  ANTONIO  ZULUAGA\r'),
(7, '2.1', 'BACC LTDA', 'EDITH MARIA CORDOBA VITERI\r'),
(8, '16.1', 'BALCONES DE ROSALES UT', 'MARIO FERNANDO VILLOTA BERNAL\r'),
(9, '', 'CALVACHE CERON EDGAR ORLANDO', 'CALVACHE CERON EDGAR ORLANDO\r'),
(10, '', 'CARLOS SERRANO WAGNER', 'CARLOS SERRANO WAGNER\r'),
(11, '3.1', 'C.A.B.', 'CARLOS BUCHELY\r'),
(12, '3.2', 'CADENA BRAVO LUIS EDUARDO', 'CADENA BRAVO LUIS EDUARDO\r'),
(13, '3.8', 'CASA LINDA LTDA', 'MIGUEL ANGEL GARCIA LOPEZ\r'),
(14, '3.4', 'CODIDELCA LTDA', 'RAUL DIAZ DEL CASTILLO GUERRERO\r'),
(15, '3.5', 'CONCORDIA CONSTRUCTORES LTDA ', 'JAIRO PAZ SUAREZ \r'),
(16, '3.6', 'CONFUTURO LTDA ', 'A HORACIO CAMPAÑA \r'),
(17, '3.2', 'CONSTRUSERVICIOS', 'EDILBERTO CAMARGO RODRIGUEZ \r'),
(18, '3.2', 'COOPERATIVA POPULAR NARIÑENSE', 'SONIA DEL CARMEN LUNA GUERRERO\r'),
(19, '', 'CSS CONSTRUCTORES S.A', 'CARLOS ALBERTO SOLARTE SOLARTE\r'),
(20, '3.1', 'DAVINCI', 'EDGAR LEONARDO DELGADO BOLAÑOS\r'),
(21, '3.1', 'DE OCCIDENTE LTDA', 'JAVIER VICUÑA VILLOTA\r'),
(22, '3.1', ' DELCO SAS', 'CARLOS DELGADO MAYA\r'),
(23, '', 'D''COP LTDA', 'NESTOR  CORDOBA VITERY\r'),
(24, '', 'DULCE FIGUEROA GERARDO', 'DULCE FIGUEROA GERARDO\r'),
(25, '4.2', 'D O S LTDA', 'JUAN CARLOS CUELLAR AREVALO\r'),
(26, '', 'ECOAMAZONIA', 'EDGAR GERARDO ROSERO PEREZ\r'),
(27, '3.1', 'ECODICON LTDA', 'DIEGO ERNESTO GUERRA BURBANO\r'),
(28, '', 'EDIFICACIONES BOREAL', 'LUIS EDUARDO CORTES GOMESJURADO\r'),
(29, '5.4', 'EDMUNDO ENRIQUEZ BUCHELI', 'EDMUNDO ENRIQUEZ B\r'),
(30, '', 'EL ROBLE UT ', 'LUZ ANGELA BOTINA ORTIZ\r'),
(31, '', 'ENRIQUEZ ASOCIADOS ', 'EDMUNDO ENRIQUEZ B\r'),
(32, '6.1', 'FAINCO LTDA', 'HERNAN  FAJARDO BOLAÑOS\r'),
(33, '3.1', 'GMV DE PASTO  LTDA', 'EDGAR G VELA HUERTAS\r'),
(34, '3.2', 'GY M LTDA', 'JOSE FRANCISCO MADROÑERO CAICEDO\r'),
(35, '', 'GUERRA BURBANO DIEGO ERNESTO', 'GUERRA BURBANO DIEGO ERNESTO\r'),
(36, '', 'GC  INGENIEROS ', 'FERNANDO GUIDO JUAN CASTAÑEDA PINASACO\r'),
(37, '', 'GR CONSTRUCCIONES LTDA', 'GERMAN EDUARDO ROSERO MONCAYO\r'),
(38, '8.1', 'H.C.G CONSTRUCCIONES LTDA', 'JORGE E CASTILLO G\r'),
(39, '8.2', 'HR INVERSIONES LTDA', 'LUIS H HIDALGO SANTACRUZ\r'),
(40, '3.2', ' HERALD UT CONSTRUCCIONES', 'HERMES ALBERTO DIAZ RODRIGUEZ\r'),
(41, '', 'INGENIERIA URBANA ', 'CARLOS ANDRES PANTOJA AGREDA\r'),
(42, '9.3', 'INVEROBRAS                                ', 'JUAN CARLOS CUELLAR AREVALO\r'),
(43, '9.4', 'INVERSIONES DE NARIÑO S.A.S', 'MARIA FERNANDA AVILA VELEZ\r'),
(44, '9.5', 'INVERSIONES NUEVA ERA LTDA', 'DARIO GOMEZ HOYOS\r'),
(45, '', 'INVERSIONES PANDIACO LTDA-INPA LTDA', 'ALVARO TORO VILLOTA\r'),
(46, '', 'JESUS IGNACIO TROYA MOSQUERA', 'JESUS IGNACIO TROYA MOSQUERA\r'),
(47, '', 'JOSE AGUSTIN ZAMUDIO CHAMORRO', 'JOSE AGUSTIN ZAMUDIO CHAMORRO\r'),
(48, '9.1', 'JUDITH AMPARO MARTINEZ BURBANO', 'JUDIHT AMPARO MARTINEZ BURBANO\r'),
(49, '', 'LOS ALCAZARES LTDA ', 'HERNAN OSEJO MERA\r'),
(50, '1.5', ' MATTISSE S.A.S', 'ARMANDO PATIÑO MORA\r'),
(51, '', 'MAURICIO FERNANDO MONTENEGRO RAMOS ', 'MAURICIO FERNANDO MONTENEGRO RAMOS \r'),
(52, '3.7', 'MIGUEL ORTEGA CONSTRUCCIONES', 'MIGUEL EDUARDO ORTEGA MEZA\r'),
(53, '', 'MONTENEGRO Y ACOSTA CONSTRUCTORES LTDA', 'CARLOS HECTOR ACOSTA FIGUEROA\r'),
(54, '3.2', 'MORASURCO SAS', 'MIGUEL ANGEL GARCIA LOPEZ\r'),
(55, '12.2', 'NUEVO HORIZONTE LTDA', 'VICTOR RIVAS\r'),
(56, '', 'NORCO S.A', 'DANIEL CACERES VILLOTA\r'),
(57, '', 'OSEJO LUNA LTDA', 'HERNAN OSEJO MERA\r'),
(58, '', 'OSCAR FRANCISCO PUCHANA BETANCOURTH', '\r'),
(59, '', 'PROYECTOS E INVERSIONES LTDA', 'ALVARO SANTANDER PALACIOS\r'),
(60, '', 'ROSERO ORTIZ  EDMUNDO', 'ROSERO ORTIZ  EDMUNDO\r'),
(61, '3.2', ' RUMIPAMBA', 'JOSE MAURICIO CONTO \r'),
(62, '', 'SANTA ISABEL CONSTRUCCIONES SAS', 'ANDREA ZAMBRANO ESPINOSA\r'),
(63, '', 'SENERCO LTDA', 'GERMAN A GUERRERO DIAZ\r'),
(64, '', 'SIGLA LTDA ', 'LUIS EDUARDO OBANDO RIASCOS \r'),
(65, '', 'TALLER SEIS LTDA', 'EDGAR GUILLERMO CORAL AREVALO\r'),
(66, '15.2', 'TAYKA COLOMBIA LTDA', 'FABIAN MARCELO SILVA VALBUENA\r'),
(67, '', 'TARAPUEZ OCTAVIO', 'TARAPUEZ OCTAVIO\r'),
(68, '15.3', 'TRUJILLO SERRANO LTDA', 'GUILLERMO TRUJILLO\r'),
(69, '', 'VICTORIA ADMINISTRADORES LTDA ', 'MARIO VICENTE VITERI MARTINEZ\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `id` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nit` varchar(15) NOT NULL,
  `nom_ac` text NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `nombre`, `cedula`, `nit`, `nom_ac`, `direccion`, `email`, `estado`) VALUES
('0001', 'Ed', '10345', '3445', 'sfsdfds', 'ertrtert', 'qwer', 'EN ESTUDIO'),
('0002', 'sdfsd', '7452758', 'fdsf', 'fdsf', 'dfsd', 'fsd', 'EN ESTUDIO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
