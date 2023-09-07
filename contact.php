<?php
    require_once('templates/header.php');
?>



<div class="container-fluid text-center">
    <h2 class="scheduletitle">Nos horaires</h2>
    <p class="fw-bold fs-4">Ouvert tous les jours 11h/23h</p>
    <p class="fw-bold fs-4">0612345678</p>
    <p class="fw-bold fs-4">1 rue de Bordeaux</p>
</div>


<!-- Contact form -->

<h1>Formulaire de contact</h1>

<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre Email.</div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" placeholder="Ecrivez ici" id="floatingTextarea"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php
require_once('templates/footer.php');
?>
