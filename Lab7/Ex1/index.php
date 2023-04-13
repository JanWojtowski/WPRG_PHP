<html>
    <body>
    <?php
    $imgDir = "./img";
    $dir = scandir($imgDir);
    array_shift($dir);
    array_shift($dir);
    $count = count($dir);

    for($i = 1; $i<=$count;$i++){
        echo "<img src=" ."img/" . $i . ".jpg"." width=250 height=250 >";
    }
    ?>
    </body>
</html>
