<?php
session_start() ;
// require_once('templates/header.php');
// require_once('lib/user.php');
require_once('lib/pdo.php');
// require_once('lib/log.php');

// $email = $_POST['email'];
// $_SESSION['email'] = $email;

//Requête pour savoir si c'est le bon mot de passe
// $motDePasseClair = $_POST['password'];
// echo ($motDePasseClair);
// $hashStockeDansLaBDD = "" ;
// echo ($hashStockeDansLaBDD);


// if (password_verify($motDePasseClair, $hashStockeDansLaBDD)) {
//     echo "Le mot de passe est valide!";
// } else {
//     echo "Le mot de passe est invalide.";
// }

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


// $emailUtilisateur = $_POST['email'];

// $query = "SELECT * FROM users WHERE email = '$emailUtilisateur'";
// $result = mysqli_query($connexion, $query);

// if(mysqli_num_rows($resultat) > 0) {
//     echo "l'email existe dans la base de données";
// } else {
//     "l'email n'existe pas dans la bdd";
// }

// if(!isset($_SESSION['email']) == $_POST['email']) {
//     echo ('réussi');
//     print_r($_POST['email']);
//     print_r($_SESSION['email']);
//     print_r($email);
//     header('location: login.php');
    
// } else {
//     print_r($_POST['email']);
//     print_r($_SESSION['email']);
//     print_r($email);
//     echo 'raté';
//     // 
// }

// if($_POST['email'] == 'math@math.fr') {
    
//     print_r($_POST['email']);
//     echo ('réussi');
// }   else {
//     header('location: login.php');
// }

// $email = $_POST['email'];
// $password = $_POST['password'];


// $_SESSION['email'] = $email;
// $_SESSION['password'] = $password;


// if(!isset($_SESSION['email']) == $email) {
//     // Rediriger vers une autre page
//     echo ('bonjour admin');
    
//     // header('Location: admin.php');
// } else {
//     header('Location: login.php');
// }
    
    // exit(); //Assurez vous de terminer le script après la redirection


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
<?php
// v.parrot@garage.fr

// $gon = $_SERVER['PHP_AUTH_USER'];
// var_dump($gon);
// $killua = $gon;

// if ($gon === 'v.parrot@garage.fr') {
//     require_once('test.php');
// } else echo 'Vous pouvez seulement ajouter une voiture';
// var_dump($killua);
// var_dump($gon);

// if (!isset($_SERVER['PHP_AUTH_USER'])) {
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } else {
//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
// }


// if (isset($_SERVER['PHP_AUTH_USER']) == 'v.parrot@garage.fr') {
//     echo 'Bonjour';
// } else {
//     require_once('test.php');
//     echo $_SERVER['PHP_AUTH_USER'];

// }


try {
function addUser(PDO $pdo,  string $email, string $password) {
    $sql = "INSERT INTO `users` ( `email`, `password`) VALUES (:email, :password);";
    $query = $pdo->prepare($sql);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $role = 'subscriber';
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    
    return $query->execute();
}
} catch (PDOException $e) {
    echo 'Ca ne fonctionne pas';
}

// function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
//     $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
//     $query->bindParam(':email', $email, PDO::PARAM_STR);
//     $query->execute();
//     $user = $query->fetch();

//     if ($user && password_verify($password, $user['password'])) {
//         return $user;
//     } else {
//         return false;
//     }
// }

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


<?php
require_once('templates/footer.php');
?>