<?php

   
try {
    $pdo = new PDO('sqlite:'. dirname(__FILE__) . '/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(150) NOT NULL,
    content TEXT NOT NULL
    )');

    if(!empty($_POST['username']) && !empty($_POST['content']))
    {
        $username = htmlspecialchars($_POST['username']);
        $content = htmlspecialchars($_POST['content']);

        $statement= $pdo->prepare('INSERT INTO comment (username, content) VALUES (:username,:content)');

        $statement->bindValue(':username', $username);
        $statement->bindValue(':content', $content);
        $statement->execute();
        header('Location:http://localhost:8080?reg_err=success');
    }



} catch (Exception $exception) {
    var_dump($exception->getMessage());
}
