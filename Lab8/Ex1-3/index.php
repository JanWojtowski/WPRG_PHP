<?php

include 'Samochod.php';

$file = fopen("Auta.txt","r");
$i = 0;
while (!feof($file)){
    $tab[$i] = fgetcsv($file);
    $i++;
}

foreach ($tab as $item){
    $tab2[$item[0]] = new Samochod($item[0],$item[1],$item[2],$item[3],$item[4],$item[5],$item[6]);
}

if(isset($_GET["pic"])){
    ?>
    <html>
        <body>
            <?php
            foreach ($tab2 as $item){
                if ($item->getId() == $_GET["pic"]){
                    $temp = $item;
                }
            }
            echo "<img src=" . $temp->getLink() ." width=500 height=500 >";
            echo "</br>";
            echo "Marka: "  . $temp->getMarka();
            echo "</br>";
            echo "Model: "  . $temp->getModel();
            echo "</br>";
            echo "Rok produkcji: "  . $temp->getRok();
            echo "</br>";
            echo "Cena: "  . $temp->getCena();
            echo "</br>";
            echo "Pojemność: "  . $temp->getPojemnosc();
            echo "</br>";
            echo "<a href=index.php>POWROT</a>"
            ?>
        </body>
    </html>
    <?php
}
else{
    ?>
    <html>
        <body>
            <?php
            foreach ($tab2 as $item){
                echo "<a href=index.php?pic=" . $item->getId() . "> <img src=" . $item->getLink() ." width=500 height=500 > </a>";
            }
            ?>
        </body>
    </html>
    <?php
}
?>