-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2022 at 10:15 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exlara`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_09_095018_create_tasks_table', 1),
(5, '2021_01_17_195321_create_products_table', 1),
(6, '2021_01_17_210721_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `cart` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart`, `created_at`, `updated_at`) VALUES
(1, 1, 'a:2:{i:8;a:4:{s:4:\"name\";s:23:\"Apple iPhone 14 PRO MAX\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"7069.99\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg\";}i:9;a:4:{s:4:\"name\";s:23:\"Casti Apple AirPods Pro\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"1273.05\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/26669/26668250/images/res_25452c9cc71d1d7c1146cda73239cb2d.jpg\";}}', '2022-12-18 14:46:49', '2022-12-18 14:46:49'),
(2, 1, 'a:2:{i:9;a:4:{s:4:\"name\";s:23:\"Casti Apple AirPods Pro\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"1273.05\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/26669/26668250/images/res_25452c9cc71d1d7c1146cda73239cb2d.jpg\";}i:8;a:4:{s:4:\"name\";s:23:\"Apple iPhone 14 PRO MAX\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"7069.99\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg\";}}', '2022-12-19 14:10:05', '2022-12-19 14:10:05'),
(3, 1, 'a:2:{i:8;a:4:{s:4:\"name\";s:23:\"Apple iPhone 14 PRO MAX\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"7069.99\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg\";}i:9;a:4:{s:4:\"name\";s:23:\"Casti Apple AirPods Pro\";s:8:\"quantity\";i:1;s:5:\"price\";s:7:\"1273.05\";s:5:\"photo\";s:103:\"https://s13emagst.akamaized.net/products/26669/26668250/images/res_25452c9cc71d1d7c1146cda73239cb2d.jpg\";}}', '2022-12-19 14:41:26', '2022-12-19 14:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(7, 'Samsung Galaxy S22', 'Este un kit profesional care incape intr-o singura mana. Camera tripla principala si camera selfie ofera hardware si software inovatoare, astfel incat sa poti fotografia cu usurinta o Galerie plina de continut demn de share-uit.', 'https://s13emagst.akamaized.net/products/43178/43177458/images/res_707ec7b89553b7311534089b62e447e9.jpg', '3049.99', NULL, NULL),
(8, 'Apple iPhone 14 PRO MAX', 'O modalitate magica de a interactiona cu iPhone. O functionalitate vitala de siguranta, conceputa pentru a salva vieti. O camera principala inovatoare de 48MP.', 'https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg', '7069.99', NULL, NULL),
(9, 'Casti Apple AirPods Pro', 'Anulare activa a zgomotului cu mod Transparenta, rezistenta la apa si transpiratie si potrivire personalizabila.', 'https://s13emagst.akamaized.net/products/26669/26668250/images/res_25452c9cc71d1d7c1146cda73239cb2d.jpg', '1273.05', NULL, NULL),
(10, 'Apple Watch 8', 'Apple Watch 8, GPS, Carcasa Midnight Aluminium 45mm, Midnight Sport Band ', 'https://s13emagst.akamaized.net/products/48591/48590558/images/res_7324b4967516ce96d182bd91b4a76ea2.jpg', '2459.90', NULL, NULL),
(11, 'Televizor Samsung', 'Samsung 50AU7172, 125 cm, Smart, 4K Ultra HD, LED, Clasa G.', 'https://s13emagst.akamaized.net/products/35828/35827230/images/res_1afbb5074dba25b7e2dfc9ca46ab60c1.jpg', '1779.99', NULL, NULL),
(12, 'Apple MacBook Air 13', 'MacBook Air 13-inch, True Tone, procesor Apple M1 , 8 nuclee CPU si 7 nuclee GPU, 8GB, 256GB, Space Grey, INT KB.', 'https://s13emagst.akamaized.net/products/33874/33873196/images/res_2ce18bde5ec79adc307a8d4fc03e40a3.jpg', '4799.99', NULL, NULL),
(13, 'Apple IPad 9', 'iPad 9 (2021), 10.2 \", 64GB, Wi-Fi, Space Grey.', 'https://s13emagst.akamaized.net/products/40530/40529521/images/res_1e0c2ea72c8d4c7052ec85137524cae2.jpg', '1899.99', NULL, NULL),
(14, 'Laptop ultraportabil ASUS Zenbook 14X', 'procesor AMD Ryzen™ 7 5800H pana la 4.40 GHz, 14\", 2.8K OLED, 16GB, 1TB M.2 NVMe™ PCIe® 3.0 SSD, AMD Radeon™ Graphics, Windows 11 Home', 'https://s13emagst.akamaized.net/products/47905/47904706/images/res_20b19be61b7a26d9e9a3bfdd34814321.jpg', '5199.99', NULL, NULL),
(15, 'Apple iPhone 11', 'Telefon mobil Apple iPhone 11, 64GB, Black', 'https://s13emagst.akamaized.net/products/25344/25343941/images/res_99d57ec9e3d9bb8d3242f384288ce0a3.jpg', '2349.99', NULL, NULL),
(16, 'Aparat foto Mirrorless Sony Alpha A7II', '24.3 MP, Full-Frame, Wi-Fi, NFC, E-Mount, ISO 50–25600, Negru + Obiectiv SEL2870 28-70mm, Negru', 'https://s13emagst.akamaized.net/products/1536/1535197/images/res_e42bca8d7e9c106afe07652db5ae775a.jpg', '4799.99', NULL, NULL),
(17, 'Monitor Gaming LED', 'VA curbat DELL 27\", FHD, 144Hz, 1ms, 4ms,350 cd/m2, VESA, DP, HDMI, S2721HGF', 'https://s13emagst.akamaized.net/products/32274/32273347/images/res_0daaac9c75cfb02fed49048f8dcc2826.jpg', '999.99', NULL, NULL),
(18, 'Tableta Samsung Galaxy Tab A7', 'Lite, Octa-Core, 8.7\", 3GB RAM, 32GB, 4G, Gray', 'https://s13emagst.akamaized.net/products/37936/37935757/images/res_c5ed12682dd48f6661c2fa3d3adde7da.jpg', '779.99', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iulian', 'iulian@yahoo.com', '$2y$10$9BGUMmRLdnV9Toh.6tJtK.sIoNUOfNJQ9W9fIN23XkVrwVYqzXVIa', NULL, '2022-12-18 13:30:24', '2022-12-18 13:30:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
