<?php
ob_start();
require_once('templates/header.php');

if (!isset($_SESSION['admin']) || empty($_SESSION['admin']['email'])) {
    header('Location: login.php');
    exit;
} else {
    require_once('lib/add&deladmin.php');
    require_once('lib/add&delpizza.php');
    require_once('lib/modifyschedule.php');
    require_once('lib/delcomments.php');
    require_once('lib/addcomments.php');
}
?>

<!-- Ajouter un administrateur -->
<section>
    <h1 class="titleadmin text-center">Ajouter un administrateur</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label titlelabel">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label titlelabel">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <input type="submit" value="Ajouter" name="addAdmin" class="btn btn-primary btnadmin">
    </form>

    <!-- Changer l'horaire -->
    <h2 class="titleadmin text-center">Modifier les horaires de la pizzeria</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="schedule" class="form-label titlelabel">Horaires</label>
            <input type="text" name="schedule" id="schedule" class="form-control" value="<?= htmlspecialchars($_POST['schedule'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <input type="submit" value="Modifier" name="addschedule" class="btn btn-primary btnadmin">
    </form>

    <!-- Créer une nouvelle pizza -->
    <h3 class="titleadmin text-center">Enregistrer une nouvelle Pizza</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label titlelabel">Nom de la pizza</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="mb-3">
            <label for="littlepizzaprice" class="form-label titlelabel">Prix de la petite pizza</label>
            <input type="text" name="littlepizzaprice" id="littlepizzaprice" class="form-control" value="<?= htmlspecialchars($_POST['littlepizzaprice'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="mb-3">
            <label for="bigpizzaprice" class="form-label titlelabel">Prix de la grande pizza</label>
            <input type="text" name="bigpizzaprice" id="bigpizzaprice" class="form-control" value="<?= htmlspecialchars($_POST['bigpizzaprice'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label titlelabel">Liste des ingrédients séparés par des virgules</label>
            <input type="text" name="ingredients" id="ingredients" class="form-control" value="<?= htmlspecialchars($_POST['ingredients'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
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

    <!-- Supprimer un administrateur -->
    <h5 class="titleadmin text-center">Supprimer un administrateur</h5>
    <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="deleteEmail" class="form-label titlelabel">Email de l'administrateur à supprimer</label>
        <input type="email" name="deleteEmail" id="deleteEmail" class="form-control" required>
    </div>
    <input type="submit" value="Supprimer" name="deleteAdmin" class="btn btnadmin">
    </form>

    <!-- Supprimer une pizza -->
    <h5 class="titleadmin text-center">Supprimer une pizza</h5>
    <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="deleteName" class="form-label titlelabel">Nom de la pizza à supprimer</label>
        <input type="text" name="deleteName" id="deleteName" class="form-control" required>
    </div>
    <input type="submit" value="Supprimer" name="deletePizza" class="btn btnadmin">
    </form>

    <!-- Supprimer un commentaire -->
    <h5 class="titleadmin text-center">Supprimer un commentaire</h5>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="delName" class="form-label titlelabel">Nom du commentaire à supprimer</label>
            <input type="text" name="delName" id="delName" class="form-control" required>
        </div>
        <input type="submit" value="Supprimer" name="deleteComment" class="btn btnadmin">
    </form>

    <div class="text-center">
        <a href="logout.php" class="btn btnadmin">Me déconnecter</a>
    </div>
</section>

<?php
ob_end_flush();
require_once('templates/footer.php');
?>
