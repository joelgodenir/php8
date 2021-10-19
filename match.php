<?php

include 'menu.php';

$firstName = "Joel";

$resultatMatch = match($firstName) {
    'Joel' => 'Bonjour Joel',
    'Machin' => 'Bonjour Machin',
    'Bidule' => 'Bonjour Bidule',
    default => 'Inconnu'
};


echo $resultatMatch;