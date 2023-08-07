<?php 
    require_once('templates/header.php');
    require_once('lib/config.php');
    
    // define('_ROOTPATH_', __DIR__.'/');
?>






<section>
    <img src="assets/images/pizzatest.jpg"
        class="full-width-img"
        alt="Image de pizza en fond du site"
    >
    
    <div class="container caption">
        <p>Une vraie pizza maison,<br />
            sur place ou à emporter
        </p>
    </div>
</section>


<div class="container fluid">
    <!-- Logo -->
    <a href="http://localhost/pizzerius/">
        <img class="logo" src="assets\images\logo_pizzerius.jpg" alt="" width="100px" height="100px">
    </a>  
</div>


<!-- NavBar -->
<section class="navbarcss">
    <ul class="row align-items-start nav nav-pills test">
        <?php foreach ($mainMenu as $key => $value) { ?>
          <li class="nav-item col bobo"><a href="<?=$key; ?>" class="nav-link textcolor <?php if ($currentPage === $key) { echo 'maincolor'; } ?>"><?=$value ;?></a></li>
        <?php } ?>
    </ul>
</section>
