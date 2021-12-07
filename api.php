<?php

// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal

try {
    $pdo = new PDO('mysql:monserveur');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(150) NOT NULL,
    content TEXT NOT NULL
)');

    $comment = $pdo->query('SELECT * FROM comment')
                   ->fetchAll();

    echo json_decode($comment);
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}
