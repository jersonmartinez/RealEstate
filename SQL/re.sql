-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2016 a las 05:59:16
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `re`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(10) unsigned NOT NULL,
  `content` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `username` varchar(50) NOT NULL,
  `date_log` date NOT NULL,
  `date_log_unix` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin_info`
--

INSERT INTO `admin_info` (`username`, `date_log`, `date_log_unix`, `email`) VALUES
('Side Master', '2016-12-14', '1481687621', 'developer@sidemasters.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id_agent` int(10) unsigned NOT NULL,
  `names` varchar(100) NOT NULL,
  `lastnames` varchar(100) NOT NULL,
  `phone_claro` varchar(12) DEFAULT NULL,
  `phone_movistar` varchar(12) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(500) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `folder` varchar(300) DEFAULT NULL,
  `src` varchar(500) DEFAULT NULL,
  `date_log` datetime NOT NULL,
  `date_log_unix` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`id_agent`, `names`, `lastnames`, `phone_claro`, `phone_movistar`, `email`, `location`, `description`, `folder`, `src`, `date_log`, `date_log_unix`, `username`) VALUES
(1, 'Jerson Antonio', 'Martínez Moreno', '+505 8225244', '', 'jersonmartinezsm@gmail.com', 'El Sauce', 'Entusiasta de la tecnología.', 'users/Side Master/agents/', '7296281.jpg', '2016-12-13 21:59:48', '1481687988', 'Side Master'),
(2, 'Juan Carlos', 'Urbina Quezada', '+505 8294384', '+505 6293384', 'juanca@gmail.com', 'León', 'Es un sobreviviente más a este mundo.', 'users/Side Master/agents/', 'worker.png', '2016-12-13 22:00:55', '1481688055', 'Side Master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answer_message`
--

CREATE TABLE IF NOT EXISTS `answer_message` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `id_msg` int(10) unsigned NOT NULL,
  `date_time_unix` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `answer_message`
--

INSERT INTO `answer_message` (`id`, `username`, `message`, `id_msg`, `date_time_unix`) VALUES
(1, 'Side Master', 'Haciendo una respuesta al Sr. Castañeda, esperando que lleguemos a cierto acuerdo que pronuncie el negocio tan interesante que podemos sostener.', 1, '1481688737');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int(10) unsigned NOT NULL,
  `title` varchar(500) NOT NULL,
  `content_es` mediumtext NOT NULL,
  `content_en` mediumtext,
  `price` varchar(25) NOT NULL,
  `department` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `local_address` varchar(255) NOT NULL,
  `id_agent` int(10) unsigned NOT NULL,
  `business_type` varchar(30) NOT NULL,
  `property_type` varchar(30) NOT NULL,
  `property_state` varchar(30) NOT NULL,
  `bed_room` int(11) NOT NULL,
  `living_room` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `date_log` datetime NOT NULL,
  `date_log_unix` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id_art`, `title`, `content_es`, `content_en`, `price`, `department`, `city`, `local_address`, `id_agent`, `business_type`, `property_type`, `property_state`, `bed_room`, `living_room`, `parking`, `kitchen`, `longitude`, `latitude`, `date_log`, `date_log_unix`, `username`) VALUES
(1, 'Hacienda los Rosales', '<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p><p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p>', '<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p><p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p>', '450000', 'León', 'El Sauce', 'Vulc. 4C. Este, 1/2C. Norte.', 1, 'Venta', 'Casa', 'En proceso', 3, 4, 1, 3, '-86.91167233886722', '12.438617393977118', '2016-12-13 22:01:48', '1481688108', 'Side Master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(10) unsigned NOT NULL,
  `whoami` varchar(500) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fb` varchar(500) DEFAULT NULL,
  `tt` varchar(500) DEFAULT NULL,
  `gp` varchar(500) DEFAULT NULL,
  `li` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact_us`
--

INSERT INTO `contact_us` (`id`, `whoami`, `location`, `email`, `phone`, `fb`, `tt`, `gp`, `li`) VALUES
(1, 'Nicaragua Bienes Raíces', 'Vulc. 4C. Este, 1/2C. Norte.', 'sidemasterdelfuturo@gmail.com', '+505 82252442', 'https://www.facebook.com/perfil', 'https://www.twitter.com/perfil', 'https://www.plus.google.com/perfil', 'https://www.linkedln.com/perfil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `count_visit`
--

CREATE TABLE IF NOT EXISTS `count_visit` (
  `id` int(10) unsigned NOT NULL,
  `ip` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `count_visit`
--

INSERT INTO `count_visit` (`id`, `ip`) VALUES
(1, '192.168.154.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_perfil`
--

CREATE TABLE IF NOT EXISTS `img_perfil` (
  `id` int(10) unsigned NOT NULL,
  `folder` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_perfil`
--

INSERT INTO `img_perfil` (`id`, `folder`, `src`, `created_at`, `username`) VALUES
(1, 'users/Side Master/img_perfil/', 'H6REkl.jpg', '2016-12-13 21:55:24', 'Side Master');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property_type`
--

CREATE TABLE IF NOT EXISTS `property_type` (
  `id` int(10) unsigned NOT NULL,
  `name_type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `property_type`
--

INSERT INTO `property_type` (`id`, `name_type`) VALUES
(1, 'Casa'),
(2, 'Finca'),
(3, 'Hacienda'),
(4, 'Hotel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publish_img`
--

CREATE TABLE IF NOT EXISTS `publish_img` (
  `id_img` int(10) unsigned NOT NULL,
  `folder` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `date_log` datetime NOT NULL,
  `date_log_unix` varchar(50) NOT NULL,
  `id_art` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publish_img`
--

INSERT INTO `publish_img` (`id_img`, `folder`, `src`, `date_log`, `date_log_unix`, `id_art`) VALUES
(1, 'users/Side Master/publish_img/', '1 (1).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(2, 'users/Side Master/publish_img/', '1 (2).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(3, 'users/Side Master/publish_img/', '1 (3).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(4, 'users/Side Master/publish_img/', '1 (4).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(5, 'users/Side Master/publish_img/', '1 (5).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(6, 'users/Side Master/publish_img/', '1 (6).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(7, 'users/Side Master/publish_img/', '1 (7).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(8, 'users/Side Master/publish_img/', '1 (8).jpg', '2016-12-13 22:01:48', '1481688108', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptions`
--

CREATE TABLE IF NOT EXISTS `suscriptions` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_log` date DEFAULT NULL,
  `date_log_unix` varchar(100) DEFAULT NULL,
  `viewed` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sus_message`
--

CREATE TABLE IF NOT EXISTS `sus_message` (
  `id` int(10) unsigned NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `id_art` int(10) unsigned NOT NULL,
  `date_log_unix` varchar(30) NOT NULL,
  `title_art` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sus_message`
--

INSERT INTO `sus_message` (`id`, `fullname`, `email`, `phone`, `message`, `id_art`, `date_log_unix`, `title_art`) VALUES
(1, 'Mario Castañeda', 'marito@gmail.com', '34508348', 'Esta casa me interesa bastante, espero que se pongan en contacto conmigo, necesito saber el negocio que podemos hacer con esta preciosura.\r\n\r\n¡Saludos!.', 1, '1481688678', 'Hacienda los Rosales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_img`
--

CREATE TABLE IF NOT EXISTS `tmp_img` (
  `id` int(10) unsigned NOT NULL,
  `folder` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tmp_img`
--

INSERT INTO `tmp_img` (`id`, `folder`, `src`, `created_at`) VALUES
(1, 'users/Side Master/publish_img/', '1 (25).jpg', '2016-12-13 22:57:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`) VALUES
('Side Master', '$2y$10$MhrTsUB8WwmpMkDxoC3sSeMAv1LsJ70t4nmlCmjLa.W0ta4o0I1Zq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id_agent`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `answer_message`
--
ALTER TABLE `answer_message`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `count_visit`
--
ALTER TABLE `count_visit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`);

--
-- Indices de la tabla `img_perfil`
--
ALTER TABLE `img_perfil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `src` (`src`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publish_img`
--
ALTER TABLE `publish_img`
  ADD PRIMARY KEY (`id_img`),
  ADD UNIQUE KEY `src` (`src`),
  ADD KEY `id_art` (`id_art`);

--
-- Indices de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sus_message`
--
ALTER TABLE `sus_message`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tmp_img`
--
ALTER TABLE `tmp_img`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `src` (`src`);

--
-- Indices de la tabla `user_admin`
--
ALTER TABLE `user_admin`
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agents`
--
ALTER TABLE `agents`
  MODIFY `id_agent` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `answer_message`
--
ALTER TABLE `answer_message`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `count_visit`
--
ALTER TABLE `count_visit`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `img_perfil`
--
ALTER TABLE `img_perfil`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `property_type`
--
ALTER TABLE `property_type`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publish_img`
--
ALTER TABLE `publish_img`
  MODIFY `id_img` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sus_message`
--
ALTER TABLE `sus_message`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tmp_img`
--
ALTER TABLE `tmp_img`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin_info` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`username`) REFERENCES `admin_info` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `img_perfil`
--
ALTER TABLE `img_perfil`
  ADD CONSTRAINT `img_perfil_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin_info` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publish_img`
--
ALTER TABLE `publish_img`
  ADD CONSTRAINT `publish_img_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `user_admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin_info` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
