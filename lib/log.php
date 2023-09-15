<?php

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
    echo ('existe dans la bdd');
} else {
    //L'utilisateur n'existe pas dans la base de données
    echo ('existe pas dans la bdd');
}



$password = password_hash(htmlentities($_POST['password']), PASSWORD_BCRYPT, array(
'cost'=>14)); 

$stmt = $mcon->prepare("SELECT `password` FROM members WHERE password=:password");
$stmt->bindParam(":password", $password);
$stmt->execute();

//get_result
$data_array = $stmt->fetch(PDO::FETCH_ASSOC);
//echo passwords
echo  'Password from form: ' . $password . '<br />';
echo 'Password from DB: ' . $data_array['password'] . '<br />';
//verify password
if (password_verify($password , $data_array)) {
    echo 'success';
    exit();
}else{
    echo 'Try again m9';
    exit();
}

//if $_POST password and $hashedpassword match then start session

$stmt->close();
$mcon->close();

$password_input = $_POST['password'];
password_verify($password_input , $data_array['password']);