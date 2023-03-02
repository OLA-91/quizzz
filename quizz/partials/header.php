<?php

include '../utils/bdd_quizz.php';

?>


<!DOCTYPE html>
<html lang="fr">
<!-- *$* -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- *$* MY STYLE.CSS *$* -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Quizz Dev Web</title>
</head>

<body>
    <section class="grandTitre">
        <article class="logo">
            <img src="../asset/img/Logo_Modif_S.png" alt="Logo Quizz">
        </article>
        <article class="titre">
            <div class="inclineGauche">!</div>
            <h1>QUIZZ</h1>
            <div class="inclineDroite">!</div>
        </article>
        <article class="utilisateur">
            <?php if (isset($pseudo) && !empty($pseudo)) { ?>
                <p>
                    <? echo $pseudo ?>
                </p>
            <?php } else { ?>
                <p>Bonjour</p>
            <?php } ?>
            <a href="/mydoc/quizz/score.php"><button>Classment</button></a>
        </article>
    </section>