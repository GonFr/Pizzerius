<?php

$errors = [];
$messages = [];

try {
    try {
        function addpizza(PDO $pdo, string $name, $littlepizzaprice, $bigpizzaprice, string $ingredients, string $type)
        {
            $sql = "INSERT INTO `pizzas` (`name`, `littlepizzaprice`, `bigpizzaprice`, `ingredients`, `type`) VALUES (:name, :littlepizzaprice, :bigpizzaprice, :ingredients, :type);";
            $query = $pdo->prepare($sql);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':littlepizzaprice', $littlepizzaprice, PDO::PARAM_STR);
            $query->bindParam(':bigpizzaprice', $bigpizzaprice, PDO::PARAM_STR);
            $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
            $query->bindParam(':type', $type, PDO::PARAM_STR);
            return $query->execute();
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    if (isset($_POST['addpizza'])) {
        $name = $_POST['name'];
        $littlepizzaprice = $_POST['littlepizzaprice'];
        $bigpizzaprice = $_POST['bigpizzaprice'];
        $ingredients = $_POST['ingredients'];
        $type = $_POST['type'];

        
        if (!is_numeric($littlepizzaprice) || !is_numeric($bigpizzaprice)) {
            $errors[] = 'Les prix doivent être des nombres.';
        } else {
            $msg = addpizza($pdo, $_POST['name'], $littlepizzaprice, $bigpizzaprice, $_POST['ingredients'], $_POST['type']);

            if ($msg) {
                $messages[] = 'La pizza a bien été ajoutée';
            } else {
                $errors[] = 'Une erreur s\'est produite lors de l\'ajout de la pizza';
            }
        }
    }
}   catch (PDOException $e) {
    die($e->getMessage());
}

?>

<?php
//Supprimer une pizza
if (isset($_POST['deletePizza'])) {
    $deletePizza = $_POST['deleteName'];

    $sql = "DELETE FROM pizzas WHERE name = :name";
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $deletePizza, PDO::PARAM_STR);

    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $messages[] = 'La pizza a bien été supprimée.';
        } else {
            $errors[] = 'Cette pizza n\'existe pas.';
        }
    } else {
        $errors[] = 'La suppression de la pizza a échoué.';
    }
}
?>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($message); ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?= htmlspecialchars($error); ?>
    </div>
<?php } ?>


