<?php
    // include("laczenie_z_serwerem.php");

    // if($sc != true)
    // {
    //     echo "Nie udalo sie polaczyc z serwerem <br>";
    // }

    // else
    // {
    //     echo "Polaczeno z serwerem <br>";
        
    
            //$baza_danych = $_POST["nazwa_bazy4"];

            // deklaracja zmiennych w dobrej kolejnosci    

            $servername = "localhost"; // zawsze localhost  
            $username = "root"; // root
            $password = ""; // github -> mariadb
            $database = $_POST["nazwa_bazy4"]; // nazwa bazy danych

            // polaczenie z serwerem mysql

            $dbc = mysqli_connect($servername, $username, $password, $database);

            $tabelka = $_POST["nazwa_tabelki1"];
            $rekord0= $_POST["nazwa_rekordu0"];
            $rekord1 = $_POST["nazwa_rekordu1"];
            $rekord2 = $_POST["nazwa_rekordu2"];
            $rekord3 = $_POST["nazwa_rekordu3"];
            $rekord4 = $_POST["nazwa_rekordu4"];

            $kw = "INSERT INTO $tabelka VALUES('$rekord0', '$rekord1', '$rekord2', '$rekord3', '$rekord4')";
                        
            $dodawanie_rekordow = mysqli_query($dbc, $kw);
    //}
?>