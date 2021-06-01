-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2021 a las 22:00:06
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atm_contaminacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_comuna` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id`, `nombre_comuna`, `created_at`, `updated_at`) VALUES
(1, 'Comuna 1', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(2, 'Comuna 2', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(3, 'Comuna 3', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(4, 'Comuna 4', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(5, 'Comuna 5', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(6, 'Comuna 6', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(7, 'Comuna 7', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(8, 'Comuna 8', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(9, 'Comuna 9', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(10, 'Comuna 10', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(11, 'Comuna 11', '2021-05-22 22:52:19', '2021-05-22 22:52:19'),
(12, 'Comuna 12', '2021-05-22 22:52:19', '2021-05-22 22:52:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2021_05_13_224204_create_usuarios_table', 1),
(26, '2021_05_21_232104_create_variables_table', 1),
(27, '2021_05_22_215835_create_comunas_table', 1);

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Cedula`, `Nombre`, `Apellido`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, '1085330718', 'Harvey', 'Riascos', 'harveympv@hotmail.com', '3d83f27f0845faf9fa80e1a8f0f7ea75', '2021-05-23 03:07:54', '2021-05-23 03:07:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE `variables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `variable_1` decimal(10,4) NOT NULL,
  `variable_2` decimal(10,4) NOT NULL,
  `variable_3` decimal(10,4) NOT NULL,
  `variable_4` decimal(10,4) NOT NULL,
  `variable_5` decimal(10,4) NOT NULL,
  `variable_6` decimal(10,4) NOT NULL,
  `variable_7` decimal(10,4) NOT NULL,
  `variable_8` decimal(10,4) NOT NULL,
  `contaminacion` decimal(10,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `variables`
--

INSERT INTO `variables` (`id`, `id_comuna`, `variable_1`, `variable_2`, `variable_3`, `variable_4`, `variable_5`, `variable_6`, `variable_7`, `variable_8`, `contaminacion`, `created_at`, `updated_at`) VALUES
(13, 1, '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '8.0000', '2021-05-23 05:37:55', '2021-05-23 05:37:55'),
(14, 2, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(15, 3, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(16, 4, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(17, 5, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(18, 6, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(19, 7, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(20, 8, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(21, 9, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(22, 10, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(23, 11, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(24, 12, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '2021-05-23 05:40:44', '2021-05-23 05:40:44'),
(25, 1, '3.2355', '4.4895', '6.3274', '5.4870', '1.2421', '5.6329', '1.1366', '1.2665', '25.4724', '2021-06-02 00:36:49', '2021-06-02 00:36:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
