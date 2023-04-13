<?php
if(isset($_GET["pic"])){
    ?>
    <html>
    <body>
    <?php
    echo "<img src=" ."img/" . $_GET["pic"] . ".jpg"." width=1000 height=1000>";
    echo "</br>";
    echo "<a href=index.php>Powrot</a>";
    echo "</br>";
    $imgDirr = "./img";
    $dirr = scandir($imgDirr);
    array_shift($dirr);
    array_shift($dirr);
    $count = count($dirr);
    if($_GET["pic"] != 1){
        if($_GET["pic"] < $count){
            echo "<a href=index.php?pic=" . ($_GET["pic"] - 1) . "> <-- Poprzednie zdjecie   </a>";
            echo "Aktualne zdjecie: ". ($_GET["pic"]);
            echo "<a href=index.php?pic=" . ($_GET["pic"] + 1) . ">     Następne zdjecie --> </a>";
        }
        else{
            echo "<a href=index.php?pic=" . ($_GET["pic"] - 1) . "> <-- Poprzednie zdjecie   </a>";
            echo "Aktualne zdjecie: ". ($_GET["pic"]);
        }
    }
    else{
        echo "Aktualne zdjecie: ". ($_GET["pic"]);
        echo "<a href=index.php?pic=" . ($_GET["pic"] + 1) . ">     Następne zdjecie --> </a>";
    }
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
            $imgDir = "./img";
            $dir = scandir($imgDir);
            array_shift($dir);
            array_shift($dir);
            $count = count($dir);
            for($i = 1; $i<=$count;$i++){
                echo "<a href=index.php?pic=$i> <img src=" ."img/" . $i . ".jpg"." width=250 height=250 > </a>";
            }
            ?>
        </body>
    </html>
    <?php
}
?>

