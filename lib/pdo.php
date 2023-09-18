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
        ingredients VARCHAR(500)
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

    $hashedPassword = password_hash("pizzerius", PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare('INSERT IGNORE INTO users (`id`, `email`, `password`) VALUES (?, ?, ?);');
    $stmt->execute([1, "admin@pizzerius.fr", $hashedPassword]);
    
}
    catch (PDOException $e) {
    die($e->getMessage()); 
    // echo "La connexion avec la base de donnée à échouée";
}






