<html>
    <body>
        <form action="" method="post">
            <label for="number">Give number:</label>
            <input type="number" name="number" id="number">
            <br/>
            <input type="submit" name="Send" value="send">
        </form>
    </body>
</html>

<?php
function pod($x){
    $temp = sqrt($x);
    $y = 0;
    if($x % 2 == 0){
        echo ("Nie pierwsza");
        return $y;
    }
    else{
        $y++;
    }
    for($i = 3; $i < $temp; $i +=2){
        if($x % $i != 0){
            $y++;
        }
        else{
            echo ("Nie pierwsza");
            return $y;
        }
    }
    return $y;
}

$x = intval($_POST["number"]);
echo pod($x);
