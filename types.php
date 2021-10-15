<?php

# STRING
$a = "Ceci est une chaine de caratère";
echo $a. " : ".gettype($a);
echo "<br>";

# INT
$b = 12;
echo $b." Ceci est : ".gettype($b);
echo "<br>";

# FLOAT
$c = 12.5;
echo $c ." Ceci est : " . gettype($c) . " ou float";
echo "<br>";

#BOOLEAN
$d = true;
echo $d. " Ceci est : ".gettype($d);
echo "<br>";

#NULL
$e = NULL;
echo $e. " Ceci est une valeur : ".gettype($e);
echo "<br>";

#ARRAY
$f = [1,2,3];
echo "Ceci est un tableau : ";
echo "<pre>";
var_dump($f);
echo "</pr>";
echo "<br>";

#OBJECT;
$g = new DateTime();
echo  "Ceci est un objet: <br> ";
var_dump($g);
