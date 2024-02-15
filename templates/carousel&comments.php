<?php 
require_once('./lib/addcomments.php');

$comments = [];

$sqlQuery = 'SELECT * FROM commentarea ORDER BY id DESC LIMIT 3';
$commentStatement = $pdo->prepare($sqlQuery);
$commentStatement->execute();
$comments = $commentStatement->fetchAll();
?>
<section>
    <!-- Pizzas carousel + Section Commentaire-->
    <div class="row container-fluid d-flex align-items-center">
        <!-- Carousel -->
        <div id="carouselDark" class="carousel carousel-dark slide col m-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="assets/images/god_pizza.png" class="w-100" alt="..." width="1000px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/salmon_pizza.png" class="w-100" alt="..." width="1000px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/grec_pizza.png" class="w-100" alt="..." width="1000px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="assets/images/athena_pizza.png" class="w-100" alt="..." width="1000px">
                </div>
            </div>
        </div>

        <!-- Commentary -->
        <div class="col rounded justify-content-center overflow-auto" style="max-width: 1000px; max-height: 400px;">
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label formmodal">Pseudo</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="comments" class="form-label formmodal">Commentaire</label>
                            <textarea name="comments" id="comments" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Enregistrer" name="addcomments" class="btn btnmodal">
                    </form>
                </div>
            </div>

            <h1 class="text-center titlecomments text-black fs-1">Espace commentaire</h1>
            <button class="btn rounded-4 btncustom" id="myBtn">Ajouter un commentaire</button>

            <?php foreach ($messages as $message) { ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <?php foreach ($errors as $error) { ?>
                <div class="alert alert-danger">
                    <?= $error; ?>
                </div>
            <?php } ?>

            <?php foreach ($comments as $comment) { ?>
                <h2 class="fs-3 textcomments">Pseudo : <span class="text-dark"><?= htmlspecialchars($comment['name']); ?></span></h2>
                <h3 class="fs-3 textcomments">Commentaire : <span class="text-dark fontnormal fs-5"><?= htmlspecialchars($comment['comments']); ?></span></h3>
                &nbsp;
            <?php } ?>
        </div>
    </div>
</section>
   