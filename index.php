<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
    require_once('lib/addcomments.php');
    require_once('templates/restaurant.php');
    require_once('templates/card.php');
    require_once('templates/carousel_comments.php');
    require_once('templates/modal.php');
    
    // define('_ROOTPATH_', __DIR__.'/');
?>


    


    <h1 class="text-center titlecomments text-black fs-1">Espace commentaire</h1>
    <!-- Trigger/Open The Modal -->
    <button class="btn rounded-4 btncustom" id="myBtn">Ajouter un commentaire</button>
    
    <?php foreach ($comments as $comment) { ?>
        
    <h2 class="fs-3 textcomments">Pseudo : <span class="text-dark"><?php echo $comment['name']; ?></span></h2>
    <h3 class="fs-3 textcomments">Commentaire : <span class="text-dark fontnormal fs-5"><?php echo $comment['comments']; ?></span></h3>
    &nbsp; 
    
    <?php
    }
    ?>
    </div>

    
</div>

<!-- Notes-->
<div class="container">
    <h2 class="pb-2 text-center fs-1 textnotes">Nos Valeurs</h2>
    <div class="hstack">
        <div class="col"><!-- Pizza artisanal -->
            <img src="assets/images/artisanal_pizza.png" alt="Logo de l'entreprise de V.Parrot" width="450">
        
        </div>
        <div class="col"><!-- Produits locaux -->
            <img src="assets/images/local_product.png" alt="Logo de l'entreprise de V.Parrot" width="450">
            
        </div>
        <div class="col"> <!-- Préparation rapide -->
            <img src="assets/images/fast_preparation.png" alt="Logo de l'entreprise de V.Parrot" width="450">
        </div>
    </div>
</div>


<script src="js/modal.js"> </script>


<?php
require_once('templates/card.php');
require_once('templates/footer.php');

?>




