-- phpMyAdmin SQL Dump 
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 06 fév. 2026 à 15:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_url=mysql://root:@127.0.0.1:3306/projet_php_gras_leo`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `speed` int(11) NOT NULL,
  `armor` int(11) NOT NULL,
  `gadget` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `name`, `role`, `speed`, `armor`, `gadget`, `description`, `image`) VALUES
(1, 'Ash', 'Attaquant', 3, 1, 'Lance-grenades M120 CREM - Tire des explosifs à distance pour créer des brèches', 'Ash est une opératrice rapide et agressive. Son lance-grenades lui permet de créer des ouvertures à distance, idéal pour une approche dynamique.', 'https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/18dWpBXN0JJxBkFFnUzHoC/7d01d82f4a65f93e92c1a33ef9f04d25/r6s-operators-list-ash.png'),
(2, 'Thermite', 'Attaquant', 2, 2, 'Charge exothermique - Permet de percer des murs renforcés', 'Thermite est essentiel pour percer les défenses renforcées. Sa charge exothermique peut détruire les murs renforcés, créant des voies d\'accès stratégiques.', 'https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1GVKKEqRTKOsO6T2pUiuDK/4f1e3cca3ac0e3c0d6f6b5d6c0e6f9c0/r6s-operators-list-thermite.png'),
(3, 'Sledge', 'Attaquant', 2, 2, 'Marteau de démolition \"The Caber\" - Détruit les surfaces destructibles', 'Sledge utilise son marteau tactique pour créer rapidement des ouvertures dans les murs, plafonds et barricades, offrant une grande flexibilité tactique.', 'https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3sOKW2yCBFCGJVlOMvKEEq/7c8e3f5c7d8f6e5c8d9f0e1c2d3e4f5g/r6s-operators-list-sledge.png'),
(4, 'Thatcher', 'Attaquant', 2, 2, 'Grenades EMP - Désactive les dispositifs électroniques', 'Thatcher lance des grenades EMP qui désactivent temporairement tous les gadgets électroniques dans leur rayon d\'action, facilitant les brèches.', NULL),
(5, 'IQ', 'Attaquant', 3, 1, 'Détecteur électronique RED Mk III - Détecte les appareils électroniques', 'IQ utilise son scanner pour détecter les gadgets électroniques ennemis à travers les murs, permettant de les neutraliser stratégiquement.', NULL),
(6, 'Jäger', 'Défenseur', 3, 1, 'Système de défense active ADS - Intercepte les projectiles', 'Jäger déploie des systèmes ADS qui interceptent automatiquement les grenades et projectiles ennemis, protégeant la zone défensive.', NULL),
(7, 'Bandit', 'Défenseur', 3, 1, 'Générateur d\'impulsions CED-1 - Électrifie les surfaces métalliques', 'Bandit électrifie les murs renforcés et fils barbelés, détruisant les gadgets ennemis qui tentent de les percer et infligeant des dégâts.', NULL),
(8, 'Mute', 'Défenseur', 2, 2, 'Brouilleur de signal GC90 \"Moni\" - Bloque les communications', 'Mute déploie des brouilleurs qui bloquent les drones, les brèches à distance et les communications dans leur rayon d\'action.', NULL),
(9, 'Rook', 'Défenseur', 1, 3, 'Sac d\'armures R1N \"Rhino\" - Fournit des plaques balistiques', 'Rook fournit des plaques d\'armure supplémentaires à toute l\'équipe, augmentant leur résistance aux dégâts et réduisant les chances de mort instantanée.', NULL),
(10, 'Doc', 'Défenseur', 1, 3, 'Pistolet de soins Stim - Soigne les alliés', 'Doc peut soigner ses coéquipiers à distance avec son pistolet de soins, et même se ranimer lui-même s\'il est mis à terre.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20260129141800', '2026-01-29 15:20:36', 97);

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `map`
--

INSERT INTO `map` (`id`, `name`, `mode`, `location`, `description`, `image`) VALUES
(1, 'Bank', 'Bomb', 'Los Angeles, USA', 'Une banque urbaine avec plusieurs étages. Combine espaces ouverts et couloirs étroits. Les défenseurs peuvent fortifier le coffre-fort et les bureaux administratifs.', NULL),
(2, 'Consulate', 'Bomb', 'Abidjan, Côte d\'Ivoire', 'Un consulat avec architecture moderne. Offre de multiples points d\'entrée et rotations complexes. Les étages supérieurs et le garage sont des zones clés.', NULL),
(3, 'Oregon', 'Bomb', 'Oregon, USA', 'Une résidence fortifiée entourée de forêts. Mix d\'espaces intérieurs et extérieurs. Le sous-sol et les dortoirs sont des sites de défense populaires.', NULL),
(4, 'Clubhouse', 'Bomb', 'Hereford Base, Angleterre', 'Un club de motards avec plusieurs bâtiments connectés. Design compact favorisant les affrontements rapprochés. Le garage et la cave sont stratégiques.', NULL),
(5, 'Villa', 'Bomb', 'Lac de Côme, Italie', 'Une luxueuse villa italienne avec jardins. Architecture élégante avec multiples étages. Les points de défense incluent le salon et les salles astronomie/jeux.', NULL),
(6, 'Kafe Dostoyevsky', 'Bomb', 'Moscou, Russie', 'Un café russe traditionnel. Trois étages avec toiture accessible. Mix d\'espaces ouverts et de couloirs labyrinthiques. Le bar et la boulangerie sont des sites clés.', NULL);

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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`) VALUES
(1, 'leo.gras521@gmail.com', '[]', '$2y$13$PRr5Ya2SrXoaWjeBO/djbeJtdl90XyX9lBdoRQClG8B5qMJfyle4a', 'Frixn'),
(2, 'test@gmail.com', '[]', '$2y$13$SaRCotm0QfVoV0YPSR0Ss.xO5bXKuckHzVsvb6Z/H.QD2lsb9LMjq', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`);

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
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
