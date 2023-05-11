<?php

include_once 'Pokemon.php';
include_once 'Water.php';
include_once 'Fire.php';
include_once 'Earth.php';

class Fight{
    private $pokemon1;
    private $pokemon2;

    public function __construct($pokemon1,$pokemon2){
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function fight(){
        $win = null;
        $name1 = $this->pokemon1->getName();
        $name2 = $this->pokemon2->getName();
        $tempDMG = 0;
        echo "<p style=background-color:#dc7df5;> Start </p>";
        while($win == null){
            if($tempDMG != 0){
                if(!$this->pokemon2->isIsConfused()){
                    if($this->pokemon2->getElement() == $this->pokemon1->getWeak()){
                        $this->pokemon1->setHP($this->pokemon1->getHP() - ($tempDMG * 2));
                        $tempDMG2 = $tempDMG * 2;
                        echo "</br>";
                        echo "$name2 attacked $name1 for $tempDMG2 HP";
                        echo "</br>";
                        echo "$name1 " . $this->pokemon1->getHP() . "HP left!!!";
                        echo "</br>";
                        $this->pokemon1->displayCard();
                        $this->pokemon2->displayCard();
                        echo "<p style=background-color:#dc7df5;> . </p>";
                        $tempDMG = 0;
                    }
                    else{
                        $this->pokemon1->setHP($this->pokemon1->getHP() - $tempDMG);
                        echo "</br>";
                        echo "$name2 attacked $name1 for $tempDMG HP";
                        echo "</br>";
                        echo "$name1 " . $this->pokemon1->getHP() . "HP left!!!";
                        echo "</br>";
                        $this->pokemon1->displayCard();
                        $this->pokemon2->displayCard();
                        echo "<p style=background-color:#dc7df5;> . </p>";
                        $tempDMG = 0;
                    }
                }
                else{
                    $this->pokemon2->setHP($this->pokemon2->getHP() - $tempDMG);
                    echo "</br>";
                    echo"$name2 is confused!";
                    echo "</br>";
                    echo "$name2 attacked himself for $tempDMG HP";
                    echo "</br>";
                    echo "$name1 " . $this->pokemon2->getHP() . "HP left!!!";
                    echo "</br>";
                    $this->pokemon1->displayCard();
                    $this->pokemon2->displayCard();
                    echo "<p style=background-color:#dc7df5;> . </p>";
                    $tempDMG = 0;
                }

            }
            if($this->pokemon1->getHp() <= 0){
                $win = $this->pokemon2;
                break;
            }
            if($this->pokemon2->getHp() <= 0){
                $win = $this->pokemon1;
                break;
            }
            if(!$this->pokemon1->isIsConfused()){
                if(!$this->pokemon1->isIsStuned()){
                    if($this->pokemon1->getElement() == $this->pokemon2->getWeak()){
                        $this->pokemon2->setHP($this->pokemon2->getHP() - ($this->pokemon1->atack() * 2));
                        $tempDMG2 = $this->pokemon1->atack() * 2;
                        echo "</br>";
                        echo "$name1 attacked $name2 for $tempDMG2 HP";
                        echo "</br>";
                        echo "$name2 " . $this->pokemon2->getHP() . "HP left!!!";
                        echo "</br>";
                        $this->pokemon1->displayCard();
                        $this->pokemon2->displayCard();
                        echo "<p style=background-color:#dc7df5;> . </p>";
                    }
                    else{
                        $this->pokemon2->setHP($this->pokemon2->getHP() - $this->pokemon1->atack());
                        $tempDMG2 = $this->pokemon1->atack();
                        echo "</br>";
                        echo "$name1 attacked $name2 for $tempDMG2 HP";
                        echo "</br>";
                        echo "$name2 " . $this->pokemon2->getHP() . "HP left!!!";
                        echo "</br>";
                        $this->pokemon1->displayCard();
                        $this->pokemon2->displayCard();
                        echo "<p style=background-color:#dc7df5;> . </p>";
                    }

                    $this->pokemon1->specialAtack($this->pokemon2);
                }
                else{
                    echo "</br>";
                    echo "$name1 is Stunned!";
                    echo "</br>";
                }
            }
            else{
                $this->pokemon1->setHP($this->pokemon1->getHP() - $this->pokemon1->atack());
                $tempDMG2 = $this->pokemon1->atack();
                echo "</br>";
                echo"$name1 is confused!";
                echo "</br>";
                echo "$name1 attacked himself for $tempDMG2 HP";
                echo "</br>";
                echo "$name1 " . $this->pokemon1->getHP() . "HP left!!!";
                echo "</br>";
                $this->pokemon1->displayCard();
                $this->pokemon2->displayCard();
                echo "<p style=background-color:#dc7df5;> . </p>";
            }


            if($this->pokemon2->getHp() <= 0){
                $win = $this->pokemon1;
                break;
            }
            if(!$this->pokemon2->isIsStuned()){
                $tempDMG = $this->pokemon2->atack();
                $this->pokemon2->specialAtack($this->pokemon1);
            }
            else{
                echo "</br>";
                echo "$name2 is Stunned!";
                echo "</br>";
            }
        }
        $winnerName = $win->getName();
        echo "</br>";
        echo "</br>";
        $win->displayCard();
        echo "</br>";
        echo "$winnerName won!!!";
    }
}
