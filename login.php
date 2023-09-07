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

<!-- Essayer de se connecter -->

<br>
<br>
<br>

 <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
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
?>

 </div>

