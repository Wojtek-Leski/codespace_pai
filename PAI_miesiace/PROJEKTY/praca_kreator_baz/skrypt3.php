<?php
    include("laczenie_z_serwerem.php");

    if($sc != true)
    {
        echo "Nie udalo sie polaczyc z serwerem <br>";
    }

    else
    {
        echo "Polaczeno z serwerem <br>";
        
    
            $baza_danych = $_POST["nazwa_bazy3"];

            $stworz_baze = "CREATE DATABASE IF NOT EXISTS $baza_danych";
            $tworzenie_bazy = mysqli_query($sc, $stworz_baze);

            $tabelka = $_POST["nazwa_tabelki0"];
            $kolumna0= $_POST["nazwa_kolumny0"];
            $kolumna1 = $_POST["nazwa_kolumny1"];
            $kolumna2 = $_POST["nazwa_kolumny2"];
            $kolumna3 = $_POST["nazwa_kolumny3"];

            $stworz_tabelke = " CREATE TABLE $baza_danych.$tabelka
                            ( `id` INT NOT NULL AUTO_INCREMENT ,
                            $kolumna0 VARCHAR(30) NOT NULL ,
                            $kolumna1 VARCHAR(30) NOT NULL ,
                            $kolumna2 VARCHAR(30) NOT NULL ,
                            $kolumna3 VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
                        
            $tworzenie_tabelki = mysqli_query($sc, $stworz_tabelke);
    }
?>