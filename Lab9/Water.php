<?php
include_once 'Pokemon.php';
class Water extends Pokemon{
    private $weak = "Earth";
    private $strong = "Fire";

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
