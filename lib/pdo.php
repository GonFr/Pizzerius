<?php
try {
    $pdo = new PDO("mysql:host=localhost;", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `pizzerius`");
    $pdo = new PDO("mysql:host=localhost;dbname=pizzerius", 'root', '');
    $pdo->exec('CREATE TABLE IF NOT EXISTS pizzas (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(500),
        littlepizzaprice  DECIMAL (20,2),
        bigpizzaprice  DECIMAL (20,2),
        ingredients VARCHAR(500),
        type VARCHAR(50) DEFAULT NULL
        )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(254) NOT NULL UNIQUE,
        password VARCHAR(60) NOT NULL
        )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS commentarea (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(500),
        comments  VARCHAR(500)
        )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS schedules (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        schedule VARCHAR(150)
        )');
       
    $hashedPassword = password_hash("pizzerius", PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare('INSERT IGNORE INTO users (`id`, `email`, `password`) VALUES (?, ?, ?);');
    $stmt->execute([1, "admin@pizzerius.fr", $hashedPassword]);

    $stmt = $pdo->prepare('INSERT IGNORE INTO commentarea (`id`, `name`, `comments`) VALUES (?, ?, ?);');
    $stmt->execute([1, "Fred", "Les meilleures pizzas de ma vie"]);

    $stmt = $pdo->prepare("INSERT IGNORE INTO schedules (`id`, `schedule`) VALUES (1, '7j/7 11h/23h');");
    $stmt->execute();

    $stmt = $pdo->prepare("INSERT IGNORE INTO pizzas (`id`, `name`, `littlepizzaprice`, `bigpizzaprice`, `ingredients`, `type`) VALUES (?, ?, ?, ?, ?, ?);");
    $stmt->execute([1, "Pizza des Dieux", 13, 17, "Crème fraîche, Mâche, Champignons, Morue","Gourmande"]);
    $stmt->execute([2, "Pizza Saumoneta", 11, 16, "Tomates, Mozzarella, Oignons, Saumon","Basique"]);
    
}
    catch (PDOException $e) {
    die($e->getMessage()); 
    // echo "La connexion avec la base de donnée à échouée";
}






