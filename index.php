<?php

require_once "config.php";
if(!isset($_GET['pg'])){

    include_once "import/Acceuil.php";
}else{
    
    switch($_GET['pg']){
        case "cv":  
     
            include_once "import/cv.php";
            break;
        case "tuto":
            
            include_once "import/Tuto.php";
            break;
        default:    
       
            include_once "import/Accueil.php";
          
        case "menu":  
             
             include_once "import/menu.php";
             break;
         case "liens":  
             
                include_once "import/Liens.php";
                break;
         

    }
}

