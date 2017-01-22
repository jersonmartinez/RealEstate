-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2016 a las 22:17:50
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
('Pedro Belly', '2016-12-16', '1481906835', 'pedrodelsocorro@gmail.com'),
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `answer_message`
--

INSERT INTO `answer_message` (`id`, `username`, `message`, `id_msg`, `date_time_unix`) VALUES
(1, 'Side Master', 'Haciendo una respuesta al Sr. Castañeda, esperando que lleguemos a cierto acuerdo que pronuncie el negocio tan interesante que podemos sostener.', 1, '1481688737'),
(2, 'Side Master', 'He leido tu mensaje, te responderé nuevamente con los resultado.', 5, '1481901312'),
(3, 'Side Master', 'Este es otro mensaje.', 5, '1481901362'),
(4, 'Side Master', 'Hola Gloria, he leido tu mensaje, saludos.', 6, '1481908012'),
(5, 'Pedro Belly', 'También quiero dar mi respuesta caballero.', 6, '1481908084');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id_art`, `title`, `content_es`, `content_en`, `price`, `department`, `city`, `local_address`, `id_agent`, `business_type`, `property_type`, `property_state`, `bed_room`, `living_room`, `parking`, `kitchen`, `longitude`, `latitude`, `date_log`, `date_log_unix`, `username`) VALUES
(1, 'Hacienda los Rosales', '<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p><p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p>', '<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p><p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá\r\n con el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n"Contenido aquí, contenido aquí". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p>', '450000', 'León', 'El Sauce', 'Vulc. 4C. Este, 1/2C. Norte.', 1, 'Venta', 'Casa', 'En proceso', 3, 4, 1, 3, '-86.91167233886722', '12.438617393977118', '2016-12-13 22:01:48', '1481688108', 'Side Master'),
(2, 'Atlantis Condo on Brickell', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '450000', 'León', 'El Sauce', 'Vulc. 4C. Este, 1/2C. Norte.', 1, 'Venta', 'Casa', 'En proceso', 3, 3, 5, 2, '-86.91699384155277', '12.426379967985353', '2016-12-14 00:05:36', '1481695536', 'Side Master'),
(3, 'Mayfield Condo-Esperito Santo', '<p style="text-align: justify;"><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p style="text-align: justify;"><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '245890', 'Chinandega', 'Chinandega', 'En algún lugar', 2, 'Venta', 'Casa', 'En proceso', 2, 5, 9, 3, '-86.86841367187503', '12.45755912183278', '2016-12-14 00:13:14', '1481695994', 'Side Master'),
(4, 'Moderna villa en una comunidad privada', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '245000', 'León', 'Quezalguaque', 'Estadio Municipal Rodrigo Perez', 1, 'Venta', 'Casa', 'En proceso', 3, 2, 4, 2, '-86.90248845520023', '12.50700224092525', '2016-12-14 10:36:22', '1481733382', 'Side Master'),
(5, 'Casa con áreas recreativas estilo resort', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '192568', 'Chinandega', 'Las Carpas', 'Caserío Los Portillos', 2, 'Venta', 'Casa', 'En proceso', 5, 4, 2, 2, '-86.87528012695316', '12.631322344446403', '2016-12-14 10:53:04', '1481734384', 'Side Master'),
(6, 'Moderna casa con acabados de lujo', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '325000', 'León', 'La Paz Centro', 'Hermita San Nicolas', 1, 'Alquiler', 'Hacienda', 'En proceso', 2, 3, 4, 1, '-86.67460797729495', '12.341121126276304', '2016-12-14 10:56:33', '1481734593', 'Side Master'),
(7, 'Casa de lujo en comunidad de inspiración Zen', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '420000', 'Matagalpa', 'El Ocote', 'Barrio Guanuca', 2, 'Venta', 'Hotel', 'Vendido', 1, 4, 4, 3, '-85.91131566467288', '12.935917796447885', '2016-12-14 11:02:17', '1481734937', 'Side Master'),
(8, 'Condominio y Residencias Privadas', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '450000', 'San Juan', 'La Grecia de Limay', 'Llano Gauillica', 2, 'Alquiler', 'Casa', 'Alquilado', 6, 8, 8, 7, '-86.59581540527347', '13.184157381343997', '2016-12-14 11:12:48', '1481735568', 'Side Master'),
(9, 'La Casa Rosada', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '520000', 'El Rama', 'Santa Isabel', 'Alcaldía Municipal', 1, 'Venta', 'Casa', 'En proceso', 4, 3, 3, 7, '-84.22070859375003', '12.169933011818491', '2016-12-14 11:33:18', '1481736798', 'Side Master'),
(10, 'La colosal propiedad de Michael Jackson', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '435899', 'Kiasura', 'Los Alemanes', 'San Antonio', 2, 'Alquiler', 'Hotel', 'En proceso', 1, 3, 4, 1, '-85.1524865478516', '12.550236264047156', '2016-12-14 11:36:26', '1481736986', 'Side Master'),
(11, 'Graceland (Memphis)', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '200500', 'Managua', 'Tisma', 'Igleasia Rios de Agua Viva Tisma', 1, 'Alquiler', 'Casa', 'Alquilado', 3, 2, 4, 2, '-86.01889906826023', '12.080588846061358', '2016-12-14 11:47:20', '1481737640', 'Side Master'),
(12, 'Neque porro quisquam est qui dolorem', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p><p><strong>Lorem Ipsum</strong> es simplemente el texto de relleno de \r\nlas imprentas y archivos de texto. Lorem Ipsum ha sido el texto de \r\nrelleno estándar de las industrias desde el año 1500, cuando un impresor\r\n (N. del T. persona que se dedica a la imprenta) desconocido usó una \r\ngalería de textos y los mezcló de tal manera que logró hacer un libro de\r\n textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó\r\n como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas "Letraset", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', '525999', 'Tipitapa', 'San Benito', 'Col Los Laureles', 2, 'Alquiler', 'Hacienda', 'Vendido', 2, 3, 2, 3, '-86.05473874511722', '12.272608897257332', '2016-12-14 15:32:54', '1481751174', 'Side Master');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `count_visit`
--

INSERT INTO `count_visit` (`id`, `ip`) VALUES
(12, '192.168.1.4'),
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_perfil`
--

INSERT INTO `img_perfil` (`id`, `folder`, `src`, `created_at`, `username`) VALUES
(1, 'users/Side Master/img_perfil/', 'H6REkl.jpg', '2016-12-13 21:55:24', 'Side Master'),
(2, 'users/Pedro Belly/img_perfil/', 'HiResblackhat.jpg', '2016-12-16 11:08:50', 'Pedro Belly');

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

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
(8, 'users/Side Master/publish_img/', '1 (8).jpg', '2016-12-13 22:01:48', '1481688108', 1),
(11, 'users/Side Master/publish_img/', 'canondorado.jpg', '2016-12-14 00:05:36', '1481695536', 2),
(12, 'users/Side Master/publish_img/', 'sorrynaokin.jpg', '2016-12-14 00:05:37', '1481695537', 2),
(13, 'users/Side Master/publish_img/', '1 (12).jpg', '2016-12-14 00:13:14', '1481695994', 3),
(14, 'users/Side Master/publish_img/', '1 (13).jpg', '2016-12-14 00:13:14', '1481695994', 3),
(15, 'users/Side Master/publish_img/', '1 (14).jpg', '2016-12-14 00:13:14', '1481695994', 3),
(16, 'users/Side Master/publish_img/', '1 (15).jpg', '2016-12-14 00:13:14', '1481695994', 3),
(17, 'users/Side Master/publish_img/', '1 (16).jpg', '2016-12-14 00:13:15', '1481695995', 3),
(18, 'users/Side Master/publish_img/', '1 (17).jpg', '2016-12-14 10:36:22', '1481733382', 4),
(19, 'users/Side Master/publish_img/', '1 (18).jpg', '2016-12-14 10:36:22', '1481733382', 4),
(22, 'users/Side Master/publish_img/', '11images.jpg', '2016-12-14 10:53:04', '1481734384', 5),
(23, 'users/Side Master/publish_img/', '333images.jpg', '2016-12-14 10:53:04', '1481734384', 5),
(24, 'users/Side Master/publish_img/', '1162552.jpg', '2016-12-14 10:53:05', '1481734385', 5),
(25, 'users/Side Master/publish_img/', '1162553.jpg', '2016-12-14 10:53:05', '1481734385', 5),
(26, 'users/Side Master/publish_img/', '1162554.jpg', '2016-12-14 10:56:33', '1481734593', 6),
(27, 'users/Side Master/publish_img/', '1162555.jpg', '2016-12-14 10:56:33', '1481734593', 6),
(28, 'users/Side Master/publish_img/', '1162556.jpg', '2016-12-14 10:56:34', '1481734594', 6),
(29, 'users/Side Master/publish_img/', '1205407.jpg', '2016-12-14 10:56:34', '1481734594', 6),
(30, 'users/Side Master/publish_img/', '1248810.jpg', '2016-12-14 11:02:17', '1481734937', 7),
(31, 'users/Side Master/publish_img/', '1248815.jpg', '2016-12-14 11:02:17', '1481734937', 7),
(32, 'users/Side Master/publish_img/', '1327776.jpg', '2016-12-14 11:02:17', '1481734937', 7),
(33, 'users/Side Master/publish_img/', '1353293.jpg', '2016-12-14 11:02:17', '1481734937', 7),
(34, 'users/Side Master/publish_img/', '1353294.jpg', '2016-12-14 11:12:48', '1481735568', 8),
(35, 'users/Side Master/publish_img/', '1353300.jpg', '2016-12-14 11:12:48', '1481735568', 8),
(36, 'users/Side Master/publish_img/', '1369995.jpg', '2016-12-14 11:12:48', '1481735568', 8),
(37, 'users/Side Master/publish_img/', '1370352.jpg', '2016-12-14 11:12:48', '1481735568', 8),
(38, 'users/Side Master/publish_img/', '1415524.jpg', '2016-12-14 11:33:18', '1481736798', 9),
(39, 'users/Side Master/publish_img/', '1419483.jpg', '2016-12-14 11:33:18', '1481736798', 9),
(40, 'users/Side Master/publish_img/', '1422935.jpg', '2016-12-14 11:33:18', '1481736798', 9),
(41, 'users/Side Master/publish_img/', '1423444.jpg', '2016-12-14 11:33:18', '1481736798', 9),
(42, 'users/Side Master/publish_img/', '1423445.jpg', '2016-12-14 11:36:27', '1481736987', 10),
(43, 'users/Side Master/publish_img/', '1423446.jpg', '2016-12-14 11:36:27', '1481736987', 10),
(44, 'users/Side Master/publish_img/', '1423447.jpg', '2016-12-14 11:36:27', '1481736987', 10),
(45, 'users/Side Master/publish_img/', '1423449.jpg', '2016-12-14 11:36:27', '1481736987', 10),
(46, 'users/Side Master/publish_img/', '1423450.jpg', '2016-12-14 11:47:21', '1481737641', 11),
(47, 'users/Side Master/publish_img/', '1427979.jpg', '2016-12-14 11:47:21', '1481737641', 11),
(48, 'users/Side Master/publish_img/', '1436186.jpg', '2016-12-14 11:47:21', '1481737641', 11),
(49, 'users/Side Master/publish_img/', '1453302.jpg', '2016-12-14 11:47:21', '1481737641', 11),
(50, 'users/Side Master/publish_img/', 'imasges.jpg', '2016-12-14 15:32:54', '1481751174', 12),
(51, 'users/Side Master/publish_img/', 'imsages.jpg', '2016-12-14 15:32:54', '1481751174', 12),
(52, 'users/Side Master/publish_img/', 'indice.jpg', '2016-12-14 15:32:54', '1481751174', 12),
(53, 'users/Side Master/publish_img/', 'indicie.jpg', '2016-12-14 15:32:54', '1481751174', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_img` int(11) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscriptions`
--

INSERT INTO `suscriptions` (`id`, `email`, `date_log`, `date_log_unix`, `viewed`) VALUES
(1, 'sereelprimero@gmail.com', '2016-12-14', '1481695590', 'No');

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
  `title_art` varchar(1000) NOT NULL,
  `favorite` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sus_message`
--

INSERT INTO `sus_message` (`id`, `fullname`, `email`, `phone`, `message`, `id_art`, `date_log_unix`, `title_art`, `favorite`) VALUES
(1, 'Mario Castañeda', 'marito@gmail.com', '34508348', 'Esta casa me interesa bastante, espero que se pongan en contacto conmigo, necesito saber el negocio que podemos hacer con esta preciosura.\r\n\r\n¡Saludos!.', 1, '1481688678', 'Hacienda los Rosales', 1),
(2, 'Salvador Aguirre', 'salvadoraguirre93@hotmail.com', '455534534', 'Ahora mismo no tengo nada en mente, solo quiero ir a descansar lo más que pueda que mañana tengo que despertar temprano para ir al hospital.', 2, '1481695660', 'Atlantis Condo on Brickell', 1),
(3, 'Charles Harper', 'charlesharp@gob.com', '59494893', 'HMm, no tengo nada en mente de momento, he visto mucho Two mens and a half men. Pero esto tiene que cambiar de vez en cuando.', 2, '1481738215', 'Atlantis Condo on Brickell', NULL),
(4, 'Allan Harper', 'allanharper@gmail.com', '5645464355', 'Estoy escribiendo palabras casi al azar, apenas la situación se tranquilice un poco, esperando respuestas positivas a todo lo que hoy ocurra.', 7, '1481739236', 'Casa de lujo en comunidad de inspiración Zen', 1),
(5, 'Santiago Espinoza', 'santiagoesp@gmail.com', '498398839', 'This is a new message of test. Agregando algo nuevo a la base de datos, haciendo las últimas pruebas.', 5, '1481861465', 'Casa con áreas recreativas estilo resort', 1),
(6, 'Gloria Salgado', 'gloryblueblue@gmail.com', '594338933', 'De momento no tengo nada en mente, pero pronto lo tendré. Escribiendo mi último comentario. ¡Saludos!.', 2, '1481907882', 'Atlantis Condo on Brickell', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_img`
--

CREATE TABLE IF NOT EXISTS `tmp_img` (
  `id` int(10) unsigned NOT NULL,
  `folder` varchar(300) NOT NULL,
  `src` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
('Side Master', '$2y$10$MhrTsUB8WwmpMkDxoC3sSeMAv1LsJ70t4nmlCmjLa.W0ta4o0I1Zq'),
('Pedro Belly', '$2y$10$zigwCqFqz8SNMv4aRRGIQu3.zjWFbVXiWNL7IBkW6Et2wTpk5zA66');

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
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `count_visit`
--
ALTER TABLE `count_visit`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `img_perfil`
--
ALTER TABLE `img_perfil`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `property_type`
--
ALTER TABLE `property_type`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publish_img`
--
ALTER TABLE `publish_img`
  MODIFY `id_img` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sus_message`
--
ALTER TABLE `sus_message`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tmp_img`
--
ALTER TABLE `tmp_img`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
