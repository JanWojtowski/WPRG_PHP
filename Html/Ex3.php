<?php
$countries = [
    "Poland" => 10,
    "Germany" => 20,
    "Italy" => 30,
    "Great Britain" => 40
    ];
?>

<html>
<body>
    <form action="" method="post">
    <label for="date1">Give arrival date:</label>
    <input type="date" name="date1" id="date1">
    <br/>
    <label for="date2">Give departure date:</label>
    <input type="date" name="date2" id="date2">
    <br/>
    <label for="numberOfPeople">Give number of people:</label>
    <input type="number" name="numberOfPeople" id="numberOfPeople" size="4">
    <br/>
    <label for="country">Choose country:</label>
    <select name="country" id="country">
        <?php
        foreach ($countries as $key => $country) {
            echo '<option value="'. $key .'">'. $key .'</option>';
        }
        ?>
    </select>
    <br/>
    <input type="submit" name="Send" value="send">
</form>
    <?php
        if(isset($_POST["Send"])){
            if(intval($_POST["numberOfPeople"]) >= 1 and strtotime($_POST["date1"]) < strtotime($_POST["date2"])){
                echo '<textarea name="result" cols="50" rows="1">'."Cost: ". ($countries[$_POST['country']] * intval($_POST["numberOfPeople"]) * ((strtotime($_POST["date2"]) - strtotime($_POST["date1"]))/86400)).'</textarea>';
            }
            else{
                echo '<textarea name="result" cols="50" rows="1">'."Form has not been filled properly".'</textarea>';
            }
        }
        else{
            echo '<textarea name="result" cols="50" rows="1">'."Form has not been filled properly".'</textarea>';
        }
    ?>
</body>
</html>
