<?php
require_once('templates/header.php');
require_once('lib/pdo.php');


if (!isset($_SESSION['user']) || empty($_SESSION['user']['email'])) {
    header('Location: login.php');
    exit;
} else {
    require_once('templates/inscription.php');
    require_once('lib/addpizza.php');
}

require_once('lib/user.php');
require_once('templates/footer.php');





