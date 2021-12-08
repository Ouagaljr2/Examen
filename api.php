<?php

// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal

try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // j'ai supprimer cla partie creation de la table

    $comment = $pdo->query('SELECT content FROM comment')
                   ->fetchAll();

    echo json_decode($comment);
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}


