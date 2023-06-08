<?php

class Element{
    public $name;
    public $sign;
    public $number;
    public $colorhex;
    public $mass;
    public $description;

    public function __construct($name, $sign, $number, $colorhex, $mass, $description){
        $this->name = $name;
        $this->sign = $sign;
        $this->number = $number;
        $this->colorhex = $colorhex;
        $this->mass = $mass;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColorhex()
    {
        return $this->colorhex;
    }

    public function getMass()
    {
        return $this->mass;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getTile(){
        $color = $this->getColorhex();
        if(strlen(strval($this->getNumber())) == 1){
            $number = " " . " " . $this->getNumber() . " " . " ";
            $sign = $this->getSign();
        }
        elseif(strlen(strval($this->getNumber())) == 2){
            $number = $this->getNumber() . " " . " ";
            $sign = $this->getSign();
        }
        elseif(strlen(strval($this->getNumber())) == 3){
            $number = $this->getNumber();
            $sign = " " . $this->getSign();
        }
        $link = "Elementinfo.php?info=" . $this->getNumber();
        echo '<div class="description" style=background-color:'.$color . '>' . $number . '<br> <a href="' . $link . '">' . $sign . '</a></div>';
    }
}
