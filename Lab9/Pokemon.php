<?php
class Pokemon
{
    private $name;
    private $maxHP;

    private $HP;

    private $atackDMG;

    private $is_stuned = false;

    private $src;

    private $is_confused = false;

    public function __construct($name, $maxHP, $atackDMG,$src)
    {
        $this->name = $name;
        $this->maxHP = $maxHP;
        $this->HP = $maxHP;
        $this->atackDMG = $atackDMG;
        $this->src = $src;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHP()
    {
        return $this->HP;
    }

    public function setHP($HP)
    {
        $this->HP = $HP;
    }

    public function getAtackDMG()
    {
        return $this->atackDMG;
    }

    public function setAtackDMG($atackDMG)
    {
        $this->atackDMG = $atackDMG;
    }

    public function atack(){
        return $this->getAtackDMG();
    }

    public function isIsStuned()
    {
        return $this->is_stuned;
    }

    public function setIsStuned($is_stuned)
    {
        $this->is_stuned = $is_stuned;
    }

    public function specialAtack(){
        return false;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function isIsConfused()
    {
        return $this->is_confused;
    }

    public function setIsConfused($is_confused)
    {
        $this->is_confused = $is_confused;
    }



    public function displayCard(){
        echo "<p style=background-color:#c8c8c8;> <img src='" . $this->getSrc() . "' width=250 height=250> </p>";
    }

}