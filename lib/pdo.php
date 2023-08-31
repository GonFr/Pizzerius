<?php


try {
    $pdo = new PDO("mysql:host=localhost;", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `pizzerius`");
    $pdo = new PDO("mysql:host=localhost;dbname=pizzerius", 'root', '');
    $pdo->exec('CREATE TABLE IF NOT EXISTS pizzas (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(500),
        price  DECIMAL (20,2)
        )');
    $pdo->exec('CREATE TABLE IF NOT EXISTS pizdsdsqzas (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(500),
        price  DECIMAL (20,2)
        )');
    
}
catch (PDOException $e) {
    // die($exception->getMessage()); 
    
}

try {
    function addpizza(PDO $pdo,  string $title, float $price) {
    $sql = "INSERT INTO `pizzas` ( `title`, `price`) VALUES (:title, :price);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    // $query->bindParam(':kilometrage', $kilometrage, PDO::PARAM_STR);
    // $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute(); 
}
} catch (PDOException $e) {
    die($exception->getMessage());
}






//Add pizza


$errors = [];
$messages = [];
$menu = [
    'title' => '',
    'price' => '',
    // 'kilometrage' => '',
    // 'image' => '',
];



try {
if (isset($_POST['addpizza'])) {
    if (!$errors) {
        $res = addpizza($pdo, $_POST['title'], $_POST['price']);
        
        if ($res) {
            $messages[] = 'La pizza a bien été ajouté';
        } else {
            $errors[] = 'La pizza n\'a pas pu être ajoutée';
            }
    }

    $pizza = [
        'title' => $_POST['title'],
        'price' => $_POST['price'],
    ];

}
} catch (PDOException $e) {
    die($exception->getMessage());
}


?>

