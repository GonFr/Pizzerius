<?php
session_start() ;
// require_once('templates/header.php');
require_once('lib/pdo.php');



//Requête pour vérifier si l'utilisateur existe
$email = $_POST['email'];
//Supposons que l'email soit envoyé via un formulaire

// $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
$sql = "SELECT * FROM users WHERE email = :email";
// $sql = "SELECT * FROM users WHERE  = :";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
// $stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->execute();

// Vérification du résultat
if($stmt->rowCount()>0) {
    //L'utilisateur existe dans la base de données
    echo (' mail existe dans la bdd');
} else {
    //L'utilisateur n'existe pas dans la base de données
    echo (' mail existe pas dans la bdd');
}




?>

<h1>Inscription</h1>

<!--
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
-->

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


<?php
require_once('templates/footer.php');
?>