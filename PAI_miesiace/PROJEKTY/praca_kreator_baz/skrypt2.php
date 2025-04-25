<?php
    include("laczenie_z_serwerem.php");

    if($sc != true)
    {
        echo "Nie udalo sie polaczyc z serwerem <br>";
    }

    else
    {
        echo "Polaczeno z serwerem <br>";

        $baza_danych2 = $_POST["nazwa_bazy2"];

        $stworz_baze = "DROP DATABASE $baza_danych2";
        $tworzenie_bazy = mysqli_query($sc, $stworz_baze);
    }
?>