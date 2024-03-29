<?php 
require_once('lib/config.php');
?>

<footer>
    <div id="map-canvas">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.5096148085725!2d-0.5719048516535798!3d44.84154174016726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d1a32e69b3%3A0x174e5d3e97b80b10!2sPlace%20de%20la%20Bourse!5e0!3m2!1sfr!2sfr!4v1695060881989!5m2!1sfr!2sfr" 
            width="100%" 
            height="100%" 
            frameborder="0" 
            style="border:0" 
            allowfullscreen=""
        ></iframe>
    </div>

    <div class="container-fluid d-flex justify-content-center hstack" id="bgimgfooter">
        <nav class="">
            <footer class="py-3 my-4">
                <ul class="navbar-nav gap-3 hstack">
                    <?php foreach ($secondaryMenu as $key => $value) { ?>
                        <li class="nav-item"><a href="<?=$key; ?>" class="text-dark text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><?=$value ;?></a></li>
                    <?php } ?>
                    <li>
                    <?php if(!isset($_SESSION['admin'])) { ?>
                        <a href="login.php" class="text-dark text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Je suis l'administrateur</a> 
                    <?php } else { ?>
                        <a href="admin.php" class="text-dark text-opacity-50 link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Modifier le site</a>
                    <?php } ?> 
                    </li>
                </ul>
            </footer>
        </nav>
    </div>
</footer>
