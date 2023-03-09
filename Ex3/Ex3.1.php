<?php

function createTab(){

    for($i = 0; $i < 10; $i++){
        $tab[$i] = rand(1,10);
    }

    return $tab;
}

function give_argument($tab,$x){
    return $tab[$x];
}

$x = rand(0,9);

$tab = createTab();

echo ("Podany index: " . ($x+1));
echo ("<br/>");
echo ("Wygenerowana tablica:" . "<br/>");
echo ("[" . implode(", ", $tab) . "]");
echo ("<br/>");
echo ("Wartość na danej pozycji: " . give_argument($tab,$x));