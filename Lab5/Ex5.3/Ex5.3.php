<html>
<body>
<?php
$file = fopen("Plik.csv","r");
$i = 0;
while (!feof($file)){
    $tab[$i] = fgetcsv($file);
    echo '<a href=Ex5.3.php?link=' . $tab[$i][1] .">" . $tab[$i][0] . "</a>" . "<br>";
    $i++;
}

foreach ($tab as $item){
    if($item[1] == $_GET["link"]){
        $aktualna = $item;
    }
}

echo "<h1>" . $aktualna[0] . "</h1>";
echo "<p>" . $aktualna[2] . "</p>";

echo '<a href=Ex5.3.Edit.php?operation=edit' . '&nazwa=' . $aktualna[0] . "> Edytuj </a>";
fclose($file);
?>
</body>
</html>
