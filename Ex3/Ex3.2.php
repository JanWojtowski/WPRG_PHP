<?php

$nationality = "Łotwa";

function nationality($nationality){
    $tab = array(
        "Zjednoczone Królestwo" => "Brytyjczyk",
        "Szkocja" => "Szkot",
        "Finlandia" => "Fin",
        "Polska" => "Polak",
        "Łotwa" => "Łotysz",
        "Włochy" => "Włoch"
    );

    if (isset($tab[$nationality])){
        echo("Twój kraj pochodzenia to $nationality" . "<br/>" . "Wiec jesteś $tab[$nationality]");
    }
    else{
        echo ("Narodowaść nie została znaleziona.");
    }
}

nationality($nationality);
