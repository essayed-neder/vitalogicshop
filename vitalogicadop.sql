-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 nov. 2021 à 00:44
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vitalogicadop`
--

-- --------------------------------------------------------



CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'eco-friendly product'),
(2, 'All Pets products');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  
  `urlimage` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idcategorie` int(11) NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `animals` (`id`,   `urlimage`, `description`, `idcategorie`) VALUES
(12, 'Jouet SMILE ', 9, 100, 'https://animalzone.tn/342-large_default/felican-jouet-smile-latex-65-cm-1-piece-jouets-felican.jpg', 'Felican Jouet SMILE Latex 6,5 CM 1 pièce', 2, 'jouets animaux'),
(13, 'KIPPY CHIEN RIZ & AGNEAU ', 10, 57, 'https://animalzone.tn/293-large_default/kippy-chien-riz-agneau-1250-kg-humides-chien-kippy.jpg', 'KIPPY CHIEN RIZ & AGNEAU 1.250 KG', 2, 'alimentaire animaux'),
(14, 'Distributeur viola Bleu 1.5 L', 29, 42, 'https://animalzone.tn/91-large_default/distributeur-viola-bleu-15-l-gamelles-et-distributeurs-felican.jpg', 'Distributeur viola Bleu 1.5 L', 2, 'jouets animaux'),
(15, 'Jouets en Forme de Souris', 5, 298, 'https://animalzone.tn/2170-large_default/jouets-en-forme-de-souris-en-peluche-5-cm-jouets-chat-beeztees.jpg', 'Jouets en Forme de Souris en peluche 5 cm', 2, 'jouets animaux');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'neder1', '', 12345, 'admin'),
(2, 'neder2', '', 12345, 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--


--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `produits`
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
REATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Testing', 'email@email.com', 'Hello Everyone.'),
(2, 'abc', 'admin@localhost.com', '\'\r\n'),
(3, 'Musab Bin Abdul Bari', 'purecodingofficial@gmail.com', 'Hello Everyone. How are you. Please Subscribe Pure Coding YouTube Channel.'),
(4, 'ABC', 'abc@gmail.com', 'ABC');INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Testing', 'email@email.com', 'Hello Everyone.'),
(2, 'abc', 'admin@localhost.com', '\'\r\n'),
(3, 'Musab Bin Abdul Bari', 'purecodingofficial@gmail.com', 'Hello Everyone. How are you. Please Subscribe Pure Coding YouTube Channel.'),
(4, 'ABC', 'abc@gmail.com', 'ABC');
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
