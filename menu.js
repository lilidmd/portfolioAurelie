/* Cette fonction va servir de dÃ©clencheur Ã  notre transition   */
/* L'Ã©tat initial correspond Ã  la classe "menu_hamburger"       */
/* L'Ã©tat final correspond aux classes "menu_hamburger affiche" */
/*                                                              */
/* Chaque fois qu'on appuie sur le bouton, on bascule d'un      */
/* Ã©tat Ã  l'autre, provoquant le lancement de la transition     */

function toggle() {
    "use strict";
    
    /* Mettre dans un variable x, le menu hamburger (balise nav) */
    var x = document.querySelector(".menu_hamburger");

    if (x.className === "menu_hamburger") {
        x.className += " affiche";
    } else {
        x.className = "menu_hamburger";
    }
}