<?php
//Ajouter un administrateur
function addAdmin(PDO $pdo, string $email, string $password) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; 
    }

    if (strlen($password) < 8) {
        return false; 
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT IGNORE INTO `admins` (`email`, `password`) VALUES (:email, :password);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    return $query->execute();
}

function verifyAdminLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM admins WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $admin = $query->fetch();

    if (!$admin) {
        return false;
    }

    if (password_verify($password, $admin['password'])) {
        return $admin;
    } else {
        return false;
    }
}

$errors = [];
$messages = [];

if (isset($_POST['addAdmin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!addAdmin($pdo, $email, $password)) {
        $errors[] = 'Veuillez fournir une adresse email valide et un mot de passe d\'au moins 8 caractères.';
    } else {
        $messages[] = 'Vous avez bien ajouté un administrateur';
    }
}

?>

<?php 
//Supprimer un administrateur

if (isset($_POST['deleteAdmin'])) {
    $deleteEmail = $_POST['deleteEmail'];

    $sql = "DELETE FROM admins WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $deleteEmail, PDO::PARAM_STR);

    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $messages[] = 'L\'administrateur a bien été supprimé.';
        } else {
            $errors[] = 'Cet administrateur n\'existe pas.';
        }
    } else {
        $errors[] = 'La suppression de l\'administrateur a échoué.';
    }
}
?>

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