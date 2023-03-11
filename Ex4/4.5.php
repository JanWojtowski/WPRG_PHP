<?php

$player = 1;
$tab = [[null,null,null],[null,null,null],[null,null,null]];
$move = [];
$movec = 1;

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
    else{
        $move[0] = 1;
        $move[1] = 0;
    }
    $movec++;
    return $movec;
}

function checkVictory($tab){
    for($i = 0; $i < 3; $i++){
        if($tab[$i][0] == $tab[$i][1] and $tab[$i][1] == $tab[$i][2] and $tab[$i][0] != null){
            return true;
        }
        if($tab[0][$i] == $tab[1][$i] and $tab[1][$i] == $tab[2][$i] and  $tab[0][$i] != null){
            return true;
        }
    }
    if ($tab[0][0] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][0] != null){
        return true;
    }
    if ($tab[0][2] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][2] != null){
        return true;
    }
    return false;
}

while(true){
    $movec = move($move,$movec);
    $player = ruch($player,$move,$tab);
    printBoard($tab);
    if (checkVictory($tab)){
        break;
    }
}

