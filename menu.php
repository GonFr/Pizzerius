<?php
    require_once('templates/header.php');
    require_once('lib/addpizza.php');


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
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="text" name="price" id="price" class="form-control">
    </div> <!--
    <div class="mb-3">
        <label for="kilometrage" class="form-label">Kilométrage</label>
        <input type="text" name="kilometrage" id="kilometrage" class="form-control">
    </div> -->
    <input type="submit" value="Enregistrer" name="addpizza" class="btn btn-primary">


</form>

<?php
// On récupère tout le contenu de la table pizzas
$sqlQuery = 'SELECT * FROM pizzas';
$pizzaStatement = $pdo->prepare($sqlQuery);
$pizzaStatement->execute();
$pizzas = $pizzaStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($pizzas as $pizza) {
?>
    <p><?php echo $pizza['title']; ?></p>
    <p><?php echo $pizza['price']; ?></p>
<?php
}
?>

<?php
require_once('templates/footer.php');
?>
