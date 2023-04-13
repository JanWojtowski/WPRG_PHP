<?php
function blankflag($w,$h){
    $flag = imagecreatetruecolor($w,$h);
    return $flag;
}

function polishflag(){
    $flag = blankflag(800,500);
    $white = imagecolorallocate($flag,255,255,255);
    $red = imagecolorallocate($flag,255,0,0);
    imagefill($flag,0,0,$white);
    imagefilledrectangle($flag,0,250,800,500,$red);
    imagejpeg($flag,"plflag.jpg");
}

function franceflag(){
    $flag = blankflag(600,400);
    $blue = imagecolorallocate($flag,0,0,255);
    $white = imagecolorallocate($flag,255,255,255);
    $red = imagecolorallocate($flag,255,0,0);
    imagefill($flag,0,0,$white);
    imagefilledrectangle($flag,0,0,200,400,$blue);
    imagefilledrectangle($flag,400,0,600,400,$red);
    imagejpeg($flag,"frflag.jpg");
}

function swflag(){
    $flag = blankflag(700,500);
    $blue = imagecolorallocate($flag,0,0,255);
    $yellow = imagecolorallocate($flag,255,255,0);
    imagefill($flag,0,0,$blue);
    imagefilledrectangle($flag,200,0,300,500,$yellow);
    imagefilledrectangle($flag,0,200,700,300,$yellow);
    imagejpeg($flag,"swflag.jpg");
}

swflag();
