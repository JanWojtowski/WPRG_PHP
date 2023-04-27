<?php
include_once 'Pokemon.php';
class Earth extends Pokemon{

    private $element = "Earth";
    private $weak = "Fire";
    private $strong = "Water";

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

    public function displayCard(){
        echo "<p style=background-color:rgba(234,171,10,0.57);display:inline-block;> <img src='" . $this->getSrc() . "' width=250 height=250> 
                    </br>
                    Name: " . $this->getName() . "
                    </br>
                    HP: " . $this->getHP() . "
                    </p>";
    }

}
