<?php
    session_start();

    echo "<style> td{border: solid black 1px;} </style>";

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
    echo "<label for='database'>wybierz baze danych:</label>";
    echo "<select name='database' id='database'>";

    while($row = $result -> fetch_assoc())
    {
        echo "<option value='" . $row["Database"] . "'>" . $row["Database"] . "</option>";
    }

    echo "</select>";
    echo "<input type='submit' name='przycisk' value='wybierz'>";
    echo "</form>";

    if(@$_POST['przycisk'] == true)
    {
        $sql_t = "SHOW TABLES";
        $baza = new mysqli($host, $user, $password, $database);
        $result2 = $baza->query($sql_t);

        echo "<form method='POST'>";
        echo "<label for='tabela'>wybierz tabele z bazy:</label>";
        echo "<select name='tabela' id='tabela'>";

        while($row = $result2 -> fetch_array())
        {
            echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
        }

        echo "<input type='submit' name='przycisk2' value='wyswietl'>";
        echo "</select>";
        echo "</form>";
    }

    if(@$_POST['przycisk2'] == true)
    {
        echo "<label for='tabela'>kolumny z tabeli:</label>";
        //echo "<select name='tabela' id='tabela'>";
        echo "<table style='border: solid black 1px;'>";

        $tabelka = $_POST['tabela'];
        $baza = new mysqli($host, $user, $password, $_COOKIE['db']);
        $sql_k = "SELECT * FROM $tabelka";
        $result3 = $baza -> query($sql_k);
        $row = mysqli_fetch_all($result3, MYSQLI_ASSOC);

        foreach($row as $r)
        {
            echo "<tr style=''>";
            foreach($r as $key => $value)
            {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        // for($a = 0; $a < $result3->field_count; $a++)
        // {
        //     echo "<tr>";
        //     echo "<td>" . $result3->fetch_field($a)->name . "</td>";
        //     echo "</tr>";
        // }

        //while($row = $result3 -> fetch_array())
        //{
            //echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
            // echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
            // echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
            // echo "<option value='" . $row[2] . "'>" . $row[2] . "</option>";
            // echo "<option value='" . $row[3] . "'>" . $row[3] . "</option>";
            // echo "<option value='" . "podzial" . "'>" . "----------" . "</option>";

        //     echo "<tr> <td>" . $row[0] . "</td>";
        //     echo "<td>" . $row[1] . "</td>";
        //     echo "<td>" . $row[2] . "</td>";
        //     echo "<td>" . $row[3] . "</td> </tr>";
        // }

        echo "</table>";
        //echo "</select>";
    }
?>

<!-- w domu zmien zeby sie wypisywalo w tabeli a nie w liscie -->