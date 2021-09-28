-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 sep. 2021 à 22:13
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tarik`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `paword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `paword`) VALUES
(1, 'tarik', 'tarikibnckhe@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `auteur` text NOT NULL,
  `image` text NOT NULL,
  `duration` text NOT NULL,
  `langue` text NOT NULL,
  `niveaux` text NOT NULL,
  `prix` text NOT NULL,
  `prixcours` text NOT NULL,
  `statas` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `name`, `description`, `auteur`, `image`, `duration`, `langue`, `niveaux`, `prix`, `prixcours`, `statas`) VALUES
(17, 'html', 'HTML est le langage de balisage standard pour les pages Web. Avec HTML, vous pouvez créer votre propre site Web. HTML est facile à apprendre - vous l\'apprécierez !', 'mohamed said ', '../html.png', '2h', 'francais', 'debutant', 'gratuit', '150dh', '0'),
(18, 'css', 'CSS est le langage que nous utilisons pour styliser un document HTML. CSS décrit comment les éléments HTML doivent être affichés. Ce tutoriel vous apprendra CSS de base à avancé.', 'salima zaydi', '../css.png', '5h', 'arabe', 'intermédiaire', 'gratuit', '200dh', '0'),
(19, 'javascripts', 'JavaScript est le langage de programmation le plus populaire au monde.\r\nJavaScript est le langage de programmation du Web.JavaScript est facile à apprendre.', 'hamida bouzide', '../js.png', '3h', 'arabe', 'intermédiaire', 'paiement', '350dh', '0'),
(20, 'bootstrap', 'qui est le framework HTML, CSS et JavaScript le plus populaire pour développer des sites Web réactifs et mobiles.', 'zahmidi nabil', '../bootstrap.jpg', '2h', 'arabe', 'debutant', 'gratuit', '200dh', '0'),
(21, 'mathematique ', 'cette cours dedie les etudient de deuxieme anne bac scientifique', 'tarik ibn chekh', '../math.jpg', '5h', 'arabe', 'intermédiaire', 'gratuit', '200dh', '0'),
(22, 'physique', 'cette cours dedie les etudient de deuxieme anne bac scientifique', 'mohamed alaouui', '../physique.jpg', '5h', 'francais', 'intermédiaire', 'paiement', '300dh', '0');

-- --------------------------------------------------------

--
-- Structure de la table `etudient`
--

CREATE TABLE `etudient` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `image` text NOT NULL,
  `idmatiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudient`
--

INSERT INTO `etudient` (`id`, `nom`, `prenom`, `email`, `pass`, `image`, `idmatiere`) VALUES
(35, ' ibn chekh', 'tarik', 'tarikibnchekh1996@gmail.com', '123', '../tariki.jpg', 0),
(36, 'mohamed', 'zaydi', 'exemple@gmail.com', '123', '../moha.jpg', 0),
(37, 'abdrahim', 'zaytoni', 'zaytoni@gmail.com', 'tanger', '', 0),
(38, 'tarik', 'mahe', 'mahele@gmail.com', 'tanger', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `nomcours` text NOT NULL,
  `lien` text NOT NULL,
  `type` text NOT NULL,
  `idcours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nomcours`, `lien`, `type`, `idcours`) VALUES
(4, 'html', 'videos/13 - HTML_ Exposant et indice.mp4', 'francais', 0);

-- --------------------------------------------------------

--
-- Structure de la table `prendre`
--

CREATE TABLE `prendre` (
  `idetudient` int(11) NOT NULL,
  `idcours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudient`
--
ALTER TABLE `etudient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2` (`idmatiere`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcours` (`idcours`);

--
-- Index pour la table `prendre`
--
ALTER TABLE `prendre`
  ADD KEY `idetudient` (`idetudient`),
  ADD KEY `idcours` (`idcours`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `etudient`
--
ALTER TABLE `etudient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `prendre`
--
ALTER TABLE `prendre`
  ADD CONSTRAINT `prendre_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `prendre_ibfk_2` FOREIGN KEY (`idetudient`) REFERENCES `etudient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
