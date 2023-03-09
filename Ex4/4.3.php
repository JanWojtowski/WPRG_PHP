<?php

function multiplication_table($x){

    for($i = 1; $i <= $x ; $i++){
        for($j = 1; $j <= $x; $j++){
            echo (($i*$j) . "");
        }
        echo ("<br/>");
    }
}

multiplication_table(10);
