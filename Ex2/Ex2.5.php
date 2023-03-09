<?php

$rodzaj = "Prostokat";
$a = 2;
$b = 3;
$h = 2;

function pro($a,$b){
    return ($a*$b);
}

function tri($a,$h){
    return ($a*$h/2);
}

function tra($a,$b, $h){
    return ((($a+$b)*$h)/2);
}
function pole($rodzaj,$a,$b,$h){
    switch ($rodzaj){
        case "Prostokat":
            echo pro($a,$b);
            break;
        case "Trojkat":
            echo tri($a,$h);
            break;
        case "Trapez":
            echo tra($a,$b,$h);
            break;
    }
}

echo pole($rodzaj,$a,$b,$h);