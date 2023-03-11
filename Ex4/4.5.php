<?php

$player = 1;
$tab = [[null,null,null],[null,null,null],[null,null,null]];
$move = [];

function ruch($player,$move,$tab){
    if ($tab[$move[0]][$move[1]] == null){
        if($player == 1){
            $tab[$move[0]][$move[1]] = "o";
            $player = 2;
        }
        else{
            $tab[$move[0]][$move[1]] = "x";
            $player = 1;
        }
    }
    else{
        echo "Miejsce zajęte";
    }
    return $player;
}

function printBoard($tab){
    echo (" 0 | 1 | 2 | 3 |");
    echo ("<br/>");
    echo (" 1 | " . $tab[0][0] . " | " . $tab[0][1] . " | " . $tab[0][2]);
    echo ("<br/>");
    echo (" 1 | " . $tab[1][0] . " | " . $tab[1][1] . " | " . $tab[1][2]);
    echo ("<br/>");
    echo (" 1 | " . $tab[2][0] . " | " . $tab[2][1] . " | " . $tab[2][2]);
}

function move($move){
    if($move == 1){
        $move[0] = 1;
        $move[1] = 1;
    }
    elseif ($move == 2){
        $move[0] = 2;
        $move[1] = 2;
    }
    elseif ($move == 3){
        $move[0] = 0;
        $move[1] = 2;
    }
    elseif ($move == 4){
        $move[0] = 2;
        $move[1] = 0;
    }
    elseif ($move == 5){
        $move[0] = 2;
        $move[1] = 1;
    }
    elseif ($move == 6){
        $move[0] = 0;
        $move[1] = 0;
    }
    elseif ($move == 7){
        $move[0] = 0;
        $move[1] = 1;
    }
    elseif ($move == 8){
        $move[0] = 1;
        $move[1] = 2;
    }
    else{
        $move[0] = 1;
        $move[1] = 0;
    }
    $move++;
    return $move;
}


