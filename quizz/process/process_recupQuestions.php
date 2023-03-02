<?php

include "../utils/bdd_quizz.php";


// Sélectionnez une ligne aléatoire de la table
$resultaleatoire = $pdo->query("SELECT id FROM liste_questions ORDER BY RAND() LIMIT 1");

// Récupérer la ligne sélectionnée
$lignes = $resultaleatoire->fetch(PDO::FETCH_ASSOC);

// Récupérer l'ID de la ligne
$id = $lignes['id'];

// Sélectionnez les autres informations de la ligne en utilisant l'ID
$resultchoisi = $pdo->query("SELECT question, reponse1, reponse2, reponse3, bonneReponse 
                                FROM liste_questions
                                WHERE id = $id");
$ligne = $resultchoisi->fetch(PDO::FETCH_ASSOC);

// Utiliser les informations récupérées
$question = $ligne['question'];
$reponse1 = $ligne['reponse1'];
$reponse2 = $ligne['reponse2'];
$reponse3 = $ligne['reponse3'];
$bonneReponse = $ligne['bonneReponse'];

// envoie au fiche js lier
echo " <script>let bonneReponse = " . json_encode($bonneReponse) . ";</script>";

/*
// Les reponse posible dans un tableau
$reponsePossible = array('reponse1' => $reponse1, 'reponse2' => $reponse2, 'reponse3' => $reponse3);
// envoie du tableau
echo "<script>let reponsePossible = " . json_encode($reponsePossible) . ";</script>";
*/