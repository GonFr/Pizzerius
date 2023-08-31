<?php 

try {
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo->exec('CREATE DATABASE IF NOT EXISTS pizzerius') !== false) {
        $pizzerius = new PDO('mysql:dbname=pizzerius;host=localhost', 'root', '');
        if ($pizzerius->exec('CREATE TABLE IF NOT EXISTS pizzas (
                id INT(11) PRIMARY KEY AUTO_INCREMENT,
                title VARCHAR(500),
                price  DECIMAL (20,2)
                )') !== false) {
            if ($pizzerius->exec('CREATE TABLE IF NOT EXISTS rooms (
                    id INT(11) PRIMARY KEY AUTO_INCREMENT,
                    pizzeriusId INT(11),
                    name VARCHAR(100),
                    surface DECIMAL (20,2),
                    FOREIGN KEY (pizzeriusId) REFERENCES pizzas(id)
                    )') !== false) {
                
            } else {
                echo 'Impossible de créer la table rooms<br>';
            }
        } else {
            echo 'Impossible de créer la table pizzas<br>';
        }
    } else {
        echo 'Impossible de créer la base<br>';
    }
}   
    catch (PDOException $exception){
    die($exception->getMessage());
    
}

$requete = "SELECT * FROM pizzas ORDER BY id_pizza ASC";
$result = $pdo->query($requete);



function addcar(PDO $pdo,  float $price, int $years, int $kilometrage, string|null $image) {
    $sql = "INSERT INTO `vehicules` ( `price`, `years`, kilometrage, `image`) VALUES (:price, :years, :kilometrage, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    $query->bindParam(':years', $years, PDO::PARAM_STR);
    $query->bindParam(':kilometrage', $kilometrage, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}

function getVehicules(PDO $pdo) {
    $sql = 'SELECT * FROM vehicules';
    $query = $pdo->prepare($sql);

    $query->execute();
    return $query->fetchAll();
  }
?>


  <?php foreach ($vehicules as $key => $vehicule) { ?> 
    <div class="col-md-4">
    <div class="card">
      <img src=<?=$vehicule['image']; ?> class="card-img-top" alt="Photo du véhicule">
      <div class="card-body">
        <p class="card-title"><?=$vehicule['price'] ?></p>
        <p class="card-text">Kilométrage : <?=$vehicule['kilometrage'] ?></p>
        <p class="card-text">Année du véhicule :<?=$vehicule['years'].' ' ?></p>
        <a href="form.php" class="btn btn-primary">Choisir ce véhicule</a>
      </div>
    </div> 
  </div>
   <?php } ?>

   <?php


// On écrit la requête
$sql = "SELECT * FROM vehicules"; 

// On exécute la requête
$requete = $pdo->query($sql);

// On récupère les données
$vehicules = $requete->fetchAll();



function addcar(PDO $pdo,  float $price, int $years, int $kilometrage, string|null $image) {
    $sql = "INSERT INTO `vehicules` ( `price`, `years`, kilometrage, `image`) VALUES (:price, :years, :kilometrage, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    $query->bindParam(':years', $years, PDO::PARAM_STR);
    $query->bindParam(':kilometrage', $kilometrage, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}

try {
    $dbh = new PDO("mysql:host=$host", $root, '');

    $dbh->exec("CREATE DATABASE `$db`;
            CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
            GRANT ALL ON `$db`.* TO '$user'@'localhost';
            FLUSH PRIVILEGES;")
    or die(print_r($dbh->errorInfo(), true));

}
catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}

?>

<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
    
    // define('_ROOTPATH_', __DIR__.'/');
?>



<!-- Restaurant -->
<section> <!-- Faire qu'en taille réduite seule h1 et button apparaîssent-->
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-6 text-center">
            <source src=”assets/images/Pizzerius.mp4” type=video/mp4>
            </div>
            <div class="col-sm-6 d-flex justify-content-center">
                <div>
                <h1 class="maintitlecolor">Envie de vous souvenir du goût d'une vraie pizza italienne ?</h1><br>
                <p class="middletext">Votre pizza cuite et façonnée traditionnellement n'attends que vous pour la déguster encore chaude et fondante.</p>
                <h2>Chez <strong class="secondtitlecolor">Pizzerius</strong>, nos pizzas <strong class="secondtitlecolor">à emporter</strong> sont préparées dans la pure tradition italienne, avec amour et passion.</h2>		
                <div class="d-grid gap-2">
                    <button class="btn rounded-4 btncustom" type="button">DÉCOUVREZ <strong class="textbtn">Pizzerius</strong></button>
                </div>			
            </div>
        </div>
    </div> 
</section>

<!-- Card -->
<section>
    <div class="text-center hstack secondbackimg">
        <div class="col">
            <span class="hstack justify-content-center"><img class="hstack img-fluid" src="assets/images/img_menu.png" alt="image du menu" width="400"></span>
            <span class="hstack justify-content-center textdancingscript fs-1 fw-bold">Parcourez <br>notre carte</span>
            <button class="btn secondbtncustom" href="menu.php">CLIQUEZ ICI</button>
        </div>
        <div class="col">
            <span class="hstack justify-content-center"><img class="hstack img-fluid" src="assets/images/popo.png" alt="image de contact" width="400"></span>
            <span class="hstack justify-content-center textdancingscript fs-1 fw-bold">Contactez <br>nous</span>
            <button class="btn secondbtncustom">CLIQUEZ ICI</button>
        </div>
    </div>
</section>



<!-- Commentary -->
<div class="row border border-dark container-fluid py-5 rounded">
    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide col m-0">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="assets/images/god_pizza.png" class="w-100" alt="..." width="800">
        <div class="carousel-caption">
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="assets/images/salmon_pizza.png" class="w-100" alt="..." width="800">
        <div class="carousel-caption">
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/images/grec_pizza.png" class="w-100" alt="..." width="800">
        <div class="carousel-caption">
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- Commentaire -->
    <div class="col-9 bg-dark rounded">
        <h1>Bonjour</h1>
    </div>
</div>

<!-- Notes-->
<div class="container">
    <h2 class="pb-2 text-center fs-1 textnotes">Nos Valeurs</h2>
    <div class="hstack">
        <div class="col"><!-- Pizza artisanal -->
            <img src="assets/images/artisanal_pizza.png" alt="Logo de l'entreprise de V.Parrot" width="450">
        
        </div>
        <div class="col"><!-- Produit locaux -->
            <img src="assets/images/local_product.png" alt="Logo de l'entreprise de V.Parrot" width="450">
            
        </div>
        <div class="col"> <!-- Préparation rapide -->
            <img src="assets/images/fast_preparation.png" alt="Logo de l'entreprise de V.Parrot" width="450">
        </div>
    </div>
</div>





<?php
require_once('templates/card.php');
require_once('templates/footer.php');

?>






