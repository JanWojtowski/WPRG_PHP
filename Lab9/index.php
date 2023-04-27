<?php

include_once 'Pokemon.php';
include_once 'Water.php';
include_once 'Fire.php';
include_once 'Earth.php';
include_once 'Fight.php';

$pokemon1 = new Water("Squirtel",1000,100,"Squirtle.jpg");
$pokemon2 = new Fire("Charmander",1000,100,"Charmande.png");

$pokemon1->displayCard();
$pokemon2->displayCard();

$fight = new Fight($pokemon1,$pokemon2);

$fight->fight();

