-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-07-2019 a las 23:36:20
-- Versión del servidor: 10.2.24-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solmekcom_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidads`
--

CREATE TABLE `calidads` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calidads`
--

INSERT INTO `calidads` (`id`, `file_image`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'calidad__calidad.jpg', 'Nuestra Política de Calidad prioriza safisfacer las necesidades de nuestros clientes, ofreciéndoles productos y servicios innovadores, conformes a sus requisitos y expectativas. Contribuir con la comunidad, asegurando que nuestra actividad respete y proteja constantemente la integridad de la sociedad y del medio ambiente. Valorar a nuestro personal, procurando su rol y bienestar y seguridad personal. Generar nuevas y mejores oportunidades, que fortalezcan nuestras ventajas competitivas promoviendo en la organización una cultura de mejora continua. ', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Eventos', 'aa', NULL, NULL),
(2, 'Productos', 'bb', NULL, NULL),
(3, 'Empresa', 'cc', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Almafuerte 4181 - San Justo Buenos Aires Argentina ', '54-11-4651-5734', 'info@solmek.com.ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `nombre`, `orden`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Certificación ISO 9001:2015', 'aa', 'calidad1.pdf', NULL, '2018-10-31 15:34:20'),
(2, 'Política de Calidad', 'bb', 'calidad2.pdf', NULL, '2018-10-31 21:41:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novedad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `orden`, `novedad_id`, `created_at`, `updated_at`) VALUES
(1, 'aa', 1, NULL, NULL),
(2, 'bb', 2, NULL, NULL),
(3, 'cc', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `file_image`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'empresa__empresa.jpg', 'SOLMEK SRL es una empresa con mas de 30 años de trayectoria vinculada a la Industria Plástica y en los últimos 20 años especializada en la producción de envases para un gran abanico de rubros. Deseamos transmitir que nuestra filosofía empresarial es alcanzar la satisfacción plena de nuestros clientes a través de la mejora continua de los procesos, para lo cual comprometemos el desempeño máximo en nuestras tareas. Somos una empresa certificada con normas IS0 9001:2015. \n								  Nos dedicamos a la fabricación de envases y tapas plásticas. Contamos con un sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Nuestra maquinaria CNC nos permite lograr el mecanizado de superficies avanzadas, con excelente nivel de precisión y terminación. Tenemos servicio de serigrafía propio dentro de nuestra planta, lo cual disminuye el costo y facilita tos tiempos de entrega. Desde ya tenga en cuenta que... “Si no lo tenemos, Lo hacemos”.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `nombre`, `orden`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'Ninguna', 'aa', NULL, NULL, NULL),
(2, 'Botellas', 'aa', 'familias__botellas.jpg', NULL, '2018-10-31 19:01:37'),
(3, 'Tapas', 'bb', 'familias__familia2.jpg', NULL, NULL),
(4, 'Laboratorios', 'cc', 'familias__laboratorio.jpg', NULL, '2018-10-31 19:28:55'),
(5, 'Potes', 'dd', 'familias__potes.jpg', NULL, '2018-10-31 15:58:41'),
(6, 'Desarrollos Especiales', 'ee', 'familias__desarrollos.jpg', NULL, '2018-10-31 19:09:02'),
(7, 'Bidones', 'ff', 'familias__grupo.jpg', NULL, '2018-10-31 19:21:52'),
(8, 'Formato', 'ff', 'familias__formato.jpg', '2018-10-31 16:05:18', '2018-10-31 19:19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriaproduccions`
--

CREATE TABLE `galeriaproduccions` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `produccion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `orden`, `file_image`, `producto_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'galeria_productos__BL05-B', 35, '2018-10-31 16:27:25', '2018-10-31 16:27:25'),
(2, NULL, 'galeria_productos__104-B', 38, '2018-10-31 16:32:50', '2018-10-31 16:32:50'),
(3, NULL, 'galeria_productos__0001.jpg', 40, '2018-10-31 16:35:46', '2018-10-31 16:35:46'),
(4, NULL, 'galeria_productos__SEBE0011--Detalle.jpg', 41, '2018-10-31 16:37:42', '2018-10-31 17:07:57'),
(5, NULL, 'galeria_productos__V102-ambar', 49, '2018-10-31 16:49:17', '2018-10-31 16:49:17'),
(6, NULL, 'galeria_productos__B010-LV-detalle.jpg', 63, '2018-10-31 17:29:59', '2018-10-31 17:29:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `novedad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacions`
--

CREATE TABLE `informacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacions`
--

INSERT INTO `informacions` (`id`, `titulo`, `descripcion`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'Asumiendo Normas Internacionales de Calidad', 'Somos una Industría Plástica especializada en la producción de envases para un gran abanico de rubros. Sector de proyectos especializado en el diseño y fabricación de moldes de inyección y soplado. Empresa certificada con normas ISO 9001:2015”', 'home__informacions.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ubicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `ubicacion`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'navbar', 'logos__logo-principal.png', NULL, NULL),
(2, 'footer', 'logos__logo-footer.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `seccion`, `keyword`, `descripcion`, `url`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 'Página principal', '/', NULL, NULL, NULL),
(2, 'Empresa', 'empresa', 'Descripción de la empresa', '/empresa', NULL, NULL, NULL),
(3, 'Productos', 'productos', 'Catálogo de Productos', '/productos', 'metadatos__productos.jpg', NULL, NULL),
(4, 'Novedades', 'novedades', 'Publicación de las novedades que brinda la empresa.', '/novedades', 'metadatos__novedades.jpg', NULL, NULL),
(5, 'I+D', '/produccion', '<p>Secci&oacute;n de informaci&oacute;n sobre producci&oacute;n.</p>', '/produccion', 'metadatos__slider-ingenieria.jpg', NULL, '2018-10-31 15:59:58'),
(6, 'Calidad', 'calidad', 'Información de normas de calidad', '/calidad', 'metadatos__calidad.jpg', NULL, NULL),
(7, 'Contacto', 'contacto', 'Zona de contacto', '/contacto', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(574, '2014_10_12_000000_create_users_table', 1),
(575, '2014_10_12_100000_create_password_resets_table', 1),
(576, '2018_09_28_190333_create_metadatos_table', 1),
(577, '2018_09_28_190928_create_logos_table', 1),
(578, '2018_09_28_191757_create_empresas_table', 1),
(579, '2018_09_28_191842_create_sliders_table', 1),
(580, '2018_09_28_191932_create_informacions_table', 1),
(581, '2018_09_28_192207_create_datos_table', 1),
(582, '2018_10_16_175038_create_calidads_table', 1),
(583, '2018_10_16_180452_create_descargas_table', 1),
(584, '2018_10_16_185151_create_categorias_table', 1),
(585, '2018_10_16_185304_create_novedads_table', 1),
(586, '2018_10_16_190056_create_imagens_table', 1),
(587, '2018_10_17_115518_create_destacados_table', 1),
(588, '2018_10_17_130345_create_produccions_table', 1),
(589, '2018_10_17_143459_create_videos_table', 1),
(590, '2018_10_17_153859_create_familias_table', 1),
(591, '2018_10_17_154038_create_subfamilias_table', 1),
(592, '2018_10_17_154115_create_productos_table', 1),
(593, '2018_10_18_152240_create_galerias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedads`
--

CREATE TABLE `novedads` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeria` tinyint(1) NOT NULL DEFAULT 0,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `novedads`
--

INSERT INTO `novedads` (`id`, `titulo`, `file_image`, `texto`, `galeria`, `orden`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Cada Niño su botella', 'novedades__novedad1.jpg', 'Durante los últimos tres años hemos realizado la campaña “Cada niño su botella”, contribuyendo a concientizar a los niños que realizan deportes en equipo sobre la Mononucleosis, cuya enfermedad se transmite principalmente por el intercambio de saliva, al beber del mismo vaso o de la misma botella bebidas con otras personas. Algunas instituciones que formaron parte de ella son:\n								   Club Almirante Brown, Club Atlético All Boys, Deportivo Laferrere, A.V. Malvinas Alrgentinas, Racing Matanza, Club Deportivo Huracán de San Justo, Club Atlético San Lorenzo de Almagro, Colegio Mekhitarista de Buenos Aires, y muchos más.', 0, 'aa', 1, NULL, NULL),
(2, 'Nuevo Catálogo de Productos', 'novedades__novedades.jpg', '<p>M&aacute;s metros cuadrados, m&aacute;s m&aacute;quinas y m&aacute;s personal es la apuesta que generamos para una nueva unidad de negocios de nuestra compa&ntilde;&iacute;a. Algunas instituciones que formaron parte de ella son: Club Almirante Brown, Club Atl&eacute;tico All Boys, Deportivo Laferrere, A.V. Malvinas Alrgentinas, Racing Matanza, Club Deportivo Hurac&aacute;n de San Justo, Club Atl&eacute;tico San Lorenzo de Almagro, Colegio Mekhitarista de Buenos Aires, y muchos m&aacute;s.</p>', 0, 'bb', 2, NULL, '2018-10-31 18:13:23'),
(3, 'Nuevos Depósitos Solmek', 'novedades__novedad.jpg', '<p>M&aacute;s metros cuadrados, m&aacute;s m&aacute;quinas y m&aacute;s personal es la apuesta que generamos para una nueva unidad de negocios de nuestra compa&ntilde;&iacute;a.<br />\r\nSOLMEK SRL es una empresa con mas de 30 a&ntilde;os de trayectoria vinculada a la Industria Pl&aacute;stica y en los &uacute;ltimos 20 a&ntilde;os especializada en la producci&oacute;n de envases para un gran abanico de rubros. Deseamos transmitir que nuestra filosof&iacute;a empresarial es alcanzar la satisfacci&oacute;n plena de nuestros clientes a trav&eacute;s de la mejora continua de los procesos, para lo cual comprometemos el desempe&ntilde;o m&aacute;ximo en nuestras tareas.<br />\r\nSomos una empresa certificada con normas IS0 9001:2015. Nos dedicamos a la fabricaci&oacute;n de envases y tapas pl&aacute;sticas. Contamos con un sector de proyectos especializado en el dise&ntilde;o y fabricaci&oacute;n de moldes de inyecci&oacute;n y soplado. Nuestra maquinaria CNC nos permite lograr el mecanizado de superficies avanzadas, con excelente nivel de precisi&oacute;n y terminaci&oacute;n. Tenemos servicio de serigraf&iacute;a propio dentro de nuestra planta, lo cual disminuye el costo y facilita tos tiempos de entrega.&nbsp;</p>', 0, 'cc', 3, NULL, '2018-10-31 18:12:19'),
(4, 'PRUEBA', 'novedades__6b75b68dce4a404fad5a165304475thumbnail.jpg', '<p>DFDFDDSDSFS</p>', 0, '1', 2, '2019-02-11 22:17:00', '2019-02-11 22:17:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccions`
--

CREATE TABLE `produccions` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `produccions`
--

INSERT INTO `produccions` (`id`, `descripcion`, `file_image`, `categoria`, `created_at`, `updated_at`) VALUES
(1, '<p>SOLMEK SRL&nbsp;Ofrece un servicio de desarrollo, dise&ntilde;o y producci&oacute;n de piezas de mayor diversidad, trabajado en los Centros de Mecanizado con una gran gama de materiales. Nos ajustamos a las necesidades de nuestros clientes aportando todos nuestros conocimientos y tecnolog&iacute;a.</p>', 'producciones__web_2395.jpg', 'ingenieria', NULL, '2018-11-29 22:51:28'),
(2, '<p>Nuestra empresa cuenta con Centros de Mecanizado HAAS de &uacute;ltima generaci&oacute;n, lo que nos permite ofrecer un servicio de alta calidad para la fabricaci&oacute;n de moldes en aceros, aluminios y materiales de ingenier&iacute;a. Tambi&eacute;n ofrecemos el dise&ntilde;o de molder&iacute;a exclusiva, simples o de m&uacute;ltiples cavidades.</p>', 'producciones__web_IMG_2400.jpg', 'matriceria', NULL, '2018-11-29 18:10:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeria` tinyint(1) NOT NULL DEFAULT 0,
  `familia_id` int(10) UNSIGNED NOT NULL,
  `subfamilia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `file_image`, `descripcion`, `codigo`, `especificaciones`, `orden`, `galeria`, `familia_id`, `subfamilia_id`, `created_at`, `updated_at`) VALUES
(7, 'Pote 100 gr corto', 'productos__P001.jpg', '<p>Potes</p>', 'P001', NULL, 'aa', 0, 5, 1, '2018-10-30 21:19:37', '2018-10-31 15:40:54'),
(8, 'Pote 100 gr largo', 'productos__P002.jpg', NULL, 'P002', NULL, 'bb', 0, 5, 1, '2018-10-31 15:43:10', '2018-10-31 15:43:10'),
(9, 'Pote 130 gr', 'productos__P003.jpg', NULL, 'P003', NULL, 'cc', 0, 5, 1, '2018-10-31 15:43:51', '2018-10-31 15:43:51'),
(10, 'Pote 250 grdd', 'productos__P004.jpg', NULL, 'P004', NULL, 'dd', 0, 5, 1, '2018-10-31 15:44:55', '2018-10-31 15:44:55'),
(11, 'Pote 500 gr', 'productos__P005.jpg', NULL, 'P005', NULL, 'ee', 0, 5, 1, '2018-10-31 15:46:36', '2018-10-31 15:46:36'),
(12, 'Pote 1 kg', 'productos__P006.jpg', NULL, 'P006', NULL, 'ff', 0, 5, 1, '2018-10-31 15:47:16', '2018-10-31 15:47:16'),
(13, 'Pote 1 kg alto', 'productos__P009.jpg', NULL, 'P009', NULL, 'gg', 0, 5, 1, '2018-10-31 15:47:55', '2018-10-31 15:47:55'),
(14, 'Pote 1 kg c/ manija', 'productos__P010.jpg', '<p>&nbsp;&nbsp;</p>', 'P010', '<p>&nbsp;&nbsp;</p>', 'hh', 0, 5, 1, '2018-10-31 15:49:08', '2018-10-31 15:49:08'),
(15, 'Pote 2 kg c/ manija', 'productos__P011.jpg', NULL, 'P011', NULL, 'ii', 0, 5, 1, '2018-10-31 15:49:56', '2018-10-31 15:49:56'),
(16, 'Pote 130 gr chato', 'productos__P015.jpg', '<p>&nbsp;&nbsp;</p>', 'P015', '<p>&nbsp;&nbsp;</p>', 'jj', 0, 5, 1, '2018-10-31 15:51:20', '2018-10-31 15:51:20'),
(17, 'Pote 600 gr alto', 'productos__P018.jpg', NULL, 'P018', NULL, 'kk', 0, 5, 1, '2018-10-31 15:53:04', '2018-10-31 15:53:04'),
(18, 'Pote 300 gr', 'productos__P020.jpg', '<p>&nbsp;&nbsp;</p>', 'P020', '<p>&nbsp;&nbsp;</p>', 'll', 0, 5, 1, '2018-10-31 15:53:59', '2018-10-31 15:53:59'),
(19, 'Pote Formato 250gr', 'productos__P022.jpg', NULL, 'P022', NULL, 'mm', 0, 5, 1, '2018-10-31 15:55:02', '2018-10-31 15:55:02'),
(20, 'Pote 220 gr', 'productos__545.jpg', '<p>&nbsp;&nbsp;</p>', '545', NULL, 'nn', 0, 5, 1, '2018-10-31 15:56:01', '2018-10-31 15:56:01'),
(21, 'Pote 150 gr', 'productos__717.jpg', NULL, '717', NULL, 'oo', 0, 5, 1, '2018-10-31 15:56:48', '2018-10-31 15:56:48'),
(22, 'Pote 2 1/2 kg', 'productos__1194.jpg', NULL, '1194', NULL, 'pp', 0, 5, 1, '2018-10-31 15:57:38', '2018-10-31 15:57:38'),
(23, 'Bidón 1 lt recto', 'productos__BD04.jpg', NULL, 'BD04', NULL, 'aa', 0, 8, 1, '2018-10-31 16:08:46', '2018-10-31 16:08:46'),
(24, 'Jarra 1lt', 'productos__BF04.jpg', '<p>Formato con manija</p>', 'BF04', NULL, 'bb', 0, 8, 1, '2018-10-31 16:09:37', '2018-10-31 16:19:09'),
(25, 'Jarra 2lt', 'productos__BF05.jpg', '<p>Formato con manija</p>', 'BF05', NULL, 'cc', 0, 8, 1, '2018-10-31 16:10:34', '2018-10-31 16:19:31'),
(26, 'Botella 50 cc', 'productos__BF11.jpg', '<p>Formato con inserto y tapa gotero</p>', 'BF11', NULL, 'dd', 0, 8, 1, '2018-10-31 16:12:15', '2018-10-31 16:12:15'),
(27, 'Botella 10dd0 cc', 'productos__BF12.jpg', '<p>Formato con inserto y tapa gotero</p>', 'BF12', NULL, 'ee', 0, 8, 1, '2018-10-31 16:15:15', '2018-10-31 16:15:15'),
(28, 'Botella 250 cc', 'productos__BF13.jpg', '<p>Formato con tapa</p>', 'BF13', NULL, 'ff', 0, 8, 1, '2018-10-31 16:16:22', '2018-10-31 16:16:22'),
(29, 'Botella 500 cc', 'productos__BF14.jpg', '<p>Formato con tapa</p>', 'BF14', NULL, 'gg', 0, 8, 1, '2018-10-31 16:17:06', '2018-10-31 16:17:06'),
(30, 'Botella 1000 cc', 'productos__BF15.jpg', '<p>Formato con tapa</p>', 'BF15', NULL, 'hh', 0, 8, 1, '2018-10-31 16:18:05', '2018-10-31 16:18:05'),
(31, 'Bidón 5 lt Químico', 'productos__BD05', NULL, 'BD05', NULL, 'aa', 0, 7, 1, '2018-10-31 16:21:14', '2018-10-31 16:21:14'),
(32, 'Bidón 10 lt Químico', 'productos__BD10L', NULL, 'BD10L', NULL, 'bb', 0, 7, 1, '2018-10-31 16:22:18', '2018-10-31 16:22:18'),
(33, 'Bidón 5 lt', 'productos__BD5L', '<p>L&iacute;nea apilable</p>', 'BD5L', NULL, 'cc', 0, 7, 1, '2018-10-31 16:23:34', '2018-10-31 16:23:34'),
(34, 'Bidón 4 lt', 'productos__BD4L', '<p>L&iacute;nea apilable</p>', 'BD4L', NULL, 'dd', 0, 7, 1, '2018-10-31 16:24:31', '2018-10-31 16:24:31'),
(35, 'Boya faro p/ cloro', 'productos__BL05', NULL, 'BL05', NULL, 'aa', 1, 6, 1, '2018-10-31 16:26:53', '2018-10-31 16:27:25'),
(36, 'Mini boya p/ cloro', 'productos__B011.jpg', NULL, 'B011', NULL, 'bb', 0, 6, 1, '2018-10-31 16:29:30', '2018-10-31 16:29:30'),
(37, 'Botella 200cc', 'productos__B014.jpg', NULL, 'B014', NULL, 'cc', 0, 6, 1, '2018-10-31 16:30:23', '2018-10-31 16:30:23'),
(38, 'Talquera 100gr', 'productos__104.jpg', NULL, '104', NULL, 'aa', 1, 4, 1, '2018-10-31 16:32:17', '2018-10-31 17:06:14'),
(39, 'Frasco suero 120cc', 'productos__SEBE0008', NULL, 'SEBE0008', NULL, 'bb', 0, 4, 1, '2018-10-31 16:33:47', '2018-10-31 16:33:47'),
(40, 'Frasco suero 500cc', 'productos__SEBEEC10', NULL, 'SEBEEC10', NULL, 'dd', 1, 4, 1, '2018-10-31 16:35:05', '2018-10-31 16:35:46'),
(41, 'Frasco suero 750cc', 'productos__SEBE0011.jpg', NULL, 'SEBE0011', NULL, 'ee', 1, 4, 1, '2018-10-31 16:36:36', '2018-10-31 17:09:59'),
(42, 'Bidón 100cc pico doble', 'productos__SEBV02OV.jpg', NULL, 'SEBV02OV', NULL, 'ff', 0, 4, 1, '2018-10-31 16:39:03', '2018-12-06 21:24:46'),
(43, 'Bidón 250cc pico doble', 'productos__BL07.jpg', NULL, 'BL07', NULL, 'gg', 0, 4, 1, '2018-10-31 16:39:55', '2018-10-31 17:06:56'),
(44, 'Bidón 500cc pico doble', 'productos__BL10', NULL, 'BL10', NULL, 'hh', 0, 4, 1, '2018-10-31 16:40:42', '2018-10-31 16:40:42'),
(45, 'Bidón 1000cc pico doble recto', 'productos__BL08.jpg', NULL, 'BL08', NULL, 'ii', 0, 4, 1, '2018-10-31 16:41:52', '2018-10-31 17:07:20'),
(46, 'Bidón 1000cc pico doble inclinado', 'productos__BL03', NULL, 'BL03', NULL, 'jj', 0, 4, 1, '2018-10-31 16:43:07', '2018-10-31 16:45:53'),
(47, 'Bidón 1000cc pico doble especial', 'productos__SEBV03OV', '<p>&nbsp;&nbsp;</p>', 'SEBV03OV', '<p>&nbsp;&nbsp;</p>', 'kk', 0, 4, 1, '2018-10-31 16:45:25', '2018-10-31 16:45:25'),
(48, 'Frasco vacuna 500cc', 'productos__v101', '<p>&nbsp;&nbsp;</p>', 'V101', '<p>&nbsp;&nbsp;</p>', 'll', 0, 4, 1, '2018-10-31 16:47:36', '2018-10-31 16:51:51'),
(49, 'Frasco vacuna 500cc recto', 'productos__V102', NULL, 'V102', NULL, 'mm', 1, 4, 1, '2018-10-31 16:48:35', '2018-10-31 16:49:17'),
(50, 'Frasco vacuna 50cc', 'productos__411', NULL, '411', NULL, 'nn', 0, 4, 1, '2018-10-31 16:51:14', '2018-10-31 16:51:14'),
(51, 'Frasco vacuna 100cc', 'productos__649.jpg', NULL, '649', NULL, 'oo', 0, 4, 1, '2018-10-31 17:02:30', '2018-10-31 17:02:30'),
(52, 'Frasco vacuna 250cc', 'productos__435', NULL, '435', NULL, 'pp', 0, 4, 1, '2018-10-31 17:03:14', '2018-10-31 17:03:14'),
(53, 'Frasco vacuna 500cc', 'productos__369', NULL, '369', NULL, 'qq', 0, 4, 1, '2018-10-31 17:03:53', '2018-10-31 17:03:53'),
(54, 'Frasco vacuna 1000cc', 'productos__454', NULL, '454', NULL, 'rr', 0, 4, 1, '2018-10-31 17:04:52', '2018-12-06 21:30:17'),
(55, 'Frasco PS 100cc', 'productos__721.jpg', '<p>Formato b024</p>', '721', NULL, 'aa', 0, 2, 2, '2018-10-31 17:15:44', '2018-10-31 17:15:44'),
(56, 'Botella 250cc recta p/ gatillo', 'productos__1444.jpg', NULL, '1444', NULL, 'aa', 0, 2, 5, '2018-10-31 17:16:33', '2018-10-31 17:16:33'),
(57, 'Frasco PS 100cc b024', 'productos__1505.jpg', NULL, '1505', NULL, 'bb', 0, 2, 2, '2018-10-31 17:19:46', '2018-10-31 17:19:46'),
(58, 'Botella 100/125 cc b028', 'productos__B003.jpg', NULL, 'B003', NULL, 'cc', 0, 2, 2, '2018-10-31 17:21:18', '2018-10-31 17:21:18'),
(59, 'Botella 200cc b028', 'productos__B004.jpg', NULL, 'B004', NULL, 'dd', 0, 2, 2, '2018-10-31 17:22:03', '2018-10-31 17:22:03'),
(60, 'Botella 250cc recta pico cánula', 'productos__B005-2.jpg', NULL, 'B005', NULL, 'dd', 0, 2, 2, '2018-10-31 17:24:18', '2018-10-31 17:24:18'),
(61, 'Botella 250 cc b028', 'productos__B005.jpg', NULL, 'B005', NULL, 'gg', 0, 2, 2, '2018-10-31 17:26:49', '2018-10-31 17:26:49'),
(62, 'Botella 500cc recta b028', 'productos__B006.jpg', NULL, 'B006', NULL, 'hh', 0, 2, 2, '2018-10-31 17:28:15', '2018-10-31 17:28:15'),
(63, 'Botella 1000cc recta línea visora', 'productos__B010-LV.jpg', NULL, 'B010-LV', NULL, 'bb', 1, 2, 5, '2018-10-31 17:29:38', '2018-10-31 17:29:59'),
(64, 'Botella 1000cc recta b028', 'productos__B010.jpg', NULL, 'B010', NULL, 'hh', 0, 2, 2, '2018-10-31 17:30:56', '2018-10-31 17:30:56'),
(65, 'Botella 200cc b033', 'productos__B016.jpg', NULL, 'B016', NULL, 'ii', 0, 2, 2, '2018-10-31 17:31:54', '2018-10-31 17:37:15'),
(66, 'Botella 200cc', 'productos__B019.jpg', '<p>Para edulcorante, con tapa e inserto</p>', 'B019', NULL, 'jj', 0, 2, 2, '2018-10-31 17:33:25', '2018-10-31 17:33:25'),
(67, 'Botella 300cc Imprial', 'productos__BC03.jpg', NULL, 'BC03', NULL, 'kk', 0, 2, 5, '2018-10-31 17:34:06', '2018-10-31 17:39:06'),
(68, 'Botella 200cc pico cánula', 'productos__BC16.jpg', NULL, 'BC16', NULL, 'cc', 0, 2, 5, '2018-10-31 17:36:48', '2018-10-31 17:36:48'),
(69, 'Botella cilíndrica pico cánula 100cc', 'productos__BQ01.jpg', NULL, 'BQ01', NULL, 'aa', 0, 2, 4, '2018-10-31 17:40:38', '2018-10-31 17:40:38'),
(70, 'Botella 500 cc b028', 'productos__BQ06.jpg', NULL, 'BQ06', NULL, 'bb', 0, 2, 4, '2018-10-31 17:41:41', '2018-10-31 17:41:41'),
(71, 'Botella 1000 cc b038', 'productos__BQ09.jpg', NULL, 'BQ09', NULL, 'cc', 0, 2, 4, '2018-10-31 17:42:38', '2018-10-31 17:42:38'),
(72, 'Botella 100cc tipo pomo pico cánula', 'productos__POMO070.jpg', NULL, 'POMO070', NULL, 'dd', 0, 2, 5, '2018-10-31 17:43:36', '2018-10-31 17:43:36'),
(73, 'Boya formato p/ cloro', 'productos__BL12.jpg', NULL, 'BL12', NULL, 'dd', 0, 6, 1, '2018-10-31 18:59:50', '2018-10-31 18:59:50'),
(74, 'Cánula Aceitera', 'productos__014CARO.jpg', '<p>C&aacute;nula aceitera chica pico alto &oslash;14</p>', '014CARO', NULL, 'aa', 0, 3, 1, '2018-11-06 21:00:30', '2018-11-06 21:00:30'),
(75, 'Tapa Gotero', 'productos__018GOT.jpg', '<p>Tapa gotero &oslash;18</p>', '018GOT', NULL, 'bb', 0, 3, 1, '2018-11-06 21:03:40', '2018-11-06 21:03:40'),
(76, 'Tapa ø25', 'productos__025C08.jpg', '<p>Tapa &oslash;25 con cono</p>', '025C08', NULL, 'cc', 0, 3, 1, '2018-11-06 21:05:03', '2018-11-06 21:05:03'),
(77, 'Tapa ø25 plana con oblea', 'productos__025PCO.jpg', '<p>Tapa &oslash;25 plana con oblea</p>', '025PCO', NULL, 'dd', 0, 3, 1, '2018-11-06 21:05:49', '2018-11-06 22:36:15'),
(78, 'Tapa ø28 plana pico cánula', 'productos__028CAN.jpg', '<p>Tapa &oslash;28 plana pico c&aacute;nula</p>', '028CAN', NULL, 'ee', 0, 3, 1, '2018-11-06 21:07:44', '2018-11-06 22:36:52'),
(79, 'Tapa ø38 con cono', 'productos__038C08.jpg', '<p>Tapa &oslash;38 con cono</p>', '038C08', NULL, 'ff', 0, 3, 1, '2018-11-06 21:08:54', '2018-11-06 22:37:23'),
(80, 'Tapa 38  pico cánula', 'productos__038CAN.jpg', '<p>Tapa 38&nbsp;&nbsp;pico c&aacute;nula</p>', '038CAN', NULL, 'gg', 0, 3, 1, '2018-11-06 21:10:33', '2018-12-06 21:33:48'),
(81, 'Tapa ø40 plana con oblea', 'productos__040PCO.jpg', '<p>Tapa &oslash;40 plana con oblea</p>', '040PCO', NULL, 'hh', 0, 3, 1, '2018-11-06 21:11:55', '2018-11-06 22:38:21'),
(82, 'Tapa ø60 plana con foil', 'productos__060PCF.jpg', '<p>Tapa &oslash;60 plana con foil</p>', '060PCF', NULL, 'ii', 0, 3, 1, '2018-11-06 21:12:21', '2018-11-06 22:38:41'),
(83, 'Tapa ø60 plana con oblea', 'productos__060PCO.jpg', '<p>Tapa &oslash;60 plana con oblea</p>', '060PCO', NULL, 'jj', 0, 3, 1, '2018-11-06 21:14:18', '2018-11-06 22:39:01'),
(84, 'Tapa ø60 plana sin oblea', 'productos__060PSO.jpg', '<p>Tapa &oslash;60 plana sin oblea</p>', '060PSO', NULL, 'kk', 0, 3, 1, '2018-11-06 21:15:15', '2018-11-06 22:39:19'),
(85, 'Tapa ø60 plana valvulada', 'productos__060PVAL.jpg', '<p>Tapa &oslash;60 plana valvulada</p>', '060PVAL', NULL, 'll', 0, 3, 1, '2018-11-06 21:15:59', '2018-11-06 22:39:45'),
(86, 'Tapa ø70 plana sin oblea', 'productos__070PSO.jpg', '<p>Tapa &oslash;70 plana sin oblea</p>', '070PSO', NULL, 'mm', 0, 3, 1, '2018-11-06 21:16:56', '2018-11-06 22:40:58'),
(87, 'Tapa ø90 plana sin oblea', 'productos__090PSO.jpg', '<p>Tapa &oslash;90 plana sin oblea</p>', '090PSO', NULL, 'nn', 0, 3, 1, '2018-11-06 21:17:54', '2018-11-06 22:41:50'),
(88, 'Tapa ø27 plana facetada con oblea', 'productos__027CFA.JPG', '<p>Tapa &oslash;27 plana facetada con oblea</p>', '027CFA', NULL, 'oo', 0, 3, 1, '2018-11-06 21:32:01', '2018-11-06 22:42:09'),
(89, 'Tapa ø100 plana sin oblea', 'productos__100PCO.JPG', '<p>Tapa &oslash;100 plana sin oblea</p>', '0100PCO', NULL, 'pp', 0, 3, 1, '2018-11-06 21:32:28', '2018-11-06 22:43:08'),
(90, 'Tapa ø20 plana con oblea', 'productos__020PCO.jpg', '<p>Tapa &oslash;20 plana con oblea</p>', '020PCO', NULL, 'pp', 0, 3, 1, '2018-11-06 21:41:31', '2018-11-06 22:43:26'),
(91, 'Tapa con aplicador', 'productos__024PA.jpg', '<p>Tapa &oslash;24 pico aplicador</p>', '024PA', NULL, 'qq', 0, 3, 1, '2018-11-06 21:42:40', '2018-11-06 21:42:40'),
(92, 'Tapa ø24 plana con oblea', 'productos__024PCO.jpg', '<p>Tapa &oslash;24 plana con oblea</p>', '024PCO', NULL, 'rr', 0, 3, 1, '2018-11-06 21:45:13', '2018-11-06 22:43:50'),
(93, 'Tapa plana con oblea \"Children\"', 'productos__028CPK.jpg', '<p>Tapa &oslash;28 plana con oblea &quot;Children&quot;</p>', '028CPK', NULL, 'ss', 0, 3, 1, '2018-11-06 21:45:17', '2018-11-06 21:45:17'),
(94, 'Tapa ø28 plana con oblea', 'productos__028PCO.jpg', '<p>Tapa &oslash;28 plana con oblea</p>', '028PCO', NULL, 'tt', 0, 3, 1, '2018-11-06 22:32:42', '2018-11-06 22:32:42'),
(95, 'Tapa ø38 plana con oblea', 'productos__038PCO.jpg', '<p>Tapa &oslash;38 plana con oblea</p>', '038PCO', NULL, 'uu', 0, 3, 1, '2018-11-06 22:34:52', '2018-11-06 22:34:52'),
(96, 'Tapa ø46 plana con oblea', 'productos__046PCO.jpg', '<p>Tapa &oslash;46 plana con oblea</p>', '046PCO', NULL, 'vv', 0, 3, 1, '2018-11-06 22:35:35', '2018-11-06 22:35:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `file_image`, `titulo`, `descripcion`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'sliders__slider1.jpg', 'Más de 30 años de trayectoria en el rubro', 'Especialistas en Envases Plásticos', 'home', 'aa', NULL, NULL),
(2, 'sliders__empresa01_b.jpg', '<p>Si no lo tenemos, lo hacemos</p>', '<p>M&aacute;s de 30 a&ntilde;os en el rubro</p>', 'empresa', 'aa', NULL, '2018-10-31 21:51:22'),
(3, 'sliders__slider002.jpg', '<p>M&aacute;s de 30 a&ntilde;os de trayectoria en el rubro</p>', '<p>Especialistas en Envases Pl&aacute;sticos</p>', 'empresa', 'bb', '2018-10-31 19:48:05', '2018-10-31 19:48:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfamilias`
--

CREATE TABLE `subfamilias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subfamilias`
--

INSERT INTO `subfamilias` (`id`, `nombre`, `orden`, `file_image`, `familia_id`, `created_at`, `updated_at`) VALUES
(1, 'Ninguna', 'aa', NULL, 1, NULL, NULL),
(2, 'Botellas Cilíndricas', 'aa', 'subfamilias__subfamilia1.jpg', 2, NULL, NULL),
(4, 'Botellas Químicas', 'cc', 'subfamilias__subfamilia3.jpg', 2, NULL, NULL),
(5, 'Botellas Cosméticas', 'dd', 'subfamilias__grupo.jpg', 2, NULL, '2018-10-31 17:44:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `tipo_usuario`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'pablo', 'admin', NULL, '$2y$10$gXfrrVflAsfdQ8Ka6kzFj.VF.feHt5d4bzJrQorPF6nK/UeegJYou', 'TivUWiDuZDzyv2w48VBvRMWM63d3B8hUsXCNRoN6HyQa4Mw8KNTuALmbdPPR', NULL, NULL),
(2, 'Ana Urquiola', 'anita', 'user', NULL, '$2y$10$n979qr4XW7/dBCThsvvoK.RdgnKR8EdFGeK8YwjfhoXfrJffdg7v6', NULL, NULL, NULL),
(3, 'melina', 'Melina', 'admin', NULL, '$2y$10$PJZ3mk6gbtZhDoZv.jtkB.Il5ojAl18FOXDiSdZtU5lcePdymfPSW', NULL, '2018-11-30 20:46:13', '2018-11-30 20:46:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produccion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `descripcion`, `video`, `orden`, `produccion_id`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Inyección I', NULL, 'https://www.youtube.com/embed/KOBk6_b4p7E', 'aa', 1, NULL, '2018-11-29 18:39:32', 1),
(2, 'Ingeniería', NULL, 'https://www.youtube.com/embed/IlJ5zZXEsQI', 'bb', 1, NULL, '2018-11-29 18:51:10', 1),
(3, 'Mecanizado CNC I', '<p>La mejor tecnolog&iacute;a al servicio de nuestros clientes I</p>', 'https://www.youtube.com/embed/S6vVaYNhm7U', 'cc', 1, NULL, '2018-10-31 19:37:44', 0),
(4, 'Inyección', '<p>La mejor tecnolog&iacute;a al servicio de nuestros clientes</p>', 'https://www.youtube.com/embed/KOBk6_b4p7E&feature=youtu.be', 'dd', 2, NULL, '2018-11-29 18:45:54', 0),
(5, 'Matricería', NULL, 'https://www.youtube.com/embed/5msYQWHQM2o', 'ee', 2, NULL, '2018-11-29 18:44:44', 1),
(6, 'Mecanizado CNC', '<p>La mejor tecnolog&iacute;a al servicio de nuestros clientes</p>', 'https://www.youtube.com/embed/S6vVaYNhm7U', 'ff', 2, NULL, '2018-10-31 19:37:12', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidads`
--
ALTER TABLE `calidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destacados_novedad_id_foreign` (`novedad_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeriaproduccions`
--
ALTER TABLE `galeriaproduccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeriaproduccions_produccion_id_foreign` (`produccion_id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galerias_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagens_novedad_id_foreign` (`novedad_id`);

--
-- Indices de la tabla `informacions`
--
ALTER TABLE `informacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `novedads_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `produccions`
--
ALTER TABLE `produccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_familia_id_foreign` (`familia_id`),
  ADD KEY `productos_subfamilia_id_foreign` (`subfamilia_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subfamilias`
--
ALTER TABLE `subfamilias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subfamilias_familia_id_foreign` (`familia_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_produccion_id_foreign` (`produccion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidads`
--
ALTER TABLE `calidads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `galeriaproduccions`
--
ALTER TABLE `galeriaproduccions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacions`
--
ALTER TABLE `informacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT de la tabla `novedads`
--
ALTER TABLE `novedads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `produccions`
--
ALTER TABLE `produccions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subfamilias`
--
ALTER TABLE `subfamilias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `destacados_novedad_id_foreign` FOREIGN KEY (`novedad_id`) REFERENCES `novedads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `galeriaproduccions`
--
ALTER TABLE `galeriaproduccions`
  ADD CONSTRAINT `galeriaproduccions_produccion_id_foreign` FOREIGN KEY (`produccion_id`) REFERENCES `produccions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_novedad_id_foreign` FOREIGN KEY (`novedad_id`) REFERENCES `novedads` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD CONSTRAINT `novedads_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_familia_id_foreign` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_subfamilia_id_foreign` FOREIGN KEY (`subfamilia_id`) REFERENCES `subfamilias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subfamilias`
--
ALTER TABLE `subfamilias`
  ADD CONSTRAINT `subfamilias_familia_id_foreign` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_produccion_id_foreign` FOREIGN KEY (`produccion_id`) REFERENCES `produccions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
