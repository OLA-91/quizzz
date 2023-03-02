<?php

include '../utils/bdd_quizz.php';

if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {

    $pseudo = $_POST["pseudo"];

    include "./process_verifUtilisateurs.php";

    if ($verif->rowCount() > 0) {
        header("location: ../formulaire_inscription.php?error=Désolè le pseudo es deja utiliser !");
    } else {

        $pdostmnt = $pdo->prepare('INSERT INTO utilisateurs (pseudo) VALUES (?)');
        $isSuccess = $pdostmnt->execute([$_POST["pseudo"]]);

        if ($isSuccess) {
            header("location: ../quizz.php?succes=Votre pseudo à bien ete enregistre");
        } else {
            header("location: ../formulaire_inscription.php?error=Votre pseudo n'a pas ete enregistre !");
        }
    }
} else {
    header("location: ../formulaire_inscription.php?error=Le formulaire n'est pas valide !");
}