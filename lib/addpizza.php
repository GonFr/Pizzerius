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
$po = addpizza($pdo, $_POST['name'], $_POST['littlepizzaprice'], $_POST['bigpizzaprice'], $_POST['ingredients']);

if ($po) {
    $messages[] = 'La pizza a bien été ajouté';
} else {
    $errors[] = 'Une erreur s\'est produite lors de votre inscription';
}

}

?>

<h1>Enregistrer une nouvelle Pizza</h1>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?=$error; ?>
    </div>
<?php } ?>


<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Nom de la pizza</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="littlepizzaprice" class="form-label">Prix de la petite pizza</label>
        <input type="text" name="littlepizzaprice" id="littlepizzaprice" class="form-control">
    </div> 
    <div class="mb-3">
        <label for="bigpizzaprice" class="form-label">Prix de la grande pizza</label>
        <input type="text" name="bigpizzaprice" id="bigpizzaprice" class="form-control">
    </div> 
    <div class="mb-3">
        <label for="ingredients" class="form-label">Liste des ingrédients séparés par des virgules</label>
        <input type="text" name="ingredients" id="ingredients" class="form-control">
    </div> 
    <input type="submit" value="Enregistrer" name="addpizza" class="btn btn-primary">
</form>


