<?php
session_start();
if(!isSet($_SESSION['login'])){
    header("location: Form.php");
}
?>
<html>
<body>
    <?php
        echo "<b>Witaj," . $_SESSION['login'] . "</b>";
    ?>
    <form action="Form.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
