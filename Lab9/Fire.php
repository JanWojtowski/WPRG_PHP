<?php
include_once 'Pokemon.php';
class Fire extends Pokemon{

    private $element = "Fire";
    private $weak = "Water";
    private $strong = "Earth";

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

    public function specialAtack(Pokemon $pokemon){
        $liczba = rand(0,9);
        if($liczba % 2) {
            $pokemon->setIsConfused(true);
        }
        else{
            $pokemon->setIsConfused(false);
        }
    }

    public function displayCard(){
        echo "<p style=background-color:#ea0a0a;display:inline-block;> <img src='" . $this->getSrc() . "' width=250 height=250> 
                    </br>
                    Name: " . $this->getName() . "
                    </br>
                    HP: " . $this->getHP() . "
                    </p>";
    }

}