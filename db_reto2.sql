-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-12-2020 a las 08:09:39
-- Versión del servidor: 5.7.32-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_reto2`
--
CREATE DATABASE IF NOT EXISTS `db_reto2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_reto2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alertas`
--

CREATE TABLE `Alertas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `respuestaid` int(11) DEFAULT NULL,
  `likeid` int(11) DEFAULT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Favoritos`
--

CREATE TABLE `Favoritos` (
  `id` int(11) NOT NULL,
  `preguntaid` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL,
  `respuestaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Likes`
--

CREATE TABLE `Likes` (
  `id` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL,
  `respuestaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `fecha` datetime NOT NULL,
  `tema` varchar(20) DEFAULT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`id`, `titulo`, `descripcion`, `fecha`, `tema`, `usuarioid`) VALUES
(1, 'Validar nombre y apellido PHP', 'Necesito validar 2 campos de mi formulario, $nombre y $apellidos.\r\n\r\nHe estado probando con este código pero no cumple con todas las condiciones que quiero aplicar a la validación, entre ellas los espacios en blanco comunes en nombres y apellidos:\r\n\r\nif (!preg_match(\"/^[a-zA-Z\'-]+$/\",$nombre)) {\r\n    echo \"El nombre tiene caracteres inválidos\";\r\n}', '2020-11-23 09:22:36', '2', 4),
(2, 'Habla de tus virtudes y tus defectos', 'Esta es la típica pregunta de una entrevista, intenta ser natural aunque tengas una respuesta pensada. Habla de tus virtudes vendiendote positivamente, sin llegar a ser extremadamente narcisista. En cuanto a las debilidades intenta siempre demostrar que eres humano pero quieres y puedes mejorar. Es desaconsejable mostrar una posible virtud como defecto, como por ejemplo “no sé cuándo dejar de trabajar” o “soy demasiado ordenador”.', '2020-11-11 16:24:39', '5', 9),
(3, 'Cómo hacer un plan estratégico de recursos humanos', 'Podemos definir el plan estratégico de Recursos Humanos como aquel documento que llevará entre sus páginas la estrategia que se va a seguir por un determinado tiempo en diferentes funciones. Contará con una base general, donde se reflejará la historia de la empresa, objetivos del departamento, misión, visión y valores, etc. También se nutrirá de los planes que se van a llevar a cabo relacionados con la política de personal, como serían los pasos para contratar nuevo personal (y cómo seleccionarlo), para ofrecer cursos tanto a los nuevos trabajadores como a los que ya están en la empresa, para resolver problemas que surjan en la plantilla, etc. ', '2020-11-04 12:15:27', '5', 6),
(4, '¿Cuántas líneas de producto tiene tu empresa?', 'Para determinar la rentabilidad de tus productos sólo tienes que analizar con detenimiento tu cuenta de explotación y calcular el margen de contribución de cada uno de esos productos/líneas de servicio (aprende a hacerlo aquí). Pero para analizar el resto de tu empresa, conviene que dediques tiempo a hacerte una serie de preguntas. Los expertos en gestión de empresa que hemos consultado te proponen éstas:', '2020-11-25 09:43:17', '3', 4),
(5, '¿Qué tipo de mantenimiento tiene nuestras estructuras?', 'Necesitamos saberlo para hoy a las 12:00', '2020-11-02 12:27:43', '4', 8),
(6, '¿Qué producto es el más recomendable para maderas de exterior?', 'Nos ha preguntado un cliente', '2020-11-09 09:20:40', '4', 7),
(7, 'Debemos de replantear las fechas de mantenimiento.', ' medida que aumenta el volumen de transacciones, es posible que la configuración del servidor antiguo ya no sea válida y el software de su servidor se convertirá en un objetivo fácil para los atacantes. Finalmente, tanto los HDD como los SSD eventualmente se degradan, aunque esto sucede durante un largo período de tiempo.', '2020-11-07 08:24:27', '6', 6),
(8, '¿Cuando fue la última copia de seguridad que hicimos del servidor central?', 'No encuentro la ruta de la copia se seguridad, y no está en los registros del sistema. Alguien puede darme algo de información antes de que me de un paro cardiaco?', '2020-11-18 03:16:18', '6', 5),
(9, '¿Python tiene un operador condicional ternario?', 'Si Python no tiene un operador condicional ternario, ¿es posible simular uno usando otras construcciones de lenguaje?', '2020-11-30 13:17:26', '2', 5),
(10, 'DESPIDO', 'Empleado 006 estÃ¡ usted despedido, pÃ¡sese por la oficina 234 para firmar los papeles. Gracias.', '2020-12-01 08:07:59', '5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Respuestas`
--

CREATE TABLE `Respuestas` (
  `id` int(11) NOT NULL,
  `comentario` varchar(3000) NOT NULL,
  `fecha` datetime NOT NULL,
  `preguntaid` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL,
  `replica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`id`, `comentario`, `fecha`, `preguntaid`, `usuarioid`, `replica`) VALUES
(1, 'Creo que lo tengo:\r\n\r\nEl nombre: /^(?=.{3,18}$)[a-zñA-ZÑ](\\s?[a-zñA-ZÑ])*$/\r\n\r\n(?=.{3,18}$)-> te comprueba la longitud, si tiene mas de 3 y menos de 18 caracteres\r\n[a-zñA-ZÑ]-> mira la primera palabra y si cumple la norma de ser solo Alfabetica con ñ incluio\r\n(\\s?[a-zñA-ZÑ])-> en caso de que haya un espacio, le indico que habra otra palabra\r\nEl apellido sera igual, pero indicamos que el máximo son 36 caracteres: ^(?=.{3,36}$)[a-zñA-ZÑ](\\s?[a-zñA-ZÑ])*$.\r\n\r\nClaramente no te hará coincidencia sin hay 3 espacios al principio. Espero que te sirva.', '2020-11-23 12:18:41', 1, 5, NULL),
(2, 'pues yo le encontre un fallo, si pones \"alvaró nuñez\" da okay, pero si pones \"álvaro nuñez\" da error la funcion\r\n\r\ny, por como esta formulado, en mi compu no valida tamaño, los nombres pueden ser \'li\' o \'inserteunejemplodealgunapellidonquetenga38letras\' y lo toma igual\r\n\r\narray_push() expects parameter 1 to be array, null given in C:\\AppServ\\www\\Pagina_DB_copia\\registrar_usuario.php on line ...', '2020-11-24 14:23:43', 1, 6, NULL),
(3, 'Claro que la virtud no se limita a una definición teológica. Desde que en la cosmovisión griega comienza a primar la valoración del hombre es que se concibe también a la virtud como la excelencia y plenitud alcanzable por el hombre.\r\n\r\nSócrates y Platón contribuyeron mucho a la visión griega de la virtud, que sintetizaron con una serie de cuestiones en las que el sujeto interviene más bien cronológicamente: la sabiduría le permite identificar las acciones correctas, el valor le permite realizarlas sin temor a la represalia, y el autocontrol permite tomar noción permanentemente del impacto de lo que se está haciendo.', '2020-11-12 08:21:35', 2, 7, NULL),
(4, 'Todas nuestras estructuras ya llevan el tratamiento adecuado para el exterior, no obstante dependiendo  de\r\nla exposición al sol de la madera dependerá  su mantenimiento variando entre  3 a 5 años.', '2020-11-02 15:43:16', 5, 7, NULL),
(5, 'Los productos recomendados son lasures a poro abierto en tonos satinados.', '2020-11-09 09:29:26', 6, 4, NULL),
(6, 'Proyectos y montajes XANADU hace toda la fabricación, mecanizado y lasurado en sus instalaciones de\r\nArroyomolinos llevando todas sus estructuras  preparadas para su instalación para tardar en mínimo tiempo\r\nen su montaje. El tiempo de montaje puede variar dependiendo de su complejidad  entre  1 a 3 días.', '2020-11-09 13:38:16', 6, 9, NULL),
(7, 'Mínima. Pues toda la estructura va cortada a medida y fijadas al suelo y paredes con resinas especiales de\r\nalto rendimiento', '2020-11-09 14:32:11', 6, 6, 5),
(8, 'Yo he mirado en los directorios centrales y no he encontrado nada.', '2020-11-18 16:22:38', 8, 8, NULL),
(9, 'Le recomendamos que optimice su base de datos cada dos meses, la fragmentación de la base de datos se produce a una tasa de hasta un 5% por mes y con el tiempo la fragmentación afectará realmente al rendimiento. El ajuste de aplicaciones individuales también es importante porque las aplicaciones no optimizadas pueden afectar el rendimiento.', '2020-11-07 09:18:37', 7, 5, NULL),
(10, 'Sin embargo, debido a que los niveles de tráfico pueden variar mucho, puede ser útil limitar el ajuste de la aplicación a una vez cada dos meses para que pueda obtener una buena medida de los niveles de carga de la aplicación.', '2020-11-07 08:30:25', 7, 5, NULL),
(11, 'El viernes pasado Urko y yo realizamos una copia de seguridad, debería de estar en la carpeta raíz.', '2020-11-18 15:34:23', 8, 4, NULL),
(12, 'En la documentación oficial de Python 3.0 a la que se hace referencia en un comentario anterior, esto se conoce como \"conditional_expressions\" y está muy crípticamente definido. Esa documentación ni siquiera incluye el término \"ternario\", por lo que sería difícil encontrarlo a través de Google a menos que supiera exactamente qué buscar. La documentación de la versión 2 es algo más útil e incluye un enlace a \"PEP 308\" , que incluye una gran cantidad de contexto histórico interesante relacionado con esta pregunta.', '2020-11-30 14:44:09', 9, 6, NULL),
(13, '\"ternario\" (que tiene tres entradas) es una propiedad consecuencial de este impulso, no una propiedad definitoria del concepto. Por ejemplo: SQL tiene case [...] { when ... then ...} [ else ... ] endun efecto similar pero no ternario.', '2020-11-30 17:50:32', 9, 9, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(11) NOT NULL,
  `tipousuarios` int(1) DEFAULT NULL,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(40) NOT NULL,
  `apellido2` varchar(40) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `tipousuarios`, `nickname`, `password`, `nombre`, `apellido1`, `apellido2`, `email`, `descripcion`, `edad`, `imagen`) VALUES
(4, NULL, 'naia', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Naia', 'Ibanez de Garayo', 'Lopo', 'naia@aergibide.php', 'Hola me llamo Naia. Y este es mi proyecto.', 19, '../img/default-user-image.png'),
(5, NULL, 'eric', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Eric', 'Martinez', 'Fernandez', 'eric@aergibide.php', 'Hola me llamo Eric, y este es mi proyecto.', 21, '../img/default-user-image.png'),
(6, NULL, 'urko', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Urko ', 'Ruiz de Gordejuela', 'Ochoa de Amezaga', 'urko@aergibide.php', 'Hola me llamo Urko', 24, '../img/default-user-image.png'),
(7, NULL, 'jorge', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Jorge ', 'Montejo', 'Lopez de Torre', 'jorge@aergibide.php', 'Hola me llamo Jorge', 20, '../img/default-user-image.png'),
(8, NULL, 'alejandro', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Alejandro', 'Perez', 'Anuncibay', 'alejandro@aergibide.php', 'Hola me llamo Alejandro', 20, '../img/default-user-image.png'),
(9, NULL, 'juan', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Juan Francisco', 'Da Silva', 'Garcia', 'juan@aergibide.php', 'Hola me llamo Juan', 19, '../img/default-user-image.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alertas`
--
ALTER TABLE `Alertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respuestaid` (`respuestaid`),
  ADD KEY `likeid` (`likeid`),
  ADD KEY `usuarioid` (`usuarioid`);

--
-- Indices de la tabla `Favoritos`
--
ALTER TABLE `Favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntaid` (`preguntaid`),
  ADD KEY `usuarioid` (`usuarioid`);

--
-- Indices de la tabla `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioid` (`usuarioid`),
  ADD KEY `respuestaid` (`respuestaid`);

--
-- Indices de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioid` (`usuarioid`);

--
-- Indices de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntaid` (`preguntaid`),
  ADD KEY `usuarioid` (`usuarioid`),
  ADD KEY `replica` (`replica`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname` (`nickname`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alertas`
--
ALTER TABLE `Alertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Favoritos`
--
ALTER TABLE `Favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Likes`
--
ALTER TABLE `Likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alertas`
--
ALTER TABLE `Alertas`
  ADD CONSTRAINT `Alertas_ibfk_1` FOREIGN KEY (`respuestaid`) REFERENCES `Respuestas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Alertas_ibfk_2` FOREIGN KEY (`likeid`) REFERENCES `Likes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Alertas_ibfk_3` FOREIGN KEY (`usuarioid`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Favoritos`
--
ALTER TABLE `Favoritos`
  ADD CONSTRAINT `Favoritos_ibfk_1` FOREIGN KEY (`preguntaid`) REFERENCES `Preguntas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Favoritos_ibfk_2` FOREIGN KEY (`usuarioid`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Likes`
--
ALTER TABLE `Likes`
  ADD CONSTRAINT `Likes_ibfk_1` FOREIGN KEY (`usuarioid`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Likes_ibfk_2` FOREIGN KEY (`respuestaid`) REFERENCES `Respuestas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Preguntas`
--
ALTER TABLE `Preguntas`
  ADD CONSTRAINT `Preguntas_ibfk_1` FOREIGN KEY (`usuarioid`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  ADD CONSTRAINT `Respuestas_ibfk_1` FOREIGN KEY (`preguntaid`) REFERENCES `Preguntas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Respuestas_ibfk_2` FOREIGN KEY (`usuarioid`) REFERENCES `Usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Respuestas_ibfk_3` FOREIGN KEY (`replica`) REFERENCES `Respuestas` (`id`) ON DELETE CASCADE;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('admin', '[{\"db\":\"db_reto2\",\"table\":\"Preguntas\"},{\"db\":\"db_reto2\",\"table\":\"Respuestas\"},{\"db\":\"db_reto2\",\"table\":\"Usuarios\"},{\"db\":\"db_reto2\",\"table\":\"Alertas\"},{\"db\":\"db_reto2\",\"table\":\"Favoritos\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('admin', '2020-11-30 11:15:11', '{\"lang\":\"es\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
