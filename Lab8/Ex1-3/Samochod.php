<?php
class Samochod{
    private $id;
    private $marka;
    private $model;
    private $rok;
    private $cena;
    private $pojemnosc;
    private $link;

    public function __construct($id, $marka, $model, $rok, $cena, $pojemnosc, $link)
    {
        $this->id = $id;
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
        $this->cena = $cena;
        $this->pojemnosc = $pojemnosc;
        $this->link = $link;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMarka()
    {
        return $this->marka;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getRok()
    {
        return $this->rok;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function getPojemnosc()
    {
        return $this->pojemnosc;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setMarka($marka)
    {
        $this->marka = $marka;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setRok($rok)
    {
        $this->rok = $rok;
    }

    public function setCena($cena)
    {
        $this->cena = $cena;
    }

    public function setPojemnosc($pojemnosc)
    {
        $this->pojemnosc = $pojemnosc;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

}