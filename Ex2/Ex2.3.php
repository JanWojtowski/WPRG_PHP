<?php

$bad = ['xxx'];
$sen = "abc xxx def";
function cenzura($tab1, $tab2){
    return str_replace($tab2,"***",$tab1);
}

echo cenzura($sen,$bad);