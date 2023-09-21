<?php
    require_once('templates/header.php');
?>

<section>
    <div class="container-fluid text-center">
        <h2 class="scheduletitle">Nos horaires</h2>
        <p class="fw-bold fs-4" id="changeschedule">Ouvert <?= htmlspecialchars($schedule['schedule']); ?></p>
        <p class="fw-bold fs-4">06.12.34.56.78</p>
        <p class="fw-bold fs-4">1 rue de Bordeaux</p>
    </div>
</section>

<?php
require_once('templates/footer.php');
?>
<script src="js/schedule.js"></script>