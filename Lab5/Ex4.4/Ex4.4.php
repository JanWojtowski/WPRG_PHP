<?php
if (isset($_COOKIE["cat"])){
    ?>
    <htlm>
        <body>
        <?php
            echo "<b>Już odpowiedziałeś! </b>"
        ?>
        </body>
    </htlm>
    <?php
}
else{
    ?>
<html>
<body>
<form action="" method="post">
    <label for="task">Lubisz koty?:</label>
    <input type="text" name="task" id="task" size="10">
    <br/>
    <input type="submit" name="Send" value="send">
</form>
</body>
</html>
<?php
    setcookie("cat","cat",time()+5);
}
?>