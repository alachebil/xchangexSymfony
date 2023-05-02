-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mai 2023 à 23:52
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `integ`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(2, 'homme'),
(8, 'bekri');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230501193204', '2023-05-01 21:32:09', 95),
('DoctrineMigrations\\Version20230501193315', '2023-05-01 21:33:19', 13),
('DoctrineMigrations\\Version20230501193623', '2023-05-01 21:36:27', 79),
('DoctrineMigrations\\Version20230501193804', '2023-05-01 21:38:08', 68),
('DoctrineMigrations\\Version20230501194027', '2023-05-01 21:40:30', 51),
('DoctrineMigrations\\Version20230501194120', '2023-05-01 21:41:23', 75),
('DoctrineMigrations\\Version20230501204513', '2023-05-01 22:45:38', 31),
('DoctrineMigrations\\Version20230501204707', '2023-05-01 22:47:12', 78),
('DoctrineMigrations\\Version20230501210500', '2023-05-01 23:05:04', 165);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `nom_event` varchar(255) NOT NULL,
  `type_event` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image_event` varchar(255) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `nb_participants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom_event`, `type_event`, `date`, `image_event`, `description_event`, `nb_participants`) VALUES
(11, 'aziz', 'aziz', '2025-06-12', '2b85e9d1257611302fa1580a67785897.png', 'azizzff', 121),
(12, 'emna', 'chelly', '2018-01-01', '12f76e81a66e87bb9a4a0852da992933.png', 'ksibet Sousse', 100);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `date_liv` date NOT NULL,
  `type_liv` varchar(255) NOT NULL,
  `adress_liv` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `date_liv`, `type_liv`, `adress_liv`, `produit`, `user_id`) VALUES
(1, '2018-01-01', 'aziz', 'aziz', 'aziz', NULL),
(2, '2018-01-01', 'aziz', 'aziz', 'aziz', NULL),
(3, '2018-01-01', 'aziz', 'aziz', 'aziz', 24),
(4, '2018-01-01', 'aziz', 'aziz', 'aziz', 24),
(5, '2018-01-01', 'ayman', 'sousse', 'Ayman', 24),
(6, '2018-01-01', 'syrine', 'syrine', 'syrine', 24),
(7, '2018-01-01', 'emna', 'emna', 'emna', 47);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `nom_liv` varchar(255) NOT NULL,
  `prenom_liv` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id`, `num`, `nom_liv`, `prenom_liv`, `localisation`) VALUES
(1, 12345678, 'aziz', 'aziz', 'sousse');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
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
-- Structure de la table `participation`
--

CREATE TABLE `participation` (
  `id` int(11) NOT NULL,
  `date_part` date NOT NULL,
  `evenement_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`id`, `date_part`, `evenement_id`, `user_id`) VALUES
(2, '2018-01-01', 11, 24),
(3, '2018-01-01', 11, 24),
(4, '2018-01-01', 11, 24),
(5, '2018-01-01', 11, 47);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
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
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `image_name`, `decription`, `prix`, `nom_categori_id`) VALUES
(13, 'new shomise', '64463caa0a7cf.png', 'new', 99, 2),
(16, 'chyzz', '644d4636e3e2d.png', 'NOVEL', 100, 2),
(17, 'MOOTAZ', '644d46803ebf1.png', 'AZEDAZE', 100, 8);

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

CREATE TABLE `reduction` (
  `id` int(11) NOT NULL,
  `valeur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `is_verified` tinyint(1) NOT NULL,
  `is_banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `num_tel`, `adresse`, `roles`, `is_verified`, `is_banned`) VALUES
(24, 'ahmed', 'hemden', 'khalilbenmzaker@gmail.com', '$2y$13$0zDxIwwy8ZXxm2dX70vb5eGlJ8GBOjtrXzlq3v1SQHDjDCOSwhD9e', '99195169', 'tunis', '[\"ROLE_USER\"]', 0, 1),
(25, 'khalil', 'zakrawi', 'khalilbenmzaker@yahoo.fr', '$2y$13$1FnY11a7Du9kvov2ekMBnes/5vzRy0WNlX5acIssCulawWk/C7d7K', '99195169', 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(26, 'aaa', 'bbbbbb', 'znajmzanej@es.tn', '$2y$13$DUGePeKbbXuKhL3sBOcWBuAcw.CxAcoa7NsRugiSEQWVgjxtzIrD.', '99195169', 'tunis', '[\"ROLE_USER\"]', 0, 0),
(27, 'yemak', 'bebek', 'yemek.bebek@bebek.tn', '$2y$13$Y/J1eGNiaVkCRmR/db58Yu5S/vizDFWgravMrBMMBe9m8C19NL6Ei', '99195169', 'tunis', '[\"ROLE_USER\"]', 0, 0),
(28, 'aaaa', 'bbbbbb', 'aaaaaa@email.cn', '$2y$13$FWJFQKzUvQf0B5CEGilIq.fYN3pJ7XVPfB/g1r2TMuBxxXoS8JbuO', '99195169', 'tunis', '[\"ROLE_USER\"]', 0, 0),
(29, 'aaa', 'bbb', 'khalil@es.com', '$2y$13$1cupPGREoZ5nZFn1gE8qzun83Y8Lr35WjWiaMtHbh3nQfyJL0CPyS', '99425543', 'tunis', '[\"ROLE_USER\"]', 0, 0),
(30, 'aaa', 'bbbb', 'terter@es.t', '$2y$13$KRggtgSrIJuIf9.NsFqq8u6wlfKXW2pecp94fnFaBc7PirDjrmZFq', '99195169', 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(42, 'aaa', 'aaaa', 'hmaidi185@gmail.com', '$2y$13$SywohtIP4TAQbEhmyamS6uoW93n4O8kDLjwbJSFVUM6zmtbHkcjF2', '99195169', 'bizert', '[\"ROLE_ADMIN\"]', 0, 0),
(43, 'chorfa', 'kefi', 'chaabaniachref212@gmail.com', '$2y$13$TOLA1pnUbLB4nxxjQ/tjYeYRusBoz3K1wH8/vMQuERLTjjTAWh8dC', '99195169', 'kef', '[\"ROLE_ADMIN\"]', 0, 0),
(44, 'aaa', 'aaaa', 'mohamedkhalil.benmzaker@esprit.tn', '$2y$13$Yz6hDjX01jcrEdj/Gh7Fm.9AEcydddipK5ceSQZgWcicQxJeiDAVy', '99195169', 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(45, 'znaj', 'mzanej', 'aa@aa.aa', '$2y$13$x3ljmbeiA3TiWU/cUN5rROzqj6/yVcUTwfXfty4OTWzgYqHkbEQq.', '99195169', 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(46, 'znaj', 'aznej', 'bb.bb@bb.bb', '$2y$13$V8aatVsBGYZVJ4Lw93ZKfedjHu1nGaIAo5gFrD0QWlNVv97PYz6Ve', '55555555', 'tunis', '[\"ROLE_ADMIN\"]', 0, 0),
(47, 'ala', 'chebil', 'ala.chebil@esprit.tn', '$2y$13$QV2q3uWF4wynriseKw9DDulKuxpcp5bNtvsyE5jpW.HARog6SmDo6', '123345678', 'tunis', '[\"ROLE_USER\"]', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A60C9F1FA76ED395` (`user_id`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AB55E24FFD02F13` (`evenement_id`),
  ADD KEY `IDX_AB55E24FA76ED395` (`user_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC278C3F6162` (`nom_categori_id`);

--
-- Index pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `FK_A60C9F1FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `FK_AB55E24FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_AB55E24FFD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC278C3F6162` FOREIGN KEY (`nom_categori_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
