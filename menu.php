<?php
    require_once('templates/header.php');
    
?>

&nbsp; 
<div class="container-fluid">
    <h1 class="maintitle text-center">Vous désirez <strong>emporter</strong> une délicieuse <strong>pizza</strong> ?</h1>
    <h2 class="secondarytitle">Notre carte saura vous ravir</h2>
    <p class="fs-5">Chez <stong>Pizzerius</strong>, nous vous proposons un choix de <strong>pizza</strong> restreint qui vous assure un savoir-faire maîtrisé ainsi qu'un goût incomparable !</p>
</div>

<?php 
// require_once('lib/addpizza.php');
// On récupère tout le contenu de la table pizzas
$sqlQuery = 'SELECT * FROM pizzas';
$pizzaStatement = $pdo->prepare($sqlQuery);
$pizzaStatement->execute();
$pizzas = $pizzaStatement->fetchAll();
?>


<?php
// On affiche chaque pizza une à une
foreach ($pizzas as $pizza) {
?>


<div class="container-fluid border-bottom border-1 border-dark">
&nbsp;
<h1 class="namepizza"><?php echo $pizza['name']; ?></h1>
<div>
    <span class="fs-5 fw-bold textcolor">Ingrédients : </span><?php echo $pizza['ingredients']; ?></span><br>
    <span class="fw-bold textcolor">petite : </span><?php echo $pizza['littlepizzaprice']; ?> €</span><br>
    <span class="fw-bold textcolor">grande : </span><?php echo $pizza['bigpizzaprice']; ?> €</span>
</div>

</div>


<?php
} ?>





<?php
require_once('templates/footer.php');
?>
