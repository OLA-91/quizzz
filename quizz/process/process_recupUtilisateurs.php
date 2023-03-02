<?php

$utilisateursStatement = $pdo->prepare('SELECT * FROM utilisateurs');
$utilisateursStatement->execute();
$utilisateurs = $utilisateursStatement->fetchAll();


foreach ($utilisateurs as $utilisateur) {

    $pseudo = $utilisateur["pseudo"];
    $note = $utilisateur["note"];
}