<?php
    include("laczenie_z_serwerem.php");

    if($sc != true)
    {
        echo "Nie udalo sie polaczyc z serwerem <br>";
    }

    else
    {
        echo "Polaczeno z serwerem <br>";

        $baza_danych = $_POST["nazwa_bazy"];

        $stworz_baze = "CREATE DATABASE $baza_danych";
        $tworzenie_bazy = mysqli_query($sc, $stworz_baze);
    }
?>