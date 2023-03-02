-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:83
-- Généré le : mar. 24 jan. 2023 à 12:11
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste_questions`
--

CREATE TABLE `liste_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `reponse1` text NOT NULL,
  `reponse2` text NOT NULL,
  `reponse3` text NOT NULL,
  `bonneReponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste_questions`
--

INSERT INTO `liste_questions` (`id`, `question`, `reponse1`, `reponse2`, `reponse3`, `bonneReponse`) VALUES
(1, "Lequel de ces éléments sert à créer une nouvelle ligne dans un tableau HTML ?", "L'élément table", "L'élément tr", "L'élément td", "L'élément tr" ),
(2, "Quelle propriété CSS utilise t-on pour 'coller' les bordures d'un tableau ?", "La propriété border", "La propriété border-radius", "La propriété border-collapse", "La propriété border-collapse"),
(3, "Quel élément HTML sert à définir une ligne d'en tête pour notre tableau ?", "L'élément tr", "L'élément th", "L'élément thead", "L'élément thead"),
(4, "Lequel de ces éléments HTML sert à ajouter une légende à un tableau HTML ?", "L'élément legend", "L'élément figcaptionbr", "L'élément caption", "L'élément legend"),
(5, "Comment faire en sorte qu'une cellule occupe l'espace de trois colonnes dans un tableau HTML ?", "En utilisant (colspan ='3') ", "En utilisant (rowspan='3') ", "En écrivant deux cellules vides après cette cellule dans notre tableau", "En utilisant (colspan ='3') "),
(6, "Dans quel ordre écrit-on les éléments suivants généralement en HTML ?", "thead, tfoot puis tbody", "thead, tbody puis tfoot", "tbody, thead puis tfoot", "thead, tbody puis tfoot"),
(7, "Où est-il conseillé de placer le code CSS ?", "Dans un fichier JavaScript", "Dans un fichier externe utilisable pour plusieurs pages", "Dans le body", "Dans un fichier externe utilisable pour plusieurs pages"),
(8, "Combien de règles peut contenir un fichier CSS ?", "Il n'y a pas de limite", "150 à plus ou moins 10%", "Cela dépend des navigateurs", "Il n'y a pas de limite"),
(9, "Quel élément sépare la propriété de sa valeur en CSS ?", "Le signe deux points (:)", "Le signe égal (=)", "Le signe espace ( )", "Le signe deux points (:)"),
(10, "À quoi sert le langage CSS ?", "À réaliser des pages dynamiques", "À ajouter du style aux documents web", "À insérer du contenu dans une page internet", "À ajouter du style aux documents web"),
(11, "Quelle est la fonction utilisée pour afficher une valeur ou un message dans la console du navigateur ?", "document.log()", "console.log()", "browser.log()", "console.log()"),
(12, "Comment sélectionne-t-on un élément ID HTML ?", "document.getElementById()", "document.querySelector()", "document.select()", "document.getElementById()"),
(13, "Quel mot-clé est utilisé pour déclarer une variable en JavaScript ?", "vare", "let", "conste","let"),
(14, "Comment vérifie-t-on une condition et lance-t-on une action en conséquence en JavaScript ?", "if...else", "switch...case", "while...do", "if...else"),
(15, "Comment itère-t-on à travers un tableau en JavaScript ?", "for", "forEach", "while", "forEach"),
(16, "Comment déclare-t-on une fonction en JavaScript ?", "function myFunction() {}", "vare myFunction = function() {}", "function() {}", "function myFunction() {}"),
(17, "Comment change-t-on le contenu HTML d'un élément sélectionné en JavaScript ?", ".innerHTML", ".content", ".html",".innerHTML"),
(18, "Comment ajoute-t-on un écouteur d'événement à un élément HTML en JavaScript ?", ".addEvent()", ".addListener()", ".addEventListener()", ".addEvent()"),
(19, "Comment convertit-on une chaîne de caractères en un nombre entier en JavaScript ?", "parseInt()", "toInt()", "int()","parseInt()"),
(20, "Comment convertit-on une chaîne de caractères en un nombre à virgule flottante en JavaScript ?", "parseFloat()", "toFloat()", "float()", "parseFloat()");

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(55) NOT NULL,
  `note` int(11) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `liste_questions`
--
ALTER TABLE `liste_questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liste_questions`
--
ALTER TABLE `liste_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
