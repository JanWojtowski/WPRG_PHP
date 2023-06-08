<?php
include_once "Element.php";
session_start();
if(!isset($_GET['info'])){
    header("location:index.php");
    exit();
}
$elementtab = $_SESSION["elementtab"];
$element = $elementtab[intval($_GET['info'])];
$name = $element->getName();
$sign = $element->getSign();
$number = $element->getNumber();
$color = $element->getColorhex();
$mass = $element->getMass();
$description = $element->getDescription();
if(!isset($_POST['atoms'])){
    $_POST['atoms'] = 1;
}
?>
<html>
<style>
body{
    background-color: <?php echo $color ?>;
    }
    .conteiner{
        justify-content: center;
        align-content: center;
        align-items: center;
        color:black;
    }
</style>
<title style="font-size: 30px"><?php echo $name . "(" . $sign . ")"?></title>
<body>
<div class="conteiner">
    <h1><?php echo $name . "(" . $sign . ")"?></h1>
</div>
<div class="conteiner">
    <h1><?php echo "Masa atomowa: " . $mass . "u"?></h1>
</div>
<div class="conteiner">
    <h1><?php echo $description ?></h1>
</div>
<a href="index.php">Powrót do strony głównej</a>
<br>
<br>
<br>
<form action="Elementinfo.php?info=<?php echo $_GET['info']?>" method="post">
    <label for="atoms">Liczba atomów: </label>
    <input type="number" value="<?php echo $_POST['atoms']?>" name="atoms" id="atoms" size="10">
    <input type="submit" name="Send" value="send">
</form>
<p><?php echo $_POST['atoms'] . " atomów $sign waży: " . $mass * $_POST['atoms'] . "u"?></p>