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
    if(isset($_GET["str"])){
        ?>
        <html>
            <body>
                <?php
                $imgDir = "./img2";
                $dir = scandir($imgDir);
                array_shift($dir);
                array_shift($dir);
                $count = count($dir);
                $maxpage = ((int) ceil($count / 4))- 1;
                for($i = $_GET["str"] * 4 + 1; $i <= $_GET["str"] * 4 + 4 ; $i++){
                    echo "<a href=index.php?pic=$i> <img src=" ."img2/" . $i . ".jpg"." width=500 height=500 > </a>";
                }
                echo "</br>";
                if(!$_GET["str"] == 0){
                    if($_GET["str"] < $maxpage){
                        echo "<a href=index.php?str=" . ($_GET["str"] - 1) . "> <-- Poprzednia strona   </a>";
                        echo "Aktualna strona: ". ($_GET["str"]);
                        echo "<a href=index.php?str=" . ($_GET["str"] + 1) . ">     Następna strona --> </a>";
                    }
                    else{
                        echo "<a href=index.php?str=" . ($_GET["str"] - 1) . "> <-- Poprzednia strona   </a>";
                        echo "Aktualna strona: ". ($_GET["str"]);
                    }
                }
                else{
                    echo "Aktualna strona: ". ($_GET["str"]);
                    echo "<a href=index.php?str=" . ($_GET["str"] + 1) . ">     Następna strona --> </a>";
                }
                ?>
            </body>
        </html>
        <?php
    }
    else{
        header("location: index.php?str=0");
    }
}
?>