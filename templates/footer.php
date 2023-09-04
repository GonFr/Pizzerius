<?php 
    // require_once('header.php');
    require_once('lib/config.php');
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Votre pizzeria à Bordeaux. Venez découvrir nos délicieuses pizzas italiennes à emporter...">
        <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Pizzerius, votre pizzeria à Bordeaux, Les meilleurs pizzas italienne proche de chez vous</title>
    </head>

    <div id="map-canvas">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.6626861624663!2d-1.673612584022731!3d47.26229887916335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48059294949c6c6d%3A0x4b50c7ce20c68e40!2sPizz%C3%A9ria+Piazzetta!5e0!3m2!1sfr!2sfr!4v1561370412684!5m2!1sfr!2sfr" 
            width="100%" 
            height="100%" 
            frameborder="0" 
            style="border:0" 
            allowfullscreen=""
            >
        </iframe>
    </div>

    <!-- Upline color blue on hover--> 
    <div class="bg-dark bg-opacity-75 container-fluid position-bottom text-white hstack justify-content-center">
        <nav class="justify-content-between">
            <footer class="py-3 my-4">
                <ul class="navbar-nav gap-5 hstack">
                    <?php foreach ($secondaryMenu as $key => $value) { ?>
                        <li class="nav-item"><a href="<?=$key; ?>" class="text-white text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><?=$value ;?></a></li>
                    <?php } ?>
                </ul>
            </footer>
        </nav>
    </div>


