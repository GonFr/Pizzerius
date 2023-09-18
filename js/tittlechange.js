var pathname = window.location.pathname;
    switch(pathname) {
        case "/pizzerius/" :
            document.getElementById("jschange").textContent ="La meilleure pizza du coin, à emporter";
        break;
        case "/pizzerius/index.php" :
            document.getElementById("jschange").textContent ="La meilleure pizza du coin, à emporter";
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
        default:
        document.getElementById("jschange").textContent ="La meilleure pizza du coin, à emporter";
    }