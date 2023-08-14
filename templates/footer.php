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

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="navbar-nav gap-5">
                <?php foreach ($secondaryMenu as $key => $value) { ?>
                    <li class=""><a href="<?=$key; ?>" class=""><?=$value ;?></a></li>
                <?php } ?>
            </ul>
        </footer>
    </div>
    
<!--
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>

<ul class="navbar-nav gap-5">
    <?php foreach ($mainMenu as $key => $value) { ?>
        <li class="nav-item link-white m-3 p-3 rounded bg-dark text-white-50"><a href="<?=$key; ?>" class="text-white text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><?=$value ;?></a></li>
    <?php } ?>
</ul>-->