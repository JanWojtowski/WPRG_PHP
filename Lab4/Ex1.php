<?php
$result = 0;
switch ($_GET["operation"]){
    case "add":
        $result += intval($_GET["number1"]) + intval($_GET["number2"]);
        break;
    case "sub":
        $result += intval($_GET["number1"]) - intval($_GET["number2"]);
        break;
    case "multi":
        $result += intval($_GET["number1"]) * intval($_GET["number2"]);
        break;
    case "div":
        if(intval($_GET["number2"]) == 0){
            $result = "Don't divide by 0";
        }
        else{
            $result += intval($_GET["number1"]) * intval($_GET["number2"]);
        }
        break;
}
echo "Result: " . $result;
?>
