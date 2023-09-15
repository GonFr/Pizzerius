<?php

require_once('templates/header.php');
require_once('lib/pdo.php');

?>

<!-- Essayer de se connecter -->

<br>
<br>
<br>

<h2>Se connecter</h2>

<form action="admin.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <input type="submit" value="Se connecter" class="btn btn-primary">
</form>

<?php



require_once('templates/footer.php');
?>


