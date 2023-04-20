<?php
include_once 'Pokemon.php';
class Fire extends Pokemon{
    private $weak = "Water";
    private $strong = "Earth";

    public function __construct($name, $HP, $atackDMG)
    {
        parent::__construct($name, $HP, $atackDMG);
    }

    public function getWeak()
    {
        return $this->weak;
    }

    public function getStrong()
    {
        return $this->strong;
    }

}