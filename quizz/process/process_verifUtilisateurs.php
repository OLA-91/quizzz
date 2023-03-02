<?php

$verif = $pdo->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
$verif->bindParam(":pseudo", $pseudo);
$verif->execute();
