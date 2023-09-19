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
