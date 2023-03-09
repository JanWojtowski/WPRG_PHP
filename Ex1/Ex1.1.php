<?php

$x = 3;
$y = 4;
$z = 5;

if($x < $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}
elseif($x < $z){
    $temp = $x;
    $x = $z;
    $z = $temp;
}

if(($x*$x) + ($y*$y) == ($z*$z)){
    echo("Twierdzenie spelnione");
}
else{
    echo("Twierdznie nie spelnione");
}


