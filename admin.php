<?php
ob_start();
require_once('templates/header.php');

if (!isset($_SESSION['user']) || empty($_SESSION['user']['email'])) {
    header('Location: login.php');
    exit;
} else {
    require_once('lib/addadmin.php');
    require_once('lib/addpizza.php');
    require_once('lib/modifyschedule.php');
}
?>

<!-- Ajouter un administrateur -->
<section>
    <h1 class="titleadmin text-center">Ajouter un administrateur</h1>

    <form method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="email" class="form-label titlelabel">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label titlelabel">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <input type="submit" value="Ajouter" name="addUser" class="btn btn-primary btnadmin">

    </form>

    <!-- Changer l'horaire -->
    <h2 class="titleadmin text-center">Modifier les horaires de la pizzeria</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="schedule" class="form-label titlelabel">Horaires</label>
            <input type="text" name="schedule" id="schedule" class="form-control">
        </div>
        <input type="submit" value="Modifier" name="addschedule" class="btn btn-primary btnadmin">
    </form>

    <!-- Créer une nouvelle pizza -->
    <h3 class="titleadmin text-center">Enregistrer une nouvelle Pizza</h1>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label titlelabel">Nom de la pizza</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="littlepizzaprice" class="form-label titlelabel">Prix de la petite pizza</label>
            <input type="text" name="littlepizzaprice" id="littlepizzaprice" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bigpizzaprice" class="form-label titlelabel">Prix de la grande pizza</label>
            <input type="text" name="bigpizzaprice" id="bigpizzaprice" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label titlelabel">Liste des ingrédients séparés par des virgules</label>
            <input type="text" name="ingredients" id="ingredients" class="form-control">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label titlelabel">Type de la pizza</label>
            <select name="type" id="type" class="form-select">
                <option value="Basique">Basique</option>
                <option value="Gourmande">Gourmande</option>
            </select>
        </div>
        <input type="submit" value="Enregistrer" name="addpizza" class="btn btn-primary btnadmin">
    </form>

    <div class="text-center">
    <a href="logout.php" class="btn btn-primary btnadmin">Se déconnecter</a>
    </div>
</section>


<?php
ob_end_flush();
require_once('templates/footer.php');
?>


