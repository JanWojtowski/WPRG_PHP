<html>
<body>
<?php
$file = fopen("Plik.csv","r");
while (!feof($file)){
    $tab = fgetcsv($file);
    echo '<a href=Ex5.3.php?link=' . $tab[1] .">" . $tab[0] . "</a>" . "<br>";
}

foreach ($tab as $item){
    if($item["link"] == $_GET["link"]){
        $aktualna = $item;
    }
}

echo "<h1>" . $aktualna["nazwa"] . "</h1>";
echo "<p>" . $aktualna["tresc"] . "</p>";

?>
</body>
</html>
