<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // return $user;
        echo ("réussi");
    } else {
        echo ("raté");
        // return false;
    }
}

$motDePasseClair = "pizzerius";
$hashStockeDansLaBDD = "";

$sql = "SELECT * FROM users WHERE password  "

// if (password_verify($motDePasseClair, $hashStockeDansLaBDD)) {
//     echo "Le mot de passe est valide!";
// } else {
//     echo "Le mot de passe est invalide.";
// }