<?php

try {
    function addcomments(PDO $pdo, string $name, string $comments, ) {
        $sqlun = "INSERT INTO `commentarea` ( `name`, `comments`) VALUES (:name, :comments);";
        $queryun = $pdo->prepare($sqlun);
        $queryun->bindParam(':name', $name, PDO::PARAM_STR);
        $queryun->bindParam(':comments', $comments, PDO::PARAM_STR);
        return $queryun->execute();
    }
} catch (PDOException $e) {
    die($e->getMessage());
}

$errors = [];
$messages = [];


if (isset($_POST['addcomments'])) {
// throw new Exception('Erreur, vous ne pouvez entrer que des chiffres');
$po = addcomments($pdo, $_POST['name'], $_POST['comments']);

if ($po) {
    $messages[] = 'Le commentaire a bien été ajouté';
} else {
    $errors[] = 'Une erreur s\'est produite lors de l\'ajout du commentaire';
}

}
?>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?=$error; ?>
    </div>
<?php } ?>




<?php
// On récupère tout le contenu de la table commentarea
$sqlQuery = 'SELECT * FROM commentarea ORDER BY id DESC LIMIT 3';
$commentStatement = $pdo->prepare($sqlQuery);
$commentStatement->execute();
$comments = $commentStatement->fetchAll();

// On affiche chaque recette une à une
