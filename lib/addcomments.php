<?php
$errors = [];
$messages = [];

$name = $comments = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if (empty($name)) {
            $errors[] = "Vous devez ajouter un pseudo.";
        } elseif (strlen($name) > 50) {
            $errors[] = "Le pseudo est trop long (50 caractères max).";
        }
    }


    if (isset($_POST['comments'])) {
        $comments = trim($_POST['comments']);
        if (empty($comments)) {
            $errors[] = "Vous devez ajouter un commentaire.";
        } elseif (mb_strlen($comments) > 250) { 
            $errors[] = "Le commentaire est trop long (250 caractères max).";
        }
    }

    
    if (empty($errors)) {
     
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $comments = htmlspecialchars($comments, ENT_QUOTES, 'UTF-8');

        try {
            function addcomments(PDO $pdo, string $name, string $comments) {
                $sql = "INSERT INTO `commentarea` (`name`, `comments`) VALUES (:name, :comments)";
                $query = $pdo->prepare($sql);
                $query->bindParam(':name', $name, PDO::PARAM_STR);
                $query->bindParam(':comments', $comments, PDO::PARAM_STR);

                if ($query->execute()) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
            $errors[] = 'Une erreur est apparue';
        }

        if (isset($_POST['addcomments'])) {
            $po = addcomments($pdo, $name, $comments);

            if ($po) {
                $messages[] = 'Le commentaire a bien été ajouté';
            } else {
                $errors[] = 'Une erreur s\'est produite lors de l\'ajout du commentaire';
            }
        }
    }
}


?>