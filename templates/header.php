<?php 
    require_once('./lib/session.php');
    require_once('./lib/config.php');
    require_once('./lib/pdo.php');
    require_once('./lib/schedule.php');
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Votre pizzeria à Bordeaux. Venez découvrir nos délicieuses pizzas grecques à emporter...">
        <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/header.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/commentary_modal.css"/>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/>
        <link rel="stylesheet" type="text/css" href="css/about.css"/>
        <link rel="stylesheet" type="text/css" href="css/contact.css"/>
        <link rel="stylesheet" type="text/css" href="css/legalmentions.css"/>
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
        <link rel="stylesheet" type="text/css" href="css/admin.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/images/pizza_favicon.png" type="image/x-icon">
        <title>Pizzerius, votre pizzeria à Bordeaux, Les meilleurs pizzas grecques proche de chez vous</title>
    </head>
    <body>
        <header class="firstbackimg headersize text-center">   
                <!-- Upline -->
                <nav class="justify-content-between hstack sticky-top uplinecolor">
                    <a class="btn hstack" href="https://www.google.com/maps?t=m&hl=fr&gl=FR&cid=1679382234470550288" target="_blank">
                        <img src="assets/images/pinmap_upline.png" alt="Icone map renvoyant à l'adresse de Pizzerius" class="hovericon" width="100" >
                        <span class="d-none d-xl-block fs-5 fw-bold uplinetextwhite">Pl. de la Bourse,<br> 33000 Bordeaux</span>
                    </a>
                    <a class="btn hstack" href="tel:06 12 34 56 78">
                        <img src="assets/images/phone_upline.png" alt="Icone téléphone" class="hovericon"  width="100">
                        <span class="d-none d-xl-block fs-5 fw-bold uplinetextwhite">06 12 34 56 78</span>
                    </a>
                    <div class="hstack">
                        <a href="contact.php">
                            <img src="assets/images/clock_upline.png" alt="Icone horloge" class="hovericon" width="100">
                        </a>
                        <span class="d-none d-xl-block fs-5 fw-bold p-2 uplinetextwhite"><?= htmlspecialchars($schedule['schedule']);?></span>
                    </div>
                </nav>

                <!-- Logo -->
                <div class="">
                    <img class="img-fluid" src="assets/images/logo_pizzerius.png" alt="logo de l'entreprise pizzerius" width="30%">
                </div>
                <!-- Texte principal -->
                <div class="">
                    <h1 class="text-center textheader" id="jschange">La meilleure pizza du coin, à emporter</h1>
                </div>
                    <!-- Navbar -->
                <div class="d-flex justify-content-center">
                    <nav class="navbar navbar-expand-xl">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="nvb">
                            <ul class="navbar-nav gap-5">
                                <?php foreach ($mainMenu as $key => $value) { ?>
                                    <li class="nav-item"><a href="<?=$key; ?>" class="nav-link fw-bold textcolor rounded fs-5 <?php if ($currentPage === $key) { echo 'navcolor'; } ?>"><?=$value ;?></a></li>
                                <?php } ?>
                            </ul>
                        </div> 
                    </nav> 
                </div>
        </header>    

        <div id="cookiePopup" class="cookie-popup container-fluid fs-5 text-center fixed-bottom bg-dark text-white p-2">
            Votre site Pizzerius utilise des cookies pour vous assurer une expérience  d'utilisation optimale. <a href="index.php" id="acceptCookies" class="text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">J'accepte</a>
        </div>


        <script src="js/cookie.js"></script>                      
        <script src="js/tittlechange.js"></script>                      
    </body>
</html>