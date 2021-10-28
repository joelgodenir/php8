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

// Afficher plusieurs paramètres

function ma_Fonction() {
    $recuperatArguments = func_get_args(); /* Récupère tous les arguments qui vont être déclaré au moment de l'appel de la fonction et les ranger en Array */

    $choisiLargument = func_get_arg(1); /* Avec arg je décide de l'élément que je veux récupérer. En l'occurence je vais récupérer l'argument 2 dans le tableau soit 1 */
    echo $choisiLargument;

    return $recuperatArguments; /* return permet de retourner une valeur, sans forcément l'afficher avec par exemple un echo */
}

ma_Fonction(10,1,"coucou"); 



// Nouvelle génération avec rest

function mon_Fonction(...$arg){ // les ... résumes plus rapidement le type juste au dessu, elle récupère tous les paramètres et les ajoutes à un tableau
    print_r($arg);
}

mon_Fonction(1,5,9);