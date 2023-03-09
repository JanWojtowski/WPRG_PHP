<?php

function diceRollTab($x){
    $tab = [];
    for($i = 0; $i < $x; $i++){
        array_push($tab,rand(1,6));
    }
    return $tab;
}

$x = rand(1,10);

echo ("Ilość rzutów kostką: $x");
echo ("<br/>");
echo ("Wynik: [" . implode(", ",diceRollTab($x)) . "]");