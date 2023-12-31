<?php
require_once('templates/header.php');

$sqlQuery = 'SELECT * FROM pizzas';
$pizzaStatement = $pdo->prepare($sqlQuery);
$pizzaStatement->execute();
$pizzas = $pizzaStatement->fetchAll();
?>

<!-- Titre Carte -->
<div class="container-fluid">
    <h1 class="maintitle text-center">Vous désirez <strong>emporter</strong> une délicieuse <strong>pizza</strong> ?</h1>
    <h2 class="secondarytitle">Notre carte saura vous ravir</h2>
    <p class="fs-5">Chez <strong>Pizzerius</strong>, nous vous proposons un choix de <strong>pizza</strong> restreint qui vous assure un savoir-faire maîtrisé ainsi qu'un goût incomparable !</p>
</div>

<!-- Filtre JS form -->
<div class="container-fluid">
    <label for="typeFilter">Filtrer par type :</label>
    <select id="typeFilter">
        <option value="">Tous</option>
        <option value="Basique">Basique</option>
        <option value="Gourmande">Gourmande</option>
    </select>
</div>

<?php
foreach ($pizzas as $pizza) {
?>
<article>
    <div class="container-fluid border-bottom border-1 border-dark pizza-item" data-pizzatype="<?php echo htmlspecialchars($pizza['type']); ?>">
        &nbsp;
        <h1 class="namepizza"><?php echo $pizza['name']; ?></h1>
        <div>
            <span class="fs-5 fw-bold textcolor typepizza">Type : </span><?php echo $pizza['type']; ?></span><br>
            <span class="fs-5 fw-bold textcolor">Ingrédients : </span><?php echo $pizza['ingredients']; ?></span><br>
            <span class="fw-bold textcolor">petite : </span><?php echo $pizza['littlepizzaprice']; ?> €</span><br>
            <span class="fw-bold textcolor">grande : </span><?php echo $pizza['bigpizzaprice']; ?> €</span>
        </div>
    </div>
</article>
<?php
}
?>

<script src="js/filter.js"></script>

<?php
require_once('templates/footer.php');
?>
