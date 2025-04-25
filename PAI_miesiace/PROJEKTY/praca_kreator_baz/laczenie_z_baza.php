<?php
// deklaracja zmiennych w dobrej kolejnosci    

    $servername = "localhost"; // zawsze localhost  
    $username = "root"; // root
    $password = ""; // github -> mariadb
    $database = $_POST["nazwa_bazy0"]; // nazwa bazy danych

// polaczenie z serwerem mysql

    $dbc = mysqli_connect($servername, $username, $password, $database);
?>