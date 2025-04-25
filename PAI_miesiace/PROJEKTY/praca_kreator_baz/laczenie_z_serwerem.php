<?php
// deklaracja zmiennych w dobrej kolejnosci    

    $servername = "localhost"; // zawsze localhost  
    $username = "root"; // root
    $password = ""; // github -> mariadb
    $database = ""; // nazwa bazy danych

// polaczenie z serwerem mysql

    $sc = mysqli_connect($servername, $username, $password);
?>