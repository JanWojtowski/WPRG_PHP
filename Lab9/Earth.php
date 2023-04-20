<?php
include_once 'Pokemon.php';
class Earth extends Pokemon{
    private $weak = "Fire";
    private $strong = "Water";

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
