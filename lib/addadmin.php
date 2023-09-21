<?php


function addUser(PDO $pdo, string $email, string $password) {
    $sql = "INSERT IGNORE INTO `users` (`email`, `password`) VALUES (:email, :password);";
    $query = $pdo->prepare($sql);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    
    return $query->execute();
}

function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

$errors = [];
$messages = [];

if (isset($_POST['addUser'])) {

$res = addUser($pdo, $_POST['email'], $_POST['password']);

if ($res) {
    $messages[] = 'Vous avez bien ajouté un employé';
} else {
    $errors[] = 'Une erreur s\'est produite lors l\'ajout d\'un administateur';
}

}


?>

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
