<?php
ob_start();
require_once('templates/header.php');
require_once('lib/add&deladmin.php');
require_once('lib/pdo.php');
    
$errors = [];
$messages = [];


if (isset($_POST['loginAdmin'])) {

$admin = verifyAdminLoginPassword($pdo, $_POST['email'], $_POST['password']);

if ($admin) {
    $_SESSION['admin'] = ['email' => $admin['email']];
    header('location:admin.php');
    exit();
} else {
    $errors[] = 'Email ou mot de passe incorrect';
}

} 

ob_end_flush();  
?>

<h1 class="titlelogin text-center">Connexion</h1>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($message); ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?= htmlspecialchars($error); ?>
    </div>
<?php } ?>


<form action="login.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <input type="submit" value="Me connecter" name="loginAdmin" class="btn btn-primary btnlogin">


</form>

<?php
require_once('templates/footer.php');
?>