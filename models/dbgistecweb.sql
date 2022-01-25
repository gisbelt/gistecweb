-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 03:12:27
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbgistecweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `idblog` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`idblog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`idblog`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'WordPress', 'WordPress tiene innumerables cualidades, es una de las plataformas \r\n                    más versátiles, modernas y eficientes de administración de contenidos. \r\n                    Las plataformas que son llamadas Gestores de Contenidos han revolucionado \r\n                    desde su nacimiento la forma de colocar en Internet una página de diverso \r\n                    <strong> contenido, ya sea personal, comercial, informativo, profesional, etc. </strong>\r\n                    También le da al usuario la oportunidad de autoadministrar su propio sitio web, \r\n                    sin necesidad de tener conocimientos avanzados en lo que respecta el mundo de la\r\n                    informática en su ámbito "web". \r\n                    No cabe ninguna duda que este mercado de las plataformas de Gestión de \r\n                    Contenido se ha ganado un lugar en Internet cuya tendencia es la de seguir en \r\n                    una evolución constante y por ende en conseguir un aumento del nú', 'wordpress.png'),
(2, 'Lo que las empresas que envían correos masivos no quieren que sepas.', 'Hemos encontrado un crecimiento exponencial de empresas que venden servicios de correo masivos, y aunque algunas destacan que no mandan SPAM la verdad es otra. \r\nAl tener bases de datos donde ofrecen enviar de 20 hasta 1,000,000 de correos, uno pudiera pensar que es la mejor forma llegar a ciento de miles de personas. La realidad es otra, el porcentaje de efectividad no es ni del 0.5% y esto está comprobado El spam o correo basura es un envío masivo de correos electrónicos publicitarios a usuarios que no han dado su autorización para recibirlos. Es una forma de e-mail marketing no autorizado y muy mal entendido. Como creadores de e-mail marketing, debemos huir. Ya que si esa es tu pretensión tu campaña fallará estrepitosamente. Mandar una lluvia de correos al tuntún no es inteligente y los gestores de correo como Outlook, Yahoo, Hotmail, Mail tienen filtrados inteligentes que los envían directamente a la carpeta de spam, sin que el usuario vea tu campaña (si eres el empresario que dese', 'spam.jpg'),
(3, 'Diseño UI y UX', 'No cabe ninguna duda que este mercado de las plataformas de Gestión de \r\n                      Contenido se ha ganado un lugar en Internet cuya tendencia es la de seguir en \r\n                      una evolución constante y por ende en conseguir un aumento del número de \r\n                      usuarios. En Gistec Web te invitamos a indagar un poco más sobre esta hermosa herramienta\r\n                      que te puede facilitar mucho la vida y por supuesto, también te creamos ', 'ui-ux.png'),
(4, 'Ventajas de tener un Sitio Web', 'WordPress tiene innumerables cualidades, es una de las plataformas \r\n                      más versátiles, modernas y eficientes de administración de contenidos. \r\n                      Las plataformas que son llamadas Gestores de Contenidos han revolucionado \r\n                      desde su nacimiento la forma de colocar en Internet una página de diverso \r\n                      contenido, ya sea personal, comercial, inf', 'seo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(1) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `subtitulo` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
