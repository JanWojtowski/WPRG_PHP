<?php

$pesel = "02271433333";

function date_pesel($x){
    $temp_year = 0;
    $temp = 0;

    if($x[2] . $x[3] >= 81 and $x[2] . $x[3] <= 92){
        $temp_year = 18;
        $temp = 80;
    }
    elseif($x[2] . $x[3] > 0 and $x[2] . $x[3] <= 12){
        $temp_year = 19;
        $temp = 0;
    }
    elseif($x[2] . $x[3] >= 21 and $x[2] . $x[3] <= 32){
        $temp_year = 20;
        $temp = 20;
    }
    elseif($x[2] . $x[3] >= 41 and $x[2] . $x[3] <= 52){
        $temp_year = 21;
        $temp = 40;
    }elseif($x[2] . $x[3] >= 61 and $x[2] . $x[3] <= 72){
        $temp_year = 22;
        $temp = 60;
    }

    $y = $temp_year . $x[0] . $x[1];
    $m = (int)($x[2] . $x[3]) - $temp;
    $d = $x[4] . $x[5];

    return $d . "-" . $m . "-" . $y;
}

echo date_pesel($pesel);