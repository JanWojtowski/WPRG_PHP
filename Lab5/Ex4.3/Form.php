<html>
<body>
<?php
session_start();
if ($_GET['problem'] == 1 and isset($_GET)){
    echo "<b>Niepoprawne dane logowania!</b>";
    echo '<br/>';
}
if(isSet($_SESSION['login'])){
    if(isset($_POST['logout'])){
        echo "<b>Zostałeś wylogowany!</b>";
        session_destroy();
    }
    else{
        header("location: Site.php");
    }
}
?>
<form action="Data.php" method="post">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" size="10">
    <br/>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" size="10">
    <br/>
    <input type="submit" name="Send" value="send">
</form>
</body>
</html>
