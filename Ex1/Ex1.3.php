<?php

$m = 2;
$y = 1900;

if($y % 400 == 0 or ($y % 4 == 0 and ($y % 100 != 0))){
    if($m == 2){
        echo 'Miesiac ma 29 dni';
    }
    elseif(($m < 8 and $m % 2 == 1) or ($m >= 8 and $m % 2 == 0)){
        echo 'Miesiac ma 31 dni';
    }
    else{
        echo 'Miesiac ma 30 dni';
    }
}
else{
    if($m == 2){
        echo 'Miesiac ma 28 dni';
    }
    elseif(($m < 8 and $m % 2 == 1) or ($m >= 8 and $m % 2 == 0)){
        echo 'Miesiac ma 31 dni';
    }
    else{
        echo 'Miesiac ma 30 dni';
    }
}
