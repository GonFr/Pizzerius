<?php

$schedules = [];

$sqlQuery = 'SELECT * FROM schedules ORDER BY id DESC LIMIT 1';
$scheduleStatement = $pdo->prepare($sqlQuery);
$scheduleStatement->execute();
$schedules = $scheduleStatement->fetchAll();
?>

<?php foreach ($schedules as $schedule) { ?>
    
<?php } ?>