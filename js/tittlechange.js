var pathname = window.location.pathname;
    switch(pathname) {
        case "/pizzerius/" :
            document.getElementById("jschange").textContent ="Bienvenue chez Pizzerius";
        break;
        case "/pizzerius/index.php" :
            document.getElementById("jschange").textContent ="Bienvenue chez Pizzerius";
        break;
        case "/pizzerius/menu.php" :
            document.getElementById("jschange").textContent ="Emportez une délicieuse pizza";
        break;
        case "/pizzerius/contact.php" :
            document.getElementById("jschange").textContent ="Vous désirez nous contacter";
        break;
        case "/pizzerius/about.php" :
            document.getElementById("jschange").textContent ="Découvrez Pizzerius";
        break;
        case "/pizzerius/legalmentions.php" :
            document.getElementById("jschange").textContent ="Tout savoir sur nous";
        break;
        case "/pizzerius/login.php" :
            document.getElementById("jschange").textContent ="Connectez-vous administrateur";
        break;
        case "/pizzerius/admin.php" :
            document.getElementById("jschange").textContent ="Vous voulez modifier le site ?";
        break;
        default:
        document.getElementById("jschange").textContent ="La meilleure pizza du coin, à emporter";
    }