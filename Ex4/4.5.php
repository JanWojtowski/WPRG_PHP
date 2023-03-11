<?php

$player = 1;
$tab = [["..","..",".."],["..","..",".."],["..","..",".."]];
$move = [1,1];

function ruch($player,$move,$tab){
    if ($tab[$move[0]][$move[1]] == "."){
        if($player == 1){
            $tab[$move[0]][$move[1]] = "o";
        }
        else{
            $tab[$move[0]][$move[1]] = "x";
        }
    }
    else{
        echo "Miejsce zajęte";
    }
    return $tab;
}

function printBoard($tab){
    echo ("<br/>");
    echo (" 0 | 1 | 2 | 3 |");
    echo ("<br/>");
    echo (" 1 | " . $tab[0][0] . " | " . $tab[0][1] . " | " . $tab[0][2] . " |");
    echo ("<br/>");
    echo (" 2 | " . $tab[1][0] . " | " . $tab[1][1] . " | " . $tab[1][2] . " |");
    echo ("<br/>");
    echo (" 3 | " . $tab[2][0] . " | " . $tab[2][1] . " | " . $tab[2][2] . " |");
    echo ("<br/>");
}

function move($move,$movec){
    if($movec == 1){
        $move[0] = 1;
        $move[1] = 1;
    }
    elseif ($movec == 2){
        $move[0] = 2;
        $move[1] = 2;
    }
    elseif ($movec == 3){
        $move[0] = 0;
        $move[1] = 2;
    }
    elseif ($movec == 4){
        $move[0] = 2;
        $move[1] = 0;
    }
    elseif ($movec == 5){
        $move[0] = 2;
        $move[1] = 1;
    }
    elseif ($movec == 6){
        $move[0] = 0;
        $move[1] = 0;
    }
    elseif ($movec == 7){
        $move[0] = 0;
        $move[1] = 1;
    }
    elseif ($movec == 8){
        $move[0] = 1;
        $move[1] = 2;
    }
    elseif ($movec == 9){
        $move[0] = 1;
        $move[1] = 0;
    }
}

function checkVictory($tab){
    for($i = 0; $i < 3; $i++){
        if($tab[$i][0] == $tab[$i][1] and $tab[$i][1] == $tab[$i][2] and $tab[$i][0] != ".."){
            return true;
        }
        if($tab[0][$i] == $tab[1][$i] and $tab[1][$i] == $tab[2][$i] and  $tab[0][$i] != ".."){
            return true;
        }
    }
    if ($tab[0][0] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][0] != ".."){
        return true;
    }
    if ($tab[0][2] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][2] != ".."){
        return true;
    }
    return false;
}

for($i = 1; $i < 10; $i++){
    if($i == 1){
        $move[0] = 1;
        $move[1] = 1;
    }
    elseif ($i == 2){
        $move[0] = 2;
        $move[1] = 2;
    }
    elseif ($i == 3){
        $move[0] = 0;
        $move[1] = 2;
    }
    elseif ($i == 4){
        $move[0] = 2;
        $move[1] = 0;
    }
    elseif ($i == 5){
        $move[0] = 2;
        $move[1] = 1;
    }
    elseif ($i == 6){
        $move[0] = 0;
        $move[1] = 0;
    }
    elseif ($i == 7){
        $move[0] = 0;
        $move[1] = 1;
    }
    elseif ($i == 8){
        $move[0] = 1;
        $move[1] = 2;
    }
    elseif ($i == 9){
        $move[0] = 1;
        $move[1] = 0;
    }
    if($i % 2 == 1){
        $player = 1;
    }
    else{
        $player = 2;
    }
    if ($tab[$move[0]][$move[1]] == ".."){
        if($player == 1){
            $tab[$move[0]][$move[1]] = "o";
        }
        else{
            $tab[$move[0]][$move[1]] = "x";
        }
    }
    else{
        echo "Miejsce zajęte";
    }
    printBoard($tab);
    if (checkVictory($tab)){
        echo ("Gracz $player wygrał!!!");
        break;
    }
}



