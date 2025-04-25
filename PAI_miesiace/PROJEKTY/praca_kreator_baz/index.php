<?php
    // session_start();
    
    // @$_SESSION['theme'] = $_POST["theme"];

    // @$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'jasny';
?>

<script>
    function dzien()
	{
		document.body.style.background="rgb(208, 253, 255)";
		document.body.style.color="black";
	}

	function noc()
	{
		document.body.style.background="black";
		document.body.style.color="white";
	}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
</script>
    <title>Document</title>

    <style>
        body
        {
            /* background-color: 
            <?php //echo $_SESSION['theme'] == "ciemny" ? "rgb(0, 0, 0)" : "rgb(208, 253, 255)"; ?>;
            color:
            <?php //echo $_SESSION['theme']== "ciemny" ? "white" : "black"; ?>; */

            background-color: rgb(208, 253, 255);
            color: black;
        }
    </style>
</head>
<body>
    <header id="glowa">
        <p id="header_napis">GRAFICZNY KREATOR BAZ DANYCH</p>
        <div id="ustawienia">
            <!-- <form action="index.php" method="POST">
                <input id="menu_button_theme1" type="submit" name="theme" value="jasny">
                <input id="menu_button_theme2" type="submit" name="theme" value="ciemny">
            </form> -->
            <input id="menu_button_theme1" type="button" name="theme" value="jasny" onClick="dzien()">
            <input id="menu_button_theme2" type="button" name="theme" value="ciemny" onClick="noc()">
        </div>

        <div id="menu">
            <a href="#conn_serv"><input class="menu_button" type="button" value="laczenie z serwerem"></a>
            <a href="#conn_db"><input class="menu_button" type="button" value="laczenie z baza"></a>
            <a href="#create_db"><input class="menu_button" type="button" value="tworzenie baz danych"></a>
            <a href="#delete_db"><input class="menu_button" type="button" value="usuwanie baz danych"></a>
            <a href="#create_table_column"><input class="menu_button" type="button" value="tworzenie tabeli i kolumn"></a>
            <a href="#add_records"><input class="menu_button" type="button" value="dodawanie rekordow do tabeli"></a>
            <a href="#show"><input class="menu_button" type="button" value="wyswietlanie baz i tabeli"></a>
        </div>
    </header>

    <aside id="main">
        <br><br><br><br><br><br><br><br><br>

        <form action="laczenie_z_serwerem.php" method="POST">
            <fieldset>
                <a name="conn_server"><legend> Laczenie z serwerem </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z SERWEREM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>
                        <br>
                        <input type="submit" class="submit" value="polacz z serwerem">

            </fieldset>
        </form>

        <form action="laczenie_z_baza.php" method="POST">
            <fieldset>
                <a name="conn_db"><legend> Laczenie z baza </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z DANA BAZA DANYCH, WPISZ BAZE W POLU TEKSTOWYM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                    <input type="text" name="nazwa_bazy0" placeholder="podaj nazwe bazy danych"  id=""><br><br>
                    <input type="submit" class="submit" value="polacz z baza">

            </fieldset>
        </form>

        <form action="skrypt1.php" method="POST">
            <fieldset>
                <a name="create_db"><legend> Tworzenie baz danych </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z DANA BAZA DANYCH, WPISZ BAZE W POLU TEKSTOWYM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                    <input type="text" name="nazwa_bazy" placeholder="podaj nazwe bazy danych" id=""><br><br>
                    <input type="submit" class="submit" value="polacz i utworz baze">

            </fieldset>
        </form>

        <form action="skrypt2.php" method="POST">
            <fieldset>
                <a name="delete_db"><legend> Usuwanie baz danych </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z DANA BAZA DANYCH, WPISZ BAZE W POLU TEKSTOWYM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                <input type="text" name="nazwa_bazy2" placeholder="podaj nazwe bazy danych" id=""><br><br>
                <input type="submit" class="submit" value="polacz i usun baze">

            </fieldset>
        </form>

        <form action="skrypt3.php" method="POST">
            <fieldset>
                <a name="create_table_column"><legend> Tworzenie tabeli i kolumn </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z DANA BAZA DANYCH, WPISZ BAZE W POLU TEKSTOWYM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                <input type="text" name="nazwa_bazy3" placeholder="podaj nazwe baze danych" id="">
                <input type="text" name="nazwa_tabelki0" placeholder="podaj nazwe tabelki" id=""><br>
                <input type="text" name="nazwa_kolumny0" placeholder="podaj 1. nazwe kolumny" id="">
                <input type="text" name="nazwa_kolumny1" placeholder="podaj 2. nazwe kolumny" id="">
                <input type="text" name="nazwa_kolumny2" placeholder="podaj 3. nazwe kolumny" id="">
                <input type="text" name="nazwa_kolumny3" placeholder="podaj 4. nazwe kolumny" id=""><br><br>
                <input type="submit" class="submit" value="utworz tabelke i kolumny (ewentualnie baze)">

            </fieldset>
        </form>

        <form action="skrypt4.php" method="POST">
            <fieldset>
                <a name="add_records"><legend> Dodawanie rekordow do tabeli </legend></a>
                <p class="opis">SKRYPT LACZACY SIE Z DANA BAZA DANYCH, WPISZ BAZE W POLU TEKSTOWYM, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                <input type="text" name="nazwa_bazy4" placeholder="podaj nazwe baze danych" id="">
                <input type="text" name="nazwa_tabelki1" placeholder="podaj nazwe tabelki" id=""><br>
                <input type="text" name="nazwa_rekordu0" placeholder="podaj 1. rekord" id="">
                <input type="text" name="nazwa_rekordu1" placeholder="podaj 2. rekord" id="">
                <input type="text" name="nazwa_rekordu2" placeholder="podaj 3. rekord" id="">
                <input type="text" name="nazwa_rekordu3" placeholder="podaj 4. rekord" id="">
                <input type="text" name="nazwa_rekordu4" placeholder="podaj 5. rekord" id=""><br><br>
                <input type="submit" class="submit" value="dodaj rekordy (ewentualnie utworz baze i tabelke)">

            </fieldset>
        </form>

        <form action="index.php" method="POST">
            <fieldset>
                <a name="show"><legend> Wyswietlanie baz danych, tabel i rekordow </legend></a>
                <p class="opis">SKRYPT WYSWIETLAJACY BAZY DANYCH, TABELE I ICH ZAWARTOSC, PO POLACZENIU ZOSTANIESZ POWIADOMIONY</p>

                <?php
                    echo "<style> td{border: solid rgb(154, 243, 255); 1px;} table{background-color: rgb(255, 255, 255);} </style>";

                    $host = 'localhost';
                    $user = 'root';
                    $password = '';

                    if(isset($_POST['database']))
                    {
                        $database = $_POST['database'];
                        setcookie("db", $database, time()+60*60*24*100, "/");
                    }

                    $conn = new mysqli($host, $user, $password);

                    if($conn -> connect_error)
                    {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql_b = "SHOW DATABASES";

                    $result = $conn->query($sql_b);

                    echo "<form method='POST'>";
                    echo "<label for='database' style='font-size: 20px; font-family: helvetica;'>wybierz baze danych:</label>";
                    echo "<select name='database' id='database'>";

                    while($row = $result -> fetch_assoc())
                    {
                        echo "<option value='" . $row["Database"] . "'>" . $row["Database"] . "</option>";
                    }

                    echo "</select>";
                    echo "<input type='submit' class='submit' name='przycisk' value='wybierz'>";
                    echo "</form>";

                    if(@$_POST['przycisk'] == true)
                    {
                        $sql_t = "SHOW TABLES";
                        $baza = new mysqli($host, $user, $password, $database);
                        $result2 = $baza->query($sql_t);

                        echo "<form method='POST'>";
                        echo "<label for='tabela' style='font-size: 20px; font-family: helvetica;'>wybierz tabele z bazy:</label>";
                        echo "<select name='tabela' id='tabela'>";

                        while($row = $result2 -> fetch_array())
                        {
                            echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                        }

                        echo "<input type='submit' class='submit' name='przycisk2' value='wyswietl'>";
                        echo "</select>";
                        echo "</form>";
                    }

                    if(@$_POST['przycisk2'] == true)
                    {
                        echo "<br><label for='tabela' style='font-size: 20px; font-family: helvetica;'>zawartosc tabeli:</label>";
                        //echo "<select name='tabela' id='tabela'>";
                        echo "<table style='border: solid black 1px;'>";

                        $tabelka = $_POST['tabela'];
                        $baza = new mysqli($host, $user, $password, $_COOKIE['db']);
                        $sql_k = "SELECT * FROM $tabelka";
                        $result3 = $baza -> query($sql_k);
                        $row = mysqli_fetch_all($result3, MYSQLI_ASSOC);

                        foreach($row as $r)
                        {
                            echo "<tr>";
                            foreach($r as $key => $value)
                            {
                                echo "<td>$value</td>";
                            }
                            echo "</tr>";
                        }

                        //foreach($row as $r)
                        //while($row = $result3 -> fetch_array())
                        //{
                            //echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            // echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            // echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
                            // echo "<option value='" . $row[2] . "'>" . $row[2] . "</option>";
                            // echo "<option value='" . $row[3] . "'>" . $row[3] . "</option>";
                            // echo "<option value='" . "podzial" . "'>" . "----------" . "</option>";

                            //echo "<tr> <td>" . $row[0] . "</td>";
                            //echo "<td>" . $row[1] . "</td>";
                            //echo "<td>" . $row[2] . "</td>";
                            //echo "<td>" . $row[3] . "</td> </tr>";
                        //}

                        echo "</table>";
                        //echo "</select>";
                    }
                ?>
            </fieldset>
        </form>
    </aside>

    <footer id="stopka">

    </footer>
</body>
</html>