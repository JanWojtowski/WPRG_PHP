<?php
include_once 'Pokemon.php';
class Water extends Pokemon{

    private $element = "Water";
    private $weak = "Earth";
    private $strong = "Fire";
    private $canStun = false;
    private $canConf = false;

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
            $pokemon->setIsStuned(true);
        }
        else{
            $pokemon->setIsStuned(false);
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
