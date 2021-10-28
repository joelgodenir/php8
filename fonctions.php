<?php 

include 'menu.php';

// Déclaration d'une fonction 

function monFonction() {
    echo "Hello ma fonction ";
}

monFonction();


/* Déclaration d'une fonction avec argument. 
Noter un ou plusieurs paramètres dans les parenthèses de la fonction. 
Lors de l'appel de la fonction ajouter les arguments utiliser lors de l'execution de la fonction.
*/

function maFonction($a) {
    echo $a;
}

maFonction("coucou");

