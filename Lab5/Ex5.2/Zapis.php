<?php
if(isset($_POST["text"])){
    $file = fopen("Dane5_2.txt","a");
    fwrite($file,$_POST["text"]);
    fclose($file);
}
header("location: 5.2.php");

