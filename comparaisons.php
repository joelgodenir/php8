<?php

include 'menu.php';

$a = 1;
$b = 2;

#EGAL
if($a == $b) {
    echo " a est == à b";
}else {
    echo " a n'est pas = = à b <br> <br>";
}

#STRICTEMENT EGAL
if($a === $b) {
    echo " a est == à b";
}else {
    echo " a n'est pas = = = à b <br> <br>";
}

#SUPERIEUR
if($a > $b) {
    echo " a est supérieur à b";
}else {
    echo " a n'est pas supérieur à b <br> <br>";
}

#SUPERIEUR OU EGAL
if($a >= $b) {
    echo " a est supérieur ou égal à b";
}else {
    echo " a n'est pas supérieur ou égal à b <br> <br>";
}

# INFERIEUR
if($a < $b) {
    echo " a est inférieur b";
}else {
    echo " a n'est pas inférieur ou égal à b <br> <br>";
}

# INFERIEUR OU EGAL
if($a <= $b) {
    echo " a est inférieur ou égal à b";
}else {
    echo " a n'est pas inférieur ou égal à b <br> <br>";
}

#DIFFERENT DE 
if($a != $b) {
    echo " a est différent de b";
}else {
    echo " a n'est pas différent de b <br> <br>";
}

# STRICTEMEN DIFFERENT DE 

if($a !== $b) {
    echo " a est strictement différent de b";
}else {
    echo " a n'est pas strictement différent de b <br> <br>";
}