<?php
session_start();
include_once "Element.php";

function createElementTab(){
    $file = fopen("Elements.csv","r");
    for($i = 1;$i < 119;$i++){
        if(!feof($file)){
            $fileline = fgetcsv($file,0,";");
            $elementtab[$i] = new Element($fileline[0],$fileline[1],intval($fileline[2]),$fileline[3],doubleval($fileline[4]),$fileline[5]);
        }
    }
    return $elementtab;
}

function blanktile($left,$right){
    echo '<div class="spacer" style=padding-left:' . $left . 'px;padding-right:' . $right . 'px;>.<br>.</div>';
}

$_SESSION["elementtab"] = createElementTab();

?>
<html>
<style>
    body{
        background-color: black;
    }
    .conteiner{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    .description{
        padding: 10px;
        border: 1px solid #ccc;
        margin-outside: 5px;
        font-size: 14px;
        font-weight: bold;
    }
    .spacer{
        background-color:black;
        border:1px solid #000;
    }

</style>
<title style="font-size: 30px">Układ Okresowy Pierwiastków</title>
<body>
<div class="conteiner">
    <h1 style="color:white">Układ okresowy pierwiastków</h1>
</div>
    <div class="conteiner">
    <?php
    for($i = 1;$i < 119;$i++){
        if($i == 2){
            blanktile(350,350);
        }
        elseif($i == 3){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 5){
            blanktile(245,200);
        }
        elseif ($i == 11){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 13){
            blanktile(245,200);
        }
        elseif ($i == 19){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 21){
            blanktile(10,10);
        }
        elseif ($i == 37){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 39){
            blanktile(10,10);
        }
        elseif ($i == 55){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 57){
            blanktile(10,10);
            $i = 71;
        }
        elseif ($i == 87){
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
        }
        elseif ($i == 89){
            blanktile(10,10);
            $i = 103;
        }
        elseif ($i == 118){
            $_SESSION["elementtab"][$i]->getTile();
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
            $_SESSION["elementtab"][57]->getTile();
            $i = 58;
        }
        elseif ($i == 70){
            $_SESSION["elementtab"][$i]->getTile();
            echo "</div>";
            echo "</br>";
            echo "<div class=\"conteiner\">";
            $_SESSION["elementtab"][89]->getTile();
            $i = 90;
        }
        elseif ($i == 102){
            $_SESSION["elementtab"][$i]->getTile();
            break;
            echo "</div>";
        }
        $_SESSION["elementtab"][$i]->getTile();
    }
    ?>
</body>
</html>