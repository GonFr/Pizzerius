<?php 
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

    <body>
        <header>   
            <!-- Background image -->
            <div class="container-fluid p-0 w-100">
                <img 
                    src="assets/images/fond_pizza.png" 
                    class="" 
                    alt="Image de pizza pour le fond du site"
                    width="100%"
                    height="1200px"
                >
            </div>

            <!-- Upline color blue on hover--> 
            <div class="position-absolute bg-success bg-opacity-75 container-fluid sticky-top position-fixed text-white p-3">
                <nav class="justify-content-between hstack">
                    <a class="btn hstack" href="https://www.google.fr" target="_blank">
                        <img src="assets/images/icon_map.svg" alt="Icone map renvoyant à l'adresse de Pizzerius" class="m-3" width="25" height="25">
                        <span class="d-none d-xl-block fs-3 fw-bold text-white">1 rue de Bordeaux</span>
                    </a>
                    <a class="btn hstack" href="tel:02 51 78 81 15">
                        <img src="assets/images/icon_phone.svg" alt="Icone téléphone" class="m-3"  width="25" height="25">
                        <span class="d-none d-xl-block fs-3 fw-bold text-white">06 12 34 56 78</span>
                    </a>
                    <div class="hstack"><!-- tooltip on image?? -->
                        <img src="assets/images/icon_clock.svg" alt="Icone horloge" class="m-3" width="25" height="25">
                        <span class="d-none d-xl-block fs-3 fw-bold">Du Mardi au Samedi, sauf Mardi soir</span>
                    </div>
                </nav>
            </div>

            <!-- Navbar + Logo --><!-- Change colors and hovers -->
            <div class="position-absolute top-50 start-50 translate-middle text-center container-fluid">
                <!--Logo-->
                <img class="d-block mx-auto" src="assets/images/logo.png" alt="logo de l'entreprise pizzerius" width="250" height="250">
                <div class="container">
                    <!-- Navbar-->
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-xl justify-content-center"><!-- Supression de aria-label-->
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="nvb">
                                    <ul class="navbar-nav gap-5">
                                        <?php foreach ($mainMenu as $key => $value) { ?>
                                            <li class="nav-item link-white m-3 p-3 rounded bg-dark text-white-50"><a href="<?=$key; ?>" class="text-white text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><?=$value ;?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div> 
                </div> 
            </div> 
        </header>                                 
    </body>
</html>