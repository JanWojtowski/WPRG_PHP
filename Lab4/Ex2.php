<?php
$tab[0] = ["nazwa"=>"Strona Główna","link"=>"stronaglowna","tresc"=>"Witamy"];
$tab[1] = ["nazwa"=>"O nas","link"=>"onas","tresc"=>"Informacje"];
$tab[2] = ["nazwa"=>"Kontakt","link"=>"kontakt","tresc"=>"Tel:<br>E-mail:"];
?>

<html>
<body>
<?php
foreach ($tab as $item){
    echo '<a href=Ex2.php?link=' . $item["link"] .">" . $item["nazwa"] . "</a>" . "<br>";
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

