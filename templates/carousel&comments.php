<?php 
require_once('./lib/addcomments.php');

$comments = [];

$sqlQuery = 'SELECT * FROM commentarea ORDER BY id DESC LIMIT 3';
$commentStatement = $pdo->prepare($sqlQuery);
$commentStatement->execute();
$comments = $commentStatement->fetchAll();
?>

<!-- Pizzas carousel + Section Commentaire-->
<div class="row border border-dark container-fluid py-5 rounded">
    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide col m-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/images/god_pizza.png" class="w-100" alt="..." width="800">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/images/salmon_pizza.png" class="w-100" alt="..." width="800">
            </div>
            <div class="carousel-item">
                <img src="assets/images/grec_pizza.png" class="w-100" alt="..." width="800">
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
   