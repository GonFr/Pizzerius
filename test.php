<?php

require_once('templates/header.php');
// require_once('lib/user.php');

function addUser(PDO $pdo,  string $email, string $password) {
    $sql = "INSERT INTO `users` ( `email`, `password`, `role`) VALUES (:email, :password, :role);";
    $query = $pdo->prepare($sql);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $role = 'subscriber';
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    
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

  if (isset($_POST['addUser'])) 
  {

    $res = addUser($pdo, $_POST['email'], $_POST['password']);

    if ($res) {
        $messages[] = 'Merci pour votre inscription';
    } else {
        $errors[] = 'Une erreur s\'est produite lors de votre inscription';
    }
  }
?>

<h1>Inscription</h1>

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

<div id="container">
 <!-- zone de connexion -->
 
 <form action="modifyadmin.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="email" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>


 <?php
  // Initialiser la session
//   session_start();
  
  // Détruire la session.
//   if(session_destroy())
//   {
    // Redirection vers la page de connexion
    // header("Location: login.php");
//   }

// if(!isset($_SESSION['user'])) {
//     header('location: login.php');
// }

// Si c'est le patron on ajoute connecté en tant que patron dans une variable + mail
// 
// $gon = $_SERVER['PHP_AUTH_USER'];
// var_dump($gon);
// $nameid = 'patron';
// $nameid2 = 'connecté en tant que';
// if ($_SERVER['PHP_AUTH_USER'] == 'oze@pro.fr') {
//     echo 'Bienvenue'.$nameid;
// } else {
//     echo $nameid2.$_SERVER['PHP_AUTH_USER'];
// }

?>

 </div>

