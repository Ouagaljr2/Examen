<?php

// Fichier appelé pour insérer les commentaires dans la base de données

try {
    $pdo = new PDO('mysql:monserveur');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(150) NOT NULL,
    content TEXT NOT NULL
)');

    $pdo->query('INSERT INTO comment (username, content) 
VALUES ("' . $_POST["username"] . '", "' . $_POST["username"] . '")
');
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}
