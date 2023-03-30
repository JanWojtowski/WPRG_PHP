<?php

function add($x,$y){
    return $x+$y;
}
function sub($x,$y){
    return $x-$y;
}

function multi($x,$y){
    return $x * $y;
}

function div($x,$y){
    if($y != 0){
        return $x/$y;
    }
    return "Nie dziel przez 0!";
}