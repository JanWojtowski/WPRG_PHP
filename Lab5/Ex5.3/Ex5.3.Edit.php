<html>
<body>
<?php
if($_GET['operation'] == "edit"){
    $file = fopen("Plik.csv","r");
    while (!feof($file)){
        $tab[$i] = fgetcsv($file);
        if($tab[$i][0] == $_GET['nazwa']){
            $edit = $tab[$i];
        }
        $i++;
    }
    fclose($file);
}
else if($_POST['operation'] == "edit"){
    $file = fopen("Plik.csv","r");
    $i = 0;
    while (!feof($file)){
        $tab[$i] = fgetcsv($file);
        if($tab[$i][0] == $_GET['nazwa']){
            $tab[$i][0] = $_POST["title"];
            $tab[$i][1] = $_POST["link"];
            $tab[$i][2] = $_POST["tresc"];
        }
        $i++;
    }
    fclose($file);
    $file = fopen("Plik.csv","w");
    foreach ($tab as $item){
        var_dump($item);
        fwrite($file,"$item[0],$item[1],$item[2]\n");
    }
    fclose($file);
    header("location: Ex5.3.php");
}
else{
    header("location: Ex5.3.php");
}
?>
<form action="Ex5.3.Edit.php?nazwa=<?php echo $_GET["nazwa"] ?>" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?php echo $edit[0]; ?>" id="title">
    <br>
    <label for="link">Link:</label>
    <input type="text" name="link" value="<?php echo $edit[1]; ?>" id="link">
    <br>
    <label for="tresc">Tresc:</label>
    <input type="text" name="tresc" value="<?php echo $edit[2]; ?>" id="tresc">
    <br>
    <input type="submit" name="operation" value="edit">
</form>
</body>
</html>
