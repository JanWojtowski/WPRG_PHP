<?php
session_start();
function checkVictory($tab){
    for($i = 0; $i < 3; $i++){
        if($tab[$i][0] == $tab[$i][1] and $tab[$i][1] == $tab[$i][2] and $tab[$i][0] != ".."){
            return true;
        }
        if($tab[0][$i] == $tab[1][$i] and $tab[1][$i] == $tab[2][$i] and  $tab[0][$i] != ".."){
            return true;
        }
    }
    if ($tab[0][0] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][0] != ".."){
        return true;
    }
    if ($tab[0][2] == $tab[1][1] and $tab[1][1] == $tab[2][2] and $tab[0][2] != ".."){
        return true;
    }
    return false;
}

function printBoard($tab){
    echo (" 0 |  1  |  2  |  3  |");
    echo ("<br/>");
    echo ("1 | " . printsup(0,0,$tab) . " | " . printsup(0,1,$tab) . " | " . printsup(0,2,$tab) . " |");
    echo ("<br/>");
    echo (" 2 | " . printsup(1,0,$tab) . " | " . printsup(1,1,$tab) . " | " . printsup(1,2,$tab) . " |");
    echo ("<br/>");
    echo (" 3 | " . printsup(2,0,$tab) . " | " . printsup(2,1,$tab) . " | " . printsup(2,2,$tab) . " |");
    echo ("<br/>");
}
function printsup($row,$column,$tab){
    if($tab[$row][$column] == ".."){
        return "<INPUT TYPE=radio name='pole' value='$row.$column'>";
    }
    else{
        return "$tab[$row][$column]";
    }
}
function ruch($round,$row,$column,$tab){
    if($round % 2 == 1){
        $player = 1;
    }
    else{
        $player = 2;
    }
    echo "Player's $player turn";
    if ($tab[$row][$column] == ".."){
        if($player == 1){
            $tab[$row][$column] = "o";
        }
        else{
            $tab[$row][$column] = "x";
        }
    }
    else{
        header("location: Ex3.php");
    }
    return $tab;
}


if(isset($_POST['send'])){
    for($i=0;$i>3;$i++){
        for($j=0;$j>3;$j++){
            if($_POST['pole'] == "$i.$j"){
                $tab[i][j] == $round - 1// Ogranij sesje debilu $tab i round
            }
        }
    }
}
else{
    $tab = [["..","..",".."],["..","..",".."],["..","..",".."]];
}
?>
<html>
    <body>
        <form method="post">
            <?php printBoard($tab) ?>
            <input type="submit" name="send" value="send">
        </form>
    </body>
</html>


