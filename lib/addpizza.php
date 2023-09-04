<?php

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
    die($e->getMessage());
}

$errors = [];
$messages = [];


if (isset($_POST['addpizza'])) {
// throw new Exception('Erreur, vous ne pouvez entrer que des chiffres');
$po = addpizza($pdo, $_POST['title'], $_POST['price']);

if ($po) {
    $messages[] = 'La pizza a bien été ajouté';
} else {
    $errors[] = 'Une erreur s\'est produite lors de votre inscription';
}

}