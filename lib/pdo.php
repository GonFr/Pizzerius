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
        email VARCHAR(500),
        password VARCHAR(500)
        )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS commentarea (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(500),
        comments  VARCHAR(500)
        )');
    $pdo->exec('INSERT IGNORE INTO users (`id`, `email`, `password`) VALUES ("1", "admin@pizzerius.fr", "pizzerius");');
        
    
}
    catch (PDOException $e) {
    die($e->getMessage()); 
    // echo "La connexion avec la base de donnée à échouée";
}






