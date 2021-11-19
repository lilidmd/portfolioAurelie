<?php

require_once "config.php";

if (!isset($_GET['page'])) {

    include_once "page/accueil.php";

} else {

    switch ($_GET['page']) {

        case "cv":

            include_once "page/cv.php";

            break;
            case "admin":

                include_once "page/admin.php";
    
                break;
    

        case "tuto":

            include_once "page/tuto.php";

            break;

        case "liens":

            include_once "page/liens.php";

            break;

        case "contact":

            include_once "page/contact.php";

            break;

        case "galerie":

            include_once "page/galerie.php";

            break;

        default:

            include_once "page/accueil.php";

    }

}
