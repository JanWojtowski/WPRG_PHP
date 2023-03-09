<?php


$player = 1;
$tab = [[null,null,null],[null,null,null],[null,null,null]];

function ruch($player,$row,$column,$tab){
    if ($tab[$row][$column] == null){
        if($player == 1){
            $tab[$row][$column] = "o";
            $player = 2;
        }
        else{
            $tab[$row][$column] = "x";
            $player = 1;
        }
    }
    else{
        echo "Miejsce zajęte";
    }
}