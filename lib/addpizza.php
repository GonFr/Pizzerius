<?php

try {
    function addpizza(PDO $pdo,  string $name, float $littlepizzaprice, float $bigpizzaprice, string $ingredients) {
    $sql = "INSERT INTO `pizzas` ( `name`, `littlepizzaprice`, `bigpizzaprice`, `ingredients`) VALUES (:name, :littlepizzaprice, :bigpizzaprice, :ingredients);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':littlepizzaprice', $littlepizzaprice, PDO::PARAM_INT);
    $query->bindParam(':bigpizzaprice', $bigpizzaprice, PDO::PARAM_INT);
    $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
    return $query->execute(); 
}
} catch (PDOException $e) {
    die($e->getMessage());
}

$errors = [];
$messages = [];


if (isset($_POST['addpizza'])) {
// throw new Exception('Erreur, vous ne pouvez entrer que des chiffres');
$po = addpizza($pdo, $_POST['name'], $_POST['littlepizzaprice'], $_POST['bigpizzaprice'], $_POST['ingredients']);

if ($po) {
    $messages[] = 'La pizza a bien été ajouté';
} else {
    $errors[] = 'Une erreur s\'est produite lors de votre inscription';
}

}


// On récupère tout le contenu de la table pizzas
$sqlQuery = 'SELECT * FROM pizzas';
$pizzaStatement = $pdo->prepare($sqlQuery);
$pizzaStatement->execute();
$pizzas = $pizzaStatement->fetchAll();

?>