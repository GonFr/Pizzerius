<?php
if (isset($_POST['deleteComment'])) {
    $deleteComment = $_POST['delName'];

    $sql = "DELETE FROM commentarea WHERE name = :name";
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $deleteComment, PDO::PARAM_STR);
    if ($query->execute()) {
        if ($query->rowCount() > 0) {
            $messages[] = 'Le commentaire a bien été supprimé.';
        } else {
            $errors[] = 'Ce commentaire n\'existe pas.';
        }
    } else {
        $errors[] = 'La suppression du commentaire a échoué.';
    }
}
?>
<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($message); ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?= htmlspecialchars($error); ?>
    </div>
<?php } ?>