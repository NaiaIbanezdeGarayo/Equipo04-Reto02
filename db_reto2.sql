-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-11-2020 a las 08:38:04
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
  `fecha` date NOT NULL,
  `tema` varchar(20) DEFAULT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`id`, `titulo`, `descripcion`, `fecha`, `tema`, `usuarioid`) VALUES
(1, 'Validar nombre y apellido PHP', 'Necesito validar 2 campos de mi formulario, $nombre y $apellidos.\r\n\r\nHe estado probando con este código pero no cumple con todas las condiciones que quiero aplicar a la validación, entre ellas los espacios en blanco comunes en nombres y apellidos:\r\n\r\nif (!preg_match(\"/^[a-zA-Z\'-]+$/\",$nombre)) {\r\n    echo \"El nombre tiene caracteres inválidos\";\r\n}', '2020-11-28', 'Programacion', 4),
(2, 'Habla de tus virtudes y tus defectos', 'Esta es la típica pregunta de una entrevista, intenta ser natural aunque tengas una respuesta pensada. Habla de tus virtudes vendiendote positivamente, sin llegar a ser extremadamente narcisista. En cuanto a las debilidades intenta siempre demostrar que eres humano pero quieres y puedes mejorar. Es desaconsejable mostrar una posible virtud como defecto, como por ejemplo “no sé cuándo dejar de trabajar” o “soy demasiado ordenador”.', '2020-11-28', 'Recursos humanos', 9),
(3, 'Cómo hacer un plan estratégico de recursos humanos', 'Podemos definir el plan estratégico de Recursos Humanos como aquel documento que llevará entre sus páginas la estrategia que se va a seguir por un determinado tiempo en diferentes funciones. Contará con una base general, donde se reflejará la historia de la empresa, objetivos del departamento, misión, visión y valores, etc. También se nutrirá de los planes que se van a llevar a cabo relacionados con la política de personal, como serían los pasos para contratar nuevo personal (y cómo seleccionarlo), para ofrecer cursos tanto a los nuevos trabajadores como a los que ya están en la empresa, para resolver problemas que surjan en la plantilla, etc. ', '2020-11-28', 'Recursos humanos', 6),
(4, '¿Cuántas líneas de producto tiene tu empresa?', 'Para determinar la rentabilidad de tus productos sólo tienes que analizar con detenimiento tu cuenta de explotación y calcular el margen de contribución de cada uno de esos productos/líneas de servicio (aprende a hacerlo aquí). Pero para analizar el resto de tu empresa, conviene que dediques tiempo a hacerte una serie de preguntas. Los expertos en gestión de empresa que hemos consultado te proponen éstas:', '2020-11-28', 'Produccion', 4),
(5, '¿Qué tipo de mantenimiento tiene nuestras estructuras?', 'Necesitamos saberlo para hoy a las 12:00', '2020-11-28', 'Montaje', 8),
(6, '¿Qué producto es el más recomendable para maderas de exterior?', 'Nos ha preguntado un cliente', '2020-11-28', 'Montaje', 7),
(7, 'Necesitamos saber tu más sincera opinión', 'Tu mayor obstáculo', '2020-11-28', 'Mantenimiento', 6),
(8, 'Necesitamos saber tu más sincera opinión al respecto', 'Tu mayor anhelo', '2020-11-28', 'Mantenimiento', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Respuestas`
--

CREATE TABLE `Respuestas` (
  `id` int(11) NOT NULL,
  `comentario` varchar(3000) NOT NULL,
  `fecha` date NOT NULL,
  `preguntaid` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL,
  `replica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Respuestas`
--

INSERT INTO `Respuestas` (`id`, `comentario`, `fecha`, `preguntaid`, `usuarioid`, `replica`) VALUES
(1, 'Creo que lo tengo:\r\n\r\nEl nombre: /^(?=.{3,18}$)[a-zñA-ZÑ](\\s?[a-zñA-ZÑ])*$/\r\n\r\n(?=.{3,18}$)-> te comprueba la longitud, si tiene mas de 3 y menos de 18 caracteres\r\n[a-zñA-ZÑ]-> mira la primera palabra y si cumple la norma de ser solo Alfabetica con ñ incluio\r\n(\\s?[a-zñA-ZÑ])-> en caso de que haya un espacio, le indico que habra otra palabra\r\nEl apellido sera igual, pero indicamos que el máximo son 36 caracteres: ^(?=.{3,36}$)[a-zñA-ZÑ](\\s?[a-zñA-ZÑ])*$.\r\n\r\nClaramente no te hará coincidencia sin hay 3 espacios al principio. Espero que te sirva.', '2020-11-28', 1, 5, NULL),
(2, 'pues yo le encontre un fallo, si pones \"alvaró nuñez\" da okay, pero si pones \"álvaro nuñez\" da error la funcion\r\n\r\ny, por como esta formulado, en mi compu no valida tamaño, los nombres pueden ser \'li\' o \'inserteunejemplodealgunapellidonquetenga38letras\' y lo toma igual\r\n\r\narray_push() expects parameter 1 to be array, null given in C:\\AppServ\\www\\Pagina_DB_copia\\registrar_usuario.php on line ...', '2020-11-28', 1, 6, NULL),
(3, 'Claro que la virtud no se limita a una definición teológica. Desde que en la cosmovisión griega comienza a primar la valoración del hombre es que se concibe también a la virtud como la excelencia y plenitud alcanzable por el hombre.\r\n\r\nSócrates y Platón contribuyeron mucho a la visión griega de la virtud, que sintetizaron con una serie de cuestiones en las que el sujeto interviene más bien cronológicamente: la sabiduría le permite identificar las acciones correctas, el valor le permite realizarlas sin temor a la represalia, y el autocontrol permite tomar noción permanentemente del impacto de lo que se está haciendo.', '2020-11-28', 2, 7, NULL),
(4, 'Todas nuestras estructuras ya llevan el tratamiento adecuado para el exterior, no obstante dependiendo  de\r\nla exposición al sol de la madera dependerá  su mantenimiento variando entre  3 a 5 años.', '2020-11-28', 5, 7, NULL),
(5, 'Los productos recomendados son lasures a poro abierto en tonos satinados.', '2020-11-28', 6, 4, NULL),
(6, 'Proyectos y montajes XANADU hace toda la fabricación, mecanizado y lasurado en sus instalaciones de\r\nArroyomolinos llevando todas sus estructuras  preparadas para su instalación para tardar en mínimo tiempo\r\nen su montaje. El tiempo de montaje puede variar dependiendo de su complejidad  entre  1 a 3 días.', '2020-11-28', 6, 9, NULL),
(7, 'Mínima. Pues toda la estructura va cortada a medida y fijadas al suelo y paredes con resinas especiales de\r\nalto rendimiento', '2020-11-28', 6, 6, 5),
(8, 'Cuando hablamos de anhelo, nos referimos a algo que deseas, y que no te importa si debes esforzarte para conseguirlo.', '2020-11-28', 8, 8, NULL),
(9, 'No se trata de pedir deseos a estrellas fugaces y esperar a que lleguen solos, sino que dedicas el esfuerzo necesario para alcanzar esa meta.', '2020-11-28', 7, 5, NULL),
(10, 'A veces queremos algo, y nos cuesta mucho conseguirlo porque no estamos en el lugar o el momento adecuado.', '2020-11-28', 7, 5, NULL),
(11, 'Si somos plenamente conscientes, puede que en algún momento la situación cambie y nos surja la oportunidad de avanzar.\r\n\r\nAl estar preparados, sabremos identificar esa oportunidad y no la dejaremos pasar.\r\n\r\nCuéntanos cuál es tu mayor anhelo en lo referente a tu profesión.', '2020-11-28', 8, 4, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `Respuestas`
--
ALTER TABLE `Respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
