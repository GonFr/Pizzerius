<?php



require_once('templates/header.php');
require_once('lib/pdo.php');
?>


<?php
if (!isset($_SESSION['user']) || empty($_SESSION['user']['email'])) {
    header('Location: login.php');
    exit;
} else {
    require_once('templates/inscription.php');
    require_once('lib/addpizza.php');
}

?>

<?php 

if (isset($_POST['addschedule'])) {
    $schedule = $_POST['schedule'];

    // Validate the schedule (you can add more validation as needed)
    if (empty($schedule)) {
        echo "Schedule cannot be empty.";
    } else {
        try {
            $sql = "INSERT INTO `schedules` (`schedule`) VALUES (:schedule)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':schedule', $schedule, PDO::PARAM_STR);
            $query->execute();

            echo "Horaires modifiées";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="schedule" class="form-label">Modifier l'horaire</label>
        <input type="text" name="schedule" id="schedule" class="form-control">
    </div>
    <input type="submit" value="Enregistrer" name="addschedule" class="btn btn-primary">
</form>




<?php
require_once('lib/user.php');
require_once('templates/footer.php');
?>


