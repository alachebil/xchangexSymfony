-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 06:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionprpduit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(2, 'homme'),
(8, 'bekri');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230405213110', '2023-04-05 23:31:37', 1203),
('DoctrineMigrations\\Version20230409235924', '2023-04-10 02:00:25', 1486),
('DoctrineMigrations\\Version20230416235344', '2023-04-17 01:53:49', 1718);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `decription` varchar(255) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `nom_categori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `image_name`, `decription`, `prix`, `nom_categori_id`) VALUES
(13, 'new shomise', '64463caa0a7cf.png', 'new', 99, 2),
(16, 'chyzz', '644d4636e3e2d.png', 'NOVEL', 100, 2),
(17, 'MOOTAZ', '644d46803ebf1.png', 'AZEDAZE', 100, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_echange` int(255) NOT NULL,
  `note` int(1) NOT NULL,
  `id_user_notant` int(8) NOT NULL,
  `id_user_note` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_echange`, `note`, `id_user_notant`, `id_user_note`) VALUES
(12, 10, 5, 5),
(12, 10, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `reduction`
--

CREATE TABLE `reduction` (
  `id` int(11) NOT NULL,
  `valeur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `num_tel` int(8) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 0,
  `adresse` varchar(64) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `is_verified` tinyint(1) NOT NULL,
  `is_banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `username`, `password`, `num_tel`, `rating`, `adresse`, `roles`, `is_verified`, `is_banned`) VALUES
(24, 'ahmed', 'hemden', '0000-00-00', 'khalilbenmzaker@gmail.com', '', '$2y$13$0zDxIwwy8ZXxm2dX70vb5eGlJ8GBOjtrXzlq3v1SQHDjDCOSwhD9e', 99195169, 0, 'tunis', '[\"ROLE_USER\"]', 0, 1),
(25, 'khalil', 'zakrawi', '0000-00-00', 'khalilbenmzaker@yahoo.fr', '', '$2y$13$1FnY11a7Du9kvov2ekMBnes/5vzRy0WNlX5acIssCulawWk/C7d7K', 99195169, 0, 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(26, 'aaa', 'bbbbbb', '0000-00-00', 'znajmzanej@es.tn', '', '$2y$13$DUGePeKbbXuKhL3sBOcWBuAcw.CxAcoa7NsRugiSEQWVgjxtzIrD.', 99195169, 0, 'tunis', '[\"ROLE_USER\"]', 0, 0),
(27, 'yemak', 'bebek', '0000-00-00', 'yemek.bebek@bebek.tn', '', '$2y$13$Y/J1eGNiaVkCRmR/db58Yu5S/vizDFWgravMrBMMBe9m8C19NL6Ei', 99195169, 0, 'tunis', '[\"ROLE_USER\"]', 0, 0),
(28, 'aaaa', 'bbbbbb', '0000-00-00', 'aaaaaa@email.cn', '', '$2y$13$FWJFQKzUvQf0B5CEGilIq.fYN3pJ7XVPfB/g1r2TMuBxxXoS8JbuO', 99195169, 0, 'tunis', '[\"ROLE_USER\"]', 0, 0),
(29, 'aaa', 'bbb', '0000-00-00', 'khalil@es.com', '', '$2y$13$1cupPGREoZ5nZFn1gE8qzun83Y8Lr35WjWiaMtHbh3nQfyJL0CPyS', 99425543, 0, 'tunis', '[\"ROLE_USER\"]', 0, 0),
(30, 'aaa', 'bbbb', '0000-00-00', 'terter@es.t', '', '$2y$13$KRggtgSrIJuIf9.NsFqq8u6wlfKXW2pecp94fnFaBc7PirDjrmZFq', 99195169, 0, 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(42, 'aaa', 'aaaa', '0000-00-00', 'hmaidi185@gmail.com', '', '$2y$13$SywohtIP4TAQbEhmyamS6uoW93n4O8kDLjwbJSFVUM6zmtbHkcjF2', 99195169, 0, 'bizert', '[\"ROLE_ADMIN\"]', 0, 0),
(43, 'chorfa', 'kefi', '0000-00-00', 'chaabaniachref212@gmail.com', '', '$2y$13$TOLA1pnUbLB4nxxjQ/tjYeYRusBoz3K1wH8/vMQuERLTjjTAWh8dC', 99195169, 0, 'kef', '[\"ROLE_ADMIN\"]', 0, 0),
(44, 'aaa', 'aaaa', '0000-00-00', 'mohamedkhalil.benmzaker@esprit.tn', '', '$2y$13$Yz6hDjX01jcrEdj/Gh7Fm.9AEcydddipK5ceSQZgWcicQxJeiDAVy', 99195169, 0, 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(45, 'znaj', 'mzanej', '0000-00-00', 'aa@aa.aa', '', '$2y$13$x3ljmbeiA3TiWU/cUN5rROzqj6/yVcUTwfXfty4OTWzgYqHkbEQq.', 99195169, 0, 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(46, 'znaj', 'aznej', '0000-00-00', 'bb.bb@bb.bb', '', '$2y$13$V8aatVsBGYZVJ4Lw93ZKfedjHu1nGaIAo5gFrD0QWlNVv97PYz6Ve', 55555555, 0, 'tunis', '[\"ROLE_ADMIN\"]', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC278C3F6162` (`nom_categori_id`);

--
-- Indexes for table `reduction`
--
ALTER TABLE `reduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC278C3F6162` FOREIGN KEY (`nom_categori_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
