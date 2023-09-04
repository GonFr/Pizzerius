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
require_once('lib/addpizza.php');
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



<?php
require_once('templates/footer.php');
?>
