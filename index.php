<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
    
    // define('_ROOTPATH_', __DIR__.'/');
?>

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




<?php
require_once('templates/card.php');
require_once('templates/footer.php');

?>




