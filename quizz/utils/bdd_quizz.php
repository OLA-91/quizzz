<?php

try {
    $pdo = new PDO("mysql:host=57.128.65.58;dbname=ola_quizz;charset=utf8", "Olaalt", "3kIYuIvDuE");
} catch (Exception $s) {
    die('Erreur : ' . $s->getMessage());
}