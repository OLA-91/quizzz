<?php

include '../utils/bdd_quizz.php';

if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {

    $pseudo = $_POST["pseudo"];

    include "./process_verifUtilisateurs.php";

    if ($verif->rowCount() > 0) {
        header("location: ../quizz.php?error=Vous revoila déjà...");
    } else {
        header("location: ../formulaire_inscription.php?error=Désole je vous connais pas... Je vous invite a vous inscrire");
    }
} else {
    header("location: ../quizz/index.php?error=Le formulaire n'est pas valide !");
}