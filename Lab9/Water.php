<?php
include_once 'Pokemon.php';
class Water extends Pokemon{

    private $element = "Water";
    private $weak = "Earth";
    private $strong = "Fire";

    public function __construct($name, $HP, $atackDMG,$src)
    {
        parent::__construct($name, $HP, $atackDMG,$src);
    }

    public function getWeak()
    {
        return $this->weak;
    }

    public function getStrong()
    {
        return $this->strong;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function specialAtack(){
        $liczba = rand(0,9);
        if($liczba % 2) {
            x;
        }
        else{
            return false;
        }
    }

    public function displayCard(){
        echo "<p style=background-color:#0aeaea;display:inline-block;> <img src='" . $this->getSrc() . "' width=250 height=250> 
                    </br>
                    Name: " . $this->getName() . "
                    </br>
                    HP: " . $this->getHP() . "
                    </p>";
    }

}
