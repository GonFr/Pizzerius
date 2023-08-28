<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
    
    // define('_ROOTPATH_', __DIR__.'/');
?>
<!-- Enlever barre horizontale pb ici !!!-->
<section id="restaurant">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="assets/images/pizza_oven.jpg" class="img-fluid">
            </div>
            <div class="col-sm-6 d-flex justify-content-center flex-column">
                <div>
                <h1>Envie de vous souvenir du goût d'une vraie pizza italienne de votre enfance ?</h1>
                <p></p><p>Votre pizza cuite et façonnée traditionnellement n'attends que vous pour la déguster encore chaude et fondante.</p>
                <h2>Nos <strong>pizzas</strong>, à déguster sur place ou <strong>à emporter</strong>, sont préparées dans la pure tradition italienne, avec amour et passion.</h2>		
                <button type="button" class="btn btn-primary rounded-4">Découvrez pizzerius</button>			
            </div>
        </div>
    </div>
</section>
<br>
<div class="loblo text-center text-white row">
    <div class="col">
        <img src="assets/images/icon_phone.svg" alt=""><br>
        <span>Parcourez notre carte</span>
    </div>
    <div class="col">
        <img src="assets/images/icon_phone.svg" alt=""><br>
        <span>Contactez-nous</span>
    </div>
</div>





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
        <img src="assets/images/pizzauno.JPG" class="w-100" alt="..." height="">
        <div class="carousel-caption">
            <h5>Pizza Marguerita</h5>
            <p>La meilleure pizza Marguerita</p>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="assets/images/pizzados.JPG" class="w-100" alt="..." height="">
        <div class="carousel-caption">
            <h5>Pizza Calzone</h5>
            <p>La meilleure pizza Calzone</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/images/pizzatres.JPG" class="w-100" alt="..." height="">
        <div class="carousel-caption">
            <h5>Pizza 4 fromages</h5>
            <p>La meilleure pizza 4 fromages</p>
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


<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center fs-1">Note</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col"><!-- Pizza faites maison -->
            <img src="assets/images/voiture_remplacement.jpg" alt="Logo de l'entreprise de V.Parrot" width="500">
        
        </div>
        <div class="col"><!-- Produit locaux -->
            <img src="assets/images/reparation_rapide.jpg" alt="Logo de l'entreprise de V.Parrot" width="500">
            
        </div>
        <div class="col"><!-- Préparation rapide -->
            <img src="assets/images/garantie_constructeur.jpg" alt="Logo de l'entreprise de V.Parrot" width="500">
            
        </div>
    </div>
</div>



<?php
require_once('templates/card.php');
require_once('templates/footer.php');

?>




