<?php

function createTab(){

    for($i = 0; $i < 10; $i++){
        $tab[$i] = rand(1,100);
    }

    return $tab;
}

function ver_for($tab){
    $max = 0;
    for($i = 0; count($tab) > $i; $i++){
        if($tab[$i] > $max){
            $max = $tab[$i];
        }
    }
    return $max;
}

function ver_while($tab){
    $max = 0;
    $i = 0;
    while($i < count($tab)){
        if($tab[$i] > $max){
            $max = $tab[$i];
        }
        $i++;
    }
    return $max;
}

function ver_do_while($tab){
    $max = 0;
    $i = 0;

    do {
        if($tab[$i] > $max){
            $max = $tab[$i];
        }
        $i++;
    } while($i < count($tab));

    return $max;
}

function ver_foreach($tab){
    $max = 0;
    foreach ($tab as $value){
        if($value > $max){
            $max = $value;
        }
    }
    return $max;
}

$tab = createTab();

echo ("Wygenerowana tablica: [" . implode(", ", $tab) . "]");
echo ("<br/>");
echo ("Pętla for: " . ver_for($tab));
echo ("<br/>");
echo ("Pętla while: " . ver_while($tab));
echo ("<br/>");
echo ("Pętla do while: " . ver_do_while($tab));
echo ("<br/>");
echo ("Pętla foreach: " . ver_foreach($tab));
echo ("<br/>");

