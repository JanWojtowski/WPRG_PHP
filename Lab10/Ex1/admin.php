<?php
session_start();

$dbuser = 's26978';
$dbpass = 'Jan.Wojt';
$db = new PDO("mysql:host=localhost;dbname=s26978", $dbuser,$dbpass);

if(!isset($_SESSION['id'])){
    if(isset($_POST['login'])){
        $query = "SELECT * FROM user where login = '"  . $_POST["login"] . "'";
        $result = $db->query($query);
        if (!$result){
            header("location: admin.php");
        }
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            if($_POST['password'] == $row['password']){
                $_SESSION['id'] = $row['id'];
            }
            else{
                $_SESSION['error'] = "Niepoprawne hasło!!!";
                header("location: admin.php");
                exit();
            }
        }
        $_SESSION['error'] = "Niepoprawny login!!!";
        header("location: admin.php");
    }
    else{
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
         ?>
        <html>
            <body>
                <form action="admin.php" method="post">
                    <label for="login">Enter login:</label>
                    <input type="text" name="login" id="login" size="20">
                    <br/>
                    <label for="password">Enter password:</label>
                    <input type="text" name="password" id="password" size="20">
                    <br/>
                    <input type="submit" name="Send" value="send">
                </form>
            </body>
        </html>
        <?php
    }
}
else{
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
            echo "<a href=admin.php?strona=" . $_GET["strona"] . ">" . "Powrot" . "</a>"
            ?>
            </body>
            </html>
            <?php
        }
    }
    elseif(isset($_GET["edit"])){
        $query = "SELECT * FROM cars where id = " . $_GET["edit"];
        $result = $db->query($query);
        if (!$result){
            echo "BŁĄD w zapytaniu";
            exit;
        }
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            if($row["user_id"] != $_SESSION["id"]){
                $_SESSION["error"] = "Musisz być zalogowny by edytowac samochód";
                unset($_SESSION["id"]);
                header("location: admin.php");
                exit();
            }
            elseif(isset($_GET["upl"])){
                $query = "UPDATE cars SET marka = " . $_POST["marka"] . ", model = " . $_POST['model'] . ", cena = " . $_POST["cena"] . ", rok = " . $_POST["rok"] . ", opis = " . $_POST["opis"] . " WHERE id=" . $_GET["id"];
                $result = $db->query($query);
                if(!$result){
                    echo "BŁĄD w zapytaniu";
                    exit;
                }
            }
            else{
                ?>
                    <html>
                        <body>
                            <form action="<?php echo "admin.php?edit=" . $_GET["edit"] . "&upl=" . $row["id"] . "&strona=" . $_GET["strona"]?> method=post">
                                <label for="marka">Marka:</label><br>
                                <input type="text" id="marka" name="marka" value="<?php echo $row["marka"]; ?>"><br>
                                <label for="model">Model:</label><br>
                                <input type="text" id="model" name="model" value="<?php echo $row["model"]; ?>"><br>
                                <label for="cena">Cena:</label><br>
                                <input type="text" id="cena" name="cena" value="<?php echo $row["cena"]; ?>"><br>
                                <label for="rok">Rok produkcji:</label><br>
                                <input type="text" id="rok" name="rok" value="<?php echo $row["rok"]; ?>"><br>
                                <label for="opis">Opis:</label><br>
                                <input type="text" id="opis" name="opis" value="<?php echo $row["opis"]; ?>"><br>
                            </form>
                        </body>
                    </html>
                <?php
            }
        }

    }
    elseif (isset($_GET["add"])){
        if($_GET["add"] == 1){
            $values = $_POST["marka"] . ", " . $_POST["model"] . ", " . $_POST["cena"] . ", " . $_POST["rok"] . ", " .$_POST["opis"];
            $query = "INSERT INTO cars (marka,model,cena,rok,opis) VALUES ($values)";
            $result = $db->query($query);
            if(!$result){
                echo "BŁĄD w zapytaniu";
                exit;
            }
        }
        else{
            ?>
            <html>
            <body>
            <form action="<?php echo "admin.php?add=" . "1" . "&strona=" . $_GET["strona"]?> method=post">
                <label for="marka">Marka:</label><br>
                <input type="text" id="marka" name="marka" "><br>
                <label for="model">Model:</label><br>
                <input type="text" id="model" name="model" "><br>
                <label for="cena">Cena:</label><br>
                <input type="text" id="cena" name="cena" "><br>
                <label for="rok">Rok produkcji:</label><br>
                <input type="text" id="rok" name="rok" "><br>
                <label for="opis">Opis:</label><br>
                <input type="text" id="opis" name="opis" "><br>
            </form>
            </body>
            </html>
            <?php
        }
    }
    else{
        if(!isset($_GET['strona'])){
            header("location: admin.php?strona=0");
        }

        ?>
        <html>
            <body>
                <?php
                    echo "<a href=index.php> Strona Głowna </a>";
                    echo "</br>";
                ?>
            </body>
        </html>
        <?php

        $limit = 5;
        $offset = $_GET['strona'] * $limit;

        $query = "SELECT * FROM cars WHERE user_id =" . $_SESSION['id'] . " LIMIT " . $limit . " OFFSET " . $offset;
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
                        echo "<a href=admin.php?info=" . $row["id"] . "&strona=" . $_GET["strona"] . "> Wiecej informacji </a>";
                        echo "<a href=admin.php?edit=" . $row["id"] . "&strona=" . $_GET["strona"] . "> Edytuj </a>";
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
        echo "<a href=admin.php?add=0" . "&strona=" . $_GET["strona"] . "> Edytuj </a>";
        if($_GET["strona"] != 0){
            echo "<a href=admin.php?strona=" . ($_GET["strona"] - 1) . "> <--Poprzednia </a>";
        }
        echo "    Aktualna strona:" . $_GET["strona"];
        echo "<a href=admin.php?strona=" . ($_GET["strona"] + 1) . "> Następna--> </a>";
        ?>
        </body>
        </html>
        <?php
    }
}
