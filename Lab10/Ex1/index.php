<?php
$dbuser = 's26978';
$dbpass = 'Jan.Wojt';
$db = new PDO("mysql:host=localhost;dbname=s26978", $dbuser,$dbpass);

if(isset($_GET["info"])){
    $query = "SELECT * FROM cars where id = " . $_GET["info"];
    $result = $db->query($query);
    if (!$result){
        echo "BŁĄD w zapytaniu";
        exit;
    }
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "Id oferty: " . $row["id"];
        echo "</br>";
        echo "Marka: " . $row["marka"];
        echo "</br>";
        echo "Model: " . $row["model"];
        echo "</br>";
        echo "Rocznik: " . $row["rok"];
        echo "</br>";
        echo "Cena: " . $row["cena"];
        echo "</br>";
        echo "Opis: " . $row["opis"];
        echo "</br>";
        ?>
        <html>
        <body>
        <?php
        echo "<a href=index.php?strona=" . $_GET["strona"] . ">" . "Powrot" . "</a>"
        ?>
        </body>
        </html>
        <?php
    }
}
else{
    if(!isset($_GET['strona'])){
        header("location: index.php?strona=0");
    }
    ?>
    <html>
        <body>
            <?php
                echo "<a href=admin.php> Moje pojazdy </a>";
                echo "</br>";
            ?>
        </body>
    </html>
    <?php

    $limit = 5;
    $offset = $_GET['strona'] * $limit;

    $query = "SELECT * FROM cars LIMIT " . $limit . " OFFSET " . $offset;
    $result = $db->query($query);
    if (!$result){
        echo "BŁĄD w zapytaniu";
        exit;
    }
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo $row["id"] . "    " . $row["marka"] . "    " . $row["model"];
        ?>
        <html>
        <body>
        <?php
        echo "<a href=index.php?info=" . $row["id"] . "&strona=" . $_GET["strona"] . "> Wiecej informacji </a>"
        ?>
        </body>
        </html>
        <?php
        echo "</br>";
    }
    ?>
    <html>
    <body>
    <?php
    if($_GET["strona"] != 0){
        echo "<a href=index.php?strona=" . ($_GET["strona"] - 1) . "> <--Poprzednia </a>";
    }
    echo "    Aktualna strona:" . $_GET["strona"];
    echo "<a href=index.php?strona=" . ($_GET["strona"] + 1) . "> Następna--> </a>";
    ?>
    </body>
    </html>
    <?php
}


