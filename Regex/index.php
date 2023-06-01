<?php
$nameerror = "";
$emailerror = "";
$telerror = "";
$passworderror = "";
$fileout = fopen("ex1.txt","w");

if(isset($_POST["send"])){
    if(preg_match("/[A-Z][a-z]+ [A-Z][a-z]+/",$_POST["name"]) == 0){
        $nameerror = "Niepoprawne Imię lub Nazwisko";
    }
    if(preg_match("/[^ ]+@[^ ]+\.[^ ]+/",$_POST["email"]) == 0){
        $emailerror = "Niepoprawny email";
    }
    if(preg_match("/[0-9- ]{9,}/",$_POST["number"]) == 0){
        $telerror = "Niepoprawny numer telefonu";
    }
    if(preg_match("/[a-zA-Z0-9]{8,20}/",$_POST["password"]) == 0){
        $passworderror = "Niepoprawne hasło";
    }
    if(preg_match("/[A-Z][a-z]+ [A-Z][a-z]+/",$_POST["name"]) == 1 &&
        preg_match("/[^ ]+@[^ ]+\.[^ ]+/",$_POST["email"]) == 1 &&
        preg_match("/[0-9- ]{9,}/",$_POST["number"]) == 1 &&
        preg_match("/[a-zA-Z0-9]{8,20}/",$_POST["password"]) == 1
       ){
           $txt = $_POST["name"] . ";" . $_POST["email"] . ";" . $_POST["number"] . ";" . $_POST["password"];
           fwrite($fileout,$txt);
        }

}

?>

<html>
    <body>
        <form action="index.php" method="post">
            <label for="name">Podaj Imie i Nazwisko: </label>
            <input type="text" id="name" name="name">
            <label for="name"><?php echo $nameerror?></label>
            <br>
            <label for="email">Podaj Email: </label>
            <input type="email" id="email" name="email">
            <label for="name"><?php echo $emailerror?></label>
            <br>
            <label for="numerTelefonu">Podaj numer telefonu: </label>
            <input type="text" id="numerTelefonu" name="number">
            <label for="numerTelefonu"><?php echo $telerror?></label>
            <br>
            <label for="password">Podaj hasło: </label>
            <input type="password" id="password" name="password">
            <label for="name"><?php echo $passworderror?></label>
            <br>
            <input type="submit" name="send" value="send">
        </form>
    </body>
</html>
