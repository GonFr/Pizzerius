<?php
$errors = [];
$messages = [];

function modifyschedule(PDO $pdo, string $schedule) {
    try {
        $sql = "INSERT INTO `schedules` (`schedule`) VALUES (:schedule)";
        $query = $pdo->prepare($sql);
        $query->bindParam(':schedule', $schedule, PDO::PARAM_STR);
        $query->execute();

        return true;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

if (isset($_POST['addschedule'])) {
    $schedule = $_POST['schedule'];
    $success = modifyschedule($pdo, $schedule);

    if ($success) {
        $messages[] = "L'horaire a bien été modifié";
    } else {
        $errors[] = "Une erreur s'est produite lors de la modification";
    }
}
?>

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