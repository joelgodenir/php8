<?php

$age = 18;
$droitAcces;

if($age > 18 ){
    $droitAcces = true;
}else {
    $droitAcces = false;
}

/* le ? correspond à Si et : correspond à sinon */

$droitAcces = $age > 18 ? true : false;

?>