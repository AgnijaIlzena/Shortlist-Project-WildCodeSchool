-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Octobre 2017 à 13:53
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simple-mvc`
--

CREATE DATABASE testDB;
USE testDB;
-- --------------------------------------------------------
--
-- Structure de la table `user`
--
CREATE TABLE `user` (
                        `id` int unsigned NOT NULL AUTO_INCREMENT,
                        `user_name` varchar(255) NOT NULL,
                        `email` varchar(255) NOT NULL,
                        `passowrd` varchar(255) NOT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1
--
-- Structure de la table `question`
--
CREATE TABLE `question` (
                            `id` int unsigned NOT NULL AUTO_INCREMENT,
                            `content` varchar(255) NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1
--
-- Structure de la table `Answer`
--
CREATE TABLE `Answer` (
                          `id` int unsigned NOT NULL AUTO_INCREMENT,
                          CONSTRAINT question_id FOREIGN KEY(id) REFERENCES question(id),
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1
--
--Structure de la table `url`
--
CREATE TABLE `user_history` (
                                `id` int unsigned NOT NULL AUTO_INCREMENT,
                                `user_id` varchar(255) NOT NULL,
                                `final_answer_url` varchar(255) NOT NULL,
                                `url_id` varchar(255) NOT NULL,
                                `date` DATETIME,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1
--
--Structure de la table `user_history`
--
CREATE TABLE `user_history` (
                                `id` int unsigned NOT NULL AUTO_INCREMENT,
                                CONSTRAINT `user_id` FOREIGN KEY (`id`) REFERENCES user(`id`),
                                `user_id` varchar(255) NOT NULL,
                                `final_answer_url` varchar(255) NOT NULL,
                                CONSTRAINT `url_id` FOREIGN KEY (`id`) REFERENCES url(`id`),
                                `date` DATETIME,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
                        `id` int(11) UNSIGNED NOT NULL,
                        `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `item`
--

INSERT INTO `item` (`id`, `title`) VALUES
                                       (1, 'Stuff'),
                                       (2, 'Doodads');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `item`
--
ALTER TABLE `item`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



