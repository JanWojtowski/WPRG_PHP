<html>
    <body>
        <form action="" method="post">
            <label for="number1">Give first number:</label>
            <input type="number" name="number1" id="number1" size="4">
            <br/>
            <label for="number2">Give second number:</label>
            <input type="number" name="number2" id="number2" size="4">
            <br/>
            <label for="operation">Choose operation:</label>
            <select name="operation" id="operation">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="multi">Multiplication</option>
                <option value="div">Division</option>
            </select>
            <br/>
            <input type="submit" name="Send" value="send">
        </form>
    </body>

</html>

<?php
    include "Operations.php";
    $result = 0;
    switch ($_POST["operation"]){
        case "add":
            $result = add($_POST["number1"],$_POST["number2"]);
            break;
        case "sub":
            $result = sub($_POST["number1"],$_POST["number2"]);
            break;
        case "multi":
            $result = multi($_POST["number1"],$_POST["number2"]);
            break;
        case "div":
            $result = div($_POST["number1"],$_POST["number2"]);
            break;
    }
    echo "Result: " . $result;
?>