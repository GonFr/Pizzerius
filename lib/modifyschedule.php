<?php
if (isset($_POST['addschedule'])) {
    $schedule = $_POST['schedule'];

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