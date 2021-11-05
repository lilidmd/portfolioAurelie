<?php

require_once "config.php";
if(!isset($_GET['pg'])){

    include_once "accueil.php";
}else{
    
    switch($_GET['pg']){
        case "cv":  
       include_once "cv.php";
            break;
        case "tuto":
            
            include_once "tuto.php";
            break; 
        case "galerie":
       
            include_once "galerie.php";
          break;
        case "menu":  
             
             include_once "menu.php";
             break;
         case "liens":  
             
                include_once "liens.php";
                break;

                default:    
             
                include_once "accueil.php";

        }

    }


