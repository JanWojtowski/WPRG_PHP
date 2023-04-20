<?php
class Pokemon
{
    private $name;
    private $HP = 1000;
    private $atackDMG;

    public function __construct($name, $HP, $atackDMG)
    {
        $this->name = $name;
        $this->HP = $HP;
        $this->atackDMG = $atackDMG;
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
}