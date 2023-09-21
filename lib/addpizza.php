<?php

try {
    function addpizza(PDO $pdo, string $name, float $littlepizzaprice, float $bigpizzaprice, string $ingredients, string $type) {
        $sql = "INSERT INTO `pizzas` (`name`, `littlepizzaprice`, `bigpizzaprice`, `ingredients`, `type`) VALUES (:name, :littlepizzaprice, :bigpizzaprice, :ingredients, :type);";
        $query = $pdo->prepare($sql);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':littlepizzaprice', $littlepizzaprice, PDO::PARAM_INT);
        $query->bindParam(':bigpizzaprice', $bigpizzaprice, PDO::PARAM_INT);
        $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
        $query->bindParam(':type', $type, PDO::PARAM_STR);
        return $query->execute(); 
    }
} catch (PDOException $e) {
    die($e->getMessage());
}

$errors = [];
$messages = [];

if (isset($_POST['addpizza'])) {
    $po = addpizza($pdo, $_POST['name'], $_POST['littlepizzaprice'], $_POST['bigpizzaprice'], $_POST['ingredients'], $_POST['type']);

    if ($po) {
        $messages[] = 'La pizza a bien été ajoutée';
    } else {
        $errors[] = 'Une erreur s\'est produite lors de l\'ajout de la pizza';
    }
}
?>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?= $message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?= $error; ?>
    </div>
<?php } ?>



