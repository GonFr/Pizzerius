<?php
require_once('lib/user.php');


?>



<?php


$errors = [];
$messages = [];

if (isset($_POST['addUser'])) {

$res = addUser($pdo, $_POST['email'], $_POST['password']);

if ($res) {
    $messages[] = 'Merci pour votre inscription';
} else {
    $errors[] = 'Une erreur s\'est produite lors de votre inscription';
}

}

?>

<h1>Ajouter un nouvel employé</h1>

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
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control">
</div>

<div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" name="password" id="password" class="form-control">
</div>

<input type="submit" value="Inscription" name="addUser" class="btn btn-primary">


</form>