<?php

function addUser(PDO $pdo, string $email, string $password) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; 
    }

    if (strlen($password) < 8) {
        return false; 
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT IGNORE INTO `users` (`email`, `password`) VALUES (:email, :password);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    return $query->execute();
}

function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if (!$user) {
        return false;
    }

    if (password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

$errors = [];
$messages = [];

if (isset($_POST['addUser'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!addUser($pdo, $email, $password)) {
        $errors[] = 'Veuillez fournir une adresse email valide et un mot de passe d\'au moins 8 caractères.';
    } else {
        $messages[] = 'Vous avez bien ajouté un employé';
    }
}

?>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?= $message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?= $error; ?>
    </div>
<?php } ?>
